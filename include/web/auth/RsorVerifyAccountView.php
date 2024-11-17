 <div class="rsor-auth">
     <h1>Welcome to <span class="rsor-text"><?php echo APP_NAME; ?></span></h1>
     <p class="text-secondary mb-2"><?php echo TAGLINE; ?></p>

     <h4 class="mt-5"><span class="rsor-text">Verify</span> Account!</h4>
     <p class="text-secondary mb-3">Verification code sent on your registered email-id.</p>

     <form>
         <div class="form-group">
             <p><i class="fa fa-check text-success"></i> One time account verification code is sent on your registered email-id please check in your inbox.</p>
         </div>
         <div class="form-group mb-5">
             <label class="w-100">Enter Code <span class="text-secondary">(sent at : <?php echo PRIMARY_EMAIL; ?>)</span></label>
             <input type="text" name='' style="font-size: 2.5rem !important;" placeholder="* * * * * *" class="form-control form-control-lg verify-code">
         </div>
         <div class="flex-s-b mt-4">
             <button type="submit" class="btn btn-danger btn-lg w-75 rounded-0"><i class="fa fa-lock text-white"></i> Verify Account</button>
             <a href="<?php echo DOMAIN; ?>/register/?resend=true" class="btn btn-md w-100 ml-2 mt-1"><span class="text-secondary">Don't get Code ?</span> Send Again</a>
         </div>
     </form>

     <div class="position-bottom">
         <hr>
         <p class="text-center mb-0 text-secondary">Copyrighted &copy; <?php echo DATE("Y"); ?> | All rights are reserved by <span class="text-danger"><?php echo APP_NAME; ?></span></p>
     </div>
 </div>