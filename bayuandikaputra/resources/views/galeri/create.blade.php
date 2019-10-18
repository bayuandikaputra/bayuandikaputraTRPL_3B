@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Galeri</div>   
                             
                <div class="card-body">
                <form method="post" action="{!! route('galeri.store') !!}">
                     @include('galeri.form')
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

