<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoZone - Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .gallery-img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 10px;
            transition: .3s;
        }
        .gallery-img:hover { transform: scale(1.05); }
    </style>
</head>

<body>

<!-- NAVBAR -->
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

<!-- GALLERY SECTION -->
<div class="container py-5 mt-4">
    <h2 class="text-center fw-bold mb-4">Photo Gallery</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <img class="gallery-img" src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80">
        </div>
        <div class="col-md-4">
            <img class="gallery-img" src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b6?auto=format&fit=crop&w=1200&q=80">
        </div>
        <div class="col-md-4">
            <img class="gallery-img" src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1200&q=80">
        </div>

        <div class="col-md-4">
            <img class="gallery-img" src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80">
        </div>
        <div class="col-md-4">
            <img class="gallery-img" src="https://images.unsplash.com/photo-1500534627639-99d12c0f4f43?auto=format&fit=crop&w=1200&q=80">
        </div>
        <div class="col-md-4">
            <img class="gallery-img" src="https://images.unsplash.com/photo-1526040652367-ac003a0475fe?auto=format&fit=crop&w=1200&q=80">
        </div>
    </div>
</div>

<footer class="text-center py-4 bg-dark text-light mt-5">
    © 2025 PhotoZone — All Rights Reserved
</footer>

</body>
</html>
