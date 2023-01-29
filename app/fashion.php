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
                                            <label for="" class="form-label">Fashion Type</label>
                                            <select name="fashion_type" id="fashion_type"
                                                class="form-control form-control-lg">
                                                <option value="bags">Bags</option>
                                                <option value="clothing">Clothing</option>
                                                <option value="clothing accessories">Clothing Accessories</option>
                                                <option value=" jewelry">Jewelry</option>
                                                <option value="shoes">Shoes</option>
                                                <option value="watches">Watches</option>
                                                <option value="wedding accessories">Wedding Accessories</option>
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
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control form-control-lg" name="title"
                                                id="title" placeholder="title">
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Brand</label>
                                            <input type="text" class="form-control form-control-lg" name="brand"
                                                id="brand" placeholder="brand" required>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Color</label>
                                            <input type="text" name="color" id="color" placeholder="color"
                                                class="form-control form-control-lg">
                                        </div>



                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Gender</label>
                                            <select name="gender" id="gender" class="form-control form-control-lg"
                                                placeholder="gender">
                                                <option value="women's">Women's</option>
                                                <option value="men's">Men's</option>
                                                <option value="unisex">Unisex</option>
                                            </select>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Exterior Material</label>
                                            <input type="text" class="form-control form-control-lg"
                                                name="exterior_material" id="exterior_material"
                                                placeholder="exterior material" required>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Lining Material</label>
                                            <input type="text" class="form-control form-control-lg"
                                                name="lining_material" id="lining_material"
                                                placeholder="lining material" required>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">closure</label>
                                            <input type="text" class="form-control form-control-lg" name="closure"
                                                id="closure" placeholder="closure" required>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Size</label>
                                            <select name="size" id="size" class="form-control form-control-lg"
                                                placeholder="size">
                                                <option value="micro">Micro</option>
                                                <option value="mini">Mini</option>
                                                <option value="small">Small</option>
                                                <option value="medium">Medium</option>
                                                <option value="extra large">Extra Large</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Pattern</label>
                                            <input type="text" class="form-control form-control-lg" name="pattern"
                                                id="pattern" placeholder="pattern" required>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Features</label>
                                            <input type="text" class="form-control form-control-lg" name="features"
                                                id="features" placeholder="features" required>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Style</label>
                                            <input type="text" class="form-control form-control-lg" name="style"
                                                id="style" placeholder="style" required>
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Vintage</label>
                                            <select name="size" id="size" class="form-control form-control-lg"
                                                placeholder="size">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Condition</label>
                                            <select name="condition" id="condition" class="form-control form-control-lg"
                                                placeholder="size">
                                                <option value="brand new">Brand New</option>
                                                <option value="used">Used</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Exchange Possible</label>
                                            <select name="condition" id="condition" class="form-control form-control-lg"
                                                placeholder="size">
                                                <option value=" yes">Yes</option>
                                                <option value="no">No</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3 ">
                                            <label for="" class="form-label">Warranty</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="Radio" name="Radio"
                                                    value="yes">
                                                <label class="form-check-label" for="Radio">Yes</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Price</label>
                                            <input type="text" name="price" id="price"
                                                class="form-control form-control-lg" placeholder="price">
                                        </div>



                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Add Bulk Price</label>
                                            <input type="text" name="bulk_price" id="bulk_price"
                                                class="form-control form-control-lg" placeholder="add bulk price">
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
                                                    id="no">
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


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Phone Number</label>
                                            <input type="text" name="phone" id="phone"
                                                class="form-control form-control-lg" placeholder="">
                                        </div>


                                        <div class="col-md-6 col-lg-4  p-3">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control form-control-lg" placeholder="">
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