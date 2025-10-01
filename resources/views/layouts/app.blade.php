<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        .navbar { background: #fff; border-bottom: 1px solid #eee; }
        .navbar-brand { font-weight: bold; }
        .hero-text { text-align: center; padding: 2rem 0; }
        .hero-text h1 { font-size: 1.8rem; font-weight: 600; }
        .hero-text p { color: #666; }

        /* Top filter */
        .filter-bar { border-bottom: 1px solid #eee; margin-bottom: 1.5rem; padding-bottom: 0.5rem; }
        .filter-bar a { margin-right: 1rem; text-decoration: none; font-weight: 500; color: #333; }
        .filter-bar a.active { color: green; border-bottom: 2px solid green; }

        /* Product card */
        .product-card { background: #fff; border-radius: 8px; padding: 1rem; margin-bottom: 1.5rem; text-align: center; border: 1px solid #eee; }
        .product-card img { width: 100%; height: 160px; object-fit: contain; margin-bottom: 1rem; background: #f5f5f5; border-radius: 6px; }
        .product-title { font-size: 0.95rem; font-weight: 600; margin-bottom: 0.3rem; }
        .product-price { font-size: 0.9rem; font-weight: bold; color: #2c5530; }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .filter-bar { overflow-x: auto; white-space: nowrap; }
            .filter-bar a { display: inline-block; margin-right: 1rem; }
        }


        .navbar-nav .nav-link {
            font-weight: 500;
            margin: 0 0.5rem;
            color: #333;
        }
        .navbar-nav .nav-link:hover {
            color: #2c5530;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Menu items (center) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Production</a>
        </li>
      </ul>

      <!-- Right side: Search + Cart -->
      <form class="d-flex me-3" role="search">
        <input class="form-control form-control-sm" type="search" placeholder="Search..." aria-label="Search">
      </form>
      <a href="#" class="btn btn-outline-dark btn-sm">
        <i class="fa fa-shopping-cart me-1"></i> Cart
      </a>
    </div>
  </div>
</nav>


<!-- Hero -->
<div class="hero-text">
    <h1>Shop environment<br>friendly quality goods</h1>
</div>

<main class="container">
    @yield('content')
</main>

</body>
</html>
