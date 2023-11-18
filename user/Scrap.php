<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scrap Vehicle</title>
    <link href="Scrap.css" rel="stylesheet">
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
        <center><h1 class="heading"><b class="head">R</b>egistered <b class="head">V</b>ehicle <b class="head">S</b>crapping <b class="head">F</b>acility</h1></center>
    <form action="Scrappro.php" method="post">
    <div class="RVSF_Vehicle">
        <table class="tab">
            <tr>
                <td><img src="RVSF_O.png" height="280px" width="280px"></td>
                <td class="v1"><img src="Vehicle_O.png" height="280px" width="280px"></td>
            </tr>
            <tr>
                <td align="center">RVSF Owner</td>
                <td align="center" >Vehicle Owner</td>
            </tr>
        </table>
    </div>
    <div class="login">
        <table>
            <tr>
                <td><input type="checkbox" name="RVSFO" value="RVSF Owner">RVSF Owner</td>
            </tr>
            <tr>
                <td class="txt">*Check this Means you are RVSF Employe or you are Vehicle Owner</td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td>Vehicle No. :</td>
            </tr>
            <tr>
                <td><input class="Itext" type="text" placeholder="Vehicle Number(Number plate)" name="vno" maxlength="10"></td>
            </tr>
            <tr></tr><tr></tr>
            <tr>
                <td>Aadher No. :</td>
            </tr>
            <tr>
                <td><input class="Itext" type="text" placeholder="Aadher Card Number" name="ano"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td align="center"><Button type="submit" class="button" name="submit">Submit</Button></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td align="center"class="txt">*Above Details Must Be Fullyfill</td>
            </tr>
        </table>
    </div>
    </form>
    <div class="topics">
        <ul>
            <li>The sell offer will be active for the defined time period. It will expire once the time period elapses. However, he/she can give an offer again to trade.</li>
            <li>Buyer can see the sell offers of the certificates where they can quote their buy price.</li>
            <li>Anyone who currently owns a Certificate of Deposit can sell before the expiry of it. Expiry of the Certificate is 2 years from the date of issuance.</li>
            <li>Sellers have to click on the trade button or they can visit the trading portal to sell.</li>
        </ul>
    </div>
</body>
</html>