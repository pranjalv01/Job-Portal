<?php include('server.php') ?>

<?php
$db = mysqli_connect('localhost', 'root', '', 'registration') or die('could not connect to database');

$username = $_SESSION['username'];
$query=mysqli_query($db,"select * from users where username='$username'");
$row=mysqli_fetch_array($query);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "pranjal.verma_cs16@gla.ac.in";
  $mail->Password = "p78438085";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "ssl";
  $mail->Port = 465; //587
  //Set TCP port to connect to
  
  $mail->From = "pranjal.verma_cs16@gla.ac.in";
  $mail->FromName = "Job Portal";
  
  $mail->AddAddress('pranjal.verma117@gmail.com');
  
  $mail->isHTML(true);
 
  $mail->Subject = "Job Application ";
  $mail->Body =($row["username"])." applied for the job  "." <br> The email id of the user is ".($row["email"])."<br> and the mobile number is ".($row["mobno"]);
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }