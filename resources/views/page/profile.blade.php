@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="card-title md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white text-center py-4">
                    <img src="{{ asset('joni.jpg') }}" alt="Profile" class="profile-avatar" 
                    style="width: 150px; height: 150px; object-fit: cover;">
                    <span class="badge bg-succes">{{ $mahasiswa['status']}}</span>
                    <h5 class="card-body">
                        <p><strong>Nama :</strong> {{ $mahasiswa ['nama'] }}</p>
                        <p><strong>NIM :</strong> {{ $mahasiswa ['nim'] }}</p>
                        <P><strong>Prodi :</strong> {{ $mahasiswa ['prodi']}}</P>
                        <P><strong>Email :</strong> {{ $mahasiswa ['email']}}</P>
                        <P><strong>Kampus :</strong> {{ $mahasiswa ['kampus']}}</P>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 