<!DOCTYPE html>
<html lang="en">
<head>
    <title>RTO Registration</title>
    <link href="RTO Registrtion.css" rel="stylesheet">
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
        <center><h1 class="heading"><b class="head">RTO </b>Registration</h1></center>
    <div class="info">
        <form action="RTOpro.php" method="post">
        <table>
            <tr>
                <td colspan="2">Vehicle Registration Number :</td>
            </tr>
            <tr>
                <td><input class="it" type="text" placeholder="Enter Registration Number" maxlength="10" name="rtono"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>  
            <tr>
                <td colspan="2">Email :</td>
            </tr>
            <tr>
                <td><input class="it" type="text" placeholder="abc@gmail.com" name="email"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>  
            <tr>
                <td>State :</td>
            </tr>
            <tr>
                <td><center><select class="it1" name="state">
                    <option>Gujarat</option>
                    </select></center>
                </td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td>Select RTO :</td>
            </tr>
            <tr>
                <td><select class="it" name="city">
                    <option>Ahemdabad (GJ-01)</option>
                    <option>Mehsana (GJ-02)</option>
                    <option>Rajkot (GJ-03)</option>
                    <option>Bhavnagar (GJ-04)</option>
                    <option>Surat (GJ-05)</option>
                    <option>Vadodara (GJ-06)</option>
                    <option>Nadiad (GJ-07)</option>
                    <option>Palanpur (GJ-08)</option>
                    <option>Himmatnagar (GJ-09)</option>
                    <option>Jamnagar (GJ-10)</option>
                    <option>Junagadh (GJ-11)</option>
                    <option>Kuchh-Bhuj (GJ-12)</option>
                    <option>Surendrangar (GJ-13)</option>
                    <option>Amreli (GJ-14)</option>
                    <option>Valsad (GJ-15)</option>
                    <option>Bharuch (GJ-16)</option>
                    <option>Godhara (GJ-17)</option>
                    <option>Gandhinagar (GJ-18)</option>
                    <option>Bardoli (GJ-19)</option>
                    <option>Dahod (GJ-20)</option>
                    <option>Navsari (GJ-21)</option>
                    <option>Rajpipla (GJ-22)</option>
                    <option>Anand (GJ-23)</option>
                    <option>Patan (GJ-24)</option>
                    <option>Porbandar (GJ-25)</option>
                    <option>Vyara (GJ-26)</option>
                    <option>Ahemdabad East (GJ-27)</option>
                    <option>Dang-Aahwa (GJ-30)</option>
                    <option>Arvalli (GJ-31)</option>
                    <option>Gir Somnath (GJ-32)</option>
                    <option>Botad (GJ-33)</option>
                    <option>Chhotaudepur (GJ-34)</option>
                    <option>Mahisagar (GJ-35)</option>
                    <option>Morbi (GJ-36)</option>
                    <option>Devbhumi Dwarka (GJ-37)</option>
                    <option>Bavla (GJ-38)</option>
                </select></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td><center>
                    <button class="button" type="submit" name="submit">Submit</button>
                </center></td>
            </tr>
    </table>
    </form>
    </div>
    <div class="gj">
        <img src="gujrat.png" height="200px" width="200px">
    </div>
    <div class="ico">
        <img src="v_reg.png" height="250px" width="250px">
    </div>
    <div class="information">
        RTO (Regional Transport Office) vehicle registration is a process that involves registering a motor vehicle with the respective RTO in a specific region or state within a country. The purpose of vehicle registration is to establish ownership and legal recognition of the vehicle by the government authorities.
    </div>
</body>
</html>