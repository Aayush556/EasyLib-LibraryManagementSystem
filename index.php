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
 <!-- <style>
    body {
       background-image: url('images/library.jpg')
    }


    .login-form-3 .btnSubmit {
       font-weight: 600;
       color: #0062cc;
       background-color: #fff;
    }

    .login-form-3 h3 {
       text-align: center;
       color: #fff;
    }

    .login-form-1 h3 {
       text-align: center;
       color: #fff;
    }

    .login-form-3 {
       padding: 5%;
       box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
 </style> -->

 <body>

    <div class="container login-container">
       <div class="row">
          <div class="col-md-6 login-form-1">
             <h3>Login Form 1</h3>
             <form action="login_server_page.php" method="get">>

                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                   <input type="password" class="form-control" placeholder="Your Password *" value="" />
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
             <h3>Login Form 2</h3>
             <form action="login_server_page.php" method="get">>

                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                   <input type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
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
 </body>

 </html>