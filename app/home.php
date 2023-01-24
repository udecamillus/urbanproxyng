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
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <!-- .row end -->
                <div class="d-block d-sm-flex align-items-center justify-content-between">
                    <div class=" mb-4 mb-sm-0">
                        <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, <span class="text-capitalize"> <?= firstName($name); ?></span></h1>
                        <small class="text-muted">You have 12 new connections from 4 posts.</small>
                    </div>

                    <div class="">
                        <div class="input-group ">
                            <a href="<?=APP_ROOT?>post" class="btn-st btn "><i class="icofont-plus-circle"></i> Create New Post </a>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>

        <!-- start: page body -->
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
            <div class="container-fluid">

                <div class="row g-3 row-deck">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="" class="d-block card-link">
                            <div class="card overflow-hidden hoverable">

                                <div class="card-body">
                                    <i class="icofont-newspaper position-absolute top-0 end-0 mt-4 me-3 card-icon"></i>
                                    <div class="mb-2 text-uppercase">Active Post</div>
                                    <div><span class="h4">51</span></div>
                                </div>

                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="" class="card-link d-block">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <i class="icofont-touch position-absolute top-0 end-0 mt-4 me-3 card-icon"></i>
                                    <div class="mb-2 text-uppercase">Connections</div>
                                    <div><span class="h4">5</span> </div>
                                </div>
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="" class="card-link d-block">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <i class="icofont-money position-absolute top-0 end-0 mt-4 me-3 card-icon"></i>
                                    <div class="mb-2 text-uppercase">Sold</div>
                                    <div><span class="h4">15</span> </div>

                                </div>
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <i class="icofont-not-allowed position-absolute top-0 end-0 mt-4 me-3 card-icon"></i>
                                <div class="mb-2 text-uppercase">Blocked post</div>
                                <div><span class="h4">1</span></div>

                            </div>
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-5 mb-4">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                        <div class="card text-center bg-primary-gradient">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="mt-4">Wellcome Back, <span class="text-capitalize"><?= firstName($name) ?></span>!!</h4>
                                    <p class="card-text fs-6 mb-5">Complete your profile and make viewers trust your post more</p>
                                    <a class="btn btn-lg bg-white text-uppercase" href="<?=APP_ROOT?>profile" title="">My profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-8 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title m-0">Recent Post</h6>
                            </div>
                            <div class="card-body">
                                <img src="<?= ROOT ?>assets/images/modals/modal-quote.svg" style="max-width: 300px;" class="m-auto d-table" alt="">
                                <p class="text-center">Oops!, Looks like u don,t have any post yet</p>
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