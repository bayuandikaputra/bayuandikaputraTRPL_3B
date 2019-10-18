<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class kategoripengumumancontroller extends Controller
{
    public function index(){
        
        $listKategoriPengumuman=KategoriPengumuman::all(); 

        return view('kategori_pengumuman.index' ,compact('listKategoriPengumuman'));
    }

    public function show($id){

        $KategoriPengumuman=KategoriPengumuman::find($id);

        return view('kategori_pengumuman.show' ,compact('KategoriPengumuman'));

    }

    public function create(){
        return view('kategori_pengumuman.create');
    }

    public function store(Request $request){
        $input= $request->all();
        KategoriPengumuman::create($input);

        return redirect(route('kategori_pengumuman.index'));
    }

    public function edit($id){
        $KategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($KategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        return view('kategori_pengumuman.edit',compact('KategoriPengumuman'));

    }

    public function update($id,Request $request){
        $KategoriPengumuman=KategoriPengumuman::find($id);
        $input= $request->all();

        if(empty($KategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        $KategoriPengumuman->update($input);
        return redirect(route('kategori_pengumuman.index'));

    }

    public function destroy($id){
        $KategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($KategoriPengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        $KategoriPengumuman->delete();
        return redirect(route('kategori_pengumuman.index'));
    }

    public function trash(){
        
        $listKategoriPengumuman=KategoriPengumuman::onlyTrashed(); 
        return view('kategori_pengumuman.index' ,compact('listKategoriPengumuman'));
        
    }
}
