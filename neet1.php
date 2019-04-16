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
				<<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <h2 class="white"><i>“Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.”</i>–Norman Vincent Peale</h2>
		</div>
   </div> 
</div>

				<div class="container">
				    <div class="single">  
				       <h2><u>NEET 2019 Admit Card, Registration, Exam Dates, Eligibility, Syllabus</u></h2>
				       <div class="about_top">
					     <div class="col-md-12 box_16">
				  			<div class="list styled custom-list custom-list1">
								<ul>
									<li><span class="dropcap"></span>  
									   <div class="item_content"><a href="mba.php">
									   	</a></ul>
										
						
						<p class="m_1">
						The National Eligibility cum Entrance Test or NEET (UG) will be conducted by NTA from 2019 onwards. Intermediate graduates (10+2) with a minimum of 50% aggregate marks can apply online at nta.ac.in.</p>

						<p class="m_1">
						NEET form correction window is open on the official website. Enter registration and password to edit the filled in application.</p>

						<p class="m_1">
						This year, the examination is scheduled for May 5 in offline (pen-paper) mode. Medical aspirants must note that the responsibility of NTA will be limited to the conduct of entrance exam, declaration of NEET Result and providing All India Rank to the Directorate General Health Services, Government of India. </p><br>
						
					<table>
					   <tr >
					    <th><center>Event</center></th>
					    <th><center>Date</center></th>
					     </tr>

					  <tr >
					    <td>Application Form</td>
					    <td>November 1, 2018</td>		    
					  </tr>

					  <tr >
					    <td>Application Form Correction Window</td>
					    <td>December 2018</td>			    
					  </tr>

					  <tr >
					    <td>Admit Card Release Date</td>
					    <td>April 15, 2019	</td>		    
					  </tr>

					  <tr >
					    <td>NEET 2019 Exam Date</td>
					    <td>May 5, 2019</td>			    
					  </tr>

					  <tr >
					    <td>Result Declaration</td>
					    <td>June 5, 2019</td>			    
					  </tr>

					  <tr >
					    <td>Commencement of Counselling</td>
					    <td>June 13 onwards</td>		    
					  </tr>
					  
					</table>
					
					<br>
					<br>

					<p><h3 style="color:#4B0082;"><u>NEET 2019 Exam Pattern</u></h3></p>
					<p>Below we are providing the details about NEET 2019 Exam Pattern: </p>
					

					<ol  type="a"> 
					<li><b>Date of Exam:</b> The exam will be organized on <b>May 5, 2019.</b></li>

					<li><b>Mode of Exam:</b>The exam will be organized through <b>Pen – Paper based </b>(offline) mode.</li>

					<li><b>Type of Questions:</b>There will be <b>objective type </b>questions in the exam.</li>

					<li><b>Duration:</b>The exam duration will be of <b>three hours.</b></li>

					<li><b>Number of Questions:</b>Total 180 questions will be asked.</li>

					<li><b>Language:</b> The question paper will be asked in Hindi, English, Gujarati, Marathi, Oriya, Bengali, Assamese, Telugu, Tamil, Urdu and Kananda languages.</li>

					<li><b>Marking Scheme:</b> For each correct answer,<b>four marks</b> will be given.</li>

					<li><b>Negative Marking:</b>For each incorrect answer, <b>one mark</b> will be deducted.</li>



					</ol>
					<br></br>

					<table >
					  
					  <tr >
					    <th><center>Section</center></th>
					    <th><center>No. of Question</center></th>
					    <th><center>Marks</center></th>
					     </tr>
					     <tr >
					    <td>Physics</td>
					    <td>45</td>
					    <td>180</td>
					     </tr>
					     <tr >
					    <td>Chemistry</td>
					    <td>45</td>
					    <td>180</td>
					     </tr>
					  <tr >
					    <td>Zoology</td>
					    <td>45</td>
					    <td>180</td>
					     </tr>
					  <tr >
					    <td>Botany</td>
					    <td>45</td>	
					    <td>180</td>		    
					  </tr>
					  <tr>
					    <td>Total</td>
					    <td>180</td>	
					    <td>720</td>		    
					  </tr>
					 					  
					</table>

					
					<br></br>
					<ul><h3 style="color:#4169E1;"><u>NEET Cut Off 2019</u></h3></ul>
					<p>Candidates have to secure marks more than cut off to qualify the examination. Candidates can check details about NEET 2019 cut off from below:</p>					
					
					<ol type="a">
					<li>The cut off will be published <b>through online mode.</b></li>
				
					<li>It will be released along with the result.</li>

					<li>The cut off will depend upon different factors like number of candidates appeared in the exam, student’s performance, difficulty level of the exam, etc.</li>

					<li>The previous years qualifying cut off (out of 720 marks) of NEET UG exam is mentioned below:</li>

					</ol>
				
				<br>
				<br>
					
				<table>
					<th><center>Category</center></th>
					<th><center>Cut Off 2018</center></th>
					   <tr >
					    <td>Unreserved (UR)</td>
					    <td>360</td>
					     </tr>
					  <tr >
					    <td>OBC, SC & ST</td>
					    <td>288</td>				    
					  </tr>
					  <tr >
					    <td>UR – PH</td>
					    <td>324</td>					    
					  </tr>
					  <tr >
					    <td>OBC, SC, ST – PH</td>
					    <td>288</td>				    
					  </tr>
					  
					</table>

					<br>
					<br>
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