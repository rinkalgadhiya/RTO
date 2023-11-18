<?php

    include("connect.php");

        $id = $_POST['id'];
        $uname= $_POST['uname'];
        $email = $_POST['email'];
        $ano = $_POST['ano'];

    $q = mysqli_query($cn,"update exam set uname = '$uname',email='$email',adharno='$ano' where id = '$id' ");

    echo "<script>alert('Update successfully....')</script>";
    echo "<script>window.location='Home.php'</script>";
?>