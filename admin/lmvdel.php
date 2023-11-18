<?php
    $id=$_GET['id'];

    include("connect.php");

    $q = mysqli_query($cn,"DELETE FROM lmv1 WHERE id='$id' ");

    echo "<script>window.location='Home.php'</script>";

?>