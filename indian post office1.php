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
				<link href='//fonts.googleapis.com/css?family=Roboto:100,200,110,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
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
				        
				        
				        
				        <li><a href="resume.php">Upload Resume</a></li>
				        <li><a href="studyabroad.php">Study Abroad</a></li>
				        <li><a href="topexams.php">Top Exams</a></li>
				        
				        <li><a href="aboutus.php">About Us</a></li>
				        <?php if (isset($_SESSION['success'])) : ?>
					      <div class="error success" >
					      	<h3>
					          <?php 
					          	echo $_SESSION['success']; 
					          	unset($_SESSION['success']);
					          ?>
					      	</h3>
					      </div>
					  	<?php endif ?>

					    <!-- logged in user information -->
					    <?php  if (isset($_SESSION['username'])) : ?>
					    	<li><?php echo $_SESSION['username'];?> </li>
					    	<li> <a href="index.php?logout='1'" >Logout</a> </li>
					    <?php endif ?>
				        
			        </ul>
			    </div>
			    <div class="clearfix"> </div>
			  </div>
			    <!--/.navbar-collapse-->
	</nav>

<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <h2 class="white"><i>“When one door is closed, don’t you know that many more are open.”</i> – Bob Marley</h2>
		</div>
   </div> 
</div>

			<div class="container">
				<div class="grid_1">
					 <h3>Featured Employers</h3>
					   <ul id="flexiselDemo3">
					      <li><img src="images/c1.gif"  class="img-responsive" /></li>
						  <li><img src="images/c2.gif"  class="img-responsive" /></li>
						  <li><img src="images/c3.gif"  class="img-responsive" /></li>
						  <li><img src="images/c4.gif"  class="img-responsive" /></li>
						  <li><img src="images/c5.gif"  class="img-responsive" /></li>
						  <li><img src="images/c6.gif"  class="img-responsive" /></li>	
					    </ul>
					    <script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems: 6,
								animationSpeed: 1000,
								autoPlay:false,
								autoPlaySpeed: 1100,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>


				<div class="container">
    <div class="single">  
        <div class="col-sm-10 follow_left">
			<h3><center>Indian Post Office Recruitment</center></h3><br><br>
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/por.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">19<span>oct</span></div>
				<h6 class="title"><a href="#"><b>Postaljobs Recruitment - India Post</b></a></h6>
				<h6 class="title"><a href="#"><b>Gramin Dak Sevak GDS Haryana...</b></a></h6>
				<span class="meta">indian-postal</span>
				<p>indian-postal</p>
				<p>via Wisdom Jobs</p>
				<p>full Time</p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				
                <hr>
                <a href="mail2.php" class="btn btn-default pull-left">Apply for this Job</a>
	         
				<!-- Modal -->
				
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://aboutme.google.com" class="fa fa-google-plus" target="_blank"></a></li>
				</ul>
				<div class="clearfix"> </div>
		    </div>
		   <div class="clearfix"> </div>
		   </div>
		     <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/stt.png" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">10<span>Nov</span></div>
				<h6 class="title"><a href="#"><b>State Postal Jobs Recruitment - India</b></a></h6>
				<h6 class="title"><a href="#"><b>Office Recruitment 2018 –...</b></a></h6>
				<p>indian-postal</p>
				<span class="meta">Maharashtra</span>
				<p>via wisdom Jobs</p>
				<p>Full time</p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				
                <hr>
                <a href="mail2.php" class="btn btn-default pull-left" >Apply for this Job</a>
	
				<!-- Modal -->
				
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://aboutme.google.com" class="fa fa-google-plus" target="_blank"></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		    </div>

		     <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/cntr.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">19<span>Mar</span></div>
				<h6 class="title"><a href="#"><b>Central Government Jobs Recruitment - </b></a></h6>
				<h6 class="title"><a href="#"><b>Ministry of Defence Jobs...</b></a></h6>
				<p>central-govt-jobs</p>
				<span class="meta">Delhi</span>
				<p>via wisdom Jobs</p>
				<p>Full time</p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				
                <hr>
                <a href="mail2.php" class="btn btn-default pull-left">Apply for this Job</a>
	
				<!-- Modal -->
				
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://aboutme.google.com" class="fa fa-google-plus" target="_blank"></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		    </div>

             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/apps.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">28<span>Feb</span></div>
				<h6 class="title"><a href="#"><b>AP Postal Circle Jobs 2019: Apply Online</b></a></h6>
				<h6 class="title"><a href="#"><b>for 22 Postman/ Mail...</b></a></h6>
				<p>Andhra Pradesh Postal Circle, India Post</p>
				<span class="meta">Andhra Pradesh</span>
				<p>via 9curry.com</p>
				<p>₹21.7T a month</p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				
                <hr>
                <a href="mail2.php" class="btn btn-default pull-left" >Apply for this Job</a>
	
				<!-- Modal -->
				
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://aboutme.google.com" class="fa fa-google-plus" target="_blank"></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		    </div>

		    <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/mmr.png" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">08<span>july</span></div>
				<h6 class="title"><a href="#"><b>Mail Motor Service Jobs 2019 - Skilled </b></a></h6>
				<h6 class="title"><a href="#"><b>Artisan, Drivers</b></a></h6>
				<p>Mail Motor Service</p>
				<span class="meta">Mumbai, Maharashtra</span>
				<p>via Indian Government Jobs</p>
				<p>₹15T–₹30T a month</p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				
                <hr>
                <a href="mail2.php" class="btn btn-default pull-left" >Apply for this Job</a>
	
				<!-- Modal -->
				
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://aboutme.google.com" class="fa fa-google-plus" target="_blank"></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		    </div>

		    <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/kkr.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">13<span>Feb</span></div>
				<h6 class="title"><a href="#"><b>Kolkata Jobs Mail Motor Service Kolkata</b></a></h6>
				<h6 class="title"><a href="#"><b>Recruitment 2018 – 19...</b></a></h6>
				<p>Mail Motor Service Kolkata</p>
				<span class="meta">Kolkata, West Bengal</span>
				<p>via Careers99.Com</p>
				<p> 10 a month </p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				
                <hr>
                <a href="mail2.php" class="btn btn-default pull-left" >Apply for this Job</a>
	
				<!-- Modal -->
				
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://aboutme.google.com" class="fa fa-google-plus" target="_blank"></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		    </div>
		</div>
	</div></div>

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

