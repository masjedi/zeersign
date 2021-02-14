<?php

namespace App\Http\Controllers;
use app\Mail\UsersEmails;
use Illuminate\app\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    
    public function index(){
        $services = Service::where('language',$this->language)->get()->take(3);
        $products = Product::where('language',$this->language)->get()->take(10);;
         return view('frontend.index',compact('services','products'));
     }
     public function product_details($title)
     {
         $product1 = Product::where('title',$title)->get();
         return view('frontend.product',compact('product1'));
     }
 
     public function single_service($id)
     {
          $services = Service::where('id',$id)->get();
         //$products = Product::where('language',$this->language)->get();
         return view('frontend.service_details',compact('services'));
     }
 
 
 
     public function services()
     {
 
         $services = Service::where('language',$this->language)->get();
          return view('frontend.serviceslist',compact('services'));
     }
 
 
     public function about(){
         return view('frontend.about');
     }
 
     public function about_us()
     {
         return view('frontend.aboutus');
     }
 
     public function comingSoon()
     {
         return view('frontend.comingsoon');
     }
 
     public function gallery(){
         $galleries = Gallery::all();
         return view('frontend.gallery',compact('galleries'));
     }
 
     public function video(){
         $videos = Video::all();
         return view('frontend.videos',compact('videos'));
     }
 
     public function contact(){
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
