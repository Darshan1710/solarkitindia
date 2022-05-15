
<?php include("../connect.php"); 

 $vysledek = mysqli_query($db,"select * from page1 where url='' and zakazat='0'");
    $row = mysqli_fetch_assoc($vysledek);
  
 $title=$row["title"];
 $desc=$row["description"];
 $keyw=$row["keywords"];
 $nazev=$row["nazev"];
 $baner=$row["baner"];
 $text=$row["text"];

include("header.php");
 
 echo $baner;
 
 echo $text;
?>


 <?php include("footer1.php");?>
      
    