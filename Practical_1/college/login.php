<?php
include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id FROM login WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    // If result matched $email and $password, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $email;

        header("location: welcome.php");
    } else {
        $echo = "Your Login Name or Password is invalid";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-black">

    <div class="container">
        <div class="row vh-100">
            <div class="d-flex align-items-center justify-content-center">

                <div class="col-md-4">
                    <div class="card bg-dark p-4">
                        <form action="" method="post">
                            <div class="card-body">
                                <h5 class="text-light text-center mb-4">Login</h5>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-light">Email
                                        address</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-4">
                                    <label for="inputPassword5" class="form-label text-light">Password</label>
                                    <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="text-center">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <p class="text-light">do not have account ? <span><strong><a href="register.php">register</a></strong></span></p>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>