<?php
    include('connect.php');

    echo "<html><head><style>
    *{
        margin: 0%;
        overflow: hidden;
        font-family: 'Lucida Sans';
    }
    body{
        background-image: url('blackBG.png');
    }
    nav ul {
        margin: 0;
        padding: 0;
        background-color:aqua;
        color: black;
        overflow: hidden;
        z-index: 5;
    }
    nav li {
        float: left;
    }
    nav li a {
        display: block;
        color:black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        z-index: 5;
    }
    nav li a:hover {
        background-color: black;
        color: aqua;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: black;
        color: aqua;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 5;
    }
    .dropdown-content a {
        color: aqua;
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
        background-color: aqua;
        color: black;
    }
    .link{
        color:white;
        text-decoration: none;
    }
    .head{
        width: 350px;
        height: 100px;
        background-color: aqua;
        border-radius: 25px;
        font-size: 80px;
        padding-left: 3%;
        position: absolute;
        left: 70%;
        animation-name: head;
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }
    @keyframes head{
        from{bottom: 100%;}
        to{bottom: 85.9%;}
    }
    table{
        position: absolute;
        top:20%;
        left:5%;
        border: 3px solid aqua; 
        border-radius:20px;
        padding-left: 20px;
        width:90%;
        color:aqua;
        animation-name: fade;
        animation-duration: 4s;
        animation-fill-mode: forwards;
    }
    @keyframes fade{
        from{opacity:0%;}
        to{opacity:100%;}
    }
    </style></head>
    <body>
    <nav>
        <ul>
            <li><a href='Home.php'>Home</a></li>
            <li class='dropdown'>
            <a class='dropbtn'>Licence</a>
                <div class='dropdown-content'>
                    <a href='LMV.php'>LMV</a>
                    <a href='MCWG.php'>MCWG</a>
                    <a href='MCWOG.php'>MCWOG</a>
                </div>
            </li>
            <li><a href='exam.php'>Exam</a></li>
            <li><a href='reg.php'>Signup</a></li>
            <li class='dropdown'>
            <a class='dropbtn'>More</a>
            <div class='dropdown-content'>
                <a href='RTO Registration.php'>RTO Registration</a>
                <a href='Scrap.php'>Scarp Vehicle</a>
            </div>
            </li>
            <li><a href='Feedback.php'>Feedback</a></li>
        </ul>
    </nav><div class='head'>MCWOG</div>";
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Firstname</th>";
        echo "<th>Lastname</th>";
        echo "<th>Adhar No</th>";
        echo "<th>Mobile No</th>";
        echo "<th>Age</th>";
        echo "<th>Vehicle No</th>";
        echo "<th>City</th>";
        echo "<th>Email</th>";
        echo "<th>Gender</th>";
        echo "<th>Task 1</th>";
        echo "<th>Task 2</th>";
        echo "</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";

        $q = mysqli_query($cn,"select * from mcwog");

    while($r = mysqli_fetch_array($q))
    {
        echo "
        <tr>
            <td><center>".$r[0]."</center></td>
            <td><center>".$r[1]."</center></td>
            <td><center>".$r[2]."</center></td>
            <td><center>".$r[3]."</center></td>
            <td><center>".$r[4]."</center></td>
            <td><center>".$r[5]."</center></td>
            <td><center>".$r[6]."</center></td>
            <td><center>".$r[7]."</center></td>
            <td><center>".$r[8]."</center></td>
            <td><center>".$r[10]."</center></td>

            <td><center><a class='link' href='regupd.php?id=".$r[0]." '>UPDATE</a></center></td>
            <td><center><a class='link' href='regdel.php?id=".$r[0]." '>DELETE</a></center></td>
        </tr>";
    }
        echo "</table></body></html>";
?>