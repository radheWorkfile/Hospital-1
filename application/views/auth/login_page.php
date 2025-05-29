        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Hospital Management Software </title>
        <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
        <meta property="og:title" content="Admin Templates - Dashboard Templates">
        <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
        <meta property="og:type" content="Website">
        <link rel="shortcut icon" href="<?php echo base_url();?>soft_assets/images/favicon.svg">
        <link rel="stylesheet" href="<?php echo base_url();?>soft_assets/fonts/remix/remixicon.css">
        <link rel="stylesheet" href="<?php echo base_url();?>soft_assets/css/main.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
        <style>
        body {
        font-family: 'Philosopher', sans-serif;
        }
        .shadow-text {
        color: #fff;
        text-shadow: 2px 2px 4px rgba(10, 10, 10, 4.6);
        font-family: 'Philosopher', sans-serif;
        }
        </style>
        </head>
        <body class="login-bg">
        <div class="container">

                <div class="auth-wrapper">

        <form class="login-part" action="<?php echo base_url('login/auth');?>" method="post">


        <?php
        if ($_REQUEST['msg'] == 'invalid') {
        echo '<div class="alert alert-danger text-center" id="alert" style="font-size:11.7px; display:none;">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        Invalid Login Details!! Please Check Username, Password
        </div>';
        }
        else if ($_REQUEST['msg'] == 'impassable') {
        echo '<div class="alert alert-warning text-center" id="alert" style="font-size:11.7px; display:none;">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        Contact to super admin, it seems the account is blocked
        </div>';
        }
        elseif($this->uri->segment(2) == 'logout'){
        echo '<div class="alert alert-success text-center" id="alert" style="display:none;">
        😎 Log Out Successfully ! 😎.
        </div>';
        }
        ?>



        <div class="auth-box" style="background-color: rgba(255, 255, 255, 0.2);">
        <a href="index-2.html" class="auth-logo mb-4">
        <img src="<?php echo base_url();?>soft_assets/img/Logo-1.png" alt="LogoBr@kr">
        </a>

        <h3 class="mb-4 fw-bold shadow-text">Login</h3>

        <div class="mb-3">
        <label class="form-label shadow-text" for="email">Your email <span class="text-danger">*</span></label>
        <input type="text" name="email_id" id="email_id" value="superadmin@g.com" class="form-control" placeholder="Enter your email">
        </div>

        <div class="mb-2">
        <label class="form-label shadow-text" for="pwd">Your password <span class="text-danger">*</span></label>
        <div class="input-group">
        <input type="password" id="password" name="password" value="superadmin" class="form-control" placeholder="Enter password">
        <button class="btn btn-outline-secondary" type="button">
        <i class="ri-eye-line text-primary"></i>
        </button>
        </div>
        </div>
        
      

        <div class="mb-3 mt-4 d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
        <a href="signup.html" class="btn btn-primary">Forgot password</a>
        </div>

        </div>

        </form>
        </div>
        </div>
        </body>
        </html>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#alert").fadeIn(500).delay(1000).fadeOut(1000);
        });
        </script>