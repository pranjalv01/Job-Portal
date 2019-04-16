<?php include('server.php') ?>
<!DOCTYPE HTML>

			<head>
				<title>Job Portal</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
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
				<style>
				table {
				  border-collapse: collapse;
				  width: 100%;
				}

				th, td {
				  padding: 8px;
				  text-align: left;
				  border-bottom: 1px solid #ddd;
				}

				table, td, th {
				  border: 1px solid black;
				}
				tr:nth-child(even) {background-color: 	#B0E0E6;}
				</style>
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
				        <li><a href="login.php">Login</a></li>
				        
				        <li><a href="studyabroad.php">Study Abroad</a></li>
				        
				        <li><a href="topexams.php">Top Exams</a></li>
				         <li><a href="about.php">About Us</a></li>
				        
			        </ul>
			    </div>
			    <div class="clearfix"> </div>
			  </div>
			    <!--/.navbar-collapse-->
	</nav>

<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <h2 class="white"><i>“Find out what you like doing best and get someone to pay you for doing it.”</i> –Katherine Whitehorn</h2>
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
			<h3><center><u>MS</u></center></h3><br><br>
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/fsofm.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				
				<h6 class="title"><a href="#">Sydney Business School,University of Wollongong</a></h6>
				<span class="meta">Wollongong, Australia</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>Masters in Business (Human Resource Management)</h6></p>
				<p><strong>1st Year Total Fees</strong> : Rs. 22.8 Lakhs</p>
				<p><strong>Eligibility :</strong> TOEFL: 88<br>ELTS: 6.5<br>PTE: 64</p>
                <hr>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target="#applyModal" >Apply in this College</a><span>
                <a class="btn btn-default pull-left" href="download/fsofm.pdf" style="margin-left:16px">Download Broucher</a></span>
	         
				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">Apply for this job</h4>
					      	</div>
	                        <div class="modal-body">
					          Before you apply you have to login as a candidate			
					          <p><a href="login.php">Log in</a></p>
					      	</div>
				    	</div>
				  	</div>
				</div>
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
		   <br>
		    <br>
		   <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/sbs.jpeg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				
				<h6 class="title"><a href="#">Eastern Institute of Technology</a></h6>
				<span class="meta">Napier, New Zealand</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>Master of Applied Management</h6></p>
				<p><strong>1st Year Total Fees</strong> Rs 9.8 Lakhs</p>
				<p><strong>Eligibility :</strong> TOEFL: 79<br>IELTS: 6.5<br>PTE: 58</p>
                <hr>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target="#applyModal" style="margin-right:16px">Apply in this College</a>
                <a class="btn btn-default pull-left" href="download/sbs.pdf" style="margin-right:16px">Download Broucher</a>
	
				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">Apply for this job</h4>
					      	</div>
	                        <div class="modal-body">
					          Before you apply you have to login as a candidate			
					          <p><a href="login.php">Log in</a></p>
					      	</div>
				    	</div>
				  	</div>
				</div>
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
		    <br>
		    <br>
		    <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/ieseg.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				
				<h6 class="title"><a href="#">EU Business School</a></h6>
				<span class="meta">Munich, Germany</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>

				<p><h6>MSc in International Management</h6></p>
				<p><strong>1st Year Total Fees</strong> Rs 21.2 Lakhs </p>
				<p><strong>Eligibility :</strong> TOEFL: 89<br>IELTS: 6.5<br>PTE: 59<br>GRE: Accepted</p>
                <hr>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target="#applyModal" style="margin-right:16px">Apply in this College</a>
                <a class="btn btn-default pull-left" href="download/ieseg.pdf" style="margin-right:16px">Download Broucher</a>
	
				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">Apply for this job</h4>
					      	</div>
	                        <div class="modal-body">
					          Before you apply you have to login as a candidate			
					          <p><a href="login.php">Log in</a></p>
					      	</div>
				    	</div>
				  	</div>
				</div>
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
		    <br>
		    <br>
		    <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/eu.jpeg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				
				<h6 class="title"><a href="#">Jacobs University</a></h6>
				<span class="meta">Bremen, Germany</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>MSc in Data Engineering</h6></p>
				<p><strong>1st Year Total Fees</strong> Rs 18.1 Lakhs</p>
				<p><strong>Eligibility :</strong> TOEFL: 90<br>IELTS: 6.5<br></p>
                <hr>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target="#applyModal" style="margin-right:16px">Apply in this College</a>
                <a class="btn btn-default pull-left" href="download/eu.pdf" style="margin-right:16px">Download Broucher</a>
	
				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">Apply for this job</h4>
					      	</div>
	                        <div class="modal-body">
					          Before you apply you have to login as a candidate			
					          <p><a href="login.php">Log in</a></p>
					      	</div>
				    	</div>
				  	</div>
				</div>
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
		    <br>
		    <br>
		    <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/tuom.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				
				<h6 class="title"><a href="#">National University of Singapore, Institute of Systems Science</a></h6>
				<span class="meta">Singapore</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p><h6>Full-Time MBA</h6></p>
				<p><strong>1st Year Total Fees</strong> Rs 29.2 Lakhs </p>
				<p><strong>Eligibility :</strong> TOEFL: 85<br>IELTS: 6</p>
                <hr>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target="#applyModal" style="margin-right:16px">Apply in this college</a>
                 <a class="btn btn-default pull-left" href="download/uof.pdf" style="margin-right:16px">Download Broucher</a>
	
				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">Apply for this job</h4>
					      	</div>
	                        <div class="modal-body">
					          Before you apply you have to login as a candidate			
					          <p><a href="login.php">Log in</a></p>
					      	</div>
				    	</div>
				  	</div>
				</div>
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