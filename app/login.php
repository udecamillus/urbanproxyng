<?php
require_once('../app.php');
$page_title = "Login";
require_once(APP_APP_ROOT . DS . 'includes' . DS . 'header.php')
?>

<body id="layout-1" data-luno="theme-blue">
    <div class="wrapper">
        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1" style="height: 100vh; overflow: hidden;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div style="max-width: 25rem;">
                            <div class="mb-4"><img src="<?= LOGO ?>" width="100%" alt=""></div>
                            <div class="mb-5 text-center">
                                <h2 class="color-900 text-center">Login</h2>
                            </div>
                            <ul class="list-unstyled mb-5 text-center">
                                <li class="mb-4"><span class="d-block mb-1 fs-4 fw-light">New experience allday everyday</span><span class="color-600">Amazing Features to make your sales faster</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card shadow-sm w-100 p-4 p-md-5 login-side" style="max-width: 32rem;">
                            <form class="row g-3">
                                <div class="col-12 text-center mb-5"><img src="<?= LOGO ?>" style="max-width: 80px;" class="d-lg-none mb-4" alt="">
                                    <h1>Login</h1><span class="">Don't have an account? <a href="register">register Now</a></span>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2"><label class="form-label">Email/Phone</label><input type="text" class="form-control form-control-lg" id="email_phone" placeholder="Enter registered email or phone"></div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label"><span class="d-flex justify-content-between align-items-center">Password <a class="text-primary" href="password-reset">Forgot Password?</a></span></div><input type="password" class="form-control form-control-lg" id="password" placeholder="Enter password"><span class="d-flex flex-row-reverse"><button type="button" class="text-muted btn" onclick="showPas();" id="show_pass" href="" value="">Show password</button></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">Remember me </label></div>
                                </div>
                                <div class="col-12 text-center mt-4"><button type="button" class="btn btn-st" title="" id="userLogin">LOGIN <i class="fa fa-user-circle-o" aria-hidden="true"></i></button></div><span class="text-center">Cant login to account? <a href="contact">Let's Help</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php require_once(APP_APP_ROOT . DS . 'includes' . DS . 'scripts.php'); ?><script>
        $("#userLogin").click(function(e) {
            e.preventDefault();
            var btn = $('#userLogin');
            loader(btn, 'show');
            $.post("<?= ROOT ?>processor/login.php", {
                email_phone: $('#email_phone').val(),
                password: $('#password').val(),
                user_login: 'user login'
            }, function(data) {
                if (data === 'success') {
                    toastAlert('Success', 'Login successful. <strong>Redirecting to account</strong>', 'green', 'ico-success');
                    setTimeout(() => {
                        window.location.replace('home');
                    }, 1000);
                } else {
                    toastAlert('Error', data, 'red', 'ico-error');
                }
                loader(btn, 'hide');
            });
        });
    </script>
</body>

</html>