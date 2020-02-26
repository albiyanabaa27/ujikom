<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::orderBy('created_at','desc')->get();
        return view('backend/tag/index',compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/tag/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nama'=>'required|unique:tags']);

        $tag = new Tag();
        $tag->nama = $request->nama;
        $tag->slug = Str::slug($request->nama);
        $tag->save();
        Session::flash("flash_notification", ["level"=>"success",
                                              "message"=>"Berhasil menyimpan data <b>".$tag->nama."</b>"]);

        return redirect()->route('tag.index');
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
        $tag = Tag::findOrFail($id);
        return view('backend/tag/edit', compact('tag'));
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
        $request->validate(['nama'=>'required']);

        $tag = Tag::findOrFail($id);
        $tag->nama = $request->nama;
        $tag->slug = Str::slug($request->nama, '-');
        $tag->save();
        Session::flash("flash_notification", ["level"=>"warning",
                                              "message"=>"Berhasil mengedit data menjadi <b>".$tag->nama."</b>"]);

        return redirect()->route('tag.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag2 = Tag::findOrFail($id);
        if(!Tag::destroy($id))
        return redirect()->back(); 
        
        Session::flash("flash_notification", ["level"=>"danger",
                                              "message"=>"Berhasil menghapus data <b>".$tag2->nama."</b>"]);
        return redirect()->route('tag.index');
    }
}
