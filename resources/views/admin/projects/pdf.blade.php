<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Projects</title>
</head>
<body>
    <h1>Laporan Projects</h1>
    <table border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Title</td>
                <td>Teknologi</td>
                <td>Description</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($project->image)
                    <img src="{{ public_path('upload/' . $project->image) }}" alt="{{ $project->title }}"
                    class="img-thumbnail" style="max-width: 100px;">
                    @else 
                        <span>No Image</span>
                    @endif
                </td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->teknologi }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>