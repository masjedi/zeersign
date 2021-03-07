<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\bid;
class BidController extends Controller
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
        $bids = Bid::where('language', $this->language)->get()->all();
        return view('backend.bidding.index',compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bidding.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bids = new Bid;
        $bids->language = $request->input('language');
        $bids->posted_date = $request->input('posted_date');
        $bids->closing_date = $request->input('closing_date');
        $bids->title = $request->input('title');
        $bids->body = $request->input('body');

        $bids->save();
        Alert::success('Supertb','Added with success!');
        return redirect()->route('bids.index');
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
        $bids = Bid::findOrFail($id);
        return view('backend.bidding.edit',compact('bids',$id));
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
        $bids = Bid::findOrFail($id);
        $bids->language = $request->input('language');
        $bids->posted_date = $request->input('posted_date');
        $bids->closing_date = $request->input('closing_date');
        $bids->title = $request->input('title');
        $bids->body = $request->input('body');

        $bids->save();
        Alert::success('Updated','Updated with success!');
        return redirect()->route('bids.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bids = Bid::findOrFail($id);
        $bids->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->to('/bids');
    }
}
