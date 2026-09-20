<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
</head>
<body>
    <body class="bg-light d-flex flex-column min-vh-100">
        <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
            <div class="container">
                <a href="https://www.instagram.com/ilfan.es/" class="navbar-brand fw-bold">UNPAM - Profile Mahasiswa</a>
            </div>
        </nav>
        <div class="container flex-grow-1">
            <div class="row justify-content-center">
                <div class="card-title md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white text-center py-4">
                            <img src="{{ asset('joni.jpg') }}" alt="Profile" class="profile-avatar" style="width: 150px; height: 150px; object-fit: cover;">
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
    </body>
</body>
</html>