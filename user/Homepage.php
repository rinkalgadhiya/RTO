<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
    <style>
    *{
        margin: 0%;
        font-family: 'Lucida Sans';
        overflow-x: hidden;
    }
    nav ul {
        margin: 0;
        padding: 0;
        background-color:black;
        color: aqua;
        overflow: hidden;
        z-index: 6;
    }
    nav li {
        float: left;
    }
    nav li a {
        display: block;
        overflow: hidden;
        color:aqua;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        z-index: 6;
    }
    nav li a:hover {
        background-color: aqua;
        color: black;
    }
    .dropdown-content {
        display: none;
        overflow: hidden;
        position: absolute;
        background-color: aqua;
        color: black;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 6;
    }
    .dropdown-content a {
        color: black;
        overflow: hidden;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        z-index: 6;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .dropdown-content a:hover{
        background-color: black;
        color: aqua;
    }
    .BG{
        position: absolute;
        top: 10%;
        left: 0%;
        width: 100%;
        height: 100%;
        z-index: 2;
    }
    .whitebg{
        position: absolute;
        top: 5.5%;
        left: 0%;
        width: 100%;
        height: 100%;
        z-index: 5;
    }
    .BG2{
        position: absolute;
        top: 100%;
        left: 0%;
        width: 100%;
        height: 80%;
        z-index: 4;
    }
    .aboutusbg{
        position: absolute;
        top: 100%;
        left: 0%;
        height: 80%;
        width: 100%;
        z-index: 5;
    }
    .hcolor{
        position: absolute;
        top: 27%;
        left: 6%;
        color: red;
        animation-name: fade;
        animation-duration: 3s;
        animation-fill-mode: forwards;
        z-index: 5;
        font-size: xx-large;
    }
    @keyframes fade{
        from{opacity: 0%;}
        to{opacity: 100%;}
    }
    .header{
        position:absolute;
        top: 27%;
        font-size: xx-large;
        animation-name: slide;
        animation-duration: 1.8s;
        animation-fill-mode: forwards;
        z-index: 4;
    }
    @keyframes slide{
        from{left: -10%;}
        to{left: 10%;}
    }
    .aboutus{
        position: absolute;
        bottom: -6.5%;
        left: 41%;
        font-size: 60px;
        z-index: 5;
    }
    .logout{
        border: 1px solid black;
        border-radius: 31px;
        position: absolute;
        bottom: 3%;
        width: 9.5%;
        background-color: aqua;
        color:black;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: x-large;
        text-decoration: none ;
        padding: 6px 2px 0px 5px;
        animation-name: logout;
        animation-duration: 1.8s;
        animation-fill-mode: forwards;
        z-index: 6;
        transition-timing-function: 0.4s;
    }
    @keyframes logout{
        from{right: -25%;}
        to{right: 1%;}
    }
    .logo{
        position:absolute;
        top: 8%;
        right: 2%;
        z-index: 5;
        animation-name: slide1;
        animation-duration: 1.8s;
        animation-fill-mode: forwards; 
    }
    @keyframes slide1{
        from{right: -25%;}
        to{right: 2%;}
    }
    .buildings{
        z-index: 3;
        position: absolute;
        animation-name: slide2;
        animation-duration: 1.8s;
        animation-fill-mode: forwards; 
    }
    @keyframes slide2{
        from{top: 100%;}
        to{top: 12%;}
    }
    .info{
        position: absolute;
        bottom: -41%;
        left: 23%;
        z-index: 6;
        font-size: 20px;
    }
    /* .tr1{
        padding-left: 50px; 
    }
    .tr2{
        padding-left: 50px;
    }
    .tr3{
        padding-left: 50px;
    } */
    .td2{
        padding-left: 170px;
    }
    .td3{
        padding-left: 170px;
    }
    .tr3{
        opacity: 65%;
        font-size: 15px;
    }
    .tr4{ 
        width: 1000px;
        position: absolute;
        bottom: -55%;
        left: 20%;
        z-index: 6;
        opacity: 85%;
        font-size: 17px;
    }
    .profile{
        height: 100px;
        
        border: 2px black solid;
        border-radius: 42.5px;
    }
    </style>
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
    <img class="whitebg" src="whiteBG.png">
  <img class="BG" src="Scrap_BG.jpg">
  <img class="aboutusbg" src="whiteBG.png">
  <a class="logout" href="../Login.php"><table><tr><td><img src="ltry1.png" height="50px" width="50px"></td><td>Logout</td></tr></table></a>
  </div>
  <div class="header">
    <h1> egional</h1><br>
    <h1> ransport</h1><br>
    <h1> ffice</h1>
  </div>
  <div class="hcolor">
    <h1>R</h1><br>
    <h1>T</h1><br>
    <h1>O</h1>
  </div>
  <div>
      <img class="logo" src="RTOlogo.png" height="125px" width="125px">
  </div>
  <div  class="buildings" >
    <img src="buildings.png" height="900px" width="1900px">
  </div>
  </div>
  <img class="BG2" src="Scrap_BG.jpg">
  <div class="aboutus">
        About Us
  </div>
  <div>
    <table class="info">
        <tr class="tr1">
            <td class="td1"><center><img class="profile" src="viken.jpg" width="80px"></center></td><td class="td2"><center><img class="profile" src="hardeep.jpg" width="85px"></center></td><td class="td3"><center><img class="profile" src="neel.jpg" width="75px"></center></td>
        </tr>
        <tr class="tr2">
            <td class="td1"><center>Viken Hadavani</center></td><td class="td2"><center>Hardeep Chavda</center></td><td class="td3"><center>Neel Otwani</center></td>
        </tr>
        <tr class="tr3">
            <td class="td1"><center>Documention<br>R & D</center></td><td class="td2"><center>Front-end &<br>Back-end developer</center></td><td class="td3"><center>Back-end developer</center></td>
        </tr>
    </table>
    <div class="tr4">Welcome to the RTO Web, your premium destination for all things related to road transport and licensing. We are dedicated to providing comprehensive information and efficient services to empower individuals and businesses in navigating the complex world of transportation regulations. Trust RTO Web to be your trusted partner in achieving compliance, enhancing safety, and promoting a seamless road transport experience.</div>
  </div>
</body>
</html>