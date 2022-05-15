<?php include("connect.php"); 


$url="products";


 
 $vysledek = mysqli_query($db,"select * from page1 where url='$url' and zakazat='0'");
    $row = mysqli_fetch_assoc($vysledek);
  
 $title=$row["title"];
 $desc=$row["description"];
 $keyw=$row["keywords"];
 $nazev=$row["nazev"];
 $baner=$row["baner"];
 $text=$row["text"];
 
 
 //if($row["typ"]==3 or $row["typ"]==4)$text='<div class="section top"><div class="container"><h2>'.$nazev.'</h2><hr class="divider-line">'.$text.'</div></div>';
 

include("header.php");
 
// echo $baner;
 
// echo $text;
echo "<h1 class='hide'>{$nazev}</h1>";
?>

<div class="section product">
 <div class="container row">

  <span class="title_h1 center">
  	<strong style="color:#ff5345;">Click to</strong> select Metal Roof Type to Proceed</span>
  
  <?php /*
  	<div class="col s12 m4 offset-m2 ">
 		<a href="#product-flat-roof" class="button invert disabled"><span class="icon flat">Flat roof</span></a>
 	</div> */?>

<div class="col s12 m4 offset-m4 ">
 <a href="../product-metal-roof/" class="button invert colored-blink"><span class="icon metal">Metal roof</span></a>
<div class="icon-click colored"></div>
 </div>
      	<?php /*
 		<div class="col s12 m4 offset-m2 ">
 		<a href="../products-flat-roof-trapez/" class="button invert">Trapez</a>
 	</div>
 <div class="col s12 m4">
 		<a href="../products-flat-roof-seam/" class="button invert">Seam</span></a>
 	</div>
 */?>
  
 </div> 	 	
</div>	
<div class="result"><?php echo $text;?></div>
 

<?php include("footer.php");?>
