<section class='container-fluid rsor-bg' loading='lazy' style="background-image:url(<?php echo STORAGE_URL; ?>/default/bg/rsor-india-main-web-bg-image.jpg);">
    <?php include __DIR__ . "/sections/LocationAndUserLogins.php"; ?>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-12">
            <div class="p-4">
                <h3><?php echo $PageName; ?></h3>
                <p><?php echo $PageDescription; ?></p>
                <ul class="rsor-mini-menus">
                    <li><a href="<?php echo DOMAIN; ?>">Home</a></li>
                    <li><a href="<?php echo RUNNING_URL; ?>" class="active"><?php echo $PageName; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>