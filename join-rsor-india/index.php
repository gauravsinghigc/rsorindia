<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Join " . APP_NAME;
$PageDescription = "Join " . APP_NAME . " and work with industry experts";
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
            <div class="col-md-12 text-center mb-4">
                <h4>Search current opening/vacancies</h4>
                <form class="w-75 d-block mx-auto mt-2">
                    <input type="search" class="form-control form-control-lg" placeholder="Search any current vacancy..." name="SearchOpening" onchange="form.submit()">
                </form>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="w-pr-20">
                        <h4>Current Opening at <span class="rsor-text"><?php echo APP_NAME; ?></span></h4>
                        <hr>
                    </div>
                    <?php
                    $Start = 0;
                    while ($Start < 8) {
                        $Start++; ?>
                        <div class="col-md-6 mb-4">
                            <div class="shadow-sm p-3 rounded">
                                <a href="">
                                    <h6>Job Title</h6>
                                    <p class="text-secondary font-italic mb-0">24 Sept, 2024</p>
                                    <p class="text-justify mb-2">job descripion and much more details</p>
                                    <p class="flex-s-b">
                                        <span>
                                            <span class="text-secondary small">Qualification</span><br>
                                            <span class="text-black bold">Graduate</span>
                                        </span>
                                        <span>
                                            <span class="text-secondary small">Experience</span><br>
                                            <span class="text-black bold">Fresher</span>
                                        </span>
                                    </p>
                                    <span class="btn btn-md btn-block btn-danger">Apply Now <i class="fa fa-angle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <h3 class="display-5 text-justify mb-3">Not seen any required vacancies as per your qualification?</h3>
                    <h5 class="text-justify">Submit your CV/Resume with <span class="rsor-text"><?php echo APP_NAME; ?></span></h5>
                    <p class="mt-1 text-justify">We will contact you as soon as relevant opening is there as per your qualifications.</p>
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
                            <input type="email" name="EmailId" class="form-control" placeholder="Contact Email-id">
                        </div>
                        <div class="form-group">
                            <input type="text" name="LatestQualification" class="form-control" placeholder="Latest Qualification">
                        </div>
                        <div class="form-group">
                            <input type="text" name="WorkExperience" class="form-control" placeholder="Total Work Experience in years">
                        </div>
                        <div class="form-group">
                            <input type="text" name="WorkIndustry" class="form-control" placeholder="Current Job Role/Designation/Fresher">
                        </div>
                        <div class="form-group">
                            <input type="number" name="ExpectedSalary" class="form-control" placeholder="Expected Monthly Payout">
                        </div>
                        <div class="form-group">
                            <textarea name="Message" class="form-control text-justify" rows="7" placeholder="Brief your life journey from primary education to current qualification or experience in 500 words."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload latest & updated CV/Resume</label>
                            <input type="FILE" name='UploadedResume' class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-block btn-danger"><i class="fa fa-send"></i> Send Details to HR</button>
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