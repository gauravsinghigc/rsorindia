<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "About " . APP_NAME;
$PageDescription = APP_NAME . "'s company profile, history, mission, vission and team.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $PageName . " @ " . TAGLINE; ?></title>
    <?php include $WebDir . "assets/main/MainHeaderFiles.php"; ?>
    <script>
        window.onload = function() {
            document.getElementById("about_rsor").classList.add("active");
        }
    </script>
</head>

<body>

    <?php
    include $WebDir . "include/web/Loader.php";
    include $WebDir . "include/web/MainHeaderForOtherPages.php";
    ?>

    <section class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-8">
                <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="w-pr-12 img-fluid">
                <h2 class="rsor-text display-3"><?php echo APP_NAME; ?></h2>
                <blockquote>
                    <span class="text-danger fs-20"><i class="fa fa-quote-left"></i></span>
                    <span class="font-cursive fs-25"><?php echo TAGLINE; ?></span>
                    <span class="text-danger fs-20"><i class="fa fa-quote-right"></i></span>
                </blockquote>
                <p class="text-justify">
                    Established in 2024, RSOR is a comprehensive home needs and solutions provider in India with a
                    clear motive: developing tomorrow's landscape today. Despite being a new entrant in the industry,
                    RSOR has quickly positioned itself as a reliable and professional service provider. Their offerings
                    include expert painting services to refresh and beautify both interiors and exteriors, as well as
                    electrical work encompassing installations, repairs, and maintenance to ensure homes are safe and
                    fully functional.
                </p>
                <p class="text-justify">
                    In addition to these essential services, RSOR provides plumbing solutions to address any water
                    system issues, from fixing leaks to installing new fixtures. They also specialize in creating
                    customized furniture, delivering personalized pieces that cater to the unique tastes and
                    specifications of their clients. For those looking to upgrade their living spaces, RSOR’s home
                    renovation services offer comprehensive remodelling and redesigning options. Furthermore, they
                    assist with home insurance, helping homeowners secure the necessary coverage to protect their
                    properties. Through this extensive range of services, RSOR aims to be the go-to provider for all
                    home-related needs, delivering quality and convenience under one roof. With a commitment to
                    developing tomorrow's landscape today, RSOR is dedicated to enhancing the living environments
                    of its clients and shaping the future of home solutions.
                </p>
            </div>
            <div class="col-md-4">
                <h5>More about <span class="rsor-text"><?php echo APP_NAME; ?></span></h5>
                <hr class="mt-1 mb-1">
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