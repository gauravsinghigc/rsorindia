<div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12 col-12">
        <a href="<?php echo DOMAIN; ?>" class="rsor-brand">
            <img src="<?php echo WEBSITE_LOGO_SQ; ?>">
            <div class="rsor-name">
                <h1><?php echo APP_NAME; ?></h1>
                <p class='typing'><?php echo TAGLINE; ?></p>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-12 text-center">
        <div class="rsor-initial-handler">
            <div class='rsor-locations'>
                <a onclick="getLocation()">
                    <span class='location-marker'>
                        <i class='fa fa-map-marker'></i>
                    </span>
                    <span class='location-name' id='rsor_location'>
                        <?php echo $Address; ?>
                    </span>
                </a>
            </div>
            <div class='rsor-accounts hidden'>
                <?php
                if (RSOR_LOGIN_USER_ID == null) { ?>
                    <a href="<?php echo DOMAIN; ?>/register">
                        <span class='account-icon'>
                            <i class='fa fa-sign-in'></i>
                        </span>
                        <span class='account-name'>
                            Login/Signup
                        </span>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo DOMAIN; ?>/account">
                        <span class='account-icon'>
                            <i class='fa fa-user'></i>
                        </span>
                        <span class='account-name'>
                            My Account <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>