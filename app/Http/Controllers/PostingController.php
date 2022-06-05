<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $postings = Posting::all();
        return response()->json($postings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // create
    public function store(Request $request)
    {
        // validate the user input
        $this->validate($request, [
            "title" => "required",
            "description" => "required"
        ]);
        $posting = new Posting();
        $posting->title = $request->input('title');
        $posting->description = $request->input('description');
        $posting->save();
        return response()->json($posting);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // show specific item
    public function show($id)
    {
        //
        $posting = Posting::find($id);
        return response()->json($posting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // can remove items
    public function edit($id)
    {
        //
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
        //
        $this->validate($request, [
            "title" => "required",
            "description" => "required"
        ]);
        $posting = Posting::find($id);
        $posting->title = $request->input('title');
        $posting->description = $request->input('description');
        $posting->save();
        return response()->json($posting);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $posting = Posting::find($id);
        $posting->delete();
        return response()->json("Posting deleted");
    }
}
