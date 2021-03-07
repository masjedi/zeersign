<?php

namespace App\Http\Controllers;
use app\Mail\UsersEmails;
use Illuminate\app\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;
use App\Career;
use App\Type;
use App\Event;
class PagesController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    }

    public function index(){

         return view('index');
     }
     public function product_details($title)
     {
         $product1 = Product::where('title',$title)->get();
         return view('front.product',compact('product1'));
     }

     public function single_service($id)
     {
          $services = Service::where('id',$id)->get();
         //$products = Product::where('language',$this->language)->get();
         return view('front.service_details',compact('services'));
     }



     public function services()
     {

         $services = Service::where('language',$this->language)->get();
          return view('front.serviceslist',compact('services'));
     }


     public function about(){
         return view('front.about');
     }

     public function about_us()
     {
         return view('front.about_us');
     }

     public function donate()
     {
         return view('front.donate');
     }

     public function gallery(){
         $galleries = Gallery::all();
         return view('front.gallery',compact('galleries'));
     }

     public function video(){
         $videos = Video::all();
         return view('front.videos',compact('videos'));
     }

     public function contact(){
         return view('front.contact');
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
