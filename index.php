<?php
$WebDir = "";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?> @ <?php echo TAGLINE; ?> - Home</title>
    <?php include $WebDir . "assets/main/MainHeaderFiles.php"; ?>
</head>

<body>

    <?php
    //Homepage Sections and Files
    include $WebDir . "include/web/Loader.php";
    include $WebDir . "include/web/HomePageHeader.php";
    include $WebDir . "include/web/views/HomePageWhyChooseSection.php";
    //include $WebDir . "include/web/views/LatestPublishedWork.php";
    include $WebDir . "include/web/Highlights/Highlights1.php";
    //include $WebDir . "include/web/views/TopRegisterBusiness.php";
    include $WebDir . "include/web/Highlights/Highlights2.php";
    include $WebDir . "include/web/views/CustomersTopReviews.php";
    include $WebDir . "include/web/BookFreeConsultant.php";
    include $WebDir . "include/web/MainFooter.php";


    //Footer Files
    include $WebDir . "include/web/pageFooterRequests/HomePageFooterRequest.php";
    include $WebDir . "assets/main/MainFooterFiles.php";
    ?>

</body>

</html>