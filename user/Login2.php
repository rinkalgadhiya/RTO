<?php
    $uname =$_POST['uname'];
    $psw = $_POST['psw'];

    $cn=mysqli_connect("localhost","root","rto");

    $data=mysqli_query($cn,"insert into data values('','$uname','$psw')");
?>
<!DOCTYPE html>
<html>
<head>
<title>Loginpage</title>
<link href="Login2.css" rel="stylesheet">
</head>
<body background="GBG.jpg">
    <form action="#" method="POST">
        <center><div class="grey">
            <div class="imgcontainer">
                <img src="User.png" height="100px" width="100px" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>Username : </b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </div>
            <div class="container">
                <label for="psw"><b>Password : </b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <center><button type="submit" class="login"><center class="space">Login</center></button></center>
                <select class="utype" name="utype">
                    <option>User</option>
                    <option>Admin</option>
                </select>
            </div>
            <div class="container" style="background-color:grey">
                <center><button type="button" class="cancelbtn">Cancel</button></center>
                <a href="#"class="psw">Forget Password ?</a></span>
            </div>
        </div></center>
    </form>
</body>
</html>
