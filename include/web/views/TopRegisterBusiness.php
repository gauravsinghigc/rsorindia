 <section class='container pt-4 pb-5'>
     <div class="row">
         <div class='col-md-12'>
             <h3 class='mt-3 mb-0 pb-0'>Top Home Utility <span class="rsor-text">Service Providers & Workers</span> in your area.</h3>
             <p class="mt-0">Top home utility worker and service provider in your area.</p>
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
                     <img src="storage/main/vendor/logo/logo.jpg" class='rsor-vendor-card-logo'>
                     <h6 class="mb-0"><?php echo LimitText("Supertech Pvt Ltd " . $Start, 0, 30); ?></h6>
                     <h6 class="rsor-rating mt-0 text-secondary">
                         <i class="fa fa-star text-warning"></i>
                         <i class="fa fa-star text-warning"></i>
                         <i class="fa fa-star text-warning"></i>
                         <i class="fa fa-star text-warning"></i>
                         <i class="fa fa-star text-warning"></i>
                         <span>(<?php echo rand(1, 999); ?>) reviews</span>
                     </h6>
                     <p class='text-justify'><?php echo LimitText("construction specialist, interier designers, premium home painting solution", 0, 68); ?></p>
                     <p class="tags mb-2">
                         <span>Construction</span>
                         <span>Painting</span>
                         <span>Electrician</span>
                         <span>Plumbing</span>
                     </p>
                     <p class="points">
                         <span>
                             <span class='prop'>Price Range</span>
                             <span class='desc'>Rs.50k - Rs.10Lakh</span>
                         </span>
                         <span>
                             <span class='prop'>Inspection Charge</span>
                             <span class='desc'>Rs.<?php echo rand(99, 999); ?></span>
                         </span>
                     </p>
                     <p class="points">
                         <span>
                             <span class='prop'>Projects</span>
                             <span class='desc'><?php echo rand(1, 9999); ?></span>
                         </span>
                         <span>
                             <span class='prop'>Initiate</span>
                             <span class='desc'>within 24hr</span>
                         </span>
                     </p>

                     <span class='btn btn-md btn-block btn-danger mt-3'><i class='fa fa-info-circle'></i> Get Contact Details</span>
                 </a>
             </div>
         <?php } ?>
     </div>

     <div class="row">
         <div class='col-md-12 text-center'>
             <a href="" class='btn btn-md btn-outline-danger'>Register your business <i class='fa fa-angle-right'></i></a>
             <a href="" class='btn btn-md btn-danger'>View More <i class='fa fa-angle-right'></i></a>
         </div>
     </div>
 </section>