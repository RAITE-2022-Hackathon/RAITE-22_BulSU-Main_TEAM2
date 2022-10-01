<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $EMAIL = "ecoin.testapp@gmail.com";
    $PASS = "vtzjkasjzejkuttk";
    //Password: Password2022
    //Load Composer's autoloader
    require_once( __DIR__."/../vendor/autoload.php" );
    require_once __DIR__. "/session.php";
    require_once __DIR__. "/user/generate2FA.php";
    
    if (isset($_POST["Send2FA"]) ){
        $clientEmail=$_POST["Send2FA"];
        global $EMAIL, $PASS;
        $mail = new PHPMailer(true);
        try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $EMAIL;                     //SMTP username
        $mail->Password   = $PASS;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ecoin.testapp@gmail.com', 'Registration 2FA');
        $mail->addAddress($clientEmail);     //Add a recipient
       

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '2FA REGISTRATION';
        $mail->Body    = "This is your 2FA Code to continue with your registration: <b>".gen2FA()."</b>";

        $mail->send();
        return http_response_code(200);
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    
    }
?>