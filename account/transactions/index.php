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
    <section class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-12">
                <h5 class="rsor-text">
                    <i class='fa fa-list'></i> All Published Work
                    <span class="pull-right text-secondary font-weight-normal small">(Account ID: 123456)</span>
                </h5>
                <hr class="mt-1 mb-1">

                <div class="row mt-1">
                    <div class="col-md-6 mb-3">
                        <div class="shadow-sm p-3 rounded d-block">
                            <h5>Recently <span class='rsor-text'>Published Works</span></h5>
                            <hr class="mt-1 mb-1">
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
                                        <span class="small text-secondary">ID : 2</span>
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
                    <div class="col-md-6 mb-3">
                        <div class="shadow-sm p-3 rounded d-block">
                            <h5>Recent <span class='rsor-text'>Orders</span></h5>
                            <hr class="mt-1 mb-1">

                            <ul class="rsor-lists">
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">2bhk House painting</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            <span>
                                                <span class="text-secondary">Price</span><br>
                                                <span class="text-black bold">Rs.15,000</span>
                                            </span>
                                            <span>
                                                <span class="text-secondary">Status</span><br>
                                                <span class="text-black bold">In Progress</span>
                                            </span>
                                        </p>
                                        <p class='fs-12 mb-0 mt-2'>
                                            <span class='text-secondary'>Managed By</span><br>
                                            <span class="rsor-text">ABC Service Pvt Ltd
                                                <span class="text-secondary fs-11">(ID: 23456)</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 2</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">1bhk House painting</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            <span>
                                                <span class="text-secondary">Price</span><br>
                                                <span class="text-black bold">Rs.7,000</span>
                                            </span>
                                            <span>
                                                <span class="text-secondary">Status</span><br>
                                                <span class="text-black bold">In Progress</span>
                                            </span>
                                        </p>
                                        <p class='fs-12 mb-0 mt-2'>
                                            <span class='text-secondary'>Managed By</span><br>
                                            <span class="rsor-text">ABC Service Pvt Ltd
                                                <span class="text-secondary fs-11">(ID: 23456)</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="shadow-sm p-3 rounded d-block">
                            <h5>Recent <span class='rsor-text'>Tasks & Activities</span></h5>
                            <hr class="mt-1 mb-1">

                            <ul class="rsor-lists">
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">Painting Material Purchased</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi eos ipsa, accusantium amet odit, dignissimos tempora, dolorum ipsum provident tempore pariatur aperiam dolores iusto quis quae neque! Odit, at accusamus?
                                        </p>
                                        <p class="mb-0 fs-11 text-right">
                                            <span class='rsor-text'>
                                                Gaurav Singh
                                                <span class="text-secondary fs-11">(ID: 12345)</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024</span>
                                        <h6 class="fs-13 mt-0">Painting Material Purchased</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi eos ipsa, accusantium amet odit, dignissimos tempora, dolorum ipsum provident tempore pariatur aperiam dolores iusto quis quae neque! Odit, at accusamus?
                                        </p>
                                        <p class="mb-0 fs-11 text-right">
                                            <span class='rsor-text'>
                                                Gaurav Singh
                                                <span class="text-secondary fs-11">(ID: 12345)</span>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="shadow-sm p-3 rounded d-block">
                            <h5>Recent <span class='rsor-text'>Notifications</span></h5>
                            <hr class="mt-1 mb-1">

                            <ul class="rsor-lists">
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024, 10:30 PM</span>
                                        <h6 class="fs-13 mt-0">Painting Material Purchased</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi eos ipsa, accusantium amet odit, dignissimos tempora, dolorum ipsum provident tempore pariatur aperiam dolores iusto quis quae neque! Odit, at accusamus?
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="small text-secondary">ID : 1</span>
                                        <span class="pull-right fs-11 text-secondary"><i class="fa fa-calendar"></i> 30 October 2024, 09:00 PM</span>
                                        <h6 class="fs-13 mt-0">Painting Material Purchased</h6>
                                        <p class="fs-12 mb-0 flex-s-b">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi eos ipsa, accusantium amet odit, dignissimos tempora, dolorum ipsum provident tempore pariatur aperiam dolores iusto quis quae neque! Odit, at accusamus?
                                        </p>
                                    </a>
                                </li>
                            </ul>
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