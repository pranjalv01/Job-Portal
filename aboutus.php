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
				        
				        
				        <li><a href="jobs.php">Jobs</a></li>
				        <li><a href="resume.php">Upload Resume</a></li>
				        <li><a href="studyabroad.php">Study Abroad</a></li>
				        
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

			<div class="container">
    <div class="single">  
       <h2>Advantages</h2>
       <div class="about_top">
	     <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">1.</span>  
					   <div class="item_content">
						 
						<p><h4> Find the right candidate for the right Job </h4></p>
						<p class="m_1">With the online access to post the requirements comes the access to their database that can help in filtering and downloading the right candidates for your job posting.
						This process is less frustrating and you do get connected with the right job seekers which help you to straighten out your process of hiring.</p>
					   </div>
					</li>
			    </ul>
			</div>
	     </div>
	     <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">2.</span>  
					   <div class="item_content">
						<p> <h4> Accessible 24 hours, anywhere and everywhere</h4></p>
						<p class="m_1">Internet is your best friend as it is there for you 24 hours a day. Be it day or night you can access portals anytime in the day to look after your requirements and ensuring a closure on your job posting.</p>
					   </div>
					</li>
			    </ul>
			</div>
	     </div>
	     <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">3.</span>  
					   <div class="item_content">
						
						<p><h4> Probability of “by chance” view is reduced</h4></p>
						<p class="m_1">If you see an advertisement of a job posting in a newspaper then you might end up in applying for the job by chance. But that is not the case with the internet world.
						You are going to filter the job requirements based on the skill set or years of experience or expertise and might miss out on opportunities that were applicable to you but were not shown based on the filters that you selected.</p>
					   </div>
					</li>
			    </ul>
			</div>
	     </div>
	     <div class="clearfix"> </div>
	   </div>
	</div>
</div>
<div class="about_middle">
	<div class="container">
         <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			   	   <h3>Testimonials</h3>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	    <div class="banner-wrap">
				   	 	    <ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/f5.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p><h3>Very Much Affordable</h3></p>
				   	 				<p>One of the major benefits of using online job portals is that they are very affordable and cost-effective. Candidates can upload their resumes for free and search jobs across any field without having to pay any fee to the job portal. However, there are some services, for instance, resume building and visibility enhancing services that are essential to boost your job profile and become highlighted in the herd, require the candidate to pay a nominal fee.</p>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	    </div>
					</article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	    <div class="banner-wrap">
				   	 	    <ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/f6.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p><h3>Maintain Complete Confidentiality</h3></p>
				   	 				<p>Your job search history and profile is kept completely confidential in the database of these job portals which means you can conduct your job searches in a highly discreet manner without letting anyone to know about what you are up to. Furthermore, these job portals do no share your information anywhere and respect your privacy that makes them a safe bet.</p>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	    </div>
					</article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	    <div class="banner-wrap">
				   	 	    <ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/f7.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p><h3>Search for Endless Jobs</h3></p>
				   	 				<p>Online job portals provide you an opportunity to search jobs from an array of categories which makes it easy for candidates, especially fresher, to filter out their options after browsing through them. Online job portals offer jobs from nearly all domains of the industry which is very much beneficial.</p>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	    </div>
					</article>
				 </div>
				<ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
</div>
<div class="about_bottom">
	<div class="container">
		<h3>Our Team</h3>
	    <div class="col-md-3 team-member text-center">
		    <img src="images/my.jpg" class="img-responsive img-circle1" alt=""/>
			<h5>Pranjal Verma</h5>
			<h6>Account Manager</h6>
			<a href="#"><i class="fa fa-facebook fa1"> </i></a>
			<a href="#"><i class="fa fa-twitter fa1"> </i></a>
			<a href="#"><i class="fa fa-linkedin fa1"> </i></a>
			<a href="#"><i class="fa fa-instagram fa1"> </i></a>
		</div>
		<div class="col-md-3 team-member text-center">
			<img src="images/my1.jpg" class="img-responsive img-circle1" alt=""/>
			<h5>Pooja Garg</h5>
			<h6>Software Developer</h6>
			
			<a href="#"><i class="fa fa-facebook fa1"> </i></a>
			<a href="#"><i class="fa fa-twitter fa1"> </i></a>
			<a href="#"><i class="fa fa-linkedin fa1"> </i></a>
			<a href="#"><i class="fa fa-instagram fa1"> </i></a>
		</div>
		
		
		<div class="clearfix"> </div>
	</div>	
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