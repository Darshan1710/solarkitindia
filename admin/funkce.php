<?php


function formular($text) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Admin">
    <meta name="keywords" content="">
     <link rel="icon" href="http://localhost/solarkitindia.com/images/favi-80x80.png" type="image/png">
     <title>Solar-kit.in | Admin</title>
    <!-- CORE CSS-->
    <link href="../css/materialize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../admin/css/css.css" type="text/css" rel="stylesheet">
    
     </head>

<body>
    
       <div id="login-page" class="row">
      <div class="col s12 card-panel">
        <form class="login-form" method="post">
          <div class="row">
            <div class="input-field col s12 center">
              <p class="center login-form-text"><a href="http://localhost/solarkitindia.com/" class="brand-logo"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/logo-solar-kit-india.png"></a></p>
              <p class="center text-red"><?php echo $text; ?></p>
              
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input id="username" type="text"  name="us_login">
              <label for="username" class="center-align">Username</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password" type="password" name="us_heslo">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" name="log" class="btn waves-effect waves-light col s12">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
 
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="../js/bin/materialize.js"></script>
   
    
  </body>
</html>
<?php exit;
}


function Fdatum($datum) {
$pole_datum=split("[/.-]",$datum);
$new_datum=$pole_datum[2].".".$pole_datum[1].".".$pole_datum[0];
return $new_datum;
}

function ZFdatum($datum) {
$pole_datum=split("[/.-]",$datum);
$new_datum=$pole_datum[2]."-".$pole_datum[1]."-".$pole_datum[0];
return $new_datum;
}



function nastavurl($url) {
  // i pro multi-byte (napr. UTF-8)
$prevodni_tabulka = Array(
  'ä'=>'a',  'Ä'=>'A',  'á'=>'a',  'Á'=>'A',  'à'=>'a',  'À'=>'A',  'ã'=>'a',  'Ã'=>'A',  'â'=>'a',  'Â'=>'A',  'č'=>'c',
  'Č'=>'C',  'ć'=>'c',  'Ć'=>'C',  'ď'=>'d',  'Ď'=>'D',  'ě'=>'e',  'Ě'=>'E',  'é'=>'e',  'É'=>'E',
  'ë'=>'e',  'Ë'=>'E',  'è'=>'e',  'È'=>'E',  'ê'=>'e',  'Ê'=>'E',  'í'=>'i',  'Í'=>'I',  'ï'=>'i',  'Ï'=>'I',  'ì'=>'i',
  'Ì'=>'I',  'î'=>'i',  'Î'=>'I',  'ľ'=>'l',
  'Ľ'=>'L',  'ĺ'=>'l',  'Ĺ'=>'L',  'ń'=>'n',  'Ń'=>'N',  'ň'=>'n',  'Ň'=>'N',  'ñ'=>'n',  'Ñ'=>'N',  'ó'=>'o',  'Ó'=>'O',
  'ö'=>'o',  'Ö'=>'O',  'ô'=>'o',  'Ô'=>'O',  'ò'=>'o',  'Ò'=>'O',
  'õ'=>'o',  'Õ'=>'O',  'ő'=>'o',  'Ő'=>'O',  'ř'=>'r',  'Ř'=>'R',  'ŕ'=>'r',  'Ŕ'=>'R',  'š'=>'s',  'Š'=>'S',  'ś'=>'s',  'Ś'=>'S',
  'ť'=>'t',  'Ť'=>'T',  'ú'=>'u',  'Ú'=>'U',
  'ů'=>'u',  'Ů'=>'U',  'ü'=>'u',  'Ü'=>'U',  'ù'=>'u',  'Ù'=>'U',  'ũ'=>'u',  'Ũ'=>'U',  'û'=>'u',  'Û'=>'U',  'ý'=>'y',  'Ý'=>'Y',
  'ž'=>'z',  'Ž'=>'Z',  'ź'=>'z',  'Ź'=>'Z'
);


$url=mb_convert_case($url, MB_CASE_LOWER , "UTF-8");
$url= strtr($url,$prevodni_tabulka);
$url=StrTr($url, " ", "-");     
$url=StrTr($url, "&", "-");     
$c=explode("-",$url);
    	$url1="";
    	for($i=0;$i<count($c);$i++){  if ($c[$i]) $url1.=trim($c[$i])."-";   }
    	$url=substr($url1,0,-1);
 	return $url;
}


function nastav_datum_minus($newdate,$den){
 	$date = new DateTime($newdate);
     $date->modify($den." day");
     return $date->format("Y-m-d");
 }
function nastav_datum($newdate){
 	$date = new DateTime($newdate);
     $date->modify("+21 day");
     return $date->format("Y-m-d");
 }
function adjustParam($url, $s) {
    $url="?".$url;
    	if (preg_match('/(.*?)\?/', $url, $matches)) $urlWithoutParams = $matches[1];
    	else $urlWithoutParams = $url;	

    	parse_str(parse_url($url, PHP_URL_QUERY), $params);

    	if (strpos($s, '=') !== false) {
    		list($var, $value) = split('=', $s);
    		$params[$var] = urldecode($value);
    		return $urlWithoutParams . '?' . http_build_query($params);      
    	} else {
    		unset($params[$s]);
    		$newQueryString = http_build_query($params);
    		if ($newQueryString) return $urlWithoutParams . '?' . $newQueryString;      
    		else return $urlWithoutParams;
    	}

    }

function addParam($url, $s) {
    	return adjustParam($url, $s);
    }

function delParam($url, $s) {
    	return adjustParam($url, $s);   	
    }

    
    
    
function dopln_url(){
 $uri_parts = explode('?', $_SERVER['QUERY_STRING'], 2);
 if ($uri_parts[1]) {
 	  parse_str($uri_parts[1], $output);
      foreach ($output as $k =>$v){
	    if ($k<>"strana") {
	  	$pole[]=$k."=".$v;
	    }
      }
      $url=implode("&",$pole);
      
      //if (count(pole)>1) 
      $url= "?".$url;
 	return $url;
 }
}


 ?>