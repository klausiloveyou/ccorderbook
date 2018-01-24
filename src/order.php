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
$s46p1 = "Size46 Piece1: ".(isset($_POST["46_1"]) ? $_POST["46_1"] : 0)."<br/>";
$s48p1 = "Size48 Piece1: ".(isset($_POST["48_1"]) ? $_POST["48_1"] : 0)."<br/>";
$s50p1 = "Size50 Piece1: ".(isset($_POST["50_1"]) ? $_POST["50_1"] : 0)."<br/>";
$s52p1 = "Size52 Piece1: ".(isset($_POST["52_1"]) ? $_POST["52_1"] : 0)."<br/>";
$s54p1 = "Size54 Piece1: ".(isset($_POST["54_1"]) ? $_POST["54_1"] : 0)."<br/>";
$s56p1 = "Size58 Piece1: ".(isset($_POST["56_1"]) ? $_POST["56_1"] : 0)."<br/>";
$s46p2 = "Size46 Piece2: ".(isset($_POST["46_2"]) ? $_POST["46_2"] : 0)."<br/>";
$s48p2 = "Size48 Piece2: ".(isset($_POST["48_2"]) ? $_POST["48_2"] : 0)."<br/>";
$s50p2 = "Size50 Piece2: ".(isset($_POST["50_2"]) ? $_POST["50_2"] : 0)."<br/>";
$s52p2 = "Size52 Piece2: ".(isset($_POST["52_2"]) ? $_POST["52_2"] : 0)."<br/>";
$s54p2 = "Size54 Piece2: ".(isset($_POST["54_2"]) ? $_POST["54_2"] : 0)."<br/>";
$s56p2 = "Size56 Piece2: ".(isset($_POST["56_2"]) ? $_POST["56_2"] : 0)."<br/>";
$s46p3 = "Size46 Piece3: ".(isset($_POST["46_3"]) ? $_POST["46_3"] : 0)."<br/>";
$s48p3 = "Size48 Piece3: ".(isset($_POST["48_3"]) ? $_POST["48_3"] : 0)."<br/>";
$s50p3 = "Size50 Piece3: ".(isset($_POST["50_3"]) ? $_POST["50_3"] : 0)."<br/>";
$s52p3 = "Size52 Piece3: ".(isset($_POST["52_3"]) ? $_POST["52_3"] : 0)."<br/>";
$s54p3 = "Size54 Piece3: ".(isset($_POST["54_3"]) ? $_POST["54_3"] : 0)."<br/>";
$s56p3 = "Size56 Piece3: ".(isset($_POST["56_3"]) ? $_POST["56_3"] : 0);

$mail = new PHPMailer(false);                  // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                               // Enable verbose debug output
    $mail->isSMTP();                                    // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                             // Enable SMTP authentication
    $mail->Username = '';  // SMTP username
    $mail->Password = '';                  // SMTP password
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
        .$s46p1.$s48p1.$s50p1.$s52p1.$s54p1.$s56p1
        .$s46p2.$s48p2.$s50p2.$s52p2.$s54p2.$s56p2
        .$s46p3.$s48p3.$s50p3.$s52p3.$s54p3.$s56p3;

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

echo "Thanks for your order. A copy has been sent to your email address: ".$email
?>
