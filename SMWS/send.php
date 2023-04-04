 <?
 include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
// use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
$mail = new PHPmailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth= true;
$mail->Username = 'smsportal01@gmail.com';
$mail->Password = 'ihecogloarbhjcdt';
$mail->SMTPSecure= 'ssl';
$mail->Port = 465;

$mail->setfrom('smsportal01@gmail.com');
$mail->addAddress($_POST["email"]);

$mail->isHTML(true);
 $mail->Subject = $_POST["email"];
 $mail->Body = $_POST["uPassword"];

$mail->send();

  
  
echo
"
<script>
alert('User Add And Sent Succefully');

</script>
";


}




?> 