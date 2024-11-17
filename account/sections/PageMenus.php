<ul class="rsor-page-menu rsor-drag-menus">
    <?php
    $cmenu = ReturnSessionalValues("cmenu", "SELECTED_CUSTOMER_NAV_LINK", "");
    foreach (CUSTOMER_MENUS as $Id => $Get) {
        if ($cmenu == $Id) {
            $CNavLinkActive = "active";
        } else {
            $CNavLinkActive = "";
        } ?>
        <li>
            <a href="<?php echo $Get['dir']; ?>?cmenu=<?php echo $Id; ?>" class="<?php echo $CNavLinkActive; ?>">
                <i class="fa <?php echo $Get['icon']; ?>"></i>
                <span><?php echo $Get['name']; ?></span>
            </a>
        </li>
    <?php } ?>
</ul>