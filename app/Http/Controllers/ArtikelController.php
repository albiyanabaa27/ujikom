<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Tag;
use App\Artikel;
use Session;
use Auth;
use File;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at','desc')->get();
        return view('backend/artikel/index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('backend/artikel/create', compact('kategori','tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|unique:artikels',
            'lokasi' => 'required',
            'harga' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'bangunan' => 'required',
            'lahan' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'garasi' => 'required',
            'detail' => 'required',
            'id_kategori' => 'required',
            // 'tag' => 'required'
        ]);
  
        $artikel = new Artikel();
        // dd($artikel);
        $artikel->nama = $request->nama;
        $artikel->harga = $request->harga;

        $artikel->slug = Str::slug($request->nama, '-');
        $artikel->detail = $request->detail;
        $artikel->lokasi = $request->lokasi;
        $artikel->kamar = $request->kamar;
        $artikel->kamar_mandi = $request->kamar_mandi;
        $artikel->bangunan = $request->bangunan;
        $artikel->lahan = $request->lahan;
        $artikel->garasi = $request->garasi;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        //upload foto
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().'/img/artikel/';
            $filename = Str::random(6). '_' .$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            $artikel->foto = $filename;
        }
        // dd($artikel);
        $artikel->save();
        $artikel->tag()->attach($request->tag);
        Session::flash("flash_notification",
                      ["level" => "success", "message" => "Berhasil menyimpan data <b>".$artikel->nama."</b>"]);
        
        return redirect()->route('artikel.index');
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
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $tag = Tag::all();
        $selected = $artikel->tag->pluck('id')->toArray();

        return view('backend/artikel/edit', compact('artikel','kategori','tag','selected'));
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
        $request->validate([
            'nama' => 'required|unique:artikels',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'detail' => 'required|min:50',
            'lokasi' => 'required|min:50',
            'kamar' => 'required|min:50',
            'kamar_mandi' => 'required|min:50',
            'jumlah_lantai' => 'required|min:50',
            'bangunan' => 'required|min:50',
            'lahan' => 'required|min:50',
            'garasi' => 'required|min:50',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);
        $artikel = new Artikel();
        $artikel->nama = $request->nama;
        $artikel->slug = Str::slug($request->judul, '-');
        $artikel->detail = $request->detail;
        $artikel->lokasi = $request->lokasi;
        $artikel->kamar = $request->kamar;
        $artikel->kamar_mandi = $request->kamar_mandi;
        $artikel->jumlah_lantai = $request->jumlah_lantai;
        $artikel->bangunan = $request->bangunan;
        $artikel->lahan = $request->lahan;
        $artikel->garasi = $request->garasi;
        $artikel->id_user = Auth::user()->name;
        $artikel->id_kategori = $request->id_kategori;
        
        //foto
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().'/img/artikel/';
            $filename = Str::random(6). '_' .$file->getClientOriginalName();
            $uploadSuccess = $file->move($path, $filename);
            //hapus foto lama
            if($artikel->foto){
                $old_foto = $artikel->foto;
                $filepath = public_path() .'/img/artikel/'. $artikel->foto;

                    try{
                    File::delete($filepath);
                    }    
                    catch(FileNotFoundException $e){
                    //File sudah dihapus atau tidak ada
                    }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag);
        Session::flash("flash_notification",
                      ["level" => "warning", "message" => "Berhasil edit data <b>".$artikel->nama."</b>"]);
        
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        
        if($artikel->foto){
            $old_foto = $artikel->foto;
            $filepath = public_path() .'/img/artikel/'. $artikel->foto;
        try{
            File::delete($filepath);
        }    
        catch(FileNotFoundException $e){
            //File sudah dihapus atau tidak ada
            }
            
        }
        $artikel->tag()->detach($artikel->id);
        $artikel->delete();
        Session::flash("flash_notification",
                      ["level" => "danger", "message" => "Berhasil menghapus data <b>".$artikel->nama."</b>"]);

        return redirect()->route('artikel.index');
    }
}
