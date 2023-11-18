<?php

    include("connect.php");

    $id = $_POST['id'];
    $unm = $_POST['unm'];
    $pass = $_POST['pass'];
    $vno = $_POST['vno'];
    $email = $_POST['email'];

    $q = mysqli_query($cn,"update signup set unm = '$unm',pass='$pass',vno='$vno',email='$email' where id = '$id' ");

    echo "<script>alert('update successfully....')</script>";
    echo "<script>window.location='reg.php'</script>";
?>