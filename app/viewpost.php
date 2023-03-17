<?php
require_once("../app.php");
$page_title = 'user home';
securePage('activeUser', 'app/login');
extract(getUserData());
if (isset($_GET['prop'])) {
    $prop = $_GET['prop'];
} else {
    redirect('store');
}
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
                $sql = $conn->query("SELECT * FROM posts WHERE user_tag = '$tag' AND prop_id = '$prop'");
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
                                            <img src="<?= ROOT ?>uploads/posts/<?= $img[0] ?>" alt="" id="set_image<?= $sn ?>">
                                        </div>

                                        <div class="d-flex mt-4">
                                            <?php
                                            for ($i = 0; $i < count($img); $i++) {
                                            ?>

                                                <div class="btn-img m-1">
                                                    <img src="<?= ROOT ?>uploads/posts/<?= $img[$i] ?>" id="img<?= $i . $sn ?>" alt="" onclick="image_changer('#img<?= $i . $sn ?>','#set_image<?= $sn ?>')">
                                                </div>


                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <h2 class="text-primary text-capitalize mt-3">
                                            <small class="">₦<?= number_format($price, 2) ?> </small>
                                            <span class="bg-info fs-6 rounded text-white pr-1 pl-1"><?= $pattern ?></span>
                                        </h2>
                                        <h5>
                                            <?= $prop_title ?>
                                        </h5>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-2">
                                                <button class="btn btn-md btn-primary fill" id="mark_as_sold" type="button">Mark Post as Sold</button>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-2">
                                                <button class="btn btn-md btn-danger fill">Delete Post</button>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-2">
                                                <button class="btn btn-md btn-info fill text-white">Edit Post</button>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-md-10 col-sm-12">
                                                <button class="mt-5 btn-md btn btn-sm btn-warning fill" onclick="toggle_display('.callback_list')">Show Callbacks <i class="icofont-arrow-down"></i></button>
                                            </div>
                                        </div>


                                        <?php
                                        $sql = $conn->query("SELECT * FROM callbacks WHERE call_prop = '$prop' ORDER BY call_id DESC");
                                        if ($sql->num_rows > 0) {

                                            while ($call_data = $sql->fetch_assoc()) {
                                                extract($call_data);

                                        ?>
                                                <div class="hide callback_list">
                                                    <div class="d-flex align-items-center mt-4 g-5 flex-sm-wrap hide">

                                                        <p class=""><?= $callback_num ?> <br> <small><?= $call_date ?></small> </p>

                                                        <a href="tell:<?= $callback_num ?>" target="_blank" class="btn btn-info text-white m-1">Call <i class="icofont-phone-circle"></i></a>

                                                        <a href="https://wa.me/<?= $callback_num ?>" target="_blank" class="btn btn-success m-1">Chat <i class="icofont-brand-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo '<p class="">Your Post has no callback request yet</p>';
                                        }
                                        ?>



                                    </div>

                                    <div class="col-md-5 col-lg-4 mt-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <p class="mt-4 xtr">Views <span class="text-white bold-p"><?= views($prop_id) ?></span></p>

                                            <p class="mt-4 xtr">Callbacks <span class="text-white bold-p"><?= propCallBack($prop_id) ?></span></p>
                                        </div>


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
                                            <span class="text-capitalize">₦<?= number_format($legal, 2) ?></span>
                                        </p>

                                        <p class="d-flex justify-content-between">
                                            <strong>Agent:</strong>
                                            <span class="text-capitalize">₦<?= number_format($agent, 2) ?></span>
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


                        <!-- start: Job listing -->
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="card text-center p-2">
                            <div class="card-body">
                                <img class="img-fluid mb-4" src="assets/images/modals/modal-joblisting.svg" alt="Job listing" />
                                <h5>Job listing</h5>
                                <p class="text-muted">Click on the below buttons to launch a Search Users example.</p>
                                <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#Joblisting" type="button">View in modals</button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="Joblisting" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Job listing</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-lg-5 custom_scroll">
                                        <p class="text-muted small">If you are going to use a passage of Lorem Ipsum, you need</p>
                                        <div class="card mb-1">
                                            <div class="card-body">
                                                <span class="chart-color1 small rounded-pill text-light py-1 px-3">Creative &amp; Art</span>
                                                <h5 class="mt-4"><a href="#">User Experience Designer Employee</a></h5>
                                                <ul class="list-unstyled d-flex my-3">
                                                    <li class="me-4"><i class="fa fa-map-marker pe-2"></i> New York, USA</li>
                                                    <li><i class="fa fa-clock-o pe-2"></i>Full Time</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between fs-6">
                                                    <p class="mb-0">Globe Solution Ltd.</p>
                                                    <span>2h ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-body">
                                                <span class="chart-color5 small rounded-pill text-light py-1 px-3">UI/UX</span>
                                                <h5 class="mt-4"><a href="#">User Experience Designer Employee</a></h5>
                                                <ul class="list-unstyled d-flex my-3">
                                                    <li class="me-4"><i class="fa fa-map-marker pe-2"></i> New York, USA</li>
                                                    <li><i class="fa fa-clock-o pe-2"></i>Full Time</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between fs-6">
                                                    <p class="mb-0">Globe Solution Ltd.</p>
                                                    <span>2h ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-body">
                                                <span class="chart-color3 small rounded-pill text-light py-1 px-3">Finance & Accounting</span>
                                                <h5 class="mt-4"><a href="#">Foreign Language Research Analyst</a></h5>
                                                <ul class="list-unstyled d-flex my-3">
                                                    <li class="me-4"><i class="fa fa-map-marker pe-2"></i> New York, USA</li>
                                                    <li><i class="fa fa-clock-o pe-2"></i>Full Time</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between fs-6">
                                                    <p class="mb-0">Globe Solution Ltd.</p>
                                                    <span>2h ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        $("#mark_as_sold").click(function(e) {
            e.preventDefault();
            var btn = $('#mark_as_sold');
            loader(btn, 'show');
            $.post("<?= ROOT ?>processor/quickActions.php", {
                prop_owner: '<?= $tag ?>',
                prop: '<?= $prop_id ?>',
                action: 'mark_as_sold'
            }, function(data) {
                if (data === 'success') {
                    toastAlert('Success', 'Your post has been marked as sold', 'green', 'ico-success');
                    setTimeout(() => {
                        window.location.replace("<?= APP_ROOT ?>store")
                    }, 1000);
                } else {
                    toastAlert('Error', data, 'red', 'ico-error');
                }
                loader(btn, 'hide');
            });
        });

        $("#delete_post").click(function(e) {
            e.preventDefault();
            var btn = $('#mark_as_sold');
            loader(btn, 'show');
            $.post("<?= ROOT ?>processor/quickActions.php", {
                prop_owner: '<?= $tag ?>',
                prop: '<?= $prop_id ?>',
                action: 'mark_as_sold'
            }, function(data) {
                if (data === 'success') {
                    toastAlert('Success', 'Your post has been marked as sold', 'green', 'ico-success');
                    setTimeout(() => {
                        window.location.replace("<?= APP_ROOT ?>store")
                    }, 1000);
                } else {
                    toastAlert('Error', data, 'red', 'ico-error');
                }
                loader(btn, 'hide');
            });
        });
    </script>


</body>

</html>