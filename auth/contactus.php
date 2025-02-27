<?php include  "../components/navbar.php" ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "connection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `contactus` (`name`, `email`, `number`, `comment`, `data`) VALUES ( '$name', '$email', '$number', '$comment', current_timestamp())";
    $result = mysqli_query($conn , $sql);
    

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

if($result){
require('../phpMailer/Exception.php');
require('../phpMailer/SMTP.php');
require('../phpMailer/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mantajquery@gmail.com';                     //SMTP username
    $mail->Password   = 'gnhx iohf qaur uxui';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('zjaskiratsingh@gmail.com', 'Mailer');
    $mail->addAddress('mantajquery@gmail.com');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Testing PHPMailer';
    $mail->Body    = "Sender name: $name <br> Emaile: $email <br> Mobile No.: $number <br> Message: $comment";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: thank_you.php");
exit();
}
else{
  echo 'error..';
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-4">
  <form action="contactus.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Enter your mobile number</label>
    <input type="number" class="form-control" id="number" name="number" aria-describedby="number">
  </div>

  <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment"></textarea>
      <label for="floatingTextarea">Leave a comment</label>
</div>
  
  <button type="submit" name="snd" class="btn btn-primary my-4">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>