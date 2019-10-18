<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelcontroller extends Controller
{
    public function index(){
        
        $listKategoriArtikel=KategoriArtikel::all(); 
        return view('kategori_artikel.index' ,compact('listKategoriArtikel'));
        
    }

    public function show($id){
        $KategoriArtikel=KategoriArtikel::find($id);

        if(empty($KategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }
        return view('kategori_artikel.show' ,compact('KategoriArtikel'));
    }

    public function create(){
        return view('kategori_artikel.create');
    }

    public function store(Request $request){
        $input= $request->all();
        KategoriArtikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }

    public function edit($id){
        $KategoriArtikel=KategoriArtikel::find($id);

        if(empty($KategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        return view('kategori_artikel.edit',compact('KategoriArtikel'));

    }

    public function update($id,Request $request){
        $KategoriArtikel=KategoriArtikel::find($id);
        $input= $request->all();

        if(empty($KategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        $KategoriArtikel->update($input);
        return redirect(route('kategori_artikel.index'));

    }

    public function destroy($id){
        $KategoriArtikel=KategoriArtikel::find($id);

        if(empty($KategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        $KategoriArtikel->delete();
        return redirect(route('kategori_artikel.index'));
    }

    public function trash(){
        
        $listKategoriArtikel=KategoriArtikel::onlyTrashed(); 
        return view('kategori_artikel.index' ,compact('listKategoriArtikel'));
        
    }
}
