<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-black">

    <div class="container">
        <div class="row vh-100">
            <div class="d-flex align-items-center justify-content-center">

                <div class="col-md-4">
                    <div class="card bg-dark p-4">
                        <div class="card-body">
                            <h5 class="text-light text-center mb-4">Register</h5>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-light">Email
                                    address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword5" class="form-label text-light">Password</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                            </div>

                            <div class="mb-4">
                                <label for="confirmPass" class="form-label text-light">confirm password</label>
                                <input type="password" id="confirmPass" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="text-center">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">Signup</button>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <p class="text-light">have an account ? <span><strong><a href="login.php">login</a></strong></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>