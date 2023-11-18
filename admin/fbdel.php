<?php
    $id=$_GET['id'];

    include("connect.php");

    $q = mysqli_query($cn,"DELETE FROM feedback WHERE id='$id' ");

    echo "<script>alert('Delete successfully.....')</script>";
    echo "<script>window.location='Home.php'</script>";

?>