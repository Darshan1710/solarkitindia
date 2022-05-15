<?php

if (isset($_POST["log"])){

$_login = $_POST["us_login"];
$_heslo = $_POST["us_heslo"];

if($_login && $_heslo){
//	$_heslo=sha1($_heslo."Y_t1343x");
		$_heslo=md5($_heslo);
	//$query = mysqli_query($db,"update user set heslo = '$_heslo'");
	
//echo $_login,$_heslo;

$query = MySQLi_Query($db,sprintf("select id from user where login='%s' and heslo = '%s'",mysqli_real_escape_string($db,$_login),mysqli_real_escape_string($db,$_heslo)));
$check = mysqli_num_rows($query);
  if($check == 1){
		$_SESSION["user"]=array();
	  	$registrace = $_SESSION["user"] ; 
	  	
			if(isset($registrace)){
				$user_data = mysqli_fetch_assoc($query); 
				$_SESSION["user"]["id"] = $user_data["id"]; 
				$_SESSION["user"]["interval"] = "3600000000"; 
				$_SESSION["user"]["session_time"] = Time();
               header("location:index.php");				
			}else{ 
				header("location:?log_akce=1");					
			}
	} else { 	
		header("location:?log_akce=2");					
	}
}else{
		header("location:?log_akce=3");	
}
} else {

if(!isset($_SESSION["user"])): 
	$log_akce=2;	
elseif ((Time() - $_SESSION["user"]["session_time"])>=$_SESSION["user"]["interval"]): 
	$log_akce=4;
 else: 
	$_SESSION["user"]["session_time"] = time();
endif;

if(isset($_SESSION["user"]["id"])){
$_id = $_SESSION["user"]["id"];

    $_res = mysqli_query($db,"select id,name,prava from user where id = '$_id'");
    $_data = mysqli_fetch_assoc($_res);
}
if (isset($_GET["log_akce"])) {

if ($_GET["log_akce"] == "1") {
	$text="Nastala chyba při inicializaci session.";
    formular($text);
}

if ($_GET["log_akce"] == "2") {
	$text="Snaha o neautorizovaný přístup.";
    formular($text);
}

if ($_GET["log_akce"] == "3") {
	$text="Vyplňte login a heslo.";
    formular($text);
}

if ($_GET["log_akce"] == "4") {
	$text="Váš účet byl v nečinnosti déle než 30 minut.";
    $_data["prava"]="";
	session_unregister("user");
	session_destroy();
    formular($text);   
}

if ($_GET["log_akce"] == "5") {
	$_SESSION["user"]=array();
    unset($_SESSION["user"]);
	$text="Byl(a) jste úspěšně odhlášen(a)";
	formular($text);
}
} 

}
?>