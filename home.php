<?php
require_once("app.php");
$page_title = 'Home';
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

        <!-- start: page toolbar -->

        <!-- start: page body -->
        <div class="mt-5">
            <div class="container-fluid">
                <div class="row g-3 d-block">
                    <?php
                    $sql = $conn->query("SELECT * from posts WHERE prop_state='active'");
                    if ($sql->num_rows > 0) {
                        $sn = 0;
                        while ($data = $sql->fetch_assoc()) {
                            $sn++;
                            extract($data);

                    ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-6 float">
                                <a href="<?= ROOT ?>view?prop=<?= $prop_id ?>">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <img src="<?= ROOT ?>uploads/posts/<?= coverImage($images); ?>" width="100%" alt="">

                                                <span class="img-number"><?= imgCount($images) ?></span>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 text-main post-price">#<?= number_format($price, 2) ?></h4>
                                                <h5 class="post-title"><?= $prop_title ?></h5>

                                            </div>

                                            <div class="xtr">
                                                <span><?= $prop_type ?></span>
                                                <span><?= $city ?></span>
                                                <span><?= $furnishing ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                    <?php
                        }
                    }else{
                        echo "<p class='text-center'>No Record found</p>";
                    }
                    ?>



                </div>
                <!-- .row end -->
            </div>
        </div>

        <!-- start: page footer -->
        <?php require_once(FOOTER); ?>

    </div>

    <?php require_once(MODAL);
    require_once(SCRIPT);
    ?>

</body>


</html>