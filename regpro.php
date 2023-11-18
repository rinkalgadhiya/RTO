<?php
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $vno = $_POST['vno'];
        $unm = $_POST['unm'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $utype = $_POST['utype'];

        $q=mysqli_query($cn,"select * from signup where unm='$unm' and pass = '$pass' ");
        if(mysqli_num_rows($q)!=0)
        {
            echo "<script>alert('User Already Exist Try Another Username....')</script>";
            echo "<script>window.location='login.php'</script>";
        }
        else
        {
            $q = mysqli_query($cn,"INSERT INTO `signup` (`id`, `vno`, `unm`, `pass`, `email`,`utype`) VALUES ('', '$vno', '$unm', '$pass', '$email','user')");

            echo "<script>alert('Registration Success')</script>";  
            echo "<script>window.location='login.php'</script>";
        }
    }
    else
    {
        echo "";
    }
?>