<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "History of " . APP_NAME;
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
                <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="img-fluid w-pr-15">
                <h1 class="display-1 text-danger">
                    <span class="Rblink"><?php echo $Experience = GetYearDifference("2012-03-30", DATE("Y-m-d")); ?>+</span>
                    <span class="display-4 text-black typing">Year Experience</span>
                </h1>
                <h6 class='text-warning mb-3'>
                    <?php
                    $Start = 1;
                    while ($Start <= $Experience) {
                        $Start++;
                        echo "<i class='fa fa-star text-warning mr-1 fa-spin'></i>";
                    } ?>
                </h6>
                <h3><?php echo APP_NAME; ?>'s History</h3>
                <hr class="mt-1 mb-1">
                <p class="text-justify">
                    RSOR India, established in 2024, is the culmination of over <?php echo $Experience; ?> years of expertise by its founders in various home utility services. With a vision to develop tomorrow's landscape today, RSOR brings together a wealth of experience in critical sectors such as construction, electrical services, plumbing, furniture design, interior decoration, and house painting. This extensive background allows RSOR to provide top-tier services to clients, ensuring that every project is handled with professionalism and precision.
                </p>
                <p class="text-justify">
                    The founders of RSOR India have honed their skills through years of hands-on experience in multiple domains. From constructing robust, high-quality homes to designing customized furniture that reflects individual tastes, their depth of knowledge has helped shape RSOR into a reliable solutions provider. Their expertise also extends to electrical and plumbing systems, ensuring homes are not only visually appealing but also safe and functional. Their specialization in house painting and seasonal home insurance further enhances the value offered by RSOR, making it a one-stop solution for homeowners.
                </p>
                <p class="text-justify">
                    Despite being a new entity, RSOR has quickly gained recognition for its ability to transform living spaces through comprehensive renovation services. With a holistic approach that integrates interior design, home insurance, and modern aesthetic solutions, RSOR India stands poised to become the go-to choice for all home-related needs across the country. By combining their <?php echo $Experience; ?> years of experience with a forward-thinking approach, RSOR is committed to elevating the standard of home solutions for years to come.
                </p>
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