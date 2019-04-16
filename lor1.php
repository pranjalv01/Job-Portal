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
		   <h2 class="white"><i>“A person who never made a mistake never tried anything new.”</i> – Albert Einstein</h2>
		</div>
   </div> 
</div>

				<div class="container">
				    <div class="single">  
				       <h2><u>LOR</u></h2>
				       <div class="about_top">
					     <div class="col-md-12 box_12">
				  			<div class="list styled custom-list custom-list1">
								<ul>
									<li><span class="dropcap"></span>  
									   <div class="item_content"><a href="mba.php">
									   	</a></ul>
										
						
						<p class="m_1">
							<h3 style="color:#4B0082;">What is a Letter of Recommendation (LOR)?</h3>
						The LOR is a document that provides the admission officers with a comprehensive insight into your suitable candidature for admission into the concerned University. The full form of LOR is a Letter of Recommendation. This letter aims at enabling the Admission officers to gain a clearer and favourable picture of your experience, achievements, contributions, and skills communicated by the recommender through the recommendation letter.</p><br>

						
						

						<h4 style="color:#4B0082;">Who needs LOR? Why do they need them?</h4>

						<p>An academic letter of recommendation is required by any student going to study abroad. Irrespective of course (UG, MS, MBA, or PhD) and country, every student requires at least three letters of recommendation from either their college or professional background. For UG, students, LORs can be taken from teachers, professors, school counsellors or principal. For MS students, college professors, internships supervisor, or team lead/ manager from the company they have worked in can issue recommendation letters. For MBA students, LORs should be purely professional, especially, if they have an experience of three years or more. For MBA and PhD aspirants who have recently graduated from college, they can ask for recommendation letters from their college professors or projects guides.</p><br>

						
						<p>Provided that almost every application necessitates submission of 2-3 recommendation letters, you must have your recommenders identified and agreed to prepare your letter well in time. Also, don’t underrate the importance of a LOR as it is almost as important as your admission essays, statements of purpose, resume or any other document for that matter. A Letter of Recommendation is the document that provides credibility to your whole profile as it a strong support of your profile from experienced and learned professors and persons. While choosing the right recommender, you must remember a few key pointers following which you will end up submitting outstanding LOR’s to the Admission Committee.</p><br>

						<h3 style="color:#4B0082;">Types of LOR</h3>
						<p>Letter of Recommendations broadly can be classified into two broad categories based on the Nature of the Recommender. </p><br>


						<h4 style="color:#4B0082;"><strong>1.</strong>Academic LOR</h4>
						<p>A letter of recommendation provided by a faculty member of your previous institute. Usually, universities ask for you to provide two or three LORs from your previous institute ( this could be your teachers from your schools in case of undergraduate courses and professors from your college in case you are applying for masters' programs). The Letter of Recommendation (LOR) Format from Faculty often varies in the content and requires the professor to highlight the applicant's accomplishments as a student of the course. Often, these are more relevant to MS Colleges Abroad or Bachelor Courses abroad. </p><br>
						
						<h4 style="color:#4B0082;"><strong>2.</strong>Professional LOR</h4>
						<p>Most of the MBA Colleges Abroad have a pre-defined work experience requirements. Accordingly, they request for a Professional Letter of Recommendation from an immediate supervisor. The Professional Letter of Recommendation (LOR) Format from a Supervisor varies from an Academic LOR in terms of some specific content that focusses on the applicant's ability to work within a team, the exposure to the domain as well as his/her leadership abilities - all necessary to the MBA course applied for.</p><br>	

						<h3 style="color:#4B0082;">How to write a Recommendation Letter (LOR) </h3>
						<p>Unless and otherwise specified, a letter of recommendation is a 400-500 word essay which talks about the candidate's strengths and weaknesses. There are some things you must include in a recommendation letter like the nature of association as well as the tenure of association. Apart from that, there are some basic formats which must also be kept in mind. Most of the universities require this letter to be on the official letterhead. For an Academic LOR - the university's letterhead is required and for a Professional LOR - the letterhead of the company. What is important to remember in the latter case is that the letterhead should be of the company the recommender is working in. This usually creates a problem if your recommender has moved on to another organization. Hence, the student must know how to choose the right recommender.   </p><br>	
					 												
						<p>An important point to be kept in mind is that a LOR is not a repetition of an SOP. An ideal LOR is supposed to demonstrate aspects/perspectives of your personality not mentioned either in your SOP or resume. Thus, an ideal recommender is the one who knows you well, has personally witnessed the quality of work delivered by you and readily agreed to provide specific instances of your valued contribution and excellence. A generic LOR is a strict no-no as it does not offer much value to your candidature for the program you are applying to.   </p><br>	

						<p>You must always remember that the Admission Committee scurries through thousands of applications and yours is one of them. Now, in order to stand out, focus on including your qualities and accomplishments reinforced by real instances. Another important point here is to endeavour to make all your LORs unique and that can be achieved only if you include unique instances in all the LORs. Making an Impressive Letter of Recommendation is as important as writing a winning SOP. Just keep the formats in place and remember the common mistakes you should avoid in a recommendation letter. </p><br>		
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