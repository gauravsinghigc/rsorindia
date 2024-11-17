<section class='container pt-4 pb-5'>
    <div class="row">
        <div class='col-md-12'>
            <h3 class='mt-3 mb-0 pb-0'>Latest Published <span class="rsor-text">Home Utility Work</span></h3>
            <p class="mt-0">Latest work published on the portal, if you are handyman then you can bid for suitable works</p>
            <hr>
        </div>
    </div>

    <div class="row">
        <?php
        $Start = 0;
        while ($Start < 8) {
            $Start++; ?>
            <div class="col-md-3 col-sm-4 col-lg-3 col-12 col-xs-12 rsor-card">
                <a href="">
                    <img src="storage/main/home/published-work-1.jpg">
                    <h6><?php echo LimitText("Floor upgrade 2nd floor of 460sqft area", 0, 30); ?></h6>
                    <p class='time'><i class="fa fa-clock-o"></i> 4 Sept, 2024 2:00 PM</p>
                    <p class='text-justify'><?php echo LimitText("need to upgrade one floor of same structure having area around 460sqft, ground floor, 1st floor already builded.", 0, 68); ?></p>
                    <p class="points">
                        <span>
                            <span class='prop'>Budget</span>
                            <span class='desc'>Rs.5Lakh - Rs.7Lakh</span>
                        </span>
                        <span>
                            <span class='prop'>Initiate</span>
                            <span class='desc'>as soon as possible</span>
                        </span>
                    </p>
                    <p class="points">
                        <span>
                            <span class='prop'>Area</span>
                            <span class='desc'>460sqft</span>
                        </span>
                        <span>
                            <span class='prop'>Highlights</span>
                            <span class='desc'>2 BHK</span>
                        </span>
                    </p>
                    <p class="tags mb-3">
                        <span>Construction</span>
                        <span>Painting</span>
                        <span>Electrician</span>
                        <span>Plumbing</span>
                    </p>
                    <span class='btn btn-md btn-block btn-danger'><i class='fa fa-eye'></i> View Details</span>
                </a>
            </div>
        <?php } ?>
    </div>

    <div class="row">
        <div class='col-md-12 text-center'>
            <a href="" class='btn btn-md btn-outline-danger'>Publish Work Free <i class='fa fa-angle-right'></i></a>
            <a href="" class='btn btn-md btn-danger'>View More <i class='fa fa-angle-right'></i></a>
        </div>
    </div>
</section>