@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> Selamat Datang</h1>
            <p class="fs-4 text-muted"> ini adalah halaman utama project laravel
                web profile
            </p>
            <a class="btn btn-success" href="{{url('/profile')}}"> Lihat Profile Mahasiswa</a>
        </div>
    </div>
</div>
@endsection