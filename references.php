
<?php include("connect.php"); 

if(isset($_GET["url"])){ 
   $url=$_GET["url"];} else {$url="homepage";}

 $vysledek = mysqli_query($db,"select * from page where url='$url' and zakazat='0'");
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
?>

<div class="section">
 <div class="container">
  <div class="line">WE ARE PROUD TO OUR CONTRACTORS<span></span></div>
  <h1 class="shape">We appreciate the fact, that leading contractors such as Tata Solar Power, Bosch or Premier Solar are choosing us for their photovoltaic systems.
</h1>
  <div class="">
  <div class="logos">
    <img src="http://localhost/solarkitindia.com/images/references/logo-bosch.png" style="height:34px">
    <img src="http://localhost/solarkitindia.com/images/references/logo-tata-power.png" style="height:17px">
    <img src="http://localhost/solarkitindia.com/images/references/logo-premier.png" style="height:45px">
    
     <div class="logos-btn">
    <a href="#form" class="button auto">Get Solar-Kit solution</a>
    <?php //<a href="" class="button invert auto">Become our partner</a>  
    ?>
     </div>
    </div></div>
 </div>
</div>

<div class="section pad50" id="references" style="background-color: #F1F5F9;">

   
   <div class="container">
    <div class="line bk">References<span></span></div>
    <?php
  $vysledek = mysqli_query($db,"select * from page1 where typ='4' and zakazat='0' order by id desc");
  
    while($row = mysqli_fetch_assoc($vysledek)){ ?> 
    <div class="row">
  
    <div class="col s12 m4">
       <a href="<?php echo $link."/".$row["url"];?>"><img src="http://localhost/solarkitindia.com/<?php echo $row["img"];?>" class="responsive-img"></a> 
   </div>
   <div class="col s12 m8 references">
   <h3 title="<?php echo $row["nazev"];?>"><?php echo $row["nazev"];?></h3>
   <div>
  <div class="chip"><?php echo $row["year"];?></div>
  <div class="chip"><?php echo $row["flat"];?></div>
  <div class="chip"><?php echo $row["ouput"];?> output</div>
  <div class="chip">Mounting: <?php echo $row["mounting"];?></div>
  </div> 
  <p><?php echo substr( strip_tags($row["text"]),0,500);?>...</p>
   <a href="<?php echo $link."/".$row["url"];?>">View detail</a>
   </div>
</div>
<?php } ?> 

 </div>
</div>



<?php include("footer.php");?> 
    
  
