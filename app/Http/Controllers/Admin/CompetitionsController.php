<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Competition;
use App\Competcat;
class CompetitionsController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->middleware('auth');
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    }

    public function index()
    {
        $competitions = Competition::where('language',$this->language)->get()->all();
        return view('backend.competitions.index',compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Competcat::where('language',$this->language)->get()->all();
        return view('backend.competitions.create',compact('category'));
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
        $destinationPath = public_path().'/img/competitions';
        $image->move($destinationPath, $fileName);

        $competitions = new Competition;
        $competitions->language = $request->input('language');
        $competitions->title = $request->input('title');
        $competitions->body = $request->input('body');
        $competitions->date = $request->input('date');
        $competitions->competcat_id = $request->input('type_id');
        $competitions->image=$fileName;
        $competitions->save();
        Alert::success('Inserted!','Inserted with success.');
        return redirect()->route('competitions.index');
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
        $competitions = Competion::findOrFail($id);
        return view('backend.competions.edit',compact('competitions',$id));
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
        $competitions = Competition::findOrFail($id);
        $competitions->language = $request->input('language');
        $competitions->title = $request->input('title');
        $competitions->competcat_id = $request->input('type_id');
        $competitions->body = $request->input('body');
        $competitions->date = $request->input('date');

        if ( $request->hasFile('image')){
            $events = $request->file('image');
            $fileName = time().'_'.$events->getClientOriginalName();
            $destinationPath = public_path().'/img/competitions';
            if (File::exists($destinationPath)){
                File::delete($destinationPath);
            }
            $events->move($destinationPath, $fileName);
            $competitions->image = $fileName;
        }
        $competitions->save();
        Alert::success('Updated','Updated successfully!');
        return redirect()->route('competitions.index');
    }


    public function destroy($id)
    {
        $competitions = Competition::findOrfail($id);
        $image_path = public_path()."/img/competitions/".$competitions->image;  // Value is not URL but directory file path
       // dd($image_path);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $competitions->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->route('competitions.index');
    }

    public function StatusChange(Request $request)
    {
        $competitions = Competition::findOrFail($request->compet_id);
        $competitions->status = $request->status;
        $competitions->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
