<?php
$WebDir = "../";
require $WebDir . "acm/SysFileAutoLoader.php";
include $WebDir . "include/web/pageHeaderRequests/HomePageHeaderRequests.php";

$PageName = "Listing & Business Agreements of " . APP_NAME;
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

                <p>These Business Agreements ("Agreements") govern the relationship between RSOR India and its clients, partners, and service providers. By engaging with RSOR India’s services through <a href="http://rsor.in">rsor.in</a>, you agree to comply with the terms outlined below.</p>

                <h6 class="mt-3">1. Nature of Services</h6>
                <p>RSOR India offers a platform that connects users with professionals in the home utility services sector, including but not limited to construction, plumbing, electrical work, and painting services. RSOR India acts as an intermediary and does not directly provide these services.</p>

                <h6 class="mt-3">2. Client Obligations</h6>
                <p>As a client, you agree to:</p>
                <ul>
                    <li>Provide accurate and complete details when requesting services.</li>
                    <li>Pay for services rendered according to the agreed-upon pricing and terms.</li>
                    <li>Adhere to the payment schedule and terms provided by RSOR India.</li>
                    <li>Communicate any service issues or disputes promptly to RSOR India for resolution.</li>
                </ul>

                <h6 class="mt-3">3. Service Provider Responsibilities</h6>
                <p>As a service provider engaged through RSOR India, you agree to:</p>
                <ul>
                    <li>Deliver the agreed-upon services professionally and on time.</li>
                    <li>Comply with all applicable laws and regulations in the performance of services.</li>
                    <li>Maintain the confidentiality of client information.</li>
                    <li>Provide accurate pricing and service details to RSOR India.</li>
                </ul>

                <h6 class="mt-3">4. Payment Terms</h6>
                <p>Payment for services rendered is facilitated through the RSOR India platform. Clients agree to make full payments upon completion of services or based on agreed payment terms. Service providers will receive payment after service delivery, subject to any applicable fees or deductions.</p>

                <h6 class="mt-3">5. Dispute Resolution</h6>
                <p>Any disputes arising from service performance or payment terms will be handled through RSOR India’s internal resolution process. Clients and service providers are encouraged to communicate any issues promptly. RSOR India will act as a mediator where necessary.</p>

                <h6 class="mt-3">6. Termination</h6>
                <p>RSOR India reserves the right to terminate business agreements with clients or service providers for violations of these terms, including but not limited to non-payment, breach of contract, or illegal activities.</p>

                <h6 class="mt-3">7. Limitation of Liability</h6>
                <p>RSOR India is not liable for any indirect, incidental, or consequential damages arising from the use of our platform or services. Our role as an intermediary limits our liability in relation to the services performed by independent service providers.</p>

                <h6 class="mt-3">8. Confidentiality</h6>
                <p>All parties agree to keep confidential any sensitive business or personal information shared during the course of their engagement with RSOR India. This obligation extends beyond the termination of the agreement.</p>

                <h6 class="mt-3">9. Amendments to Agreements</h6>
                <p>RSOR India reserves the right to modify or update these agreements at any time. Any changes will be communicated through the website and are effective immediately upon posting.</p>

                <h6 class="mt-3">10. Contact Information</h6>
                <p>If you have any questions or concerns about these Business Agreements, please contact us at:</p>
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