<?php

    $serverbname="localhost";
    $username="root";
    $pass ="";
    $db="rto";
    $cn=mysqli_connect($serverbname,$username,$pass,$db);
    if(!$cn)
    {
        echo" Data base not connected.......";
    }

    if(isset($_POST['submit']))
    {
        $uname= $_POST['uname'];
        $email=$_POST['email'];
        $adharno = $_POST['adharno'];
        
        $q = mysqli_query($cn,"INSERT INTO exam(uname,email,adharno) VALUES ( '$uname' , '$email' , '$adharno')");

        echo "<script>alert('Exam date is sent to your registered Email')</script>";          
    }
   else
   {
       echo " Data not inserted......";
   }

   $email=$_POST['email'];

// Generate the target date
$targetDate = date('Y-m-d', strtotime("+10 days"));

// Prepare the email content
$subject = 'Reminder: Your target date is approaching!';
$message = "We hope this message finds you well and that your driving lessons have been progressing smoothly. We are writing to inform you about the eagerly awaited vehicle exam date.
The practical exam represents a significant milestone in your journey towards obtaining your driver's license. It is an opportunity for you to demonstrate your driving skills, knowledge of traffic rules, and ability to handle various road scenarios.    Exam Date : $targetDate";

// Set up the email headers
$headers = "From: rtogujarat99@example.com\r\n";
$headers .= "Reply-To: rtogujarat99@example.com\r\n";
$headers .= "Content-Type: text/html\r\n";

// Send the email
mail($email, $subject, $message, $headers);
echo "<script>window.location='Homepage.php'</script>";
?>