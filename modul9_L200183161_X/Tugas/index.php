<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['status'] == 'administrator') {
        header('Location: admin/');
    } elseif ($_SESSION['user']['status'] == 'member') {
        header('Location: member/');
    } else {
        session_destroy();
        echo "<script>alert('Access Denied!! Unauthorize Status User.');window.location='./';</script>";
    }
    exit;
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login Bro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form method='POST' action=''>
            <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <?php
            if (isset($_POST['login'])) {
                $conn = mysqli_connect("localhost", "root", "", "informatika") or die("Moooddddaaarrr");

                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
                if (mysqli_num_rows($query) == 0) {
                    echo "<b>Username Salah..!!<b><br>";
                } else {
                    $fetchData = mysqli_fetch_array($query);
                    if ($password == $fetchData['password']) {
                        $_SESSION['user'] = $fetchData;
                        if ($_SESSION['user']['status'] == 'administrator') {
                            echo "<script>alert('Login Sukses');window.location='admin/';</script>";
                        } elseif ($_SESSION['user']['status'] == 'member') {
                            echo "<script>alert('Login Sukses');window.location='member/';</script>";
                        }
                        exit;
                    } else {
                        echo "<b>Password Salah..!<b><br>";
                    }
                }
            }
            ?>
            <label for="inputUsername" class="visually-hidden">Username</label>
            <input name='username' id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input name='password' type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
        </form>
    </main>

</body>

</html>