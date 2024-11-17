 <div class="rsor-auth">
     <h1>Welcome to <span class="rsor-text"><?php echo APP_NAME; ?></span></h1>
     <p class="text-secondary mb-2"><?php echo TAGLINE; ?></p>
     <a href="<?php echo DOMAIN; ?>" class="btn btn-sm btn-danger mb-3"><i class="fa fa-angle-left"></i> Back to Home</a>

     <h4 class="mt-5"><span class="rsor-text">Login</span> into account!</h4>
     <p class="text-secondary mb-3">login into your account through your registered email-id and password!</p>

     <form action="<?php echo DOMAIN; ?>/account" method="POST">
         <div class="form-group flex-s-b">
             <label>Email-Id</label>
             <input type="email" id='LoginUserName' name='' placeholder="Username" class="form-control w-100">
         </div>
         <div class="form-group flex-s-b">
             <label>Password</label>
             <input type="password" id='EnteredPassword' name='' placeholder="*********" class="form-control w-100">
             <span id='PassControl' onclick="PasswordControl()"><i class="fa fa-eye-slash"></i></span>
         </div>
         <div class="form-group text-right">
             <a href="<?php echo DOMAIN; ?>/register/?forget=true" class="btn btn-md text-danger">Forget Password?</a>
         </div>
         <div class="flex-s-b">
             <button type="submit" class="btn btn-danger btn-lg w-75 rounded-0"><i class="fa fa-lock text-white"></i> Secure Login</button>
             <a href="<?php echo DOMAIN; ?>/register/?signup=true" class="btn btn-md w-100 ml-2 mt-1"><span class="text-secondary">Don't Have Account?</span> Create Account</a>
         </div>
     </form>

     <div class="position-bottom">
         <hr>
         <p class="text-center mb-0 text-secondary">Copyrighted &copy; <?php echo DATE("Y"); ?> | All rights are reserved by <span class="text-danger"><?php echo APP_NAME; ?></span></p>
     </div>
 </div>
 <script>
     function PasswordControl() {
         var x = document.getElementById("EnteredPassword");
         if (x.type === "password") {
             x.type = "text";
             document.getElementById("PassControl").innerHTML =
                 "<i class='fa fa-eye'></i>";
             document.getElementById("LoginUserName").type = "password";
         } else {
             x.type = "password";
             document.getElementById("PassControl").innerHTML =
                 "<i class='fa fa-eye-slash'></i>";
             document.getElementById("LoginUserName").type = "email";
         }
     }
 </script>