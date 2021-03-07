<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Blog;
class BlogController extends Controller
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
        $blogs = Blog::where('language', $this->language)->get()->all();
        return view('backend.news.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $fileName = time().'_'.$image->getClientOriginalName();
        $destinationPath = public_path().'/img/blog';
        $image->move($destinationPath, $fileName);

        $blogs = new Blog(); 
        $blogs->language = $request->input('language');
        $blogs->title = $request->input('title');
        $blogs->sub_title = $request->input('sub_title');
        $blogs->body = $request->input('body');
        $blogs->image = $fileName;
        $blogs->save();
        Alert::success('Superb!','Added successfully!');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
       return view('backend.news.edit',compact('blogs',$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->language = $request->input('language');
        $blogs->title = $request->input('title');
        $blogs->sub_title = $request->input('sub_title');
        $blogs->body = $request->input('body');

        if ( $request->hasFile('image')){
            $blogs = $request->file('image');
            $fileName = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/img/blog';
            if (File::exists($destinationPath)){
                File::delete($destinationPath);
            }
            $image->move($destinationPath, $fileName);
            $blogs->image = $fileName;
        }
        $blogs->save();
        Alert::success('Updated','Updated successfully!');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrfail($id);
        $image_path = public_path()."/img/blog/".$blogs->image;  // Value is not URL but directory file path
       // dd($image_path);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $blogs->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->to('/news');
    }
}
