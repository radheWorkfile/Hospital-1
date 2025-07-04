<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" >
    <title>neomorphism login form</title>

	 <style>
		* {
    box-sizing: border-box;
}

body {
    margin: 0;
    height: 100vh;
    width: 100vw;
    font-weight: 700;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #555;
    background-color:rgb(241, 239, 239);
}

.login-part {
    width: 430px;
    height: 500px;
    background-color: #ecf0f3;
    padding: 40px 35px 35px 35px;
    /* border-radius: 40px; */
    box-shadow: 13px 13px 20px #cbced1,
    -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0px 0px 2px #5f5f5f , 0px 0px 0px 5px #ecf0f3 ,
    8px 8px 15px #afaaa7 , -8px -8px 15px #fff;
}

.title {
    text-align: center;
    font-size: 28px;
    padding-top: 24px;
}

.fields {
    width: 100%;
    padding: 20px 5px 5px 5px;
}

.fields input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    padding: 18px 10px 18px 5px;
}

.username , .password {
    margin-bottom: 30px;
    box-shadow: 8px 8px 8px #cbced1 , -8px -8px 8px #fff;
    border-radius: 25px;
}

.svg-icon {
    height: 22px;
    margin: 0 10px -4px 25px;
}

.login-button {
    width: 100%;
    height: 60px;
    border: none;
    cursor: pointer;
    background: #02c8db;
    color: #fff;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 700;
    box-shadow: 3px 3px 8px #b1b1b1 , -3px -3px 8px #fff;
    transition: all .4s ease-in;
}

.login-button:hover {
    background: #50e5b9;
    font-size: 25px;
}

.link {
    padding-top: 20px;
    text-align: center;
}

.link a {
    text-decoration: none;
    color: #aaa;
}
	 </style>
</head>
<body>
   
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

            <form class="login-part" action="<?php echo base_url('login/auth');?>" method="post">
			<!-- <div class="logo">
			</div> -->

			<?php
			if ($_REQUEST['msg'] == 'invalid') {
			echo '<div class="alert alert-danger" id="alert" style="font-size:11.7px;">
			<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
			Invalid Login Details!! Please Check Username, Password
			</div>';
			}
			else if ($_REQUEST['msg'] == 'impassable') {
			echo '<div class="alert alert-warning" id="alert" style="font-size:11.7px;">
			<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
			Contact to super admin, it seems the account is blocked
			</div>';
			}
			elseif($this->uri->segment(2) == 'logout'){
			echo '<div class="alert alert-success" id="alert">
			😎 Log Out Successfully ! 😎.
			</div>';
			}
			?>

			
			
			<div class="title text-info text-shadow">Login </div>
			<div class="fields">
			<div class="username">
			<svg class="svg-icon" viewBox="0 0 20 20">
			<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
			</svg>
			<input type="username" class="user-input" name="email_id" id="email_id" placeholder="Username">
			</div>
			<div class="password">
			<svg class="svg-icon" viewBox="0 0 20 20">
			<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
			</svg>
			<input type="password" class="pass-input" id="password" name="password" placeholder="Password">
			</div>
			</div>
			<button type="submit" name="submit" id="submit-btn" class="login-button">Sign In</button>
			<div class="link"><a href="#">Forgrt password?</a> or <a href="#">Sign up</a>
			</div>
			</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>