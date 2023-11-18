<?php
    $id=$_GET['id'];

    include("connect.php");

    $q = mysqli_query($cn,"DELETE FROM exam WHERE id='$id' ");

    echo "<script>alert('Delete successfully.....')</script>";
    echo "<script>window.location='Home.php'</script>";

?>