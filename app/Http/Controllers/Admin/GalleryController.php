<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Alert;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->middleware('auth');
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::where('language', $this->language)->get()->all();
        return view('backend.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galleries = new Gallery;
        if($request->hasFile('image')){
            foreach ($request->file('image') as $img) {
                $name = time().'_'.$img->getClientOriginalName();
                $img->move(public_path().'/img/gallery',$name);
                $data[]= $name;
                $galleries->image = json_encode($data);
            }
        }
        $galleries->language = $request->input('language');
        $galleries->title = $request->input('title');
        $galleries->save();
        Alert::success('Added!','Submitted with success.');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        $galleries = Gallery::findOrFail($id);
        return view('backend.gallery.edit',compact('galleries',$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleries = Gallery::findOrFail($id);
         
        foreach(json_decode($galleries->image) as $image) {
            $image_path = public_path() . '/img/gallery/' . $image;
        
            if(File::exists($image_path)){
                unlink($image_path);
            }
           
        }
        $galleries->delete();
        Alert::error('Deleted!','Deleted successfully.');
        return redirect()->back();
    }
}
