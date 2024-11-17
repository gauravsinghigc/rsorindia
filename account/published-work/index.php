<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Published Work @ " . APP_NAME;
$PageDescription = APP_NAME . "'s my account to manage orders, profile, published work and track jobs.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $PageName . " @ " . TAGLINE; ?></title>
    <?php include $WebDir . "assets/main/MainHeaderFiles.php"; ?>
</head>

<body>

    <?php
    include $WebDir . "include/web/Loader.php";
    include $WebDir . "include/web/MainHeaderForOtherPages.php";
    ?>

    <section class="container-fluid pt-3 pb-3">
        <div class="row">
            <div class="col-md-12">
                <?php include $WebDir . "account/sections/PageMenus.php"; ?>
            </div>
        </div>
    </section>
    <section class="container pt-1 pb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="shadow-sm p-3 rounded">
                            <h5 class="rsor-text">
                                <i class='fa fa-list'></i> Published Work
                            </h5>
                            <hr class="mt-1 mb-2">
                            <form>
                                <input type='search' name='' class='form-control mb-0' placeholder="Search...">
                            </form>
                            <ul class="rsor-lists">
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">Need 2bhk House painting</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            <span>
                                                <span class="text-secondary">Budget</span><br>
                                                <span class="text-black bold">Rs.10,000 - Rs.15,000</span>
                                            </span>
                                            <span>
                                                <span class="text-secondary">Status</span><br>
                                                <span class="text-black bold">Active</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">Need 2bhk House painting</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            <span>
                                                <span class="text-secondary">Budget</span><br>
                                                <span class="text-black bold">Rs.10,000 - Rs.15,000</span>
                                            </span>
                                            <span>
                                                <span class="text-secondary">Status</span><br>
                                                <span class="text-black bold">Active</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">Need 2bhk House painting</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            <span>
                                                <span class="text-secondary">Budget</span><br>
                                                <span class="text-black bold">Rs.10,000 - Rs.15,000</span>
                                            </span>
                                            <span>
                                                <span class="text-secondary">Status</span><br>
                                                <span class="text-black bold">Active</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="shadow-sm p-2 rounded">
                            <div>
                                <a href="" class='btn btn-sm btn-warning'>
                                    <i class="fa fa-eye-slash"></i> Un-Publish Work
                                </a>
                                <a href="" class='btn btn-sm btn-primary'>
                                    <i class="fa fa-edit"></i> Update Details
                                </a>
                                <a href="" class='btn btn-sm btn-info'>
                                    <i class="fa fa-times"></i> Close Work
                                </a>
                                <a href="" class='btn btn-sm btn-dark'>
                                    <i class="fa fa-file-pdf-o"></i> View Quotations
                                </a>
                                <a href="" class='btn btn-sm btn-danger'>
                                    <i class="fa fa-trash"></i> Remove Work
                                </a>
                            </div>
                            <hr>
                            <div class="row mb-3 mt-2">
                                <div class="col-md-4">
                                    <div class="shadow-sm p-2 rounded">
                                        <h4 class="mb-0 pb-0 mt-2">
                                            <span class="text-secondary small"><i class='fa fa-eye'></i></span>
                                            <span> <?php echo rand(111, 99999); ?></span>
                                        </h4>
                                        <p class="text-secondary mb-1 mt-0">Impressions</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="shadow-sm p-2 rounded">
                                        <h4 class="mb-0 pb-0 mt-2">
                                            <span class="text-secondary small"><i class='fa fa-star'></i></span>
                                            <span> <?php echo rand(111, 99999); ?></span>
                                        </h4>
                                        <p class="text-secondary mb-1 mt-0">Show Interest</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="shadow-sm p-2 rounded">
                                        <h4 class="mb-0 pb-0 mt-2">
                                            <span class="text-secondary small"><i class='fa fa-file-pdf-o'></i></span>
                                            <span> <?php echo rand(111, 99999); ?></span>
                                        </h4>
                                        <p class="text-secondary mb-1 mt-0">Quotation Received</p>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-2">Work Details <span class="text-secondary small font-weight-normal">(ID: 1234)</span></h5>
                            <a href="#" class='btn btn-sm btn-success pull-right mt--1'><i class='fa fa-check-circle'></i> Active</a>
                            <span class="text-secondary small">Work Title</span>
                            <h6 class='mt-0 pt-0 mt--2 font-weight-normal text-black'>Need 2bhk complete interior painting with premium finishing.</h6>

                            <div>
                                <p class="flex-s-b mb-1">
                                    <span>
                                        <span class='text-secondary small'>Property Detail</span><br>
                                        <span class="h6 text-black">2nd floor, 2 room only.</span>
                                    </span>
                                    <span>
                                        <span class='text-secondary small'>Budget</span><br>
                                        <span class="h6 text-black">Rs.10,000-15,000</span>
                                    </span>
                                </p>
                                <p class="flex-s-b mb-1">
                                    <span>
                                        <span class='text-secondary small'>Publish Date</span><br>
                                        <span class="h6 text-black">31 October 2024</span>
                                    </span>
                                    <span>
                                        <span class='text-secondary small'>Due Date</span><br>
                                        <span class="h6 text-black">5 November 2024</span>
                                    </span>
                                </p>
                                <p class="mb-0">
                                    <span class="text-secondary small">More Details</span>
                                </p>
                                <p class="text-black text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perspiciatis ratione, quasi aspernatur facilis quidem sapiente natus eligendi ipsa! Praesentium voluptas optio, repellendus accusamus quaerat non ea qui dolore reiciendis?
                                </p>
                            </div>

                            <p class="fs-13 text-secondary mb-0">Property Images</p>
                            <div class="gallery-images">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-1.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-2.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-3.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-4.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-5.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-6.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-1.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-2.jpg" alt="">
                                <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-3.jpg" alt="">
                            </div>

                            <h5 class="mt-4"><span class="rsor-text">Quotations</span> Received</h5>
                            <hr class="mt-1 mb-1">

                            <ul class="rsor-lists">
                                <li>
                                    <div class="shadow-sm rounded p-2 pb-4">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-14 mt-0">ABC Service Provider</h6>
                                        <p class="fs-13 text-justify mb-1">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, est nisi placeat,
                                            quam beatae ea, reiciendis error aperiam totam odio ut maiores quidem suscipit atque
                                            aliquid! Eius placeat voluptates aliquid.
                                        </p>
                                        <p class="fs-14 mb-0 mt-3">
                                            <span class="text-secondary">Quotation Amount</span><br>
                                            <span class="text-black font-weight-bold text-black">Rs.12,000</span>
                                        </p>
                                        <div class="pull-right flex-s-b mt--1">
                                            <a href="" class='btn btn-sm m-1 btn-success'><i class='fa fa-check-circle'></i> Accept</a>
                                            <a href="" class='btn btn-sm m-1 btn-danger'><i class='fa fa-times'></i> Reject</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="shadow-sm rounded p-2 pb-4">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-14 mt-0">Shivam Enterprises</h6>
                                        <p class="fs-13 text-justify mb-1">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, est nisi placeat,
                                            quam beatae ea, reiciendis error aperiam totam odio ut maiores quidem suscipit atque
                                            aliquid! Eius placeat voluptates aliquid.
                                        </p>
                                        <p class="fs-14 mb-0 mt-3">
                                            <span class="text-secondary">Quotation Amount</span><br>
                                            <span class="text-black font-weight-bold text-black">Rs.14,500</span>
                                        </p>
                                        <div class="pull-right flex-s-b mt--1">
                                            <a href="" class='btn btn-sm m-1 btn-success'><i class='fa fa-check-circle'></i> Accept</a>
                                            <a href="" class='btn btn-sm m-1 btn-danger'><i class='fa fa-times'></i> Reject</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <?php echo PaginationFooter(1, "index.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include $WebDir . "include/web/MainFooter.php";
    include $WebDir . "include/web/pageFooterRequests/HomePageFooterRequest.php";
    include $WebDir . "assets/main/MainFooterFiles.php";
    ?>

</body>

</html>