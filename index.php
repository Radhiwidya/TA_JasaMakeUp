<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="icon" href="assets/images/icon.png">
    <title>Login</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top w-100 css-navbar">
        <div class="container">
            <a class="navbar-brand" href="#" target="_blank">
                <img src="assets/images/logo.png" alt="Logo" height="35px">
            </a>
            <a href="assets/admin/login.php" class="log">Admin</a>
        </div>
    </nav>
    <div class="login-box">
        <form method="POST" action="assets/connection/user.php">
            <h2>Login User</h2>
            <div class="input-box">
                <label for="email"></label>
                <input name="username" type="text" required placeholder="username">
            </div>
            <div class="input-box">
                <input name="password" type="password" required placeholder="password">
            </div>
            <div class="forgot">
                <label><a href="assets/pages/forgot.html">Forgot Password?</a></label>
            </div>
            <br>
            <a href="#">
                <button name="login" class="btn btn-outline-primary submit" type="submit">Login</button>
            </a>
            <a href="assets/user/register.php">
                <button name="daftar" class="btn btn-outline-primary submit" type="button">Daftar</button>
            </a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>