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
                                <p class="text-muted p-3"> Note: All input field are optional except the once marked
                                    <span class="text-danger">*required</span> - only informations provided will be
                                    shared with the public.
                                </p>
                                <form action="<?= ROOT ?>processor/property_reg.php" method="POST"
                                    enctype="multipart/form-data" onsubmit="loadOnClick('post_property')">
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Vehicle Type</label>
                                            <select name="vehicle_type" id="vehicle_type"
                                                class="form-control form-control-lg">
                                                <option value="buses and microbuses">Buses & Microbuses</option>
                                                <option value="Cars">Cars</option>
                                                <option value="heavy equipment">Heavy Equipment</option>
                                                <option value="motocycle and scoopers">Motocycle and Scoopers</option>
                                                <option value="trucks and trailers">Trucks and Trailers</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">City</label>
                                            <select name="city" id="city" class="form-control form-control-lg"
                                                placeholder="city">
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
                                            <label for="" class="form-label">Location <small class="text-muted">(Full
                                                    address/estate)</small></label>
                                            <input type="text" name="address" class="form-control form-control-lg"
                                                id="address" placeholder="address">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 prop1">
                                            <label for="" class="form-label">Make</label>
                                            <input type="text" class="form-control form-control-lg" name="make"
                                                id="make" placeholder="make">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Model</label>
                                            <input type="text" class="form-control form-control-lg" name="model"
                                                id="model" placeholder="model" required>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 _105-deg ">
                                            <label for="" class="form-label">Year of Manufacture</label>
                                            <input type="text" name="year_of_manufacture"
                                                class="form-control form-control-lg" id="year_of_manufacture"
                                                placeholder="year of manufacture">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Trim</label>
                                            <input type="text" name="trim" id="trim" placeholder="trim"
                                                class="form-control form-control-lg">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Color</label>
                                            <input type="text" name="color" id="color" placeholder="color"
                                                class="form-control form-control-lg">
                                        </div>



                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Condition</label>
                                            <select name="condition" id="condition" class="form-control form-control-lg"
                                                placeholder="condition">
                                                <option value="brand new">Brand New</option>
                                                <option value="foreign used">Forign Used</option>
                                                <option value="nigeria used">Nigeria Used</option>
                                                <option value="foreign used accidental">Foreign Used Accidental</option>
                                                <option value="nigeria used accidental">Nigeria Used Accidental</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Second Condition</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check1"
                                                    name="after_crash" value="After Crash">
                                                <label class="form-check-label" for="After Crash">After Crash</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="engine_issue"
                                                    name="engine_issue" value="engine issue">
                                                <label class="form-check-label" for="check1">Engine Issue</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="first_owner"
                                                    name="first_owner" value="first owner">
                                                <label class="form-check-label" for="first owner">First Owner</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="first_registration"
                                                    name="first_registration" value="first registration">
                                                <label class="form-check-label" for="first registration">First
                                                    Registration</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="gear_issue"
                                                    name="gear_issue" value="gear issue">
                                                <label class="form-check-label" for="gear issue">Gear Issue</label>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Transmission</label>
                                            <select name="transmission" id="transmission"
                                                class="form-control form-control-lg" placeholder="transmission">
                                                <option value="AMT ">AMT</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="CVT">CVT</option>
                                                <option value="manual">manual</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Mileage</label>
                                            <input type="text" name="mileage" id="mileage"
                                                class="form-control form-control-lg" placeholder="mileage">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Key Features</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="air_conditioning"
                                                    name="air_conditioning" value="Air Conditioning">
                                                <label class="form-check-label" for="air conditioning">Air
                                                    Conditioning</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="airbag"
                                                    name="airbag" value="airbag">
                                                <label class="form-check-label" for="airbag">Airbags</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="alloy_wheels"
                                                    name="falloy_wheels" value="alloy wheels">
                                                <label class="form-check-label" for="alloy_wheels">Alloy Wheels</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="Radio" name="Radio"
                                                    value="AM/FM Radio">
                                                <label class="form-check-label" for="Radio">AM/FM Radio</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="andriod_auto"
                                                    name="andriod_auto" value="andriodauto">
                                                <label class="form-check-label" for="andriod auto">Android Auto</label>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">VIN Chassis Number</label>
                                            <input type="text" name="chasis_number" class="form-control form-control-lg"
                                                placeholder="VIN Chassis Number">
                                        </div>



                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Registered Car</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="yes">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="no" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Exchange Posible</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="yes">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="no" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                       
                                       
                                        <div class="col-md-12 col-lg-10  p-3">
                                            <label for="" class="form-label">Description <small class="text-muted">(full
                                                    description of vehicle)</small></label>
                                            <textarea name="description" id="" cols="30" rows="10"
                                                class="form-control form-control-lg"></textarea>
                                        </div>

                                    </div>


                                    <h4 class="mt-5">Property Images </h4> <small class="text-mute mb-5">(first image is
                                        mandatory while others are optional)</small>
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4"
                                                style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4"
                                                    style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                </div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img1" id="img1"
                                                        accept="image/png, image/jpeg" onchange="checkImage('img1') "
                                                        required>
                                                    <label for="img1"
                                                        class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <span class="text-danger">*required</span>
                                            <div class="text-danger err img1">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4"
                                                style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4"
                                                    style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                </div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img2" id="img2"
                                                        accept="image/png, image/jpeg" onchange="checkImage('img2') ">
                                                    <label for="img2"
                                                        class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img2">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4"
                                                style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4"
                                                    style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                </div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img3" id="img3"
                                                        accept="image/png, image/jpeg" onchange="checkImage('img3') ">
                                                    <label for="img3"
                                                        class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img3">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4"
                                                style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4"
                                                    style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                </div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control" name="img4" id="img4"
                                                        accept="image/png, image/jpeg" onchange="checkImage('img4') ">
                                                    <label for="img4"
                                                        class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img4">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="image-input avatar xxl rounded-4"
                                                style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4"
                                                    style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                </div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control bg-danger" name="img5"
                                                        id="img5" accept="image/png, image/jpeg"
                                                        onchange="checkImage('img5')">
                                                    <label for="img5"
                                                        class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img5">
                                                <small></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3 ">
                                            <div class="image-input avatar xxl rounded-4"
                                                style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                <div class="avatar-wrapper rounded-4"
                                                    style="background-image: url(<?= ROOT ?>assets/images/avatar.png)">
                                                </div>
                                                <div class="file-input">
                                                    <input type="file" class="form-control bg-danger" name="img6"
                                                        id="img6" accept="image/png, image/jpeg"
                                                        onchange="checkImage('img6')">
                                                    <label for="img6"
                                                        class="fa fa-pencil shadow text-white bg-main"></label>
                                                </div>
                                            </div>
                                            <div class="text-danger err img6">
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-footer text-end">
                                        <input type="hidden" value="add property" id="profile-action" name="action"
                                            class="d-none">
                                        <input type="hidden" value="<?= $tag ?>" name="user_tag">
                                        <button class="btn btn-lg btn-primary" type="submit" id='post_property'
                                            name="prop_btn" value="property">Post Property</button>
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
        // $('#prop_type').change(function (e) {
        //     e.preventDefault();
        //     var ptype = $('#prop_type').val();
        //     if (ptype !== 'land') {
        //         $('.prop1').hide(500);
        //         $('.prop2').show(500);
        //     } else {
        //         $('.prop2').hide(500);
        //         $('.prop1').show(500);
        //     }
        // });

        // function checkImage(imgId) {
        //     var _URL = window.URL || window.webkitURL;
        //     var file, img;;
        //     var myImg = document.getElementById(imgId);
        //     if ((file = myImg.files[0])) {
        //         img = new Image();
        //         var objectUrl = _URL.createObjectURL(file);
        //         img.onload = function () {

        //             if (this.width < 400) {
        //                 $('.' + imgId + ' small').html('Image width must be upto 400px');
        //                 $('#post_property').attr('disabled', 'disabled');
        //             } else if (file.size > 10000000) {
        //                 $('.' + imgId + ' small').html('Image size must not be above 10mb');
        //                 $('#post_property').attr('disabled', 'disabled');
        //             } else {
        //                 $('.' + imgId + ' small').html('');
        //                 $('#post_property').removeAttr('disabled');
        //                 // $('#profile-action').val('profile_picture');
        //             }
        //             _URL.revokeObjectURL(objectUrl);

        //         };
        //         img.src = objectUrl;

        //     } else {

        //         $('.' + imgId + ' small').html('File is not an image');
        //         $('#post_property').attr('disabled', 'disabled');
        //     }

        // }
    </script>
</body>

</html>