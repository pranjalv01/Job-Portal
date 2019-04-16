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
			        <a class="navbar-brand" href="index1.php"><img src="images/logo.png" alt=""/></a>
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
		   <h2 class="white"><i>I'm playing; I'm here. I'm going to fight until they tell me they don't want me anymore.”</i> –Steve Nash</h2>
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
			<h3><center>Project Staff - C-MET</center></h3><br><br>
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/chemi.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				
				<h6 class="title"><a href="#">C-MET Jobs for Research Associate Chemistry</a></h6>
				<span class="meta">Research Associate Chemistry</span>

				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>M Phil / Ph.D</h6></p>
				<p>job Description : Advt. No. : PN/ADM/RST/007/2018Research Associate Chemistry Job Opportunity in Centre for Materials for Electronics TechnologyPro...</p>
                
                
				<!-- Modal -->
				   
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://en-gb.facebook.com/login/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					
				</ul>
				<div class="clearfix"> </div>
		    </div>
		   <div class="clearfix"> </div>
		   </div>

			<div class="container">
    		<div class="single">  
        <div class="col-sm-10 follow_left">
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/met.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<h6 class="title"><a href="#">C-MET Jobs for Project Assistant Material Science</a></h6>
				<span class="meta">Project Assistant Material Science</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>BE/B.Tech, BSc, MSc</h6></p>
				<p>Job Description : Advt. No. : PN/ADM/RST/012/2019Project Assistant  Material Science Job Opportunity in Centre for Materials for Electron...</p>
                
                
				<!-- Modal -->
				   
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://en-gb.facebook.com/login/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					
				</ul>
				<div class="clearfix"> </div>
		    </div>
		   <div class="clearfix"> </div>
		   </div>



			<div class="container">
    		<div class="single">  
        <div class="col-sm-10 follow_left">
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/ch12.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<h6 class="title"><a href="#">C-MET Jobs for Project Staff</a></h6>
				<span class="meta">Project Staff</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>Diploma, BE/B.Tech, MSc</h6></p>
				<p>Job Description : Notification No.CMET/TH/ADM/01/2019Project Staff Job Opportunity in Centre for Materials for Electronics Technology on Temporary on Project...</p>
                
                
				<!-- Modal -->
				   
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://en-gb.facebook.com/login/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					
				</ul>
				<div class="clearfix"> </div>
		    </div>
		   <div class="clearfix"> </div>
		   </div>



			

			<div class="container">
    		<div class="single">  
        <div class="col-sm-10 follow_left">
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/met12.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<h6 class="title"><a href="#">C-MET Jobs for JRF/ Project Staff-I 
				</a></h6>
				<span class="meta">JRF/ Project Staff-I</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>BE/B.Tech(chemical engineering, Metallurgical), ME/M.Tech(Chemical, Metallurgical), MSc(Chemistry, Electronics, Phy)</h6></p>
				<p>Job Description : Advt. No. : PN/ADM/RST/007/2018 Research Associate  job recruitment in Centre for Materials for Electronics Technology (C-MET),Pune...</p>
                
                
				<!-- Modal -->
				   
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://en-gb.facebook.com/login/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					
				</ul>
				<div class="clearfix"> </div>
		    </div>
		   <div class="clearfix"> </div>
		   </div>

<div class="container">
    		<div class="single">  
        <div class="col-sm-10 follow_left">
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/ch12.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<h6 class="title"><a href="#">C-MET Jobs for Project Staff Applied Chemistry</a></h6>
				<span class="meta">Project Staff Applied Chemistry</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>ME/M.Tech(Chemical, Metallurgical), MSc</h6></p>
				<p>Job Description : Advt. No: PN/ADM/RST/009/2018 Project Staff  job opportunities in Centre for Materials for Electronics Technology (C-MET),Pune Labor...</p>
                
                
				<!-- Modal -->
				   
	            <ul class="social-icons pull-right">
					<li><span>Share : </span></li>
					<li><a href="https://en-gb.facebook.com/login/" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/login" class="fa fa-twitter" target="_blank"></a></li>
					
				</ul>
				<div class="clearfix"> </div>
		    </div>
		   <div class="clearfix"> </div>
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