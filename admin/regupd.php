<?php
    include("connect.php");

        $id = $_GET['id'];

        $q = mysqli_query($cn,"select * from signup where id = '$id' ");

        echo "<style>
        *{
            margin: 0%;
            overflow: hidden;
            font-family: 'Lucida Sans';
        }
        body{
            background-image: url('blackBG.png');
        }
        .div1{
            position: absolute;
            top:19%;
            right:9%;
            border: 3px solid aqua; 
            border-radius:20px;
            padding-left: 20px;
            width:50%;
            color:aqua;
            animation-name: fade;
            animation-duration: 4s;
            animation-fill-mode: forwards;
        }
        @keyframes fade{
            from{opacity:0%;}
            to{opacity:100%;}
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
        table{
            color:aqua;
            font-size: xx-large;
            margin:90px 20px 20px 20px;
        }
        .button{
            color:Black;
            background-color: aqua;
            border-radius:30px;
            border: 3px solid white; 
            width:130px;
            height:45px;
            font-size: x-large;
            margin-bottom:50px; 
        }
        .button:hover{
            color:aqua;
            background-color: black;
        }
        input{
            border: 3px solid white;
            color:aqua;
            background-color: black;
            font-size: x-large;
            height:40px;
            width:360px;
            border-radius:20px;
        }
        .icon{
            height='500px';
            width:500px;
            position: absolute;
            top:15%;
            left:2%;
            animation-name: fade;
            animation-duration: 4s;
            animation-fill-mode: forwards;
        }
        </style>
        <form action='regupdpro.php' method='POST'>
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
        </nav><div class='div1'><center><table>";

        while($r = mysqli_fetch_array($q))
        {
            echo "<input type='hidden' name='id' value=".$id.">";

            echo "<tr><td>Username :</td>";
            echo "<td><input type='text' name='unm' value=".$r[1]."></td></tr>";

            echo "<tr><td>Password:</td>";
            echo "<td><input type='password' name='pass' value=".$r[2]."></td></tr>";

            echo "<tr><td>Vehical Number :</td>";
            echo "<td><input type='text' name='vno' value=".$r[3]."></td></tr>";

            echo "<tr><td>Email:</td>";
            echo "<td><input  type='text' name='email' value=".$r[4]."></td></tr>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
        }

        echo "<tr><td colspan='2'><center><input class='Button' type='submit' name='update' value='Update'></center></td></tr></table></center></div><img class='icon' src='update.png'>";
?>
