<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Canteen Waste & Expiry Prevention System</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.hero {
    background: linear-gradient(135deg, #198754, #0d6efd);
    color: white;
    padding: 80px 20px;
}
.feature-icon {
    font-size: 40px;
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="#">Canteen Inventory System</a>
<div class="ms-auto">
<a href="login.php" class="btn btn-success">Login</a>
</div>
</div>
</nav>

<!-- HERO SECTION -->
<section class="hero text-center">
<div class="container">
<h1 class="fw-bold">
Canteen Waste and Expiry Prevention System
</h1>
<p class="mt-3">
An inventory monitoring system designed to reduce food waste, prevent expiry losses,
and support food safety in school canteens.
</p>

<a href="login.php" class="btn btn-light btn-lg mt-4">
Get Started
</a>
</div>
</section>

<!-- FEATURES -->
<section class="py-5">
<div class="container">
<h2 class="text-center mb-4">Core System Features</h2>

<div class="row g-4">
<div class="col-md-4 text-center">
<div class="feature-icon text-success">📦</div>
<h5 class="mt-2">Inventory Monitoring</h5>
<p>Track food items, quantities, and expiry dates in real time.</p>
</div>

<div class="col-md-4 text-center">
<div class="feature-icon text-danger">⏰</div>
<h5 class="mt-2">Expiry Alerts</h5>
<p>Automatic alerts for items nearing expiration dates.</p>
</div>

<div class="col-md-4 text-center">
<div class="feature-icon text-warning">♻️</div>
<h5 class="mt-2">Waste & Loss Logging</h5>
<p>Record expired or spoiled items for reporting and analysis.</p>
</div>
</div>
</div>
</section>

<!-- USER ROLES -->
<section class="bg-light py-5">
<div class="container">
<h2 class="text-center mb-4">System Users</h2>

<div class="row">
<div class="col-md-6">
<div class="card shadow-sm">
<div class="card-body">
<h5 class="card-title">Admin (Canteen Manager / Owner)</h5>
<ul>
<li>Manage all inventory records</li>
<li>View waste, loss, and summary reports</li>
<li>Access reorder suggestions</li>
<li>Oversee food safety and system data</li>
</ul>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card shadow-sm">
<div class="card-body">
<h5 class="card-title">User (Canteen Staff)</h5>
<ul>
<li>Encode inventory items and expiry dates</li>
<li>Log expired or spoiled items</li>
<li>View expiry alerts</li>
<li>Assist in daily inventory monitoring</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
<p class="mb-0">
© 2026 | Canteen Waste and Expiry Prevention System
</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>