<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Competcat;
use App\Competition;
class CategoryController extends Controller
{
    private $language;
    public function __construct()
    {
        $this->middleware('auth');
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() === 'ps' ? 'Pashto' :  'Persian');
    }
    
    public function index()
    {
        $category = Competcat::where('language',$this->language)->get()->all();
        return view('backend.category.index',compact('category'));
    }

    
    public function store(Request $request)
    {
        $category = new Competcat;
        $category->language = $request->input('language');
        $category->name = $request->input('name');

        $category->save();
        Alert::success('Inserted!','Inserted with success');
        return redirect()->route('categories.index');
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
        $category = Competcat::findOrFail($id);
        return view('backend.category.edit',$id);
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
        $category = Competcat::findOrFail($id);
        $category->language = $request->input('language');
        $category->name = $request->input('name');

        $category->save();
        Alert::success('Updated!','Updated with success');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Competcat::findOrFail($id);
        $category->delete();
        Alert::error('Deleted!','Deleted with success');
        return redirect()->route('categories.index');

    }
}
