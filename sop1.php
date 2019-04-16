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
		   <h2 class="white"><i>“Don't be afraid to fail. Don't waste energy trying to cover up failure. Learn from your failures and go on to the next challenge. It's OK to fail. If you're not failing, you're not growing.”</i> –H. Stanley Judd</h2>
		</div>
   </div> 
</div>

				<div class="container">
				    <div class="single">  
				       <h2>SOP</h2>
				       <div class="about_top">
					     <div class="col-md-12 box_12">
				  			<div class="list styled custom-list custom-list1">
								<ul>
									<li><span class="dropcap"></span>  
									   <div class="item_content"><a href="mba.php">
									   	</a></ul>
										
						
						<p class="m_1">
							<h3 style="color:#4B0082;"><u>Statement of Purpose (SOP): All you need to know!</u></h3>
						An SOP is a long essay that is often asked by universities abroad. The full form of SOP is Statement of Purpose. Usually about 1000 words, this essay seeks to understand the candidate’s life, the motivations for the chosen career path and his/her goals. There are many elements to a Statement of Purpose or an SOP as it is famously referred to. The Universities could ask question-based essays or simply to present your statement of purpose. Until and unless categorically asked, an SOP must include your goals, the career path you have taken up so far as well as your academic progress. Other elements that are further important to the SOP are also the personal motivations that lead you to choose the university/course you have applied to as well as how you intend to use that experience to achieve that goal.</p><br>

						<img src="images/sop1.jpg" alt="SOP"><br><br>

						<p>As is often pointed out, a well-written essay/ statement of purpose is extremely critical to your admission. Needless to say, there are many aspects of a candidate’s application that are inspected before finalizing a decision. While the academic record and other exam score cards are essentially objective in nature, am SOP is the only truly subjective aspect of your application. It is, simply put, the only document in your application that gives you the opportunity to prove that you have something unique that makes you stand out from the crowd. As such, it is the document of your application docket that can hugely determine your admission.</p><br>

						<h3 style="color:#4B0082;">How to Write a Winning SOP?</h3>

						<p>Now that we have assessed how important your SOP is, we come to the important part – how to write a SOP and more importantly, how to write a winning SOP. There are obviously the basics about the SOP, as to what all you need to keep in mind like the general word limit, the format, etc. What is important to note is that you must, at all times remember which course you are writing the SOP for? Specifically speaking, a SOP for an MBA Application would be rather different from a SOP for a Masters course like an MS or an MSc. Similarly, a SOP for a Bachelor Course would be widely different from any of the two.Continue reading <a href="https://studyabroad.shiksha.com/writing-a-winning-statement-of-purpose-applycontent1712" target="_blank">how to write a winning statement of purpose.</a></p><br>

						<h3 style="color:#4B0082;">What to Include in an SOP?</h3>
						<p>While understanding how to write a SOP, we come across various questions. To sum up your entire life and career in 100 words can be a tiresome exercise. With the word constraints rather important, what is important to understand at the onset is <a href="https://studyabroad.shiksha.com/what-to-include-in-your-statement-of-purpose-applycontent1778" target="_blank">what to include in your SOP?</a></p><br>

						<h3 style="color:#4B0082;">What not to Include in an SOP?</h3>
						<p>Remember that there is no exhaustive list of what all you can include in a SOP. What you need to remember is that in such a case, it becomes equally important to understand what all you must not include in your SOP. For instance, should you talk about your family? What about your school life? Every organization I have ever worked with? All my extracurricular achievements? How to know the most important question – <a href="https://studyabroad.shiksha.com/what-not-to-include-in-your-sop-applycontent1719" target="_blank">what not to include in your SOP?</a></p><br>


						<h3 style="color:#4B0082;">Sample Format for Statement of Purpose</h3>
						<p>Getting started, we have understood what all to do while writing a SOP. We have also included a list of what to include and what to leave. Now it is the time to put it in the right format.Most universities across the globe have a standard format/ template that is acceptable. Learn about the <a href="https://studyabroad.shiksha.com/sop-sample-applycontent1727" target="_blank">standard template of a statement of purpose.</a></p><br>
						<br>			
					 												
								
					   </div>
					</li>
			    
			</div>
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