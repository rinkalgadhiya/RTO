<?php
    $id=$_GET['id'];

    include("connect.php");

    $q = mysqli_query($cn,"DELETE FROM mcwg WHERE id='$id' ");

    echo "<script>window.location='Home.php'</script>";

?>