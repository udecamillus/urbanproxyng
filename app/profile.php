<?php
require_once("../app.php");
$page_title = 'user home';
securePage('activeUser', 'app/login');
extract(getUserData());
require_once(APP_HEADER);
?>

<body class="layout-1 h-menu" data-luno="theme-blue">

    <!-- start: sidebar -->
    <?php require_once(APP_SIDE_NAV); ?>

    <!-- start: body area -->
    <div class="wrapper">

        <!-- start: page header -->
        <?php require_once(APP_NAV); ?>

        <!-- start: page toolbar -->
        <!-- start: page toolbar -->
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">


            </div>
        </div>

        <!-- start: page body -->
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
            <div class="container-fluid">

                <div class="row g-3">
                    <div class="col-xxl-3 col-lg-4 col-md-4 d-none d-md-block">
                        <div class="list-group list-group-custom sticky-top me-xl-4" style="top: 100px;">
                            <a class="list-group-item list-group-item-action" href="#list-item-0">Profile Picture</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-1">Profile Details</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-4">Social Profiles</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">Change Password</a>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-lg-8 col-md-8">
                        <div id="list-item-0" class="card fieldset border border-muted mt-0 mb-5">
                            <span class="fieldset-tile text-muted bg-body">Profile Details:</span>
                            <form method="POST" action="<?= ROOT ?>processor/profile.php" enctype="multipart/form-data" onsubmit="loadOnClick('save-profile')">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Profile display</label>
                                            <div class="col-md-9 col-sm-8">

                                                <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= userPic($acct_photo) ?>)">
                                                    <div class="avatar-wrapper rounded-4" style="background-image: url(<?= userPic($acct_photo) ?>)"></div>
                                                    <div class="file-input">
                                                        <input type="file" class="form-control bg-danger" name="file_profile" id="file-profile" accept="image/png, image/jpeg">
                                                        <label for="file-profile" class="fa fa-pencil shadow text-white bg-main"></label>
                                                    </div>
                                                </div>
                                                <p>click the <i class="fa fa-pencil shadow text-white bg-main rounded-circle p-1"></i> icon to add personal picture or company logo</p>
                                                <div class="text-danger err">
                                                    <small></small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer text-end">
                                        <input type="hidden" value="" id="profile-action" name="action" class="d-none">
                                        <input type="hidden" value="<?= $tag ?>" name="user_tag">
                                        <button class="btn btn-lg btn-primary" type="submit" id='save-profile' name="" value="" disabled>Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="list-item-1" class="card fieldset border border-muted mt-0">
                            <span class="fieldset-tile text-muted bg-body">Personal Information:</span>
                            <form>
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Full Name</label>
                                            <div class="col-md-9 col-sm-8">
                                                <input type="text" class="form-control form-control-lg text-capitalize" disabled value="<?= $name ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Company or Business Name <small class="text-muted">(optional)</small></label>
                                            <div class="col-md-9 col-sm-8">
                                                <input type="text" class="form-control form-control-lg text-capitalize" id="business_name" value="<?= $business_name ?>" placeholder="Enter name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Contact Phone <br> <small class="text-muted">(For easy and fast contacting, add a WhatApp number)</small> </label>
                                            <div class="col-md-9 col-sm-8">
                                                <input type="text" class="form-control form-control-lg text-capitalize" value="<?= $phone ?>" disabled placeholder="Phone 1">
                                                <input type="text" class="form-control form-control-lg text-capitalize mt-2" id="phone_2" value="<?= $phone_2 ?>" placeholder="Phone 2 optional">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Email address</label>
                                            <div class="col-md-9 col-sm-8">
                                                <input type="email" class="form-control form-control-lg text-capitalize" value="<?= $email ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">State</label>
                                            <div class="col-md-9 col-sm-8">
                                                <input type="text" class="form-control form-control-lg text-capitalize" value="<?= $state ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Full address</label>
                                            <div class="col-md-9 col-sm-8">
                                                <input type="text" class="form-control form-control-lg text-capitalize" id="address" value="<?= $address ?>" placeholder="Full home or office address">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Comment</label>
                                            <div class="col-md-9 col-sm-8">
                                                <textarea name="" id="comment" cols="30" rows="5" class="form-control form-control-lg" value="<?= $comment ?>"><?= $comment ?></textarea>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-sm-4 col-form-label">Always leave my post active</label>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="freelance">
                                                    <label class="form-check-label" for="freelance">Yes, leave my post active till i delete it.</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-light me-2" type="reset">Discard</button>
                                        <button class="btn btn-primary" type="button" id="personal_info">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="list-item-4" class="card fieldset border border-muted mt-5">
                            <span class="fieldset-tile text-muted bg-body">Social Profiles</span>
                            <form>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input type="text" class="form-control form-control-lg" id="twitter" value="<?= $twitter ?>" placeholder="Twitter page link">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control form-control-lg" id="facebook" value="<?= $facebook ?>" placeholder="Facebook page link">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input type="text" id="instagram" value="<?= $instagram ?>" class="form-control form-control-lg" placeholder="Instagram page link">
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-light me-2" type="reset">Discard</button>
                                        <button class="btn btn-primary" type="button" id="social">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="list-item-2" class="card fieldset border border-muted mt-5">
                            <span class="fieldset-tile text-muted bg-body">Change Password</span>
                            <form>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <h6 class="border-top pt-2 mt-2 mb-3">Change Password</h6>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control form-control-lg" id="c_pass" placeholder="Current Password">
                                                </div>
                                                <div class="mb-1">
                                                    <input type="password" class="form-control form-control-lg" id="pass1" placeholder="New Password">
                                                </div>
                                                <div>
                                                    <input type="password" class="form-control form-control-lg" id="pass2" placeholder="Confirm New Password">
                                                    <span class="text-muted small">Minimum six(6) characters</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-light me-2" type="reset">Discard</button>
                                        <button class="btn btn-primary" type="submit" id="password">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- start: page footer -->
        <?php require_once(APP_FOOTER); ?>

    </div>

    <?php require_once(APP_MODAL);
    require_once(APP_SCRIPT);
    ?>
    <script>
        var _URL = window.URL || window.webkitURL;
        $("#file-profile").change(function(e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                var objectUrl = _URL.createObjectURL(file);
                img.onload = function() {
                    if (this.width < 200) {
                        $('.err small').html('Image width must be upto 200px');
                        $('#save-profile').attr('disabled', 'disabled');
                    } else if (file.size > 5000000) {
                        $('.err small').html('Image size must not be above 5mb');
                        $('#save-profile').attr('disabled', 'disabled');
                    } else {
                        $('.err small').html('');
                        $('#save-profile').removeAttr('disabled');
                        $('#profile-action').val('profile_picture');
                    }
                    _URL.revokeObjectURL(objectUrl);
                };
                img.src = objectUrl;
            } else {
                $('.err small').html('File is not an image');
                $('#save-profile').attr('disabled', 'disabled');
            }
        });

        $('#personal_info').click(function(e) {
            e.preventDefault();
            btn = $('#personal_info');
            loader(btn, 'show');

            $.post("<?= ROOT ?>processor/profile.php", {
                    business_name: $('#business_name').val(),
                    phone_2: $('#phone_2').val(),
                    address: $('#address').val(),
                    comment: $('#comment').val(),
                    user_tag: "<?= $tag ?>",
                    action: 'personal_info'
                },
                function(data) {
                    if (data === 'success') {
                        toastAlert('Success', 'Profile updated', 'green', 'ico-success');
                    } else {
                        toastAlert('Error', data, 'red', 'ico-error');
                    }
                    loader(btn, 'hide');
                }
            );

        });

        $('#social').click(function(e) {
            e.preventDefault();
            btn = $('#social');
            loader(btn, 'show');

            $.post("<?= ROOT ?>processor/profile.php", {
                    twitter: $('#twitter').val(),
                    facebook: $('#facebook').val(),
                    instagram: $('#instagram').val(),
                    user_tag: "<?= $tag ?>",
                    action: 'social'
                },
                function(data) {
                    if (data === 'success') {
                        toastAlert('Success', 'Profile updated', 'green', 'ico-success');
                    } else {
                        toastAlert('Error', data, 'red', 'ico-error');
                    }
                    loader(btn, 'hide');
                }
            );

        });

        $('#password').click(function(e) {
            e.preventDefault();
            btn = $('#password');
            loader(btn, 'show');

            $.post("<?= ROOT ?>processor/profile.php", {
                    current_password: $('#c_pass').val(),
                    new_password: $('#pass1').val(),
                    confirm_new_password: $('#pass2').val(),
                    user_tag: "<?= $tag ?>",
                    action: 'password'
                },
                function(data) {
                    if (data === 'success') {
                        toastAlert('Success', 'Password changed', 'green', 'ico-success');
                    } else {
                        toastAlert('Error', data, 'red', 'ico-error');
                    }
                    loader(btn, 'hide');
                }
            );

        });
    </script>
</body>

</html>