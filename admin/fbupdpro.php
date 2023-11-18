<?php

    include("connect.php");

        $id = $_POST['id'];
        $rate= $_POST['rate'];
        $extra = $_POST['extra'];
        $email = $_POST['email'];

    $q = mysqli_query($cn,"update feedback set rate = '$rate',extra='$extra',email='$email' where id = '$id' ");

    echo "<script>alert('Update successfully....')</script>";
    echo "<script>window.location='Home.php'</script>";
?>