<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Mission & Vission of " . APP_NAME;
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
                <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="img-fluid w-pr-12">
                <img src="<?php echo STORAGE_URL_D; ?>/tool-img/rsor-mission.png" class="img-fluid w-pr-15 pull-right">
                <h2><span class="rsor-text"><?php echo APP_NAME; ?>'s</span> Misson</h2>
                <hr class="w-75">
                <p class="text-justify">
                    At RSOR India, our mission is to redefine home solutions with a commitment to excellence and innovation. We strive to be the ultimate destination for homeowners seeking top-notch services that cover every aspect of home care—from expert painting and precise electrical work to flawless plumbing and bespoke furniture design. Our goal is to transform living spaces into personalized sanctuaries that not only reflect the unique tastes of our clients but also enhance their everyday living experience. By integrating cutting-edge technology with unmatched craftsmanship, we ensure that every project is a testament to quality and reliability.
                </p>
                <p class="text-justify">
                    Driven by a passion for perfection, RSOR India is dedicated to simplifying home maintenance and improvement with a customer-centric approach. Our mission goes beyond mere service provision; we aim to build lasting relationships with our clients by delivering exceptional results and unparalleled convenience. Whether it's through our comprehensive renovation services or our thoughtful home insurance solutions, we are committed to developing tomorrow's landscape today, one home at a time. With RSOR, experience the future of home solutions, where every detail matters and excellence is a guarantee.
                </p>
                <div class="flex-s-b w-100">
                    <div class="w-50">
                        <img src="<?php echo STORAGE_URL_D; ?>/tool-img/vission.png" class="img-fluid w-pr-40">
                    </div>
                    <div class="w-75 text-right">
                        <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="img-fluid w-pr-25">
                        <h2 class="w-100"><span class="rsor-text"><?php echo APP_NAME; ?>'s</span> Vission</h2>
                        <hr class="w-100">
                    </div>
                </div>
                <p class="text-justify">
                    At RSOR India, our vision is to revolutionize the home solutions industry by setting new benchmarks for quality, innovation, and customer satisfaction. We envision a future where every home is a masterpiece of comfort and functionality, achieved through our expert services and cutting-edge solutions. Our aim is to be recognized as the foremost provider of home care and enhancement services, offering unparalleled craftsmanship and attention to detail that transforms ordinary spaces into extraordinary living environments.
                </p>
                <p class="text-justify">
                    We are dedicated to creating lasting impacts by leveraging our extensive experience and embracing new technologies to address the evolving needs of homeowners. Our vision is to lead the industry in providing holistic solutions that cater to every aspect of home management, from design and renovation to maintenance and insurance. By staying at the forefront of innovation and consistently exceeding expectations, RSOR India aspires to shape the future of home solutions, ensuring that every home we touch becomes a testament to our commitment to excellence.
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