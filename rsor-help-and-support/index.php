<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Help & Support Panel of " . APP_NAME;
$PageDescription = "Where you submit your feedback, queries, suggestion, complaints, scam details to " . APP_NAME . " panel";
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
            <div class="col-md-12">
                <h5><?php echo $PageName; ?></h5>
                <hr>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="shadow-sm p-3">
                    <h2><?php echo rand(1, 999); ?></h2>
                    <p class="text-danger"><i class="fa fa-circle Rblink"></i> Today Tickets</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="shadow-sm p-3">
                    <h2><?php echo rand(111, 9999); ?></h2>
                    <p class="text-secondary">Total Tickets</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="shadow-sm p-3">
                    <h2><?php echo rand(111, 9999); ?></h2>
                    <p class="text-secondary">Open Tickets</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="shadow-sm p-3">
                    <h2><?php echo rand(111, 9999); ?></h2>
                    <p class="text-secondary">Closed Tickets</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h4><i class="fa fa-search rsor-text"></i> Search similar tickets</h4>
                        <form class="w-100 d-block mx-auto mt-2">
                            <input type="search" class="form-control form-control-lg" placeholder="Search similar articles...." name="SearchTickets" onchange="form.submit()">
                        </form>
                        <hr>

                        <h5>Today's Open Tickets</h5>
                    </div>
                    <?php
                    $Start = 0;
                    while ($Start < 8) {
                        $Start++; ?>
                        <div class="col-md-12">
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

                    <?php echo PaginationFooter(10, RUNNING_URL); ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12">
                    <h3 class="text-justify">Generate Support Ticket</h3>
                    <hr>
                    <p class="mt-1 text-justify">for any feedback, suggestion, query, complaint, scam, fraud or any thing you want to share with us or want to aware us, simply submit it here.</p>
                    <hr>
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
                            <select name='SupportType' class="form-control">
                                <?php echo InputOptionsWithKey(SUPPORT_TYPE, ""); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="Message" class="form-control text-justify" rows="7" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Support File/Attachement</label>
                            <input type="FILE" name='SupportedMediaFile' class="form-control">
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