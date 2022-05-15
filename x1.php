<?php include("connect.php"); 



if(isset($_GET["url"])) $url=$_GET["url"]; else $url="sablona-homepage";



 $vysledek = mysqli_query($db,"select * from page1 where url='$url' ");//and zakazat='0'

    $row = mysqli_fetch_assoc($vysledek);

  

 $title=$row["title"];

 $desc=$row["description"];

 $keyw=$row["keywords"];

 $nazev=$row["nazev"];

 $baner=$row["baner"];

 $text=$row["text"];

 

 

 include("header.php");



?> 

<link href="<?php echo $link;?>/css/new_product.css?ver=1" type="text/css" rel="stylesheet" media="screen"/>

<?php

 

echo "<h1 class='hide'>{$nazev}</h1>";

// echo $baner;

 

 echo $text;





 include("footer.php"); 

?>

