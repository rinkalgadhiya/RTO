<!DOCTYPE html>
<html>
<head>
    <title>Exam</title>
    <link href="exam.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="RTOlogo.png">
</head>
<body>
<nav>
    <ul>
        <li><a href="Homepage.php">Home</a></li>
        <li class="dropdown">
            <a class="dropbtn">Licence</a>
            <div class="dropdown-content">
                <a href="LMV.php">LMV</a>
                <a href="MCWG.php">MCWG</a>
                <a href="MCWOG.php">MCWOG</a>
            </div>
        </li>
        <li><a href="exam.php">Exam</a></li>
        <li class="dropdown">
            <a class="dropbtn">More</a>
            <div class="dropdown-content">
                <a href="Statedata.php">State Data</a>
                <a href="RTO Registration.php">RTO Registration</a>
                <a href="Trafficrules.php">Traffic Rules</a>
                <a href="Scrap.php">Scarp Vehicle</a>
            </div>
        </li>
        <li><a href="Feedback.php">Feedback</a></li>
    </ul>
</nav>
    <div class="logo">
        <a href="Homepage.php"><img src="RTOlogo.png" height="100px" width="100px"></a>
    </div>
    <div  class="heading">
        <h1><b class="head">E</b>xam <b class="head">S</b>chedule</h1>
    </div>
    <form  action="exampro.php" method="post">
        <div class="info">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td>Adhar no:</td>
                <td><input type="text" name="adharno"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td colspan="2"><center><input class="button" type="submit" value="Submit" name="submit"></center></td>
            </tr>
        </table>
        </div>
        <div class="note">
            Note :From counting the date of submission within 15-Days you have to visit your nearby RTO office as per issued date attach with your email for your Theoretical Exam<br><br>After clearing theoretical exam within 3-Months you have to visit at same RTO Office for Test Drive(Practical Exam) for completing the licence procedure.<br><br>If you are unable to clear Theoretical or Test Drive Exam then one must Re-register for Theoretical Exam.    
        </div>
        <div>
            <img class="icon" src="examschedule.png" height="500px" width="630px">
        </div>
    </form>
</body>
</html>