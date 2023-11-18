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
        $unm= $_POST['uname'];
        $lnm = $_POST['lname'];
        $an = $_POST['adharno'];
        $mno = $_POST['mobileno'];
        $age = $_POST['age'];
        $vno= $_POST['vno'];
        $city= $_POST['city'];
        $email = $_POST['email'];
        $addr= $_POST['addr'];
        $gn= $_POST['gender'];
        
        $q = mysqli_query($cn,"INSERT INTO mcwg(name,lname,ano,mno,age,vno,city,email,addr,gender) VALUES ( '$unm' , '$lnm' , '$an' , '$mno' , '$age' , '$vno' , '$city' , '$email' , '$addr' , '$gn')");

        echo "<script>alert('Registration Success')</script>";  
        echo "<script>window.location='exam.php'</script>";       
    }
   else
   {
       echo " Data not inserted......";
       echo "<script>window.location='LMV.php'</script>";
   }
?>