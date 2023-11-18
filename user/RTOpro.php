<?php
    $serverbname="localhost";
    $username="root";
    $pass ="";
    $db="rto";
    $cn=mysqli_connect($serverbname,$username,$pass,$db);
    if(!$cn)
    {
        echo" Data base not connected.......";
    }

    if(isset($_POST['submit']))
    {
        $vno= $_POST['rtono'];
        $email=$_POST['email'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        
        $q = mysqli_query($cn,"INSERT INTO rto_registration(vehicle_no,email,state,city) VALUES ( '$vno' , '$email' , '$state' , '$city')");

        echo "<script>alert('Registration Success Vehicle Number sent to your entered Email')</script>";          
    }
   else
   {
       echo " Data not inserted......";
   }

    if($city=='Ahemdabad (GJ-01)')
    {
        $cityno=substr($city,11,5);
    }
    elseif($city=='Mehsana (GJ-02)')
    {
        $cityno=substr($city,9,5);
    }
    elseif($city=='Rajkot (GJ-03)')
    {
        $cityno=substr($city,8,5);
    }
    elseif($city=='Bhavnagar (GJ-04)')
    {
        $cityno=substr($city,11,5);
    }
    elseif($city=='Surat (GJ-05)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Vadodara (GJ-06)')
    {
        $cityno=substr($city,10,5);
    }
    elseif($city=='Nadiad (GJ-07)')
    {
        $cityno=substr($city,8,5);
    }
    elseif($city=='Palanpur (GJ-08)')
    {
        $cityno=substr($city,10,5);
    }
    elseif($city=='Himmatnagar (GJ-09)')
    {
        $cityno=substr($city,13,5);
    }
    elseif($city=='Jamnagar (GJ-10)')
    {
        $cityno=substr($city,10,5);
    }
    elseif($city=='Junagadh (GJ-11)')
    {
        $cityno=substr($city,10,5);
    }
    elseif($city=='Kuchh-Bhuj (GJ-12)')
    {
        $cityno=substr($city,12,5);
    }
    elseif($city=='Surendrangar (GJ-13)')
    {
        $cityno=substr($city,14,5);
    }
    elseif($city=='Amreli (GJ-14)')
    {
        $cityno=substr($city,8,5);
    }
    elseif($city=='Valsad (GJ-15)')
    {
        $cityno=substr($city,8,5);
    }
    elseif($city=='Bharuch (GJ-16)')
    {
        $cityno=substr($city,9,5);
    }
    elseif($city=='Godhara (GJ-17)')
    {
        $cityno=substr($city,9,5);
    }
    elseif($city=='Gandhinagar (GJ-18)')
    {
        $cityno=substr($city,13,5);
    }
    elseif($city=='Bardoli (GJ-19)')
    {
        $cityno=substr($city,9,5);
    }
    elseif($city=='Dahod (GJ-20)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Navsari (GJ-21)')
    {
        $cityno=substr($city,9,5);
    }
    elseif($city=='Rajpipla (GJ-22)')
    {
        $cityno=substr($city,10,5);
    }
    elseif($city=='Anand (GJ-23)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Patan (GJ-24)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Porbandar (GJ-25)')
    {
        $cityno=substr($city,11,5);
    }
    elseif($city=='Vyara (GJ-26)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Ahemdabad East (GJ-27)')
    {
        $cityno=substr($city,16,5);
    }
    elseif($city=='Dang-Aahwa (GJ-30)')
    {
        $cityno=substr($city,12,5);
    }
    elseif($city=='Arvalli (GJ-31)')
    {
        $cityno=substr($city,9,5);
    }
    elseif($city=='Gir Somnath (GJ-32)')
    {
        $cityno=substr($city,13,5);
    }
    elseif($city=='Botad (GJ-33)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Chhotaudepur (GJ-34)')
    {
        $cityno=substr($city,14,5);
    }
    elseif($city=='Mahisagar (GJ-35)')
    {
        $cityno=substr($city,11,5);
    }
    elseif($city=='Morbi (GJ-36)')
    {
        $cityno=substr($city,7,5);
    }
    elseif($city=='Devbhumi Dwarka (GJ-37)')
    {
        $cityno=substr($city,17,5);
    }
    elseif($city=='Bavla (GJ-38)')
    {
        $cityno=substr($city,7,5);
    }

// -----------------------------------------------------------------------------------------------------------

   // Generate random vehicle number plate
   function generateNumberPlate() {
    $letters = range('A', 'Z');
    $numbers = range(0, 9);
  
    $plate ='';
    for ($i = 0; $i < 2; $i++) {
        $plate .= $letters[array_rand($letters)];
    }
  
    for ($i = 0; $i < 4; $i++) {
        $plate .= $numbers[array_rand($numbers)];
    }
  
    return $plate;
}
    
// ---------------------------------------------------------

// Send email with number plate
function sendEmail($plate,$email,$cityno) {
    $city=$cityno;
    $to = $email;
    $subject = 'Random Vehicle Number Plate';
    $message = 'We are Thankfull for registering your vehicle through RTO(Regional Transport Office)website. We appreciate your support, Within 1 month after registering your details visit your nearby RTO Office for inquest for your Number plate. Your Vehicle Number is  : '.$city .$plate;
    $headers = 'From: RTO@gmail.com' . "\r\n" .
        'Reply-To: RTO@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
  
    // Send the email
    mail($to, $subject, $message, $headers);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get email from form
    $email = $_POST['email'];
  
    // Generate a random number plate and send it via email
    $numberPlate = generateNumberPlate();
    sendEmail($numberPlate, $email,$cityno);

    // echo "Email sent to $email with the random number plate: $cityno$numberPlate";

    echo "<script>window.location='Homepage.php'</script>";
}
?>