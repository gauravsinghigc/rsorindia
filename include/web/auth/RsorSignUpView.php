 <div class="rsor-auth">
     <h1>Welcome to <span class="rsor-text"><?php echo APP_NAME; ?></span></h1>
     <p class="text-secondary mb-2"><?php echo TAGLINE; ?></p>
     <a href="<?php echo DOMAIN; ?>" class="btn btn-sm btn-danger mb-3"><i class="fa fa-angle-left"></i> Back to Home</a>

     <h4 class="mt-1"><span class="rsor-text">Create</span> an account!</h4>
     <p class="text-secondary">create account with minimum required details.</p>

     <form>
         <div class="form-group">
             <label class="w-100">I want to</label>
         </div>
         <div class="form-group flex-s-b mt--1">
             <div class="flex-s-b w-100">
                 <label class="w-50" onclick="RegisterType('INDIVIDUAL')">
                     <input type="radio" checked name='AccountType' value='INDIVIDUAL'>
                     <span class='text-danger'>Publish Work for my home</span>
                 </label>
                 <label class="w-50" onclick="RegisterType('BUSINESS')">
                     <input type="radio" name='AccountType' value='BUSINESS'>
                     <span class='text-danger'>Get Work for my business</span>
                 </label>
             </div>
         </div>
         <div id='BusinessName' class='hidden'>
             <div class="form-group flex-s-b">
                 <label>Business Name</label>
                 <input type="text" name='' minlength="5" placeholder="Business Name" class="form-control w-100">
             </div>
         </div>
         <div class="form-group flex-s-b">
             <label>Full Name</label>
             <input type="text" name='' minlength="5" placeholder="Full Name" class="form-control w-100">
         </div>
         <div class="form-group flex-s-b">
             <label>Phone Number</label>
             <div class="flex-s-b w-100">
                 <select class="form-control w-pr-50" name='PhoneCode'>
                     <?php echo InputCountryCodes("91"); ?>
                 </select>
                 <input type="tel" minlength="10" name="PhoneNumber" class="form-control w-75 ml-1" placeholder="XXXXXXXXXX">
             </div>
         </div>
         <div class="form-group flex-s-b">
             <label>Email-Id</label>
             <input type="email" minlength="10" name='' placeholder="Username" class="form-control w-100">
         </div>
         <div class="form-group flex-s-b">
             <label>Password</label>
             <div class="flex-s-b w-100">
                 <input type="text" minlength="8" id='Password1' name='' placeholder="Enter Password" class="form-control w-100 mr-1">
                 <input type="password" minlength="8" id='Password2' name='' placeholder="Confirm Password" class="form-control w-100">
             </div>
             <span id='PassControl' onclick="PasswordControl()"><i class="fa fa-eye-slash"></i></span>
         </div>
         <div class="flex-s-b mt-4">
             <button type="submit" class="btn btn-danger btn-lg w-75 rounded-0"><i class="fa fa-lock text-white"></i> Create Account</button>
             <a href="<?php echo DOMAIN; ?>/register/" class="btn btn-md w-100 ml-2 mt-1"><span class="text-secondary">Already Have an account?</span> Login Now</a>
         </div>
     </form>

     <div class="w-100 d-block">
         <hr>
         <p class="text-center mb-0 text-secondary">Copyrighted &copy; <?php echo DATE("Y"); ?> | All rights are reserved by <span class="text-danger"><?php echo APP_NAME; ?></span></p>
     </div>
 </div>
 <script>
     function PasswordControl() {
         var x = document.getElementById("Password2");
         if (x.type === "password") {
             x.type = "text";
             document.getElementById("PassControl").innerHTML =
                 "<i class='fa fa-eye'></i>";
         } else {
             x.type = "password";
             document.getElementById("PassControl").innerHTML =
                 "<i class='fa fa-eye-slash'></i>";
         }
     }

     //check Register Type
     function RegisterType(BizType) {
         if (BizType === 'BUSINESS') {
             document.getElementById('BusinessName').style.display = 'block';
         } else {
             document.getElementById('BusinessName').style.display = 'none';
         }
     }
 </script>