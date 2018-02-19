<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stephanos Kung Fu Club</title>
    <link rel="icon" type="image/png" href="images/icon.png">

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            
              <form method="POST" action="conn_login.php">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" onclick="document.review.submit()">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="separator">
                
                <div>
                  <h1><img src="images/skf.png" height="42px" width="42px"/> Stephanos Kung Fu Club</h1>
                  <p>©2017 All Rights Reserved. Developed By Vinit Milishia</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
