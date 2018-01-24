<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/PHPMailer/Exception.php";
require "vendor/PHPMailer/PHPMailer.php";
require "vendor/PHPMailer/SMTP.php";

error_reporting(E_ALL);

$ordersubject = "New Order: ".gmdate("Y-m-d");
$company = "Company: ".$_POST["company"]."<br/>";
$email = $_POST["email"];
$designerteam = "Designerteam: ".$_POST["designerteam"]."<br/>";
$designer = "Designer: ".$_POST["designer"]."<br/>";
$stylename = "Stylename: ".$_POST["stylename"]."<br/>";
$s46p4 = "Size46 Piece4: ".(isset($_POST["46_4"]) ? $_POST["46_4"] : 0)."<br/>";
$s48p4 = "Size48 Piece4: ".(isset($_POST["48_4"]) ? $_POST["48_4"] : 0)."<br/>";
$s50p4 = "Size50 Piece4: ".(isset($_POST["50_4"]) ? $_POST["50_4"] : 0)."<br/>";
$s52p4 = "Size52 Piece4: ".(isset($_POST["52_4"]) ? $_POST["52_4"] : 0)."<br/>";
$s54p4 = "Size54 Piece4: ".(isset($_POST["54_4"]) ? $_POST["54_4"] : 0)."<br/>";
$s56p4 = "Size58 Piece4: ".(isset($_POST["56_4"]) ? $_POST["56_4"] : 0)."<br/>";
$s46p5 = "Size46 Piece5: ".(isset($_POST["46_5"]) ? $_POST["46_5"] : 0)."<br/>";
$s48p5 = "Size48 Piece5: ".(isset($_POST["48_5"]) ? $_POST["48_5"] : 0)."<br/>";
$s50p5 = "Size50 Piece5: ".(isset($_POST["50_5"]) ? $_POST["50_5"] : 0)."<br/>";
$s52p5 = "Size52 Piece5: ".(isset($_POST["52_5"]) ? $_POST["52_5"] : 0)."<br/>";
$s54p5 = "Size54 Piece5: ".(isset($_POST["54_5"]) ? $_POST["54_5"] : 0)."<br/>";
$s56p5 = "Size56 Piece5: ".(isset($_POST["56_5"]) ? $_POST["56_5"] : 0)."<br/>";
$s46p6 = "Size46 Piece6: ".(isset($_POST["46_6"]) ? $_POST["46_6"] : 0)."<br/>";
$s48p6 = "Size48 Piece6: ".(isset($_POST["48_6"]) ? $_POST["48_6"] : 0)."<br/>";
$s50p6 = "Size50 Piece6: ".(isset($_POST["50_6"]) ? $_POST["50_6"] : 0)."<br/>";
$s52p6 = "Size52 Piece6: ".(isset($_POST["52_6"]) ? $_POST["52_6"] : 0)."<br/>";
$s54p6 = "Size54 Piece6: ".(isset($_POST["54_6"]) ? $_POST["54_6"] : 0)."<br/>";
$s56p6 = "Size56 Piece6: ".(isset($_POST["56_6"]) ? $_POST["56_6"] : 0);

$mail = new PHPMailer(false);                  // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                               // Enable verbose debug output
    $mail->isSMTP();                                    // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                             // Enable SMTP authentication
    $mail->Username = '';                               // SMTP username
    $mail->Password = '';                               // SMTP password
    $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                  // TCP port to connect to

    //Recipients
    $mail->setFrom('', 'Chicy Cleptomanics');
    $mail->addAddress($email);                          // Add a recipient
    $mail->addReplyTo('');

    //Content
    $mail->isHTML(true);
    $mail->Subject = $ordersubject;
    $mail->Body    = $company."Email: ".$email."<br/>".$designerteam.$designer.$stylename
        .$s46p4.$s48p4.$s50p4.$s52p4.$s54p4.$s56p4
        .$s46p5.$s48p5.$s50p5.$s52p5.$s54p5.$s56p5
        .$s46p6.$s48p6.$s50p6.$s52p6.$s54p6.$s56p6;

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

echo "Thanks for your order. A copy has been sent to your email address: ".$email
?>
