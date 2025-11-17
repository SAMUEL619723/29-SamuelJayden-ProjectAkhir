<?php
session_start();
include 'koneksi.php';

// Fetch users from user_login table
$query = "SELECT USERNAME, FULL_NAME FROM user_login";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoZone - Members</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f5f5;
        }

        .page-title {
            font-weight: 700;
            font-size: 2.2rem;
        }

        .members-section {
            padding-top: 120px;
            padding-bottom: 50px;
        }

        table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background: #212529;
            color: white;
        }
    </style>
</head>
<body>

<!-- NAVBAR (matches home.php style) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Photography</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="members.php">Members</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- MEMBERS LIST SECTION -->
<section class="members-section">
    <div class="container">
        <h2 class="page-title mb-4 text-center">Registered Members</h2>

        <div class="table-responsive shadow-sm">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= htmlspecialchars($row['FULL_NAME']) ?></td>
                            <td><?= htmlspecialchars($row['USERNAME']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer text-center py-3 bg-dark text-white mt-5">
    © 2025 PhotoZone. All rights reserved.
</footer>

</body>
</html>
