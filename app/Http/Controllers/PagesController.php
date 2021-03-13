<?php

namespace App\Http\Controllers;
use app\Mail\UsersEmails;
use Illuminate\app\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\Blog;
class PagesController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    
    }

    public function index(){

        $events = Event::all();
        $blogs = Blog::all();
         return view('frontend.index',compact('events','blogs'));
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

    public function form(Request $request)
     {
         $this->validate($request, [
             'email' => 'required|email',
         ]);

         $data = array(
             'email' => $request->email
         );
         \Mail::to('info@haramsaray.com')->send(new UsersEmails($data));
         \Session::flash('message', 'Thanks for your message we will get back to you soon..');
         return back()->with('success', 'Thanks for contacting us!');
     }






}
