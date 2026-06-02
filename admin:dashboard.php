<?php
session_start();

$conn = mysqli_connect(
"localhost",
"root",
"",
"ijpr"
);

$total_articles =
mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM manuscripts")
);

?>

<!DOCTYPE html>
<html>
<head>

<title>IJPR Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-2 bg-dark text-white vh-100">

<h3 class="mt-3">IJPR Admin</h3>

<hr>

<ul class="nav flex-column">

<li class="nav-item">
<a href="dashboard.php" class="nav-link text-white">
Dashboard
</a>
</li>

<li class="nav-item">
<a href="manuscripts.php" class="nav-link text-white">
Manuscripts
</a>
</li>

<li class="nav-item">
<a href="authors.php" class="nav-link text-white">
Authors
</a>
</li>

<li class="nav-item">
<a href="reviewers.php" class="nav-link text-white">
Reviewers
</a>
</li>

<li class="nav-item">
<a href="issues.php" class="nav-link text-white">
Issues
</a>
</li>

</ul>

</div>

<div class="col-md-10">

<h2 class="mt-4">Dashboard</h2>

<div class="row">

<div class="col-md-3">
<div class="card">
<div class="card-body">
<h3><?php echo $total_articles; ?></h3>
<p>Total Submissions</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card">
<div class="card-body">
<h3>0</h3>
<p>Published Articles</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card">
<div class="card-body">
<h3>0</h3>
<p>Reviewers</p>
</div>
</div>
</div>

</div>

</div>

</div>

</div>

</body>
</html>