<?php
require_once("app.php");
$page_title = 'View property';

if (isset($_GET)) {
    $sn = 0;
    $prop_id = $_GET['prop'];
    $sql = $conn->query("SELECT * FROM posts WHERE prop_id = '$prop_id'");
    $data = $sql->fetch_assoc();
    extract($data);
    $img = explode(',', $images);
} else {
    redirect(ROOT . 'home');
}

require_once(HEADER);
?>

<body class="layout-1 h-menu" data-luno="theme-blue">

    <!-- start: sidebar -->
    <?php //require_once(SIDE_NAV); 
    ?>

    <!-- start: body area -->
    <div class="wrapper">

        <!-- start: page header -->
        <?php require_once(NAV); ?>

        <!-- start: page body -->
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
            <div class="container-fluid">

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 col-lg-8">

                                <div class="img_frame">
                                    <img src="<?= ROOT ?>uploads/posts/<?= $img[0] ?>" alt="" id="set_image<?= $sn ?>">
                                </div>

                                <div class="d-flex justify-content-between mt-5">
                                    <?php
                                    for ($i = 0; $i < count($img); $i++) {
                                    ?>

                                        <div class="btn-img">
                                            <img src="<?= ROOT ?>uploads/posts/<?= $img[$i] ?>" id="img<?= $i . $sn ?>" alt="" onclick="image_changer('#img<?= $i . $sn ?>','#set_image<?= $sn ?>')">
                                        </div>


                                    <?php
                                    }
                                    ?>

                                </div>

                                <h2 class="text-primary text-capitalize mt-3">
                                    <small class="">#<?= number_format($price, 2) ?> </small>
                                    <span class="bg-info fs-6 rounded text-white pr-1 pl-1"><?= $pattern ?></span>
                                </h2>
                                <h5>
                                    <?= $prop_title ?>
                                </h5>


                            </div>

                            <div class="col-md-5 col-lg-4">
                                <h4>Property Details:</h4>


                                <p class="d-flex justify-content-between">
                                    <strong>Property Type:</strong>
                                    <span class="text-capitalize"><?= $prop_type ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Bedroom:</strong>
                                    <span><?= $bedroom ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Bathroom:</strong>
                                    <span><?= $bathroom ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Seating Rooms:</strong>
                                    <span><?= $seating_room ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Location:</strong>
                                    <span class="text-capitalize"><?= $city ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Property Status:</strong>
                                    <span class="text-capitalize"><?= $status ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Furnishing:</strong>
                                    <span class="text-capitalize"><?= $furnishing ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Legal:</strong>
                                    <span class="text-capitalize">#<?= number_format($legal, 2) ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Agent:</strong>
                                    <span class="text-capitalize">#<?= number_format($agent, 2) ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Facilities:</strong>
                                    <span class="text-capitalize"><?= $facilities ?></span>
                                </p>

                                <p class="d-flex justify-content-between">
                                    <strong>Address:</strong>
                                    <span class="text-capitalize"><?= $address ?></span>
                                </p>

                                <p><Strong>Property Description</Strong> <br>
                                    <?= $description ?>
                                </p>


                            </div>
                        </div>

                        <h5 class="d-inline-block p-1 rounded text-white bg-light-primary mt-5">View property on map</h5>
                        <!-- <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $address ?>&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                            </div>
                        </div> -->


                    </div>
                </div>


                <!--                  

                    <div class="card">
                        <div class="card-body">
                            <img src="<?= ROOT ?>assets/images/modals/modal-quote.svg" style="max-width: 300px;" class="m-auto d-table" alt="">
                            <p class="text-center">Oops!, Looks like u don,t have any post yet</p>
                        </div>
                    </div> -->

                <?php
                closeConn();
                ?>

            </div>
        </div>

        <!-- start: page footer -->
        <?php require_once(FOOTER); ?>

    </div>

    <?php require_once(MODAL);
    require_once(SCRIPT);
    ?>

    <script>
        function image_changer(source, target) {
            var img = $(source).attr('src');
            $(target).attr('src', img);
        }
    </script>


</body>

</html>