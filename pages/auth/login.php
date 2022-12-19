<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background-image: url(../../assets/login.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="user" placeholder="UserName">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <button class="d-flex btn-primary" type="submit">Login</button>
        </form>

        <p class="fs-6">Dont have an account? <a href="../auth/signup.php">Sign Up Now!</a></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>