<?php
// Generate random vehicle number plate
function generateNumberPlate() {
    $letters = range('A', 'Z');
    $numbers = range(0, 9);
  
    $plate = '';
    for ($i = 0; $i < 3; $i++) {
        $plate .= $letters[array_rand($letters)];
    }
  
    for ($i = 0; $i < 4; $i++) {
        $plate .= $numbers[array_rand($numbers)];
    }
  
    return $plate;
}

// Send email with number plate
function sendEmail($plate, $email) {
    $to = $email;
    $subject = 'Random Vehicle Number Plate';
    $message = 'The random number plate is: ' . $plate;
    $headers = 'From: sender@example.com' . "\r\n" .
        'Reply-To: sender@example.com' . "\r\n" .
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
    sendEmail($numberPlate, $email);

    echo "Email sent to $email with the random number plate: $numberPlate";
}
?>

<!-- HTML form to input email -->
<form method="post" action="">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Generate and Send</button>
</form>