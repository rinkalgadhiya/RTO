<?php
    session_start();

    $unm=$_POST['unm'];
    $pass=$_POST['pass'];

    include('connect.php');

    $q = mysqli_query($cn,"select * from signup where unm='$unm'");
    $r = mysqli_fetch_row($q);

    if($r[2]==$unm && $r[3]==$pass && $r[5]=='user')
    {
        session_start();
        $_SESSION['user']=$_POST['unm'];
        echo "<script> document.location='user/Homepage.php' </script>";
    }
    elseif($r[2]==$unm && $r[3]==$pass && $r[5]=='admin')
    {
        session_start();
        $_SESSION['admin']=$_POST['unm'];
        echo "<script> document.location='admin/Home.php' </script>";
    }
    else
    {
        echo "<script>alert('Your Information is Wrong....')</script>";
    }
?>