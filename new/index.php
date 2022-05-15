<?php include("../connect.php"); 



if(isset($_GET["url"])) $url=$_GET["url"]; else $url="homepage";



 $vysledek = mysqli_query($db,"select * from page1 where url='$url' and zakazat='0'");

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

 	<div class="col s3 m1"><a href="../new/references/" class="button invert">Back</a></div>

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

 <div class="section"  style="background-color: #F6F8FB;">

  <div class="container">

  	<div class="row">

 	<div class="col s12 m6 offset-m3 center">	 

   <h3>Do you need similar solution?</h3>

   <p class="largr">Our sales team will get in touch with you shortly to prepare the quote that best suits your project</p>

    <a href="../new/request-for-quote/" class="button auto">Request Quote</a>

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

 	<a href="../new/blog/" class="button invert auto pad15">Back</a>

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

foreach ($data as $key => $v) {	$text.=' <div class="blog-item"><a href="'.$link."/new/".$v["url"].'" title="'.$v["title"].'"><img class="responsive-img" src="'.$link."/".$v["img"].'" alt="'.$v["title"].'"></a><span>'.date_format(date_create($v["date"]),"d.m.Y").'</span><h2>'.$v["title"].'</h2><p>'.$v["description"].'</p></div>';    }

$text.='</div></div></div>';

}

// blog konec





include("header.php");

 

 //echo $url;

 //echo $baner;

 echo $text;

/* ?>



<div class="section base">

 <div class="container row">

  <div class="col s12 m6">





  <h1>We keep your solar panels in place</h1>

  <p>We provide world class Solar Mounting structures for solar panel systems</p>

 <ul class="features">

  	<li><img src="../images/hero/ico-warranty.png" class="responsive-img">

  		20&nbsp;YEARS WARRANTY</li>

  	<li><img src="../images/hero/ico wind tunnel.png" class="responsive-img">

  		WIND TUNNEL TESTED</li>

  	<li><img src="../images/hero/ico-stopwatch-complex.png" class="responsive-img">

  		QUICK INSTALLATION</li>

  </ul>

 <a href="#our-product" class="button-more"></a>

  

 </div>

 <div class="col s12 m6">

 <img src="../images/hero/hero_image_1.png" class="responsive-img top45">

 </div>

 </div>

</div>











<a name="our-product">

<div class="section" id="product" style="background-color: #F1F5F9;">

 <div class="container">

 <div class="row">

  <div class="col s12">

<h2>Our product<br>portfolio</h2>

 </div>

 

    	<div class="col s12 m6 push-m6">

<h3 class="detail-produkt">Flat roof mounting system</h3>

<ul class="detail-produkt">

<li>Lightweight system</li>

<li>Unique click connection</li>

<li>Unique thermal effect compensation built-in</li>

<li>Integrated cable management system</li>



</ul>

 </div>

 <div class="col s12 m6 pull-m6">

   <img src="../images/product/picture-flat-roof.png" class="responsive-img">

     <a href="http://localhost/solarkitindia.com/flat-roof/" class="product-more btright"><em class="material-icons">add</em></a>

  </div>



 

 </div>

  	<div class="row">

  <div class="col s12 m6">

<h3 class="detail-produkt">Flat roof mounting system</h3>

<ul class="detail-produkt">

<li>Quick installation</li>

<li>Leak Proof Solution</li>

<li>Universal Module Clamp</li>

<li>Hardware Accessories</li>

</ul>

  </div>

  <div class="col s12 m6">

  	

   <img src="../images/product/picture-metal-roof-large.png" class="responsive-img">

    <a href="http://localhost/solarkitindia.com/metal-roof/" class="product-more btleft"><em class="material-icons">add</em></a>

  </div>



 

 </div>

 </div>

</div>

















 <div class="section">

 <div class="container">

 <div class="row">

  <div class="col s12 m8">

<h2 class="feature">Increase your efficiency when building solar systems</h2>

</div>  

<div class="col s12 m4">

<p class="feature">Don’t hesitate to contact us to learn how we can help you to benefit from Solar-Kit mounting system</p>

<a href="" class="button">Contact us</a>

</div>

 

  <img src="../images/feature.png" class="responsive-img">

 </div>

 

 

 







<div class="row" id="feature">

  <div class="col s12 m3">

<img src="../images/ico-stopwatch-copy.png1" class="responsive-img">

<h3>Up to 50% faster installation</h3>

<p>Lorem ipsum dolor sit amet, consectetetur adipiscing elit</p>

</div>

  <div class="col s12 m3">

<img src="../images/ico-support.png" class="responsive-img">

<h3>Non stop online service</h3>

<p>Lorem ipsum dolor sit amet, consectetetur adipiscing</p>

</div>

  <div class="col s12 m3">

<img src="../images/ico-star.png" class="responsive-img">

<h3>Another feature provided</h3>

<p>Lorem ipsum dolor sit amet, consectetetur adipiscing elit</p>

</div>

  <div class="col s12 m3">

<img src="../images/ico-star.png" class="responsive-img">

<h3>Another feature provided 2</h3>

<p>Lorem ipsum dolor sit amet, consectetetur</p>

</div>

</div>



 </div>

</div>





<?php */ 



include("footer.php");?>

