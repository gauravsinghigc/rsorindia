<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Login & Signup at " . APP_NAME;
$PageDescription = "Create or login into " . APP_NAME . "'s accounts";
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
    <section class="container-fluid rsor-bg p-5" style="background-image:url('<?php echo STORAGE_URL_D; ?>/bg/rsor-india-auth-bg.jpg');">
        <div class="row pl-5 pr-5">
            <div class="col-md-5">
                <img src="<?php echo STORAGE_URL; ?>/auth/rsor-india-auth-image.jpg" class="img-fluid rsor-auth-bg">
                <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="rsor-auth-logo">
            </div>
            <div class="col-md-7">
                <?php if (!isset($_GET)) {
                    include $WebDir . "include/web/auth/RsorLoginView.php";
                } else {
                    if (isset($_GET['signup'])) {
                        if ($_GET['signup'] == true) {
                            include $WebDir . "include/web/auth/RsorSignUpView.php";
                        } else {
                            include $WebDir . "include/web/auth/RsorLoginView.php";
                        }
                    } elseif (isset($_GET['verify'])) {
                        if ($_GET['verify'] == true) {
                            include $WebDir . "include/web/auth/RsorVerifyAccountView.php";
                        } else {
                            include $WebDir . "include/web/auth/RsorLoginView.php";
                        }
                    } else {
                        include $WebDir . "include/web/auth/RsorLoginView.php";
                    }
                } ?>
            </div>
        </div>
    </section>

    <?php
    include $WebDir . "include/web/pageFooterRequests/HomePageFooterRequest.php";
    include $WebDir . "assets/main/MainFooterFiles.php";
    ?>
</body>

</html>