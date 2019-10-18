@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>   
                             
                <div class="card-body">
                <a href="{!! route('berita.create') !!}" class="btn btn-info">Tambah Data</a>
    
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Users Id</td>
                        <td>Aksi</td>
                    </tr>

                        @foreach ($listBerita as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>
                        <a href="{!! route('berita.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-info">Lihat</a>
                        <a href="{!! route('berita.edit' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-success">Ubah</a>  

                        {!! Form::open(['route'=> ['berita.destroy', $item->id], 'method'=>'delete']) !!}
                        
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
