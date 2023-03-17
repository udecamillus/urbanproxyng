<?php
require_once("../app.php");
$page_title = 'Create Property Post';
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

        <!-- start: page body -->
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
            <div class="container-fluid">

                <div class="row  mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-muted p-3"> Note: All input field are optional except the once marked <span class="text-danger">*required</span> - only informations provided will be shared with the public.</p>
                                <form action="<?= ROOT ?>processor/property_reg.php" method="POST" enctype="multipart/form-data" onsubmit="loadOnClick('post_property')">
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Property Type</label>
                                            <select name="prop_type" id="prop_type" class="form-control form-control-lg">
                                                <option value="land">Land</option>
                                                <option value="flat">Flat</option>
                                                <option value="duplex">Duplex</option>
                                                <option value="bungalow">Bungalow</option>
                                                <option value="office">Office</option>
                                                <option value="shop">Shop/Store</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 prop1">
                                            <label for="" class="form-label">Land Size <small class="text-muted">(square metre 'sqm')</small></label>
                                            <input type="number" class="form-control form-control-lg" name="land_size">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Title <small class="text-muted">(Property title) <span class="text-danger">*required</span></small></label>
                                            <input type="text" class="form-control form-control-lg" name="prop_title" placeholder="3bedroom flat for rent" required>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 _105-deg prop2">
                                            <label for="" class="form-label">Bedroom</label>
                                            <input type="number" name="bedroom" class="form-control form-control-lg">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 prop2">
                                            <label for="" class="form-label">Bathroom</label>
                                            <input type="number" name="bathroom" class="form-control form-control-lg">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 prop2">
                                            <label for="" class="form-label">Seating Room</label>
                                            <input type="number" name="seating_room" class="form-control form-control-lg">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">City</label>
                                            <select name="city" id="" class="form-control form-control-lg">
                                                <?php
                                                $sql = $conn->query("SELECT * FROM states WHERE country_code = 'NG' ORDER BY name ASC");
                                                while ($data = $sql->fetch_assoc()) {
                                                    extract($data);
                                                    echo ("<option value = '$name'> $name</option>");
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Location <small class="text-muted">(Full address/estate)</small></label>
                                            <input type="text" name="address" class="form-control form-control-lg" id="address">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 prop2">
                                            <label for="" class="form-label">Property Status</label>
                                            <select name="status" id="" class="form-control form-control-lg">
                                                <option value="fresh build">Freshly Build</option>
                                                <option value="fairly used">Fairly Used</option>
                                                <option value="old">Old</option>
                                                <option value="renovated">Renovated</option>
                                                <option value="under construction">Under Construction</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 prop2">
                                            <label for="" class="form-label">Furnishing</label>
                                            <select name="furnishing" id="" class="form-control form-control-lg">
                                                <option value="fully furnished">Fully furnished</option>
                                                <option value="semi furnished">Semi Furnished</option>
                                                <option value="unfurnished">unfurnished</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Legal and Agreement Fee</label>
                                            <input type="number" name="legal" class="form-control form-control-lg" placeholder="₦000,000.00">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Agency Fee</label>
                                            <input type="number" name="agent" class="form-control form-control-lg" placeholder="₦000,000.00">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Price</label>
                                            <input type="number" name="price" class="form-control form-control-lg" placeholder="₦000,000.00">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Payment Pattern</label>
                                            <select name="pattern" id="" class="form-control form-control-lg">
                                                <option value="asking price">Asking Price</option>
                                                <option value="fixed price">Fixed price</option>
                                                <option value="per annum">Per Annum</option>
                                                <option value="quarterly">Quarterly</option>
                                                <option value="monthly">Monthly</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Contact number <small class="text-muted">(For easy contact, add a WhatApp number)</small></label>
                                            <select name="contact_number" id="" class="form-control form-control-lg">
                                                <option value="<?= $phone ?>"><?= $phone ?></option>
                                                <option value="<?=$phone_2?>"><?=$phone_2?></option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 col-lg-8 p-3">
                                            <label for="" class="form-label">Facilities <small class="text-muted">(separate with comer)</small></label>
                                            <textarea name="facilities" id="" cols="30" rows="5" class="form-control form-control-lg" aria-placeholder="" placeholder="Personal transformer, car park, swimming pool"></textarea>
                                        </div>

                                        <div class="col-md-12 col-lg-12 p-3">
                                            <label for="" class="form-label">Description <small class="text-muted">(full description of property)</small></label>
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-lg"></textarea>
                                        </div>

                                    </div>


                                    <h4 class="mt-5">Property Images </h4> <small class="text-mute mb-5">(first image is mandatory while others are optional)</small>
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)"></div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img1" id="img1" accept="image/png, image/jpeg" onchange="checkImage('img1') " required>
                                                    <label for="img1" class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <span class="text-danger">*required</span>
                                            <div class="text-danger err img1">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)"></div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img2" id="img2" accept="image/png, image/jpeg" onchange="checkImage('img2') ">
                                                    <label for="img2" class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img2">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)"></div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img3" id="img3" accept="image/png, image/jpeg" onchange="checkImage('img3') ">
                                                    <label for="img3" class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img3">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)"></div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img4" id="img4" accept="image/png, image/jpeg" onchange="checkImage('img4') ">
                                                    <label for="img4" class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img4">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)"></div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control bg-danger" name="img5" id="img5" accept="image/png, image/jpeg" onchange="checkImage('img5')">
                                                    <label for="img5" class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img5">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3 ">
                                            <div class="image-input avatar xxl rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4" style="background-image: url(<?= ROOT ?>assets/images/avatar.png)"></div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control bg-danger" name="img6" id="img6" accept="image/png, image/jpeg" onchange="checkImage('img6')">
                                                    <label for="img6" class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img6">
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-footer text-end">
                                        <input type="hidden" value="add property" id="profile-action" name="action" class="d-none">
                                        <input type="hidden" value="<?= $tag ?>" name="user_tag">
                                        <button class="btn btn-lg btn-primary" type="submit" id='post_property' name="prop_btn" value="property">Post Property</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- .row end -->

            </div>
        </div>

        <!-- start: page footer -->
        <?php require_once(APP_FOOTER); ?>

    </div>

    <?php require_once(APP_MODAL);
    require_once(APP_SCRIPT);
    ?>

    <script>
        $('#prop_type').change(function(e) {
            e.preventDefault();
            var ptype = $('#prop_type').val();
            if (ptype !== 'land') {
                $('.prop1').hide(500);
                $('.prop2').show(500);
            } else {
                $('.prop2').hide(500);
                $('.prop1').show(500);
            }
        });

        function checkImage(imgId) {
            var _URL = window.URL || window.webkitURL;
            var file, img;;
            var myImg = document.getElementById(imgId);
            if ((file = myImg.files[0])) {
                img = new Image();
                var objectUrl = _URL.createObjectURL(file);
                img.onload = function() {

                    if (this.width < 400) {
                        $('.' + imgId + ' small').html('Image width must be upto 400px');
                        $('#post_property').attr('disabled', 'disabled');
                    } else if (file.size > 10000000) {
                        $('.' + imgId + ' small').html('Image size must not be above 10mb');
                        $('#post_property').attr('disabled', 'disabled');
                    } else {
                        $('.' + imgId + ' small').html('');
                        $('#post_property').removeAttr('disabled');
                        // $('#profile-action').val('profile_picture');
                    }
                    _URL.revokeObjectURL(objectUrl);

                };
                img.src = objectUrl;

            } else {

                $('.' + imgId + ' small').html('File is not an image');
                $('#post_property').attr('disabled', 'disabled');
            }

        }
    </script>
</body>

</html>