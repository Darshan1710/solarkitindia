<?php

include 'connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

$errors = [];
$errorFlag = false;
if (isset($_POST) && !empty($_POST)) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $product = trim($_POST['product']);
    $message = trim($_POST['message']);
    $subject = "Enquiry from website";

    if (empty($name)) {
        $errors['name'] = 'Name is required';
        $errorFlag = true;
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
        $errorFlag = true;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is not valid';
        $errorFlag = true;
    }

    if (empty($mobile)) {
        $errors['mobile'] = 'Mobile is required';
        $errorFlag = true;
    } else if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
        $errors['mobile'] = 'Mobile is not valid';
        $errorFlag = true;
    }

    if (empty($product)) {
        $errors['product'] = 'Product is required';
        $errorFlag = true;
    }

    if (empty($message)) {
        $errors['message'] = 'Message is required';
        $errorFlag = true;
    }

    if (!$errorFlag) {
        $sql = "INSERT INTO enquiry (name,email,mobile,message) VALUES('" . $name . "','" . $email . "','" . $mobile . "','" . $message . "')";
        //PHPMailer Object
        ob_start();
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 2;
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->From = "team@twowaycommunications.in";
        $mail->Username = "smartads.darshan@gmail.com";
        $mail->Password = "WagonR@2022";
        $mail->FromName = "Two Way Communications";
        $mail->addAddress("team@twowaycommunications.in", "Two Way Communications");
        $mail->addReplyTo("team@twowaycommunications.in", "Reply");
        $mail->addCC("team@twowaycommunications.in");
        $mail->addBCC("team@twowaycommunications.in");
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        try {
            $mail->send();
            ob_end_clean();
            $returnArr = array('errorFlag' => $errorFlag, 'message' => 'we will contact you shortly');
            echo json_encode($returnArr);
        } catch (Exception $e) {
            $returnArr = array('errorFlag' => $errorFlag, 'messages' => $mail->ErrorInfo);
            echo json_encode($returnArr);
        }
    } else {
        $returnArr = array('errorFlag' => $errorFlag, 'messages' => $errors);
        echo json_encode($returnArr);
    }
}
	

