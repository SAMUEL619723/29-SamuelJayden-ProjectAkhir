<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoZone - Home</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* HERO SECTION */
        .hero-section {
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.45);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-title {
            font-size: 3.3rem;
            font-weight: 700;
            color: #fff;
        }
        .hero-desc {
            font-size: 1.2rem;
            color: #eee;
        }

        /* GALLERY */
        .gallery-img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }

        /* FOOTER */
        .footer {
            background: #111;
            color: #ddd;
            padding: 30px 0;
        }
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


<!-- HERO SECTION -->
<section class="hero-section d-flex align-items-center" id="home">
    <div class="hero-overlay"></div>
    <div class="container text-center hero-content">
        <h1 class="hero-title">Capture Moments, Create Art</h1>
        <p class="hero-desc mt-3">Your journey in photography starts here — explore, enjoy, and get inspired.</p>
        <a href="#gallery" class="btn btn-light btn-lg mt-4">View Gallery</a>
    </div>
</section>

<!-- GALLERY SECTION -->
<section class="py-5" id="gallery">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Featured Gallery</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <img class="gallery-img" src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80" alt="Photo 1">
            </div>
            <div class="col-md-4">
                <img class="gallery-img" src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b6?auto=format&fit=crop&w=1200&q=80" alt="Photo 2">
            </div>
            <div class="col-md-4">
                <img class="gallery-img" src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1200&q=80" alt="Photo 3">
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="py-5 bg-light" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold">About PhotoZone</h2>
                <p class="mt-3" style="font-size:1.1rem; color:#444;">PhotoZone is a creative platform built for photographers who want to share moments, explore visual storytelling, and express emotions through stunning photography.</p>
                <p style="font-size:1.05rem; color:#555;">Whether you are a beginner or a pro, this space helps you learn, grow, and get inspired by breathtaking images.</p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?auto=format&fit=crop&w=1400&q=80" class="img-fluid rounded-4 shadow" alt="About Image">
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-5" id="contact">
    <div class="container text-center">
        <h2 class="fw-bold">Get in Touch</h2>
        <p class="mt-2 mb-4">Have questions or want to collaborate? Reach out anytime!</p>

        <a href="mailto:your-email@example.com" class="btn btn-primary btn-lg">Contact Me</a>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer text-center">
    <p class="mb-0">© 2025 PhotoZone. All rights reserved.</p>
</footer>

</body>
</html>
