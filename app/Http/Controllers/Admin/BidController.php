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

    public function index()
    {
        $bids = Bid::where('language', $this->language)->get()->all();
        return view('backend.bidding.index',compact('bids'));
    }


    public function create()
    {
        return view('backend.bidding.create');
    }


    public function store(Request $request)
    {
        $image = $request->file('file');
        $fileName = time().'_'.$image->getClientOriginalName();
        $destinationPath = public_path().'/pdfs';
        $image->move($destinationPath, $fileName);

        $bids = new Bid;
        $bids->language = $request->input('language');
        $bids->posted_date = $request->input('posted_date');
        $bids->closing_date = $request->input('closing_date');
        $bids->title = $request->input('title');
        $bids->body = $request->input('body');
        $bids->file = $fileName;
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


    public function update(Request $request, $id)
    {
        $bids = Bid::findOrFail($id);
        $bids->language = $request->input('language');
        $bids->posted_date = $request->input('posted_date');
        $bids->closing_date = $request->input('closing_date');
        $bids->title = $request->input('title');
        $bids->body = $request->input('body');
        if ( $request->hasFile('file')){
            $blogs = $request->file('file');
            $fileName = time().'_'.$blogs->getClientOriginalName();
            $destinationPath = public_path().'/pdfs';
            if (File::exists($destinationPath)){
                File::delete($destinationPath);
            }
            $blogs->move($destinationPath, $fileName);
            $bids->image = $fileName;
        }
        $bids->save();
        Alert::success('Updated','Updated with success!');
        return redirect()->route('bids.index');
    }


    public function destroy($id)
    {
        $bids = Bid::findOrFail($id);
        $image_path = public_path()."/pdfs/".$bids->file;  // Value is not URL but directory file path
        // dd($image_path);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $bids->delete();
        Alert::error('Deleted!','You just deleted a post!');
        return redirect()->route('bids.index');
    }
}
