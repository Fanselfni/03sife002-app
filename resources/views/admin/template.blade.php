<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            width: 200px;
            background-color: #343a40;
            min-height: 100vh;
            top: 56px;
        }

        .sidebar a {
            display: block;
            color: #ffffff;
            padding: 10px 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-top: 70px;
            margin-left: 250px; /* Adjust based on sidebar width */
            padding: 20px;
        }

        .card {
            border-radius: 10px;
            border: 0;
        }
    </style> 
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top shadow-sm px-3">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand fw-bold text-white">
            <img src="{{ asset('images/logo.png')}}" alt="Logo" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li class="dropdown-item-text text-muted">
                            <small>{{ Auth::user()->email }}</small>
                        </li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar shadow-sm">
        <h5 class="text-center text-white py-3">Admin Menu</h5>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.projects.index')}}">Data Project</a>
    </div>

    <!-- Content Area -->
    <div class="content p-3 d-flex flex-column">
        <div class="flex-grow-1">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-dark text-center border-top py-3 mt-5">
        <p class="mb-0">&copy; {{ date('Y') }} UNPAM, All rights reserved.</p>
    </footer>

    <!-- JavaScript Dependencies -->
    <!-- 1. CDN jQuery (Wajib di urutan pertama untuk DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- 2. Bootstrap Bundle JS (Sudah termasuk Popper.js agar dropdown berfungsi normal) -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- 3. CDN JS DataTables -->
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.js"></script>

    <!-- Tempat script turunan dari file view lain -->
    @yield('script')
</body>
</html>