<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Award & Archievements of " . APP_NAME;
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
                <h5><span class="rsor-text"><?php echo APP_NAME; ?></span>'s award and archievements</h5>
                <hr>

                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 text-center rsor-awards">
                        <div>
                            <img src="<?php echo STORAGE_URL; ?>/certificates/award-certificate-template-5L.gif">
                            <h2>Heading</h2>
                            <p class="text-secondary"><i class="fa fa-calendar"></i> 23 Sept, 2024</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 text-center rsor-awards">
                        <div>
                            <img src="<?php echo STORAGE_URL; ?>/certificates/62bdaf081043def6bc270157.png">
                            <h2>Heading</h2>
                            <p class="text-secondary"><i class="fa fa-calendar"></i> 23 Sept, 2024</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 text-center rsor-awards">
                        <div>
                            <img src="<?php echo STORAGE_URL; ?>/certificates/1600w-_A_NvKtzEzc.webp">
                            <h2>Heading</h2>
                            <p class="text-secondary"><i class="fa fa-calendar"></i> 23 Sept, 2024</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 text-center rsor-awards">
                        <div>
                            <img src="<?php echo STORAGE_URL; ?>/certificates/award-certificate-template-5L.gif">
                            <h2>Heading</h2>
                            <p class="text-secondary"><i class="fa fa-calendar"></i> 23 Sept, 2024</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 text-center rsor-awards">
                        <div>
                            <img src="<?php echo STORAGE_URL; ?>/certificates/award-certificate-template-5L.gif">
                            <h2>Heading</h2>
                            <p class="text-secondary"><i class="fa fa-calendar"></i> 23 Sept, 2024</p>
                        </div>
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