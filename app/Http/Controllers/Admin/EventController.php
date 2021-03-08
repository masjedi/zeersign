<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Type;
use App\Event;
class EventController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->middleware('auth');
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    }


    public function index()
    {
        $events = Event::all();
        return view('backend.events.index',compact('events'));
    }


    public function create()
    {
        $types = Type::where('language',$this->language)->get()->all();
        return view('backend.events.create',compact('types'));
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
        $destinationPath = public_path().'/img/events';
        $image->move($destinationPath, $fileName);

        $events = new Event();
        $events->language = $request->input('language');
        $events->title = $request->input('title');
        $events->subtitle = $request->input('subtitle');
        $events->type_id = $request->input('type_id');
        $events->body = $request->input('body');
        $events->vanue = $request->input('vanue');
        $events->date = $request->input('date');
        $events->image = $fileName;
        $events->save();
        Alert::success('Superb!','Added successfully!');
        return redirect()->route('events.index');
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
        $events = Event::findOrFail($id);
        return view('backend.events.edit',compact('events',$id));
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
        $events = Event::findOrFail($id);
        $events->language = $request->input('language');
        $events->title = $request->input('title');
        $events->status = $request->input('status');
        $events->type_id = $request->input('type_id');
        $events->body = $request->input('body');
        $events->vanue = $request->input('vanue');
        $events->date = $request->input('date');

        if ( $request->hasFile('image')){
            $events = $request->file('image');
            $fileName = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/img/events';
            if (File::exists($destinationPath)){
                File::delete($destinationPath);
            }
            $image->move($destinationPath, $fileName);
            $events->image = $fileName;
        }
        $events->save();
        Alert::success('Updated','Updated successfully!');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Event::findOrfail($id);
        $image_path = public_path()."/img/team/".$members->image;  // Value is not URL but directory file path
       // dd($image_path);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $members->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->to('/team');
    }

    public function ChangeStatus(Request $request)
    {
        $event = Event::findOrFail($request->event_id);
        $event->status = $request->status;
        $event->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
