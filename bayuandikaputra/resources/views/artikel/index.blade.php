@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>   
                             
                <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-info">Tambah Data</a>
    
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Users Id</td>
                        <td>Update</td>
                        <td>Aksi</td>
                    </tr>

                        @foreach ($listArtikel as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->updated_at !!}</td>
                        <td>
                        <a href="{!! route('artikel.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-info">Lihat</a>
                        <a href="{!! route('artikel.edit' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-success">Ubah</a>    

                        {!! Form::open(['route'=> ['artikel.destroy', $item->id], 'method'=>'delete']) !!}
                        
                        {!! Form::submit('Hapus',['class'=>'btn btn-danger','onclick'=>"return confirm('Apakah Anda Yakin ingin Menghapus Data ini?')"]); !!}

                        {!! Form::close() !!}                     
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
