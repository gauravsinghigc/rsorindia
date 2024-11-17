<ul class="rsor-page-menu">
    <?php
    $ActiveNavLink = ReturnSessionalValues("rsorabout", "ACTIVE_RSOR_ABOUT_LINK", "link1");
    foreach (ABOUT_RSOR_MENUS as $Id => $About) {
        if ($Id == $ActiveNavLink) {
            $RsorAboutActive = "active";
        } else {
            $RsorAboutActive = "";
        } ?>
        <li>
            <a href="<?php echo $About['dir']; ?>?rsorabout=<?php echo $Id; ?>" class="<?php echo $RsorAboutActive; ?>">
                <i class="fa <?php echo $About['icon']; ?>"></i>
                <span><?php echo $About['name']; ?></span>
            </a>
        </li>
    <?php } ?>
    <li>
        <hr>
    </li>
    <li><a href="<?php echo DOMAIN; ?>"><i class="fa fa-arrow-left"></i> Back to Home</a></li>
</ul>
<div class="row">
    <div class="col-md-12 pt-3 mt-1">
        <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="img-fluid w-pr-20">
        <h4 class="mb-0">Book Free Consultancy</h4>
        <hr>
        <form>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Enter Message"></textarea>
            </div>
            <button type="submit" class="btn btn-md btn-danger btn-block">Submit</button>
        </form>
    </div>
</div>