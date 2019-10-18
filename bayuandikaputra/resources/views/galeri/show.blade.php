@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Galeri</div>             

                <div class="card-body">

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Id</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->id !!}</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">nama</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->nama !!}</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">keterangan</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->keterangan !!}</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">path</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->path !!}</label>
                </div>          

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">users id</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->users_id !!}</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">create</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->created_at->format('d/m/Y H:i') !!}</label>
                </div>
 
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Update</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Galeri->updated_at->format('d/m/Y H:i') !!}</label>
                </div>

                <div class="form-group row mb-0">
                   <div class="col-md-6 offset-md-4">
                        <a href="{!! route('galeri.index') !!}" class="btn btn-info">Back</a>
                    </div>
                 </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
