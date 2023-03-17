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
                <div class="row">
                    <?php
                    $sql = $conn->query("SELECT * from posts WHERE prop_state='active' AND user_tag = '$tag' ORDER BY p_id DESC LIMIT 50 ");
                    if ($sql->num_rows > 0) {
                        $sn = 0;
                        while ($data = $sql->fetch_assoc()) {
                            $sn++;
                            extract($data);

                    ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-6 float">
                                <a href="<?= APP_ROOT ?>viewpost?prop=<?= $prop_id ?>">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <img src="<?= ROOT ?>uploads/posts/<?= coverImage($images); ?>" width="100%" alt="">

                                                <span class="img-number"><?= imgCount($images) ?></span>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 text-main post-price">₦<?= number_format($price, 2) ?></h4>
                                                <h5 class="post-title"><?= $prop_title ?></h5>

                                            </div>

                                            <div class="xtr">
                                                <span><?= $prop_type ?></span>
                                                <span><?= $city ?></span>
                                                <span><?= $furnishing ?></span>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mt-4 xtr">Views <span class="text-white bold-p"><?= views($prop_id) ?></span></p>

                                                <p class="mt-4 xtr">Callbacks <span class="text-white bold-p"><?= propCallBack($prop_id) ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                    } else {
                        ?>

                        <img src="<?= ROOT ?>assets/images/modals/modal-quote.svg" style="max-width: 300px;" class="m-auto d-table" alt="">
                        <p class="text-center">Oops!, Looks like u don,t have any post yet</p>

                    <?php
                    }
                    ?>
                </div>
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