<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Privacy Policy of " . APP_NAME;
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

                <p>RSOR India ("we", "our", or "us") operates the website <a href="http://rsor.in">rsor.in</a> and provides home utility services through our online portal. This privacy policy outlines how we collect, use, disclose, and protect personal information from users who engage with our services, including address, area location, city, state, country, pincode, and contact details such as phone numbers and email addresses.</p>

                <h6 class="mt-3">1. Information We Collect</h6>
                <p>We collect the following personal information when you use our services:</p>
                <ul>
                    <li><strong>Contact Details</strong>: Name, phone number (e.g., 9318310565), email address (e.g., rsorindia@gmail.com).</li>
                    <li><strong>Location Details</strong>: Address, area location, city, state, country, and postal code (pincode).</li>
                    <li><strong>Service-Specific Information</strong>: Details related to the services you request, such as plumbing, construction, electrical services, etc.</li>
                </ul>

                <h6 class="mt-3">2. How We Use Your Information</h6>
                <p>We use your information to:</p>
                <ul>
                    <li>Provide and manage the services you request.</li>
                    <li>Contact you regarding service updates, inquiries, or promotional offers.</li>
                    <li>Improve our services and customize the user experience.</li>
                    <li>Ensure the security of our portal and systems.</li>
                    <li>Comply with legal requirements or respond to lawful requests.</li>
                </ul>

                <h6 class="mt-3">3. Sharing Your Information</h6>
                <p>We do not sell, rent, or trade your personal information. We may share your information with trusted third parties, including:</p>
                <ul>
                    <li>Service providers (plumbers, electricians, etc.) to fulfill your service requests.</li>
                    <li>Payment processors for transaction purposes.</li>
                    <li>Legal authorities if required by law.</li>
                </ul>

                <h6 class="mt-3">4. Data Security</h6>
                <p>We take reasonable precautions to protect your personal information from unauthorized access, misuse, or disclosure. This includes using secure servers, encryption, and restricted access to sensitive data.</p>

                <h6 class="mt-3">5. Your Rights</h6>
                <p>You have the right to:</p>
                <ul>
                    <li>Access the personal information we hold about you.</li>
                    <li>Request corrections to inaccurate or incomplete data.</li>
                    <li>Request deletion of your data, subject to legal obligations.</li>
                    <li>Opt-out of promotional communications at any time.</li>
                </ul>

                <h6 class="mt-3">6. Cookies and Tracking Technologies</h6>
                <p>Our website may use cookies to improve user experience and gather statistical data. You can manage or block cookies through your browser settings.</p>

                <h6 class="mt-3">7. Changes to this Privacy Policy</h6>
                <p>We reserve the right to update this Privacy Policy from time to time. Changes will be posted on this page with the effective date.</p>

                <h6 class="mt-3">8. Contact Us</h6>
                <p>If you have any questions about this Privacy Policy or wish to exercise your privacy rights, please contact us at:</p>
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