<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use App\KategoriPengumuman;

class pengumumancontroller extends Controller
{
    public function index(){
        
        $listPengumuman=Pengumuman::all(); 
        return view('pengumuman.index' ,compact('listPengumuman'));
        
    }

    public function show($id){
        $Pengumuman=Pengumuman::find($id);
        return view('pengumuman.show' ,compact('Pengumuman'));
    }

    public function create(){
        $KategoriPengumuman=KategoriPengumuman::pluck('nama', 'id');
        return view('pengumuman.create',compact('KategoriPengumuman'));
    }

    public function store(Request $request){
        $input= $request->all();
        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }

    public function edit($id){
        $Pengumuman=Pengumuman::find($id);
        $KategoriPengumuman=KategoriPengumuman::pluck('nama', 'id');
        if(empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }
        

        return view('pengumuman.edit',compact('Pengumuman','KategoriPengumuman'));

    }

    public function update($id,Request $request){
        $Pengumuman=Pengumuman::find($id);
        $input= $request->all();

        if(empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }

        $Pengumuman->update($input);
        return redirect(route('pengumuman.index'));

    }

    public function destroy($id){
        $Pengumuman=Pengumuman::find($id);

        if(empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }

        $Pengumuman->delete();
        return redirect(route('pengumuman.index'));
    }
}
