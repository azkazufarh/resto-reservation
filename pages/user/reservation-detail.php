<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/utilities.css">
    <link rel="stylesheet" href="../../css/reservations-detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-main">
        <div class="container">
            <a class="navbar-brand" href="#">KuyMakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Menu's</a>
                    <a class="nav-link" href="pages/user/reservation.php">Reservation</a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="../../pages/auth/login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <section class="transactions-detail overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Details #001240321</h2>
                <div class="details">
                    <div class="main-content main-content-card overflow-auto">
                        <section class="checkout mx-auto">
                            <div class="d-flex flex-row  align-items-center justify-content-between mb-30">
                                <div class="game-checkout d-flex flex-row align-items-center">
                                    <div>
                                        <p class="fw-bold text-xl color-palette-1 mb-10">KuyMakan</p>
                                        <p class="color-palette-2 m-0">20 November 2023</p>
                                    </div>
                                </div>s
                            </div>
                            <hr>
                            <div class="purchase pt-30">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Reservation Details</h2>
                                <p class="text-lg color-palette-1 mb-20">No. Table <span class="purchase-details">0012022</span></p>
                                <p class="text-lg color-palette-1 mb-20">Name<span class="purchase-details">Azka</span></p>
                                <p class="text-lg color-palette-1 mb-20">Total Person <span class="purchase-details">4</span></p>
                            </div>
                            <div class="payment pt-10 pb-10">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Payment Informations</h2>
                                <p class="text-lg color-palette-1 mb-20">Bacon Rice <span class="purchase-details">45.000</span></p>
                                <h3 class="text-lg fw-bold color-palette-1 mb-20">Total <span class="purchase-details">45.000</span></h3>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>