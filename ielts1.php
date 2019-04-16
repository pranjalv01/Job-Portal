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
		   <h2 class="white"><i>“I’m a great believer in luck, and I find the harder I work, the more I have of it.”</i> – Thomas Jefferson</h2>
		</div>
   </div> 
</div>
				<div class="container">
				    <div class="single">  
				       <h2>IELTS</h2>
				       <div class="about_top">
					     <div class="col-md-12 box_16">
				  			<div class="list styled custom-list custom-list1">
								<ul>
									<li><span class="dropcap"></span>  
									   <div class="item_content"><a href="mba.php"></a></ul>
									   	<p><h3 style="color:#4B0082;">What is IELTS ?</h3></p>
										
						
						<p class="m_1">
						<strong>IELTS </strong>is an English language exam that is required to be taken by international candidates considering studying or working in a country where English is the main language of communication. The full form of IELTS is International English Language Testing System. Most popular countries where IELTS is accepted for university admissions are UK, Australia, New Zealand, USA & Canada. The exam mainly measures the ability of test-takers to communicate in the four basic language skills – listening, reading, speaking, and writing.</p><br>

						<p><h5 style="color:#4B0082;">IELTS 2019: Key Highlights</h5></p>
						<table>
					  
					  <tr >
					    <td>Exam Name</td>
					    <td>IELTS</td>
					     </tr>
					  <tr >
					    <td>IELTS full form</td>
					    <td>International English Language Testing System</td>					    
					  </tr>
					    <tr >
					    <td>Official Website</td>
					    <td><a href="https://www.ielts.org/">https://www.ielts.org/</a></td>
					     </tr>
					     <tr >
					    <td>Most popular for</td>
					    <td>Study, work, and migration to English speaking countries like Australia, New Zealand, and the UK</td>
					     </tr>
					     <tr >
					    <td>Also accepted by</td>
					    <td>Canada and USA</td>
					     </tr>
					     <tr >
					    <td>Conducted by</td>
					    <td>British Council and IDP Education Ltd</td>
					     </tr>
					     <tr >
					    
					    <td>Mode of Exam</td>
					    <td>Computer and Paper – delivered test</td>
					     </tr>
					     <tr >
					    <td>IELTS Fee</td>
					    <td>Rs. 12,650</td>
					     </tr>
					     <tr >
					    <td>Score Range</td>
					    <td>On a scale of 1 (the lowest) to 9 (the highest)</td>
					     </tr>
					     <tr >
					    <td>IELTS Contact</td>
					    <td>British Council<br>
						0120-4569000 / 0120-6684353, Mon-Sat 09.00 to 18.00<br>
						Email: ExamsCustomerCare@britishcouncil.org<br>
						IDP Head Office<br>
						+91-124-4445999/ 1800-102-4544<br>
						Email: ielts.india@idp.com</td>
					     </tr>
					</table><br><br>

						<p>Often international students are confused between choosing IELTS or TOEFL, as universities abroad ask for either exam scores. It is up to you as a test taker to decide which of the two exams to take, but remember that IELTS is more preferred in UK, Australia, and New Zealand, while TOEFL is popular among applicants to universities in US and Canada. </p><br>

						<p>A lot of students get confused about why are the IELTS scores required. The simple answer to this is that foreign universities and visa granting authorities need to be sure that you will not have communication issues while staying in the country. You need to show a good understanding and strong command of the English language and that is why your overall IELTS scores are so important. Another common doubt students have is whether IELTS is a compulsory exam or not. No, IELTS isn’t compulsory in all university admissions. Many universities might even not even require IELTS scores for admission purposes. But remember that if you don’t give IELTS, your chances of getting the student visa might suffer as the visa officers may not be convinced about your English proficiency without IELTS scores. So it is safer to appear for IELTS and aim to score at least 6 bands overall. </p><br>

						<p>You can take IELTS exam with the British Council or IDP up to once a week (four times a month). The British Council and IDP global schedule for test dates are 48 days per year.</p><br>

						<p><h3 style="color:#4B0082;">IELTS Eligibility Criteria</h3></p>
						<p>IELTS or International English Language Testing System assesses the student’s abilities in all four skills – listening, reading, writing and speaking of the English language in under three hours. Students are required to be above 16 years of age to be able to appear for the IELTS Exam. Students who are applying to study in the United States, Canada, United Kingdom, New Zealand, and Australia are required to appear for the exam. Medical professionals who are planning to work or pursue further studies in the United States, the United Kingdom, and Australia are required to take the test. Candidates who are planning to settle down permanently in Canada, Australia or New Zealand are also required to take the test.</p><br>

						<p><h3 style="color:#4B0082;">Latest News for IELTS 2019</h3></p>
						<p>The Nursing and Midwifery Council (NMC) based out of the United Kingdom has recently announced changes to its IELTS requirements for nurses and midwives who wish to work in the United Kingdom. Earlier, all nurses were required to score 7.0 (out of 9) in each of the 4 papers (Reading, Writing, Listening, Speaking) in the IELTS Academic English test in 1 sitting in order to satisfy NMC criteria. However, under the new changes, 7.0 is still required in the 4 Academic IELTS papers, but can now be taken from 2 separate tests, as long as they are within 6 months of each other, and the test-taker scores a minimum 6.5 in all papers. This means a nurse can score 7.0 in 2 papers in 1 test and then 7.0 in the other 2 papers in a subsequent test.</p><br>

						<p><h3 style="color:#4B0082;">IELTS Exam Pattern</h3></p>
						<p>IELTS Syllabus includes four sections - Reading, Listening, Speaking and Writing. You get marked on these four sections and you get the IELTS total score as well. The total score is the sum of the scores in the four skill areas.<br>
						The total test duration is 2 hours and 45 minutes<br>
						Here is the IELTS paper pattern -</p><br>
						<br>
					
					<table >
					  <tr >
					    <th>Section</th>
					    <th>Duration</th>
					    <th>IELTS Academic</th>
					     </tr>
					  <tr >
					    <td>Listening</td>
					    <td>30 minutes</td>
					    <td>It encompasses four recorded monologues and conversations</td>
					     </tr>
					  <tr >
					    <td>Reading</td>
					    <td>60 minutes </td>	
					    <td>Three long reading passages with tasks.<br>
						Texts range from descriptive and factual to discursive, and analytical includes non-verbal material like diagrams, graphs, and illustrations texts are authentic (taken from books, journals, and newspapers)</td>		    
					  </tr>
					  <tr>
					    <td>Writing</td>
					    <td>60 minutes</td>	
					    <td>A writing task of at least 150 words where the candidate must summarize, describe or explain table, graph, chart or diagram, and another short essay task of at least 250 words</td>		    
					  </tr>
					  <tr >
					    <td>Speaking</td>
					    <td>11 to 14 minutes</td>	
					    <td>The face-to-face interview includes short questions, speaking at length about a familiar topic and a structured discussion. </td>		    
					  </tr>
					  
					</table>

					
					<br>
					
					<p>Listening, Reading and Writing sections are tested in one sitting. Speaking section may be on the same day or up to seven days before or after other tests. </p></br>
					
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