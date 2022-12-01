<?php require_once('../app.php');
$page_title = "Register";
require_once(APP_APP_ROOT . DS . 'includes' . DS . 'header.php')
?>

<body id="layout-1" data-luno="theme-blue">

    <!-- start: body area -->
    <div class="wrapper">

        <!-- start: page body -->
        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1" style="height: 100vh; overflow: hidden;">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div>
                            <div class=" mb-5">
                                <img src="<?= ROOT ?>uploads/logo.svg" class="" alt="">
                            </div>
                            <div class="mb-2">
                                <h2 class="color-900 text-center">Sign Up</h2>
                            </div>
                            <!-- List Checked -->
                            <ul class="list-unstyled mb-5">
                                <li class="mb-4 text-center">
                                    <span class="d-block mb-1 fs-4 fw-light">Fun to use Easy to sale</span>
                                    <span class="color-600">Amazing Features to make your sales faster</span>
                                </li>

                            </ul>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="home" class="me-3 color-600 btn btn-st">Go To Home</a>
                            </div>
                            <!-- <div>
                                <a href="#" class="me-3 color-400"><i class="fa fa-facebook-square fa-lg"></i></a>
                                <a href="#" class="me-3 color-400"><i class="fa fa-github-square fa-lg"></i></a>
                                <a href="#" class="me-3 color-400"><i class="fa fa-linkedin-square fa-lg"></i></a>
                                <a href="#" class="me-3 color-400"><i class="fa fa-twitter-square fa-lg"></i></a>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card shadow-sm w-100 p-4 p-md-5 login-side" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-3">
                                <div class="col-12 text-center mb-5">
                                    <img src="<?= ROOT ?>uploads/logo.svg" style="max-width: 80px;" class="d-lg-none mb-4" alt="">
                                    <h1>Sign Up</h1>
                                    <span class="text-muted">Sign up and get an account </span>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Full name</label>
                                        <input type="username" class="form-control form-control-lg" placeholder="Enter full name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control form-control-lg" placeholder="name@example.com">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Phone number</label>
                                        <input type="phone" class="form-control form-control-lg" placeholder="080 111 222 3333">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg" placeholder="Enter password">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg" placeholder="ReEnter password">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">State</label>
                                        <select class="form-control form-control-lg">
                                            <option value=''>Select your state</option>
                                            <?php
                                            $sql = $conn->query("SELECT * FROM states WHERE country_code = 'NG'");
                                            while ($data = $sql->fetch_assoc()) {
                                                extract($data);
                                                echo ("<option value = '$name'> $name</option>");
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <a class="btn btn-lg btn-block btn-dark lift text-uppercase" href="index.html" title="">SIGN UP <i class="fa fa-send" aria-hidden="true"></i></a>
                                </div>

                                <div class="text-center loader">
                                    <i class="fa fa-refresh fa-spin" aria-hidden="true"></i>
                                </div>

                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div>
        </div>

    </div>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
    </div>


    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>


    <!-- Jquery Page Js -->

</body>

</html>