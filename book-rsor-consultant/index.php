<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Book Free Consultant for " . APP_NAME . "";
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

        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h4 class="mb-0">Select Type of Service Or Requirement</h4>
                        <hr class="mt-2 mb-2">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12">
                    <h4 class="text-justify mb-0">More Details</h4>
                    <hr class="mt-2 mb-2">
                    <p class="text-justify">With <?php echo APP_NAME; ?>, Home solutions are very easy and now more confusion.</p>
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
                            <button type="submit" class="btn btn-md btn-block btn-danger"><i class="fa fa-send"></i> Send Details to Support Panel</button>
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