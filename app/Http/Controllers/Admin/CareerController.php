<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Career;
class CareerController extends Controller
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
        $careers = Career::where('language', $this->language)->get()->all();
        return view('backend.career.index',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $careers = new Career(); 
        $careers->language = $request->input('language');
        $careers->posted_date = $request->input('posted_date');
        $careers->closing_date = $request->input('closing_date');
        $careers->position = $request->input('position');
        $careers->body = $request->input('body');
        $careers->save();
        Alert::success('Superb!','Added successfully!');
        return redirect()->route('careers.index');
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
        $careers = Career::findOrFail($id);
        return view('backend.career.edit',compact('careers',$id));
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
        $careers = Career::findOrFail($id); 
        $careers->language = $request->input('language');
        $careers->posted_date = $request->input('posted_date');
        $careers->closing_date = $request->input('closing_date');
        $careers->position = $request->input('position');
        $careers->body = $request->input('body');
        $careers->save();
        Alert::success('Update!','Updated successfully!');
        return redirect()->route('careers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $careers = Career::findOrFail($id);
        $careers->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->to('/careers');
    }
}
