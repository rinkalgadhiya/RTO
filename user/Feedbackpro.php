<?php
    $serverbname="localhost";
    $username="root";
    $pass ="";
    $db="rto";
    $cn=mysqli_connect($serverbname,$username,$pass,$db);
    if(!$cn)
    {
        echo" Data base not connected......";
    }

    if(isset($_POST['submit']))
    {
        $rate= $_POST['rate'];
        $extra = $_POST['extra'];
        $email = $_POST['email'];
        
        $q = mysqli_query($cn,"INSERT INTO feedback(rate , extra , email) VALUES ( '$rate' , '$extra' , '$email' )");
        echo "<script>alert('Registration Success')</script>";
        echo "<script>window.location='Homepage.php'</script>";         
    }
   else
   {
       echo " Data not inserted......";
       echo "<script>window.location='feedback.php'</script>";
   }
?>