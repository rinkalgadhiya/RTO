<!DOCTYPE html>
<html lang="en">
<head>
    <title>LMV</title>
    <link href="LMV.css" rel="stylesheet">
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
        <h1><b class="head">L</b>ight <b class="head">M</b>otor <b class="head">V</b>ehicle</h1>
    </div>
    <div class="BGI">
        <img src="car.png" height="200px" width="450px">
    </div>
    <form action="LMVpro.php" method="post">
        <div class="ip">
            <table>
                <tr>
                    <td>Firstname:</td>
                    <td> </td>
                    <td>Lastname:</td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Username" name="uname"required></td>
                    <td> </td>
                    <td><input type="text" placeholder="Surname" name="lname"required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Adhar card no:</td>
                    <td> </td>
                    <td>Mobile no:</td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="0000-0000-0000" maxlength="14"name="adharno"required></td>
                    <td> </td>
                    <td><input type="text" placeholder="+91" maxlength="10"name="mobileno"required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Age:</td>
                    <td> </td>
                    <td>Vehicle no:</td>
                </tr>
                <tr>
                    <td><input type="number" placeholder="18+" name="age"required></td>
                    <td> </td>
                    <td><input type="text" placeholder="GJ-00-xx-0000" maxlength="13"name="vno"required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>City :</td>
                    <td> </td>
                    <td>email id:</td>
                </tr>
                <tr>
                    <td><select class="list" name="city"required>
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
                    <td> </td>
                    <td><input type="email" placeholder="abc@gmail.com" name="email"required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Home Address:</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea placeholder="xyz,205,xyzstreet or road cityname (pincode)" rows="5"cols="37" name="addr"required></textarea>
                    </td>
                    <td class="gender" >
                        Gender:
                        <table>
                            <tr>
                                <td><input type="radio" placeholder="Male"name="gender" value="Male"></td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td><input type="radio" placeholder="Female"name="gender" value="Female"></td>
                                <td>Female</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <center><input type="submit" name="submit"  value="submit" class="button"></center>
        </div>
    </form>
</body>
</html>
