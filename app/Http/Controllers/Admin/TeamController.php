<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Team;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $language;
    public function __construct()
    {
        $this->middleware('auth');
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    }

    public function index()
    {
        $members = Team::where('language', $this->language)->get()->all();
        return view('backend.team.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
        $destinationPath = public_path().'/img/team';
        $image->move($destinationPath, $fileName);

        $members = new Team(); 
        $members->language = $request->input('language');
        $members->name = $request->input('name');
        $members->position = $request->input('position');
        $members->bio = $request->input('bio');
        $members->twitter = $request->input('twitter');
        $members->facebook = $request->input('facebook');
        $members->linkedin = $request->input('linkedin');
        $members->image = $fileName;
        $members->save();
        Alert::success('Superb!','Added successfully!');
        return redirect()->route('team.index');
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
        $members = Team::findOrFail($id);
        return view('backend.team.edit',compact('members',$id));
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
        $members = Team::findOrFail($id); 
        $members->language = $request->input('language');
        $members->name = $request->input('name');
        $members->position = $request->input('position');
        $members->bio = $request->input('bio');
        $members->twitter = $request->input('twitter');
        $members->facebook = $request->input('facebook');
        $members->linkedin = $request->input('linkedin');

        if ( $request->hasFile('image')){
            $members = $request->file('image');
            $fileName = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/img/team';
            if (File::exists($destinationPath)){
                File::delete($destinationPath);
            }
            $image->move($destinationPath, $fileName);
            $members->image = $fileName;
        }
        $members->save();
        Alert::success('Updated','Updated successfully!');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Team::findOrfail($id);
        $image_path = public_path()."/img/team/".$members->image;  // Value is not URL but directory file path

        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $members->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->route('team.index');
    }
}
