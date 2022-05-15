<?php

$db = mysqli_connect('localhost', 'u420187958_solarkitindia', 'Drshn@1710', 'u420187958_solarkitindia');

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}



$errors = [];
$errorFlag = false;
if(isset($_POST) && !empty($_POST)){

	
	$first_name = trim($_POST['first_name']);
	$last_name  = trim($_POST['last_name']);
	$email      = trim($_POST['email']);
	$mobile 	= trim($_POST['mobile']);
	$field 		= trim($_POST['field']);
	$communityCheckbox 		= isset($_POST['communityCheckbox']) ? trim($_POST['communityCheckbox']) : '';

	if(empty($first_name)){
		$errors['first_name'] = 'First Name is required';
		$errorFlag = true;
	}

	if(empty($last_name)){
		$errors['last_name'] = 'Last Name is required';
		$errorFlag = true;
	}

	if(empty($email)){
		$errors['email'] = 'Email is required';
		$errorFlag = true;
	}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email'] = 'Email is not valid';
		$errorFlag = true;
	}

	if(empty($mobile)){
		$errors['mobile'] = 'Mobile is required';
		$errorFlag = true;
	}else if(!preg_match('/^[0-9]{10}+$/', $mobile)){
		$errors['mobile'] = 'Mobile is not valid';
		$errorFlag = true;
	}

	if(empty($field)){
		$errors['field'] = 'Field is required';
		$errorFlag = true;
	}

	if(empty($communityCheckbox)){
		$errors['communityCheckbox'] = 'Please select the checkbox';
		$errorFlag = true;
	}


	$filedata = fileUpload();

	$path = '';
	if($filedata['errorFlag']){
		$errorFlag = true;
		$errors['cv'] = $filedata['message'];
	}else{
		$path = $filedata['message'];
	}

	if(!$errorFlag){
		

		$sql = "INSERT INTO career (first_name,last_name,email,mobile,field,cv) VALUES('".$first_name."','".$last_name."','".$email."','".$mobile."','".$field."','".$path."')";

		//echo $sql;exit;
		if($db->query($sql) === TRUE){
			$message = 'Success';
		}else{
			$message = 'Failed';
		}
		

		$messagedata="<html><body><br>First Name: $first_name<br>
								  Last Name : $last_name<br>
								  Email: $email<br>
								  Field : $field
								  </body></html>"; 

	  //  $to="sales@solar-kit.in";
 			$to = 'kinidarshan07@gmail.com';
	  //  $to="libor.havlik@seznam.cz";

	    $subject="New contact from Solar Kit";

	//send email

	    $headers = 'From: '.strip_tags($email) . '\r\n';

		$headers .= "Reply-To: ". strip_tags($email) . "\r\n";

	 	$headers .= "MIME-Version: 1.0\r\n";

		$headers .= 'X-Mailer: PHP/' . phpversion();

		 $headers .= "Content-Type: text/html; charset=utf-8\r\n";

	  //  mail($to, $subject, $message,$headers);

	    $returnArr = array('errorFlag'=>$errorFlag,'message'=>'we will contact you shortly');
	    echo json_encode($returnArr);
	}else{
		$returnArr = array('errorFlag'=>$errorFlag,'messages'=>$errors);
		echo json_encode($returnArr);
	}
	
}

function fileUpload(){

	$errorFlag = false;
	if(empty($_FILES['cv']['name'])){
		$errorFlag = true;
		$message = 'Please choose file';
	}else{
		$allowed = array('txt', 'doc', 'ppt','docx','pdf');
		$filename = $_FILES['cv']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if (!in_array($ext, $allowed)) {
		    $errorFlag = true;
		    $message = 'File is not allowed';
		}else if($_FILES['cv']['size'] > 500000){
			$errorFlag = true;
			$message = 'File size is greater';
		}
	}

	if(!$errorFlag){
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["cv"]["name"]);
		 if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
		 	$errorFlag = false;
		 	$message = $target_dir.$_FILES['cv']['name'];
		 }
	}

	return array('errorFlag'=>$errorFlag,'message'=>$message);
}