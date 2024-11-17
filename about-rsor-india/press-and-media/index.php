<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Press & Media update for " . APP_NAME;
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

                <div class="row rsor-media">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-12 img-block">
                        <a href="">
                            <img src="<?php echo STORAGE_URL; ?>/media/192-1927144_news-icon-top-breaking-news-hd-png-download.png" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-12 text-block">
                        <a href="">
                            <h6>Welcome Event with NDTV India</h6>
                            <p class="text-secondary font-italic mb-0">24 Sept, 2024</p>
                            <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod quis, mi. Proin porttitor, orci nec placerat vehicula, leo ligula tempor dignissim, sem neque semper erat, in congue velit ante id odio. Sed sagittis tempor wisi.</p>
                        </a>
                    </div>
                </div>
                <div class="row rsor-media">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-12 img-block">
                        <a href="">
                            <img src="<?php echo STORAGE_URL; ?>/media/192-1927144_news-icon-top-breaking-news-hd-png-download.png" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-12 text-block">
                        <a href="">
                            <h6>Welcome Event with NDTV India</h6>
                            <p class="text-secondary font-italic mb-0">24 Sept, 2024</p>
                            <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod quis, mi. Proin porttitor, orci nec placerat vehicula, leo ligula tempor dignissim, sem neque semper erat, in congue velit ante id odio. Sed sagittis tempor wisi.</p>
                        </a>
                    </div>
                </div>
                <div class="row rsor-media">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-12 img-block">
                        <a href="">
                            <img src="<?php echo STORAGE_URL; ?>/media/192-1927144_news-icon-top-breaking-news-hd-png-download.png" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-12 text-block">
                        <a href="">
                            <h6>Welcome Event with NDTV India</h6>
                            <p class="text-secondary font-italic mb-0">24 Sept, 2024</p>
                            <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod quis, mi. Proin porttitor, orci nec placerat vehicula, leo ligula tempor dignissim, sem neque semper erat, in congue velit ante id odio. Sed sagittis tempor wisi.</p>
                        </a>
                    </div>
                </div>
                <div class="row rsor-media">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-12 img-block">
                        <a href="">
                            <img src="<?php echo STORAGE_URL; ?>/media/192-1927144_news-icon-top-breaking-news-hd-png-download.png" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-12 text-block">
                        <a href="">
                            <h6>Welcome Event with NDTV India</h6>
                            <p class="text-secondary font-italic mb-0">24 Sept, 2024</p>
                            <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod quis, mi. Proin porttitor, orci nec placerat vehicula, leo ligula tempor dignissim, sem neque semper erat, in congue velit ante id odio. Sed sagittis tempor wisi.</p>
                        </a>
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