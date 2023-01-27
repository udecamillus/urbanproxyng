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

        <!-- start: page body -->
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
            <div class="container-fluid">

                <?php
                $sql = $conn->query("SELECT * FROM posts WHERE user_tag = '$tag'");
                if ($sql->num_rows > 0) {
                    $sn = 0;
                    while ($data = $sql->fetch_assoc()) {
                        $sn++;
                        extract($data);
                        $img = explode(',', $images);
                ?>

                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7 col-lg-8">

                                        <div class="img_frame">
                                            <img src="<?= ROOT ?>uploads/posts/<?= $img[0] ?>" alt="" id="set_image<?=$sn?>">
                                        </div>

                                        <div class="d-flex justify-content-between mt-5">
                                            <?php
                                            for ($i = 0; $i < count($img); $i++) {
                                            ?>

                                                <div class="btn-img">
                                                    <img src="<?= ROOT ?>uploads/posts/<?= $img[$i] ?>" id="img<?= $i.$sn?>" alt="" onclick="image_changer('#img<?= $i.$sn ?>','#set_image<?=$sn?>')">
                                                </div>


                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <h2 class="text-primary text-capitalize mt-3"><?= $prop_title ?>
                                            <br> <small class="text-muted">#<?= number_format($price, 2) ?> <sub>(<?= $pattern ?>)</sub></small>
                                        </h2>

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

                                        <p><Strong>Property Description</Strong> <br>
                                            <?= $description ?>
                                        </p>


                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php
                    }

                } else {
                    ?>

                    <div class="card">
                        <div class="card-body">
                            <img src="<?= ROOT ?>assets/images/modals/modal-quote.svg" style="max-width: 300px;" class="m-auto d-table" alt="">
                            <p class="text-center">Oops!, Looks like u don,t have any post yet</p>
                        </div>
                    </div>

                <?php
                }

                closeConn();
                ?>

            </div>
        </div>

        <!-- start: page footer -->
        <?php require_once(APP_FOOTER); ?>

    </div>

    <?php require_once(APP_MODAL);
    require_once(APP_SCRIPT);
    ?>

    <script>
        function image_changer(source, target) {
            var img = $(source).attr('src');
            $(target).attr('src', img);
        }
    </script>


</body>

</html>