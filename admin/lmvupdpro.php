<?php

    include("connect.php");

        $id = $_POST['id'];
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

    $q = mysqli_query($cn,"update lmv1 set name = '$unm',lname='$lnm',ano='$an',mno='$mno',age='$age',vno='$vno',city='$city',email='$email',addr='$addr',gender='$gn' where id = '$id' ");

    echo "<script>alert('update successfully....')</script>";
    echo "<script>window.location='Home.php'</script>";
?>