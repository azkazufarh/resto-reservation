<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
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

    <!-- Hero -->
    <section class="hero bg-main py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-white display-1">First Reservation <br>First Yummy!</h1>
                </div>
                <div class="col-lg-6">
                    <img src="assets/hero.jpg" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Reseravation -->
    <section class="container  py-5">
        <h2 class="text-center">Book Your Table Now!</h2>

        <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="col-md-6">
                        <label for="person" class="form-label">Person</label>
                        <input type="number" class="form-control" id="person">
                    </div>
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Date Time</label>
                        <input type="datetime-local" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Reservation</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- <div class="card-container">
            <div class="card-content">
                <h3>Reservation</h3>
                <form>
                    <div class="form-row">
                        <select name="days">
                            <option value="day-select">Select Day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                        <select name="hours">
                            <option value="hour-select">Select Time</option>
                            <option value="10">10:00</option>
                            <option value="10">12:00</option>
                            <option value="10">14:00</option>
                            <option value="10">16:00</option>
                            <option value="10">18:00</option>
                            <option value="10">20:00</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="Full Name">
                        <input type="text" placeholder="Phone Number">
                    </div>

                    <div class="form-row">
                        <input type="number" placeholder="How Many People?" min="1">
                        <input type="submit" value="Book Table">
                    </div>
                </form>
            </div>
        </div> -->
    </section>
    <!-- End Reservation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>