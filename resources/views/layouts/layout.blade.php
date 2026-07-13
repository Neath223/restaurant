<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Restaurant Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .navbar { box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
        .content-card { border: 0; box-shadow: 0 10px 30px rgba(0,0,0,.06); border-radius: 16px; }
        .table-responsive { border-radius: 12px; overflow: hidden; }
        @media (max-width: 576px) {
            .navbar-brand { font-size: 1rem; }
            .container { padding-left: 1rem; padding-right: 1rem; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="{{ route('home') }}">Cafe Express</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('customers*') ? 'active' : '' }}" href="{{ url('/customers') }}">Customers</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('items*') ? 'active' : '' }}" href="{{ url('/items') }}">Items</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('orders*') ? 'active' : '' }}" href="{{ url('/orders') }}">Orders</a></li>
                </ul>
                <div class="d-flex flex-column flex-lg-row gap-2">
                    <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4 py-md-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>