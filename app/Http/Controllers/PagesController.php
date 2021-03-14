<?php

namespace App\Http\Controllers;
use app\Mail\UsersEmails;
use Illuminate\app\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\Blog;
use App\Competition;
class PagesController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    
    }

    public function index(){

        $events = Event::where('language', $this->language)->get()->take(5);
        $blogs = Blog::where('language', $this->language)->get()->all();
        $competition = Competition::where('language',$this->language)->get()->take(6);
         return view('frontend.index',compact('events','blogs','competition'));
     }
  
     public function aboutus(){
         return view('frontend.about');
     }

     public function overview(){
        return view('frontend.overview');
    }
     public function whoweare(){
        return view('frontend.whoweare');
    }
     public function whatwedo(){
        return view('frontend.whatwedo');
    }

     public function contactus(){
        return view('frontend.contact');
    }

    public function donate_form(){
        return view('frontend.donate');
    }
    public function blogs(){
        $blogs = Blog::all();
        return view('frontend.blogs',compact('blogs'));
    }
    public function blog_details($id){
        $blogs = Blog::where('id',$id)->get();
        return view('frontend.blog_single',compact('blogs'));
    }
    public function event_details($id){
        $events = Event::where('type_id',$id)->get();
        return view('frontend.event_details',compact('events'));
    }
    public function compet_details($id){
        $competition = Competition::where('competcat_id',$id)->get();
        return view('frontend.compet_details',compact('competition'));
    }

    public function indexform(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|number',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        );

        \Mail::to('info@pooha.org')->send(new VulanteerEmail($data));
        Alert::success('Sent','Your submission was successful.');
        return back();
    }
    public function form(Request $request)
     {
         $this->validate($request, [
             'email' => 'required|email',
         ]);

         $data = array(
             'email' => $request->email
         );
         \Mail::to('info@pooha.org')->send(new UsersEmails($data));
         \Session::flash('message', 'Thanks for your message we will get back to you soon..');
         return back()->with('success', 'Thanks for contacting us!');
     }






}
