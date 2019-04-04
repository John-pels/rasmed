<?php 
include 'includes/config.php';
 ?>

 <?php

   if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] ) {
      
    if (isset($_POST['submit'])) {
  $nameofschool = strip_tags(htmlspecialchars($_POST['nameofschool']));
      $nameofprincipal = strip_tags(htmlspecialchars($_POST['nameofprincipal']));
        $email = strip_tags(htmlspecialchars($_POST['email']));
          $number = strip_tags(htmlspecialchars($_POST['number']));
            $schooladdress = strip_tags(htmlspecialchars($_POST['schooladdress']));
        $state = $_POST['state'];

            var_dump($_POST);
      $secret = "6LdmBIoUAAAAAFSCDifHu-6GjCIrleMUGDtccjj0";
      $ip = $_SERVER['REMOTE_ADDR'];
      $captcha = $_POST['g-recaptcha-response'];
      $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
      var_dump($rsp);
      $arr = json_decode($rsp,TRUE);

        // <!-- For Recaptcha Verification -->

 

      $query = mysqli_query($con, "INSERT INTO customer_info (name_Of_school,principal_name,email,phone_number,address,state,date) VALUES ('$nameofschool','$nameofprincipal','$email','$number','$schooladdress','$state',CURRENT_TIMESTAMP)");

      if ($query) {
        echo '<script>
        alert("Your Informaton has been submitted successfully!");
        window.location =  "./index.php";
        </script>';

          require 'PHPMailer/PHPMailerAutoload.php';

          
$mail = new PHPMailer;

$mail->isSMTP(true);                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'slimmjohn4bright@gmail.com';          // SMTP username
$mail->Password = 'oluseyi1'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom($nameofschool);
$mail->addReplyTo($email);
$mail->addAddress('slimmjohn4bright@gmail.com');   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = 'Name of School: '."<b>$nameofschool</b>".'<br>';
$bodyContent .= 'Name of Principal: '."<b>$nameofprincipal</b>". '<br>';
$bodyContent .= 'School Email: '."<b>$email</b>". '<br>';
$bodyContent .= 'Official Number: '."<b>$number</b>". '<br>';
$bodyContent .= 'School Address: '."<b>$schooladdress</b>". '<br>';
$bodyContent .= 'State: '."<b>$state</b>".'<br>';



$mail->Subject = $nameofschool;
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

      }

       else {
          echo '<script>
        alert("Error in Submission, please try again!");
        window.location =  "./index.php";
        </script>';
        }
}
  }
      

    ?>


