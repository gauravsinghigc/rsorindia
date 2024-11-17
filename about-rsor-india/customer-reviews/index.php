<?php
$WebDir = "../../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Customer Reviews for " . APP_NAME;
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
                <h5><span class="rsor-text"><?php echo APP_NAME; ?></span>'s customers reviews & feedback</h5>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-start">
                            <h1 class="display-1 bold font-weight-bold">4.5</h1>
                            <div class="rsor-ratings">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <p class="pt-4 pl-3">
                                <span class="text-muted">Based on</span><br>
                                <span class="h5"><?php echo Price(101); ?> Reviews</span>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Review Start here and its dynamically visible from different sources like google, facebook, portal and app -->
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h4>Top 50 reviews for <span class="rsor-text"><?php echo APP_NAME; ?></span></h4>
                    </div>
                    <div class="col-md-4 col-lg-6 col-sm-6 col-12">
                        <div class="reviews">
                            <div class="name">Rahul Sharma</div>
                            <span class="divider"></span>
                            <img src="<?php echo STORAGE_URL; ?>/icons/user-review-icon.png" class="icon">
                            <div class="rating">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <span class="review-date">5 June, 2024</span>
                            <p class="feedback">
                                I had an exceptional experience with RSOR India for my 2nd-floor construction upgrade on a 50-yard plot. Gaurav’s technical team handled every detail with precision, and Saurav ensured smooth communication throughout. The project was completed on time with top-quality materials and a flawless finish—I highly recommend RSOR for any construction work!
                            </p>
                            <ul class="tags">
                                <li>Construction</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-6 col-sm-6 col-12">
                        <div class="reviews">
                            <div class="name">Rajni Singh</div>
                            <span class="divider"></span>
                            <img src="<?php echo STORAGE_URL; ?>/icons/user-review-icon.png" class="icon">
                            <div class="rating">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <span class="review-date">17 June, 2024</span>
                            <p class="feedback">
                                RSOR India did an exceptional job painting my 2 BHK home! The team’s attention to detail and expert color selection brought a fresh, vibrant look to each room. The project was completed on time with a beautiful finish—highly recommended!
                            </p>
                            <ul class="tags">
                                <li>Painting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-6 col-sm-6 col-12">
                        <div class="reviews">
                            <div class="name">Renu Verma</div>
                            <span class="divider"></span>
                            <img src="<?php echo STORAGE_URL; ?>/icons/user-review-icon.png" class="icon">
                            <div class="rating">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <span class="review-date">2 July, 2024</span>
                            <p class="feedback">
                                RSOR India did an exceptional job painting my 3 BHK home! The team’s attention to detail and expert color selection transformed each room with a vibrant new look. The project was completed on time with a flawless finish—highly recommended!
                            </p>
                            <ul class="tags">
                                <li>Painting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-6 col-sm-6 col-12">
                        <div class="reviews">
                            <div class="name">Aditya Kumar</div>
                            <span class="divider"></span>
                            <img src="<?php echo STORAGE_URL; ?>/icons/user-review-icon.png" class="icon">
                            <div class="rating">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <span class="review-date">27 July, 2024</span>
                            <p class="feedback">
                                RSOR India provided outstanding seasonal maintenance for my 3 BHK, 2-floor home! The team’s thorough attention to every detail ensured my home was well-prepared for the season. The work was timely and efficient—I highly recommend their services!
                            </p>
                            <ul class="tags">
                                <li>Half Construction</li>
                                <li>Painting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-6 col-sm-6 col-12">
                        <div class="reviews">
                            <div class="name">Santosh Singh</div>
                            <span class="divider"></span>
                            <img src="<?php echo STORAGE_URL; ?>/icons/user-review-icon.png" class="icon">
                            <div class="rating">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <span class="review-date">17 August, 2024</span>
                            <p class="feedback">
                                RSOR India did an excellent job fixing the plumbing and addressing the leakage in my washroom. The team was efficient and thorough, resolving the issue quickly and ensuring a durable solution. Highly satisfied with their professional service!
                            </p>
                            <ul class="tags">
                                <li>Plumber</li>
                                <li>Tile Fitting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-6 col-sm-6 col-12">
                        <div class="reviews">
                            <div class="name">Ajit Kumar</div>
                            <span class="divider"></span>
                            <img src="<?php echo STORAGE_URL; ?>/icons/user-review-icon.png" class="icon">
                            <div class="rating">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            <span class="review-date">12 September, 2024</span>
                            <p class="feedback">
                                RSOR India managed my 2nd-floor upgrade seamlessly, covering flooring, painting, electrical, and plumbing work. The team’s attention to detail and professionalism ensured each aspect was executed to perfection. I’m thrilled with the results and highly recommend their comprehensive services!</p>
                            <ul class="tags">
                                <li>Plumber</li>
                                <li>Tile Fitting</li>
                                <li>Constructions</li>
                                <li>Electrician</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Review End here -->
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