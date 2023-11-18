<?php
    $serverbname="localhost";
    $username="root";
    $pass ="";
    $db="rto";
    $cn=mysqli_connect($serverbname,$username,$pass,$db);
    if(!$cn)
    {
        echo" Data base not connected.......";
    }

    if(isset($_POST['submit']))
    {
        $RVSFO= $_POST['RVSFO'];
        $vno = $_POST['vno'];
        $an = $_POST['ano'];
        
        $q = mysqli_query($cn,"INSERT INTO reg_scrap_vehicle(RVSFO , vehicle_no , adhar_no) VALUES ( '$RVSFO' , '$vno' , '$an' )");

        echo "<script>alert('Registration Success')</script>";   
        echo "<script>window.location='Homepage.php'</script>";       
    }
   else
   {
       echo " Data not inserted......";
       echo "<script>window.location='Scrap.php'</script>";
   }
?>