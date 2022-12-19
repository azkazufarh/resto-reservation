<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/utilities.css">
    <link rel="stylesheet" href="../../css/overview.css">
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
                    <a class="nav-link" href="pages/auth/login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Reservation</h2>
                <div class="latest-transaction">
                    <p class="text-lg fw-medium color-palette-1 mb-14">Latest Reservation</p>
                    <div class="main-content main-content-table overflow-auto">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="color-palette-1">
                                    <th class="text-start" scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <th scope="row">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Azka</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">20 January 2023</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium text-start color-palette-1 m-0">08.00 PM</p>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="float-start icon-status pending"></span>
                                            <p class="fw-medium text-start color-palette-1 m-0 position-relative">
                                                Waiting</p>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary">Order Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>