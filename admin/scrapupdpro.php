<?php

    include("connect.php");

        $id = $_POST['id'];
        $RVSFO= $_POST['RVSFO'];
        $vno = $_POST['vno'];
        $ano = $_POST['ano'];

    $q = mysqli_query($cn,"update reg_scrap_vehicle set RVSFO = '$RVSFO',vehicle_no='$vno',adhar_no='$ano' where id = '$id' ");

    echo "<script>alert('Update successfully....')</script>";
    echo "<script>window.location='Home.php'</script>";
?>