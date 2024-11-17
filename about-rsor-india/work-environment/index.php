<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Work Environment of " . APP_NAME;
$PageDescription = APP_NAME . "'s company profile, history, mission, vission and team.";
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

    <section class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-8">
                <h5><?php echo $PageName; ?></h5>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="rsor-work-env">
                            <li class="initial mb-5">
                                <span class='icon mt--1'><i class='fa fa-angle-double-up Rblink'></i></span>
                            </li>
                            <li>
                                <div class="date">
                                    <span class="day">24</span>
                                    <span class="year">Sept, 2024</span>
                                </div>
                                <div class="desc">
                                    <span class="title">Birthday Celebrations</span>
                                    <p>Attended the birthday party of the CEO and the team members.</p>
                                    <div class="images">
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
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span class="day">23</span>
                                    <span class="year">Sept, 2024</span>
                                </div>
                                <div class="desc">
                                    <span class="title">Birthday Celebrations</span>

                                    <div class="images">
                                        <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-1.jpg" alt="">
                                        <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-2.jpg" alt="">
                                        <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-3.jpg" alt="">
                                        <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-4.jpg" alt="">
                                        <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-5.jpg" alt="">
                                        <img src="<?php echo STORAGE_URL; ?>/activities/work-environment-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="initial">
                                <span class='icon'><i class='fa fa-home'></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5>More about <span class="rsor-text"><?php echo APP_NAME; ?></span></h5>
                <hr>
                <?php include $WebDir . "about-rsor-india/sections/PageMenus.php"; ?>
            </div>
        </div>
    </section>

    <?php
    include $WebDir . "include/web/BookFreeConsultant.php";
    include $WebDir . "include/web/MainFooter.php";
    include $WebDir . "include/web/pageFooterRequests/HomePageFooterRequest.php";
    include $WebDir . "assets/main/MainFooterFiles.php";
    ?>

</body>

</html>