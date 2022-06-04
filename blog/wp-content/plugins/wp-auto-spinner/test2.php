<?php 

//curl ini 
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT,20);
curl_setopt($ch, CURLOPT_REFERER, 'http://www.bing.com/');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // Good leeway for redirections.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Many login forms redirect at least once.
curl_setopt($ch, CURLOPT_COOKIEJAR , "cookie.txt");

$input = "I hate talking too much and pizza is my best  911911 (*)Do you hate that too?(*)";

$input = preg_replace( '!(\(\**\))!' , "\n$1\n" , $input );
$input = str_replace ( '911911' , "\n911911\n" , $input );
 
//curl post
$curlurl="https://wai.wordai.com/api/rewrite";
$curlpost="email=digitalzoopedia@gmail.com&key=5c1291c78f72966447d56483330fac9b&input=" . urlencode($input) . "&rewrite_num=2&uniqueness=3"; // q=urlencode(data)
curl_setopt($ch, CURLOPT_URL, $curlurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlpost); 
$x='error';
$exec=curl_exec($ch);
$x=curl_error($ch);

echo $exec.$x;

?>