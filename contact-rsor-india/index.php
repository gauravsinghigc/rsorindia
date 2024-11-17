<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Contact & Reach at " . APP_NAME;
$PageDescription = "Freely contact or reach at us via different optionals available below;";
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

        <div class="row mb-4">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="shadow-sm p-3 text-center d-block full-height">
                    <h1><i class="fa fa-map-marker display-1 text-danger"></i></h1>
                    <h6>Registered Address:</h6>
                    <p><?php echo SECURE(PRIMARY_ADDRESS, "D"); ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="shadow-sm p-3 text-center d-block full-height">
                    <h1><i class="fa fa-phone display-1 text-danger"></i></h1>
                    <h6>Contact Number:</h6>
                    <p><?php echo PRIMARY_PHONE; ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="shadow-sm p-3 text-center d-block full-height">
                    <h1><i class="fa fa-envelope display-1 text-danger"></i></h1>
                    <h6>Email-Id:</h6>
                    <p>
                        <?php echo SUPPORT_MAIL; ?><br>
                        <?php echo PRIMARY_EMAIL; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224727.77571831882!2d77.04616328671877!3d28.347616100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb7bc6e052ed%3A0xe5e8508a6f57c413!2sgauravsinghigc!5e0!3m2!1sen!2sin!4v1727330610480!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12">
                    <h3 class="text-justify">Contact Us</h3>
                    <hr>
                    <p class="mt-1 text-justify">feel free to reach at us</p>
                    <form>
                        <div class="form-group">
                            <input type="text" name="FullName" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <div class="flex-s-b">
                                <select class="form-control w-pr-50" name='PhoneCode'>
                                    <?php echo InputCountryCodes("91"); ?>
                                </select>
                                <input type="tel" name="PhoneNumber" class="form-control w-75 ml-1" placeholder="XXXXXXXXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="EmailId" class="form-control" placeholder="Reg./Non-Reg. Email-id">
                        </div>
                        <div class="form-group">
                            <textarea name="Message" class="form-control text-justify" rows="7" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-block btn-danger"><i class="fa fa-send"></i> Send Details to Admin</button>
                        </div>
                    </form>
                </div>
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