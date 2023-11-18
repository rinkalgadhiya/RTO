<!DOCTYPE html>
<html lang="en">
    <title>Feedback</title>
    <link href="Feedback.css" rel="stylesheet">
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
        <li><a href="#">Status</a></li>
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
    <center><h3 class="heading"><b class="head">F</b>eedback</h3></center>
    <div class="testbox">
        <form action="Feedbackpro.php" method="post">
            Please take a few minutes to give us feedback about our service by filling in this short Customer Feedback Form. We are conducting this research in order to measure your level of satisfaction with the quality of our service. We thank you for your participation.         
            <table align="center">
                <tr>
                    <th class="first-col"></th>
                    <th>Very Good</th>
                    <th>Good</th>
                    <th>Fair</th>
                    <th>Poor</th>
                    <th>Very Poor</th>
                </tr>
                <tr>
                    <td class="first-col">How would you rate your overall experience with our service?</td>
                    <td><input type="radio" value="Very Good" name="rate" /></td>
                    <td><input type="radio" value="Good" name="rate" /></td>
                    <td><input type="radio" value="Fair" name="rate" /></td>
                    <td><input type="radio" value="Poor" name="rate" /></td>
                    <td><input type="radio" value="Very Poor" name="rate" /></td>
                </tr>
            </table>
            <br>
            <center>
            <h4>What should we change in order to live up to your expectations?</h4>
                <textarea rows="4" name="extra"></textarea>
            <br>
            <h4>Email</h4>
                <small>Only if you want to hear more from us:</small>
                <input class="email" type="email" name="email" />
            </center>
                <div class="btn-block">
                    <button type="submit" name="submit">Send Feedback</button>
                </div>
        </form>
    </div> 
</body>
</html>