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


<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Register Form</h2>
        <form method="post" action="register.php" autocomplete="off">
  		<?php include('errors.php'); ?>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">User Name</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" id="firstName" name="username" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Password</label>
                <div class="col-md-9">
                    <input type="password" path="lastName" id="lastName" name="password" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Confirm Password</label>
                <div class="col-md-9">
                    <input type="password" path="lastName" id="lastName" name="password1" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-9">
                    <input type="tel" path="lastName" id="lastName" name="mobno" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="sex" >Sex</label>
                <div class="col-md-9" class="form-control input-sm">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="sex" value="male" checked> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="sex" value="female"> Female
				        </label>
	                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob" >Date of birth</label>
                <div class="col-md-9">
                    <input type="date" path="dob" id="dob" name="dob" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="email" path="email" id="email" name="email" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                    <select path="country" id="country" name="country" class="form-control input-sm">
                        <option value="">Select Country</option>
                        <option value="Japan">Japan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Italy">Italy</option>
                        <option value="Greece">Greece</option> 
                        <option value="Iceland">Iceland</option> 
                        <option value="China">China</option> 
                        <option value="Doha">Doha</option> 
                        <option value="Irland">Irland</option> 
                        <option value="Srilanka">Srilanka</option> 
                        <option value="Russia">Russia</option> 
                        <option value="Hong Kong">Hong Kong</option> 
                        <option value="Germany">Germany</option>
                        <option value="Canada">Canada</option>  
                        <option value="Mexico">Mexico</option> 
                        <option value="Nepal">Nepal</option>
                        <option value="Norway">Norway</option> 
                        <option value="Oman">Oman</option>
                        <option value="India">India</option>  
                        <option value="Kuwait">Kuwait</option> 
                        <option value="Indonesia">Indonesia</option>  
                        <option value="Spain">Spain</option>
                        <option value="Thailand">Thailand</option>  
                        <option value="Saudi Arabia">Saudi Arabia</option> 
                        <option value="Poland">Poland</option> 
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Work Experience</label>
                <div class="col-md-9">
                    <select path="country" id="country" name="workexperience" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option> 
                        <option value="4">4</option> 
                        <option value="5">5</option> 
                        <option value="6">6</option> 
                        <option value="7">7</option> 
                        <option value="8">8</option> 
                        <option value="9">9</option> 
                        <option value="10">10</option> 
                        <option value="11">11</option>
                        <option value="12">12</option>  
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>      
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Education</label>
                <div class="col-md-9">
                    <select path="country" id="country" name="education" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="Bsc">Bsc</option>
                        <option value="BTech">BTech</option>
                        <option value="Mca">Mca</option>
                        <option value="BCA">BCA</option>
                        <option value="Diploma">Diploma</option> 
                        <option value="Other">Other</option> 
                    </select>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Subjects</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Register" name="register" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
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