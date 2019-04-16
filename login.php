<?php include('server.php') ?>
<!DOCTYPE HTML>

			<head>
				<title>Job Portal</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="keywords"/>
				<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
				<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<!-- Custom Theme files -->
				<link href="css/style.css" rel='stylesheet' type='text/css' />
				<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
				<!----font-Awesome----->
				<link href="css/font-awesome.css" rel="stylesheet"> 
				<!----font-Awesome----->
			</head>


	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
			    </div>
			    <!--/.navbar-header-->
			    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
			        <ul class="nav navbar-nav">
				        
				        
				        <li><a href="register.php">Signup</a></li>
				        
				        
				        <li><a href="studyabroad.php">Study Abroad</a></li>
				        
				        <li><a href="topexams.php">Top Exams</a></li>
				        <li><a href="aboutus.php">About Us</a></li>
				        
			        </ul>
			    </div>
			    <div class="clearfix"> </div>
			  </div>
			    <!--/.navbar-collapse-->
	</nav>





<div class="container">
    <div class="single">  
	   
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                    <form action="login.php" method="post" autocomplete="off">
                    	<?php include('errors.php'); ?>
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type="text" required="required" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" class="form-control " placeholder="Password" name="password">
                            </div>
                        </div>
                     
                     <div class="forgot">
						 
				 		  <div class="login-para">
				 			<p><a href="forgetpassword1.php"> Forgot Password? </a></p>
				 		 </div>
					     <div class="clearfix"> </div>
			        </div>
					<div class="login-btn">
					   <input type="submit"  value="Login" name="login">
					</div>
					<div class="login-bottom">
					 
					 <div class="social-icons">
						
						<h4>Don't have an Account? <a href="register.php"> Register Now!</a></h4>
					 </div>
		           </div>
		       </form>
                </div>
            
         </div>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Sign In</a></li>
				<li><a href="login.php">Join Now</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="f_list">
				
				<li><a href="about.php">Contact Us</a></li>
				<li><a href="index.php"> Jobs</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		
		<div class="col-md-3 grid_3">
			<h4>Job Portal</h4>
			<p>The online job portal application allows job seekers and recruiters to connect. The application provides the ability for job seekers to create their accounts, upload their profile and resume, search for jobs, apply for jobs, view different job openings. </p>
		</div>
		<div class="copy">
		<p>Copyright © 2019 Job Portal<a href="#" target="_blank"></a> </p>
	</div>
 
		<div class="clearfix"> </div>
	</div>
</div>

	

</body>
</html>	