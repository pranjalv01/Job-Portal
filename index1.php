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
				        <li><a href="studyabroad1.php">Study Abroad</a></li>
				       
				        <li><a href="topexams1.php">Top Exams</a></li>
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
		   <h2 class="white"><i>“Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.”–Norman Vincent Peale</i></h2>
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
				autoPlaySpeed: 3000,    		
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
	 <div class="single">  
	   <div class="col-md-4">
	   	  <div class="col_3">
	   	  	<h3>Todays Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<li><a href="sb1i.php">Specialist Officer - SBI</a></li>
	   	  		<li><a href="rbi1.php">Junior Engineer - RBI</a></li>		
	   	  		<li><a href="project.php">Project Staff - C-MET</a></li>
	   	  		<li><a href="srif1.php">Sr Investigator, Field Asst - NARI</a></li>		
	   	  							
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3">
	   	  	<h3>Exams Details</h3>
	   	  	<ul class="list_2">
	   	  		<li><a href="upsc1.php">UPSC</a></li>
	   	  		<li><a href="gate1.php">GATE</a></li>		
	   	  		<li><a href="ca1.php">CA</a></li>
	   	  		<li><a href="cat1.php">CAT</a></li>		
	   	  		<li><a href="neet1.php">NEET</a></li>
	   	  		<li><a href="clat1.php">CLAT</a></li>		
	   	  									
	   	  	</ul>
	   	  </div>
	   	  <div class="widget">
	        <h3>Take The Job Portal Poll!</h3>
    	        <div class="widget-content"> 
                 <div class="Job Portal-answer">
			    	<span class="Job Portal-answer-group">
		    			<span class="Job Portal-answer-input">
		    			   <input class="Job Portal-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="Job Portal-input-label">
		    				<span class="Job Portal-answer-span">Frequently</span>
		    			</label>
		    		</span>
			    	<span class="Job Portal-answer-group">
		    			<span class="Job Portal-answer-input">
		    			   <input class="Job Portal-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="Job Portal-input-label">
		    				<span class="Job Portal-answer-span">Interviewing</span>
		    			</label>
		    		</span>
			        <span class="Job Portal-answer-group">
		    			<span class="Job Portal-answer-input">
		    			   <input class="Job Portal-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="Job Portal-input-label">
		    				<span class="Job Portal-answer-span">Leaving a familiar workplace</span>
		    			</label>
		    		</span>
		    		</div>
    	       </div>
    	</div>
	 </div>
	   <div class="col-md-8">
	      <div class="col_1">
   	        <div class="col-sm-4 row_2">
				<a href="government1.php"><img src="images/government.jpg" class="img-responsive" alt=""/></a>
			</div>
			<div class="col-sm-8 row_1">
				<h4><a href="government1.php">Government Jobs</a></h4>
				<h6>SIt is a long <span class="dot">·</span> Jan. 28,2019</h6>
				<p>There are many government jobs available related to your profession</p>
				<div class="social">	
					<a class="btn_1" href="https://www.facebook.com/">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="https://twitter.com/login">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://plus.google.com/">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
			</div>
			<div class="clearfix"> </div>
		   </div>
		   <div class="col_1">
   	         <div class="col-sm-4 row_2">
				<a href="Bankjobs1.php"><img src="images/bank.png" class="img-responsive" alt=""/></a>
			</div>
			<div class="col-sm-8 row_1">
				<h4><a href="Bankjobs1.php">Bank Jobs</a></h4>
				<h6>SIt is a long <span class="dot">·</span> Jan. 28,2019</h6>
				<p>There are many banks which are recruiting and giving high package to the employee.</p>
				<div class="social">	
					<a class="btn_1" href="https://www.facebook.com/">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="https://twitter.com/login">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://plus.google.com/">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
			</div>
			<div class="clearfix"> </div>
		   </div>
		   <div class="col_1">
   	        <div class="col-sm-4 row_2">
				<a href="indian post office1.php"><img src="images/postoffice.png" class="img-responsive" alt=""/></a>
			</div>
			<div class="col-sm-8 row_1">
				<h4><a href="indian post office1.php">Indian Post Office Recruitment</a></h4>
				<h6>SIt is a long <span class="dot">·</span> Jan. 28,2019</h6>
				<p>This is the best oppurtunity you get to get a job and enchance your carree.</p>
				<div class="social">	
					<a class="btn_1" href="https://www.facebook.com/">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="https://twitter.com/login">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://plus.google.com/">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
			</div>
			<div class="clearfix"> </div>
		   </div>
		   <div class="col_1">
   	         <div class="col-sm-4 row_2">
				<a href="ssc1.php"><img src="images/ssc.jpg" class="img-responsive" alt=""/></a>
			</div>
			<div class="col-sm-8 row_1">
				<h4><a href="ssc1.php">SSC Recruitment</a></h4>
				<h6>SIt is a long <span class="dot">·</span> Jan. 28,2019</h6>
				<p>There are many jobs in which SSC is recruiting and giving high package to the employee.</p>
				<div class="social">	
					<a class="btn_1" href="https://www.facebook.com/">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="https://twitter.com/login">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://plus.google.com/">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
			</div>
			<div class="clearfix"> </div>
		   </div>
		   <div class="col_1">
   	         <div class="col-sm-4 row_2">
				<a href="esic1.php"><img src="images/esic.png" class="img-responsive" alt=""/></a>
			</div>
			<div class="col-sm-8 row_1">
				<h4><a href="esic1.php">ESIC Recruitment</a></h4>
				<h6>SIt is a long <span class="dot">·</span> Jan. 28,2019</h6>
				<p>ESIC jobs gives you best oppurtunity and gives high package to the employee.</p>
				<div class="social">	
					<a class="btn_1" href="https://www.facebook.com/">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="https://twitter.com/login">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://plus.google.com/">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
			</div>
			<div class="clearfix"> </div>
		   </div>
		   <div class="col_2">
   	         <div class="col-sm-4 row_2">
				<a href="aavin1.php"><img src="images/aavin.jpg" class="img-responsive" alt=""/></a>
			</div>
			<div class="col-sm-8 row_1">
				<h4><a href="aavin1.php">AAVIN Recruitment</a></h4>
				<h6>SIt is a long <span class="dot">·</span> Jan. 28,2019</h6>
				<p>AAVIN jobs gives you best oppurtunity and gives high package to the employee.</p>
				<div class="social">	
					<a class="btn_1" href="https://www.facebook.com/">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="https://twitter.com/login">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://plus.google.com/">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
			  </div>
			<div class="clearfix"> </div>
		   </div>
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
