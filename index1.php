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

 

 

 if($row["typ"]==4){$text='<div class="section" id="references-detail">

 <div class="container ">

 <div class="row">

 	<div class="col s3 m1"><a href="../references/" class="button invert">Back</a></div>

 	</div>

 <h1 class=" center">'.$nazev.'</h1>	 

 	  <img src="http://localhost/solarkitindia.com/'.$row["img"].'" class="responsive-img">

 	 

 	  <div class="chi-group">

   <div class="chi-item">Realization <span>'.$row["year"].'</span></div>

  <div class="chi-item">Roof type<span>'.$row["flat"].'</span></div>

  <div class="chi-item">Output<span>'.$row["ouput"].'</span></div>

  <div class="chi-item">Mounting type<span>'.$row["mounting"].'</span></div>

  	 </div>

 	 <hr>'.$text."</div></div>";

 

 

 

 

 

 

 $text.='

 <div class="section pad"  style="background-color: #F6F8FB;">

  <div class="container">

  	<div class="row">

 	<div class="col s12 m6 offset-m3 center">	 

   <h3>Do you need similar solution?</h3>

   <p class="largr">Our sales team will get in touch with you shortly to prepare the quote that best suits your project</p>

    <a href="#form" class="button auto">Request Quote</a>

 </div>

</div>

	</div>

</div>';

	

 }

 // reference

 

 // blog

 if($row["typ"]==3){$text='<div class="section top" >

 <div class="container ">

 <div class="row">

 	<a href="../blog/" class="button invert auto pad15">Back</a>

 	</div></div></div>

 	<div class="section" id="references-detail">

 <div class="container ">	

 	<img src="http://localhost/solarkitindia.com/'.$row["img"].'" class="responsive-img">

   

 <div class="row">

 	<div class="col s12 m6 offset-m3">	 

 

 	<div class="date">'.date_format(date_create($row["date"]),"d.m.Y").'</div>	 

 

 <h1 class=" center">'.$row["nazev"].'</h1>	 

 		

 '.$text.'</div></div></div>';



	$vysledek = mysqli_query($db,"select * from page1 where typ='3' and zakazat='0' and id!='{$row["id"]}' order by id desc limit 3");

    while ($row = mysqli_fetch_assoc($vysledek)) {

    	

		$data[]=array(		"url"=> $row["url"],      	"img" => $row["img"],      	"date" => $row["date"],        "title"=> $row["title"],        "description" => $row["description"]);	}

	$text.='

 <div class="section top45"><div class="container"><h2>You might also like…<h2><div class="blog">';

foreach ($data as $key => $v) {	$text.=' <div class="blog-item"><a href="'.$link."/".$v["url"].'" title="'.$v["title"].'"><img class="responsive-img" src="'.$link."/".$v["img"].'" alt="'.$v["title"].'"></a><span>'.date_format(date_create($v["date"]),"d.m.Y").'</span><h2>'.$v["title"].'</h2><p>'.$v["description"].'</p></div>';    }

$text.='</div></div></div>';

}

// blog konec















 

include("header.php");







 ?>



















 	<?php

 //echo $url;

 //echo $baner;

 echo $text;



include("footer.php");?>

