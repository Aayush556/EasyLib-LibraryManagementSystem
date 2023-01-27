 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>


 <body>
    <?php
      $emailmsg = "";
      $pasdmsg = "";
      $msg = "";

      $admin_email_msg = "";
      $admin_password_msg = "";


      if (!empty($_REQUEST['admin_email_msg'])) {
         $admin_email_msg = $_REQUEST['admin_email_msg'];
      }

      if (!empty($_REQUEST['admin_password_msg'])) {
         $admin_password_msg = $_REQUEST['admin_password_msg'];
      }

      if (!empty($_REQUEST['emailmsg'])) {
         $emailmsg = $_REQUEST['emailmsg'];
      }

      if (!empty($_REQUEST['pasdmsg'])) {
         $pasdmsg = $_REQUEST['pasdmsg'];
      }

      if (!empty($_REQUEST['msg'])) {
         $msg = $_REQUEST['msg'];
      }

      ?>

    <div class="container login-container">
       <div class="row">
          <div class="col-md-6 login-form-1">
             <h3>User Login</h3>
             <form action="login_server_page.php" method="get">>

                <div class="form-group">
                   <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                </div>

                <div class="form-group">
                   <input type="password" class="form-control" name="login_password" placeholder="Your Password *" value="" />
                </div>

                <div class="form-group">
                   <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                   <a href="#" class="btnForgetPwd">Forget Password?</a>
                </div>
             </form>
          </div>
          <div class="col-md-6 login-form-2">
             <div class="login-logo">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
             </div>
             <h3>Admin Login</h3>
             <form action="login_admin_server_page.php" method="get">>

                <div class="form-group">
                   <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                </div>
                <Label style="color:Black">*<?php echo $admin_email_msg ?></label>
                <div class="form-group">
                   <input type="password" class="form-control" name="login_password" placeholder="Your Password *" value="" />
                </div>
                <Label style="color:Black">*<?php echo $admin_password_msg ?></label>
                <div class="form-group">
                   <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                   <a href="#" class="btnForgetPwd">Forget Password?</a>
                </div>
             </form>
          </div>
       </div>
    </div>
    <script src="" async defer></script>
 </body>

 </html>