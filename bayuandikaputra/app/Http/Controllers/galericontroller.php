<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use App\KategoriGaleri;

class galericontroller extends Controller
{
    public function index(){
        
        $listGaleri=Galeri::all(); 
        return view('galeri.index' ,compact('listGaleri'));
        
    }

    public function show($id){
        $Galeri=Galeri::find($id);
        return view('galeri.show' ,compact('Galeri'));
    }

    public function create(){
        $KategoriGaleri=KategoriGaleri::pluck('nama', 'id');
        return view('galeri.create',compact('KategoriGaleri'));
    }

    public function store(Request $request){
        $input= $request->all();
        Galeri::create($input);

        return redirect(route('galeri.index'));
    }

    public function edit($id){
        $Galeri=Galeri::find($id);
        $KategoriGaleri=KategoriGaleri::pluck('nama', 'id');
        if(empty($Galeri)){
            return redirect(route('galeri.index'));
        }
        

        return view('galeri.edit',compact('Galeri','KategoriGaleri'));

    }

    public function update($id,Request $request){
        $Galeri=Galeri::find($id);
        $input= $request->all();

        if(empty($Galeri)){
            return redirect(route('galeri.index'));
        }

        $Galeri->update($input);
        return redirect(route('galeri.index'));

    }

    public function destroy($id){
        $Galeri=Galeri::find($id);

        if(empty($Galeri)){
            return redirect(route('galeri.index'));
        }

        $Galeri->delete();
        return redirect(route('galeri.index'));
    }
}
