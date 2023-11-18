<!DOCTYPE html>
<html lang="en">
<head>
<title>LMV</title>
<link rel="icon" type="image/png" href="RTOlogo.png">
<style>
.head
{
    color: red;
}
.heading
{
    position:absolute;
    top: 8%;
    left: 45%;
    font-size:55px;
}
.Logo
{
    position: absolute;
    left: 2%;
    top: 2%;
}
body
{
    background-image: url('Scrap_BG.jpg');
}
.BGI
{
    position: absolute;
    opacity: 55%;
    top: 24%;
    left: 5%;
}
.ip
{
    left: 35%;
    top: 20%;
    position: absolute;
    border: 5px double blue;
    padding: 20px 20px 20px 20px;
    border-radius: 10px;
    font-size: x-large;
}
input,textarea
{
    font-size: x-large;
    border: 2px solid black;
}
.list
{
    font-size: x-large;
    border: 2px solid black;
}
.button
{
    background-color: black;
    color: aqua;
    height: 50px;
    width: 150px;
    border-radius: 10px;
    font-size: x-large;
}
.button:hover
{
    background-color: aqua;
    color: black;
    border-radius: 15px;
}
.gender
{
    position: absolute;
    left: 70%;
}
*
{
    font-family: 'Lucida Sans';
    margin: 0%;
    overflow: hidden;
}
nav ul {
    margin: 0;
    padding: 0;
    background-color:black;
    color: aqua;
    overflow: hidden;
    z-index: 5;
}
nav li {
    float: left;
}
nav li a {
    display: block;
    color:aqua;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    z-index: 5;
}
nav li a:hover {
    background-color: aqua;
    color: black;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: aqua;
    color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 5;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    z-index: 5;
}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown-content a:hover{
    background-color: black;
    color: aqua;
}
</style>
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
    <center>
        <h1 class="heading"><b class="head">M</b>otor <b class="head">C</b>ycle <b class="head">W</b>ith <b class="head">G</b>ear</h1>
    </center>
    <div class="BGI">
        <img src="bike.png" height="400px" width="450px">
    </div>
    <form action="MCWGpro.php" method="post">
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
