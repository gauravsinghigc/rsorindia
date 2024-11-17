<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "About Founder's and Team of " . APP_NAME;
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
                <h5>About <span class="rsor-text"><?php echo APP_NAME; ?></span>'s Founders</h5>
                <hr>

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-12 pt-5">
                        <img src="<?php echo STORAGE_URL_D; ?>/tool-img/user.png" class="img-fluid">
                    </div>
                    <div class="col-md-9 col-sm-9 col-12">
                        <h3 class="mb-0 pb-0"><span class='rsor-text'>Deepa Singh</span></h3>
                        <p class="text-secondary mt-0 font-italic mb-1 h6">Founder, Process Head</p>
                        <p class="text-justify">
                            Deepa Singh, as the Founder and Process Head of RSOR India, is responsible for designing and optimizing operational processes to ensure efficiency and consistency across all services. She oversees process implementation, quality control, and continuous improvement initiatives, streamlining workflows to enhance overall productivity. Her role is essential in maintaining high standards of service delivery and ensuring that projects are executed smoothly and effectively.</p>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-12 text-right">
                        <h3 class="mb-0 pb-0 text-right"><span class='rsor-text'>Saurav Singh</span></h3>
                        <p class="text-secondary mt-0 font-italic mb-1 h6">Founder, Sales & Marketing Head</p>
                        <p class="text-justify">
                            Saurav Singh, as the Founder and Sales & Marketing Head of RSOR India, drives the company’s growth through strategic marketing and sales initiatives. He develops and implements effective marketing campaigns, manages client relationships, and oversees market research to identify new opportunities. His role is crucial in enhancing brand presence and expanding RSOR's customer base, ensuring the company's services reach a broader audience.</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-12 pt-5">
                        <img src="<?php echo STORAGE_URL_D; ?>/tool-img/user.png" class="img-fluid">
                    </div>
                    <div class="col-md-12">
                        <hr>
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