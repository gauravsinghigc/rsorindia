<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Latest Events & Trips " . APP_NAME;
$PageDescription = APP_NAME . "'s events & trips";
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

    <section class="container pt-4 pb-3">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h4>Search recent event and trips</h4>
                <form class="w-75 d-block mx-auto mt-2">
                    <input type="search" class="form-control form-control-lg" placeholder="Search any event or trip..." name="SearchNewsAndUpdates" onchange="form.submit()">
                </form>
                <hr>
            </div>
            <?php
            $Start = 0;
            while ($Start <= 12) {
                $Start++; ?>
                <div class="col-md-6">
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
            <?php } ?>
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