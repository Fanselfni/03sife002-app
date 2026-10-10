@extends('layouts.app')

@section('title','Project Detail'. $project->title)

@section('content')
<div class="container flex-grow-1">
    <div class="mb-4" style="display: flex; justify-content: space-between; align-items: center;">
        <a href="{{ route('project.index') }}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="row g-4">
        <div class="col-md-7">
             <img src="{{ asset('images/'.$project->image)}}" alt="" class="img-fluid
             h-100 w-100" style="min-height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-5" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="card-body">
                    <div class="mb-2">
                    <span class="badge {{ $project->status =='Selesai' ? 'bg-success' : 'bg-warning'}}">
                        {{ $project->status}}</span>
                    </div>
                    <h5 class="card-title mb-4">{{ $project->title }}</h5>
                    <div class="mb-2">
                        <small class="text-muted">Tech : {{ $project->teknologi }}</small>                    
                    </div>
                    <p>{{$project->description}}</p>
                </div>
                <div class="card-footer border-0 pb-3 bg-white rounded-5">
                    <div class="mb-2">
                        <small class="text-muted" style="justify-content: center;">dibuat : {{ $project->created_at->format('d M Y') }}</small>                    
                    </div>
                </div>
            </div>
</div>
@endsection