@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="d-flex justify-content-between mb-3 py-3">
        <h3>Data Projects</h3>
        <a href="{{ route('admin.projects.create')}}" class="btn btn-primary">Tambah Project</a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered" id="tabel_project">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Teknologi</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($project->image)
                        <img src="{{ asset('upload/' . $project->image) }}" alt="{{ $project->title }}"
                        class="img-thumbnail" style="max-width: 100px;">
                        @else 
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->teknologi }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        {{ $project->status }}
                    </td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus project ini?')">Hapus</button>    
                        </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
    <!-- CDN CSS DataTables (Opsional agar tampilannya makin rapi) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.css" />

    <!-- CDN JS jQuery dan DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.js"></script>

    <!-- Script Inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#tabel_project').DataTable();
        });
    </script>
@endsection