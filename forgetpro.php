<?php
    include('connect.php');

    $vno = $_POST['vno'];
    $email = $_POST['email'];

    $q = mysqli_query($cn,"select * from signup where vno='$vno' and email='$email'");
    $r = mysqli_fetch_array($q);

    if($r[1]==$vno && $r[4]==$email)
    {
        echo "<script> alert('Your Password is: $r[3]  If you want to change the password request Admin.')</script>";
        echo "<script>window.location='login.php'</script>";
    }
    else
    {
        echo "<script> alert('Enter Valid Information....')</script>";
        echo "<script>window.location='forget.php'</script>";  
    }
?>