<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Terms & Conditions of " . APP_NAME;
$PageDescription = APP_NAME . "'s privacy policy, terms and condition, listing agreenments, refund and cancellation policy.";
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

    <section class="container pt-3 pb-5">
        <div class="row">
            <div class="col-md-12 rsor-privacy">
                <h5><?php echo $PageName; ?></h5>
                <hr>

                <p><strong>Effective Date:</strong> [Insert Date]</p>

                <p>Welcome to RSOR India! By using our services on <a href="http://rsor.in">rsor.in</a> (the "Website"), you agree to comply with and be bound by the following terms and conditions. Please read these carefully before using our website and services.</p>

                <h6 class="mt-3">1. Acceptance of Terms</h6>
                <p>By accessing or using our website and services, you agree to be legally bound by these terms. If you do not agree with any part of these terms, you must discontinue using the services immediately.</p>

                <h6 class="mt-3">2. Services Provided</h6>
                <p>RSOR India provides various home utility services such as construction, plumbing, electrical work, painting, and more. All services offered through our portal are subject to availability and may vary depending on location and service providers.</p>

                <h6 class="mt-3">3. User Responsibilities</h6>
                <p>As a user, you agree to:</p>
                <ul>
                    <li>Provide accurate, up-to-date information when using our services.</li>
                    <li>Comply with all applicable laws and regulations when using our services.</li>
                    <li>Not use the services for illegal or unauthorized purposes.</li>
                    <li>Maintain the confidentiality of your account details and be responsible for any activity under your account.</li>
                </ul>

                <h6 class="mt-3">4. Booking and Payments</h6>
                <p>When booking services through RSOR India, you agree to pay the applicable fees for the services requested. Payment must be made through the methods provided on our website. All payments are subject to the terms and conditions of the payment processors used by us.</p>

                <h6 class="mt-3">5. Cancellations and Refunds</h6>
                <p>Cancellation and refund policies may vary depending on the service booked. Users can view the specific cancellation and refund terms for each service during the booking process. RSOR India reserves the right to issue or deny refunds based on the service provider's policies.</p>

                <h6 class="mt-3">6. Limitation of Liability</h6>
                <p>RSOR India is not responsible for any direct, indirect, incidental, or consequential damages arising from your use of our services. This includes any issues with service providers or service performance. We strive to connect you with reliable professionals but do not guarantee the outcome of the services provided.</p>

                <h6 class="mt-3">7. Intellectual Property</h6>
                <p>All content on this website, including logos, text, graphics, and software, is the property of RSOR India or its licensors and is protected by copyright and other intellectual property laws. You may not use any of this content without written permission from RSOR India.</p>

                <h6 class="mt-3">8. Changes to Terms</h6>
                <p>We reserve the right to modify these Terms and Conditions at any time without prior notice. Changes will be posted on this page, and continued use of our services after such changes constitutes acceptance of the revised terms.</p>

                <h6 class="mt-3">9. Governing Law</h6>
                <p>These terms are governed by and construed in accordance with the laws of [Insert Jurisdiction], without regard to conflict of law principles. Any disputes related to these terms will be resolved in the courts of [Insert Jurisdiction].</p>

                <h6 class="mt-3">10. Contact Information</h6>
                <p>If you have any questions or concerns regarding these Terms and Conditions, please contact us at:</p>
                <ul>
                    <li><strong>Phone</strong>: 9318310565</li>
                    <li><strong>Email</strong>: <a href="mailto:rsorindia@gmail.com">rsorindia@gmail.com</a></li>
                    <li><strong>Website</strong>: <a href="http://rsor.in">rsor.in</a></li>
                </ul>


            </div>
        </div>
    </section>

    <?php
    include $WebDir . "include/web/MainFooter.php";
    include $WebDir . "include/web/pageFooterRequests/HomePageFooterRequest.php";
    include $WebDir . "assets/main/MainFooterFiles.php";
    ?>

</body>

</html>