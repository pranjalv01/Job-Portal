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
		   <h2 class="white"><i>“Make sure your worst enemy doesn’t live between your two ears.”</i> – Laird Hamilton</h2>
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
			<h3><center>Bank Jobs</center></h3><br><br>
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/bank1.png" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">19<span>Jul</span></div>
				<h6 class="title"><a href="#"><b>Allahabad Bank</b></a></h6>
				<span class="meta">Faculty member</span>
				<p>Allahabad</p>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>MA, BSc, MSW</h6></p>
				<p><strong>Job Description</strong> Faculty Member  job opportunities in Allahabad Bank Qualification: Graduate from recognized college (MSW/MA in Grameen vikas/ samaaj ...</p>
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
				<div class="thumb"><img src="images/abhy.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">11 <span>Aug</span></div>
				<h6 class="title"><a href="#"><b>Abhudaya Co-op Bank Ltd</b></a></h6>
				<p>Clerk</p>
				<span class="meta">Mumbai,chennai,Noida</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>Any Graduate</h6></p>
				<p><strong>Job Description :</strong> Clerk   job opportunities in Abhyudaya Cooperative Bank Limited  Qualification :   Graduate in any stream from re...</p>
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
				<div class="thumb"><img src="images/rbi.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">10 <span>Dec</span></div>
				<h6 class="title"><a href="#"><b>Reserve Bank Information Technology Private Limited</b></a></h6>
				<p>Sr. Manager/ Associate Manager/ Manager</p>
				<span class="meta">Kolkata, India</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>

				<p><h6>MBA/PGDM,BSc(CS)</h6></p>
				<p><strong>Job Description :</strong>Manager/ Associate Manager/ Manager Jobs in Reserve Bank Information Technology Private Limited - Mumbai. Sr. Manager/ Associate Manager/ M... </p>
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
				<div class="thumb"><img src="images/pnb.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">07 <span>Jul</span></div>
				<h6 class="title"><a href="#"><b>Punjab National Bank</b></a></h6>
				<p>Senior Manager/ Manager</p>
				<span class="meta">Faridabad, Gurgaon</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>

				<p><h6>Diploma, BE/B.Tech, MBA/PGDM, MCA, CA, ICWA, LLB...</h6></p>
				<p><strong>Job Description :</strong>Senior Manager/Manager recruitment in Punjab National Bank Punjab National Bank recruiting 325 Vacancies for the post of Senior Manager/Ma...</p>
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
				<div class="thumb"><img src="images/bob.png" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">31<span>Dec</span></div>
				<h6 class="title"><a href="#"><b>Bank of Baroda</b></a></h6>
				<p>Head/ Asst. Manager /Manager /Officer/ Regional Sales Manager</p>
				<span class="meta">Gujrat, Ahemdabad India</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>

				<p><h6>BE/B.Tech, MBA/PGDM, MCA, ME/M.Tech, MSc</h6></p>
				<p><strong>Job Description :</strong>Manager /Manager /Officer/ Regional Sales Manager Jobs in Bank of Baroda - Across India. Head/ Asst. Manager /Manager /Officer/ Region...</p>
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
				<div class="thumb"><img src="images/mum.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">09<span>Jan</span></div>
				<h6 class="title"><a href="#"><b>Maharashtra State Cooperative Bank Ltd></b></h6>
				<p>Deputy General Manager</p>
				<span class="meta">Mumbai, Nasik</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>

				<p><h6>Any Post Graduate</h6></p>
				<p><strong>Job Description :</strong>Deputy General Manager  job vacancies in Maharashtra State Co-op. Bank Ltd. No of Posts :  4 Qualification :  Minimum Post...</p>
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
	















				        	