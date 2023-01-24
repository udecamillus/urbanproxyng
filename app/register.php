<?php
require_once('../app.php');
$page_title = "Register";
require_once(APP_APP_ROOT . DS . 'includes' . DS . 'header.php');
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
                                    <span class="text-muted">Sign up and get an account. </span>
                                    <br>
                                    <span class="">Already have an account? <a href="login">Login Now</a></span>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Full name</label>
                                        <input type="text" id="full_name" class="form-control form-control-lg" placeholder="Enter full name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input type="email" id="email_address" class="form-control form-control-lg" placeholder="name@example.com">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Phone number</label>
                                        <input type="phone" id="phone_number" class="form-control form-control-lg" placeholder="080 0000 0000">
                                        <small class="text-muted">WhatApp preferably *</small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password">
                                        <small class="text-muted">not less than six(6) characters</small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" id="confirm_password" class="form-control form-control-lg" placeholder="ReEnter password">
                                        <span class="d-flex flex-row-reverse">
                                            <button type="button" class="text-muted btn" onclick="showPas();" id="show_pass" href="" value="">Show password</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">State</label>
                                        <select id="state" class="form-control form-control-lg">
                                            <option value=''>Select your state</option>
                                            <?php
                                            $sql = $conn->query("SELECT * FROM states WHERE country_code = 'NG' ORDER BY name ASC");
                                            while ($data = $sql->fetch_assoc()) {
                                                extract($data);
                                                echo ("<option value = '$name'> $name</option>");
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button type="button" class="btn btn-st" title="" id="userRegistration">SIGN UP <i class="fa fa-user-circle" aria-hidden="true"></i></button>
                                </div>

                                <span class="text-center">Already have an account? <a href="login">Login Now</a></span>

                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->

    <?php require_once(APP_APP_ROOT . DS . 'includes' . DS . 'scripts.php'); ?>


    <script>
        $("#userRegistration").click(function(e) {
            e.preventDefault();
            var btn = $('#userRegistration');
            loader(btn, 'show');

            $.post("<?= ROOT ?>processor/register.php", {
                    full_name: $('#full_name').val(),
                    email_address: $('#email_address').val(),
                    phone_number: $('#phone_number').val(),
                    password: $('#password').val(),
                    confirm_password: $('#confirm_password').val(),
                    state: $('#state').val(),
                    register_user: 'user registration'
                },
                function(data) {
                    if (data === 'success') {
                        toastAlert('Success', 'Your account has been created.', 'green', 'ico-success');
                        setTimeout(() => {
                            window.location.replace('login');
                        }, 5000);
                    } else {
                        toastAlert('Error', data, 'red', 'ico-error');
                    }

                    loader(btn, 'hide');
                }
            );
        });
    </script>


    <!-- Jquery Page Js -->

</body>

</html>