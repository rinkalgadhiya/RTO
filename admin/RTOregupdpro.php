<?php

    include("connect.php");

        $id = $_POST['id'];
        $vno= $_POST['rtono'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $city = $_POST['city'];

    $q = mysqli_query($cn,"update rto_registration set vehicle_no = '$vno',email='$email',state='$state',city='$city' where id = '$id' ");

    echo "<script>alert('update successfully....')</script>";
    echo "<script>window.location='Home.php'</script>";
?>