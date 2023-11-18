<?php
    include('connect.php');

    $cno = $_POST['cno'];
    $email = $_POST['email'];

    $q = mysqli_query($cn,"select * from signup where cno='$cno' and email='$email'");
    $r = mysqli_fetch_array($q);

    if($r[1]==$cno && $r[4]==$email)
    {
        echo "<script> alert('password is $r[3]')</script>";
        echo "<script>window.location='login.php'</script>";
    }
    else
    {
        echo "<script> alert('Enter Valid Information....')</script>";
        echo "<script>window.location='forget.php'</script>";  
    }
?>