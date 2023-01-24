<?php
require_once("../app.php");
$page_title = 'Create Post';
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
                                <div class="row justify-content-evenly">
                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="<?=APP_ROOT?>post-properties" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/properties.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">properties</h2>
                                                <small class="text-muted text-break">House, shops, lands, flats.</small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/automotive.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">Automotive</h2>
                                                <small class="text-muted text-break">Cars, Trucks, Bikes, Bus</small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/fashion.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">Fashion</h2>
                                                <small class="text-muted text-break">Men, Women, Cloths, Bags.</small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/computer.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">Computer</h2>
                                                <small class="text-muted text-break">HP, Dell, Apple, Samsung.</small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/furniture.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">Home & Furniture</h2>
                                                <small class="text-muted text-break">Table, Chair, Cushion, Bed.</small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/phones.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">Phones & Tablets</h2>
                                                <small class="text-muted text-break">Apple, Samsung, Teckno, Infinix.</small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4  p-3">
                                        <a href="" class="d-flex align-items-center btn-action">
                                            <div class="col-sm-3 rounded-circle">
                                                <img src="<?= ROOT ?>uploads/icon/accesories.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="col-sm-9 p-2 pt-0 pb-0">
                                                <h2 class="text-uppercase text-break">Accessories</h2>
                                                <small class="text-muted text-break">Charger, Headphones, Cases, Protectors.</small>
                                            </div>
                                        </a>
                                    </div>

                                </div>
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



</body>

</html>