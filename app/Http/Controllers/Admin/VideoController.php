<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Video;
class VideoController extends Controller
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
        $vidoes = Video::where('language', $this->language)->get()->all();
        return view('backend.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->file('image');
        // $fileName = time().'_'.$file->getClientOriginalName();
        // $destinationPath = public_path().'/images';
        // $file->move($destinationPath, $fileName);
        $videos = new Video();
        $videos->language = $request->input('language');
        $videos->title = $request->input('title');
        $videos->v_link = $request->input('v_link');
        //$video->image = $fileName;
        $videos->save();
        Alert::success('Superb!','Added successfully!');
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $videos = Video::findOrFail($id);
         return view('backend.videos.edit',compact('videos',$id));
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
        $video = Video::findOrFail($id);
        $video->title = $request->input('language');
        $video->title = $request->input('title');
        $video->v_link  = $request->input('v_link');

        $video->save();
        Alert::success('Awesome!','Updated successfully!');
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $videos = Video::findOrFail($id);
        $videos->delete();
        Alert::error('Deleted!','You just deleted a video!');
        return redirect()->route('videos.index');
    }
}
