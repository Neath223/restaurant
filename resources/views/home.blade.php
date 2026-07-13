<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner {
            background: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('{{ asset("images/banner.jpg") }}') no-repeat center center;
            background-size: cover;
            min-height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }
        .card-img-top { width: 100%; height: 220px; object-fit: cover; }
        .card { height: 100%; }
        @media (max-width: 576px) {
            .banner { min-height: 220px; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="{{ route('home') }}">Restaurant Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/customers') }}">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/items') }}">Items</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/orders') }}">Orders</a></li>
                </ul>
                <div>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="banner px-3 text-center">
        <div>
            <h1 class="display-6 fw-bold">Welcome to Cafe Express</h1>
            <p class="lead mb-0">Effortlessly manage customers, items, and orders.</p>
        </div>
    </div>

    <div class="container py-4 py-md-5">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/customer.jpg') }}" class="card-img-top" alt="Customers">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text">Manage all customer information efficiently.</p>
                        <a href="{{ url('/customers') }}" class="btn btn-primary">Manage Customer</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/item 2.jpg') }}" class="card-img-top" alt="Items">
                    <div class="card-body">
                        <h5 class="card-title">Items</h5>
                        <p class="card-text">Browse and manage items offered by your restaurant.</p>
                        <a href="{{ url('/items') }}" class="btn btn-primary">Manage Item</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/order.jpg') }}" class="card-img-top" alt="Orders">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">Track and manage orders efficiently and seamlessly.</p>
                        <a href="{{ url('/orders') }}" class="btn btn-primary">Manage Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-4">
        <h2 class="text-center h4">Explore Our Features</h2>
        <p class="text-center text-muted mb-0">Use the navigation menu to explore customers, items, and orders on any screen size.</p>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p class="mb-0">© 2024 Cafe Express</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>