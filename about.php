<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoZone - About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .about-img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
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



<!-- ABOUT SECTION -->
<div class="container py-5 mt-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">About PhotoZone</h2>
            <p style="font-size:1.1rem; color:#444;">
                PhotoZone is a photography-focused platform designed for people who love capturing moments.
                Whether you're a beginner or a professional, PhotoZone helps you explore, share, and enjoy
                stunning visuals from around the world.
            </p>

            <p style="font-size:1.1rem; color:#555;">
                With high-quality galleries, creative inspiration, and a growing community,
                PhotoZone aims to be the perfect space for visual artists.
            </p>

            <p style="font-size:1.1rem; color:#555;">
                Our mission is simple:  
                <strong>Capture Moments. Create Art.</strong>
            </p>
        </div>

        <div class="col-md-6">
            <img class="about-img"
                 src="https://images.unsplash.com/photo-1484704849700-f032a568e944?auto=format&fit=crop&w=1400&q=80">
        </div>
    </div>
</div>

<footer class="text-center py-4 bg-dark text-light mt-5">
    © 2025 PhotoZone — All Rights Reserved
</footer>

</body>
</html>
