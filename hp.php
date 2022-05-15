<?php include("connect.php"); 



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

 

 //echo $url;

 //echo $baner;

 

 

 //Solar-Mounting_Web_Product-Flextilt.png

 $text='<style>

.slick-dots{width:160px;}

.Group86 {

width: 84.94px;

height: 89.12px;

}

.Group86 img{

	width: 73px;

	height: 37.36px;

}

</style>

 <h1 class="hide">Innovation 2021</h1>

<div class="section base">

<div class="container">

<div id="slickblock" class="slick-slider">



<div class="slickblock slide-list">

<div class="slickimage"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Fill-7.png" alt="Logo Solar-kit.in - photovoltaic panels" /></a></div>

<div class="slicktitle">Innovation 2021</div>

<div class="slickdescription">Dont miss latest innovation.</div>

<div class="slickicons">

<div class="Group86 active"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="images/hero/FlexTilt-icon.png" alt="" /> <span>Innovation 2021</span></a></div>

<div class="Group83"><a href="./warranty/"><img class="responsive-img" src="../images/hero/ico-warranty.png" alt="" /> <span>Warranty</span></a></div>

<div class="Group82"><a href="./design-wind-speed/"><img class="responsive-img" src="../images/hero/ico wind tunnel.png" alt="" /> <span>Design Wind Speed</span></a></div>

<div class="Group81"><a href="./quick-installation/"><img class="responsive-img" src="../images/hero/ico-stopwatch-complex.png" alt="" /> <span>Quick Installation</span></a></div>

<div class="Group84"><a href="./tuv-certified/"> <img class="responsive-img" src="../images/hero/tuv_certification.png" alt="" /> <span>TÜV Certified</span></a></div>

<div class="Group85"><a href="./make-in-india/"><img class="responsive-img" src="../images/hero/makeinindia.svg" alt="" /> <span>Make in&nbsp;India</span></a></div>

</div>

<a class="btns" title="" href="./flextilt-inovation-2021/">Learn more</a></div>







<div class="slickblock slide-list">

<div class="slickimage"><a href="./warranty/"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Fill-1.png" alt="Logo Solar-kit.in - photovoltaic panels" /></a></div>

<div class="slicktitle">Warranty</div>

<div class="slickdescription">The best warranty on the market</div>

<div class="slickicons">

<div class="Group86"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="images/hero/FlexTilt-icon.png" alt="" /> <span>Innovation 2021</span></a></div>

<div class="Group83 active"><a href="./warranty/"><img class="responsive-img" src="../images/hero/ico-warranty.png" alt="" /> <span>Warranty</span></a></div>

<div class="Group82"><a href="./design-wind-speed/"><img class="responsive-img" src="../images/hero/ico wind tunnel.png" alt="" /> <span>Design Wind Speed</span></a></div>

<div class="Group81"><a href="./quick-installation/"><img class="responsive-img" src="../images/hero/ico-stopwatch-complex.png" alt="" /> <span>Quick Installation</span></a></div>

<div class="Group84"><a href="./tuv-certified/"> <img class="responsive-img" src="../images/hero/tuv_certification.png" alt="" /> <span>TÜV Certified</span></a></div>

<div class="Group85"><a href="./make-in-india/"><img class="responsive-img" src="../images/hero/makeinindia.svg" alt="" /> <span>Make in&nbsp;India</span></a></div>

</div>

<a class="btns" title="" href="./warranty/">Learn more</a></div>

<div class="slickblock slide-list">

<div class="slickimage"><a href="./design-wind-speed/"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Fill-5.png" alt="Logo Solar-kit.in - photovoltaic panels" /></a></div>

<div class="slicktitle">Design Wind Speed</div>

<div class="slickdescription">Tested for wind loads more than 200Km/h</div>

<div class="slickicons">

<div class="Group86"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="images/hero/FlexTilt-icon.png" alt="" /> <span>Innovation 2021</span></a></div>

<div class="Group83"><a href="./warranty/"><img class="responsive-img" src="../images/hero/ico-warranty.png" alt="" /> <span>Warranty</span></a></div>

<div class="Group82 active"><a href="./design-wind-speed/"><img class="responsive-img" src="../images/hero/ico wind tunnel.png" alt="" /> <span>Design Wind Speed</span></a></div>

<div class="Group81"><a href="./quick-installation/"><img class="responsive-img" src="../images/hero/ico-stopwatch-complex.png" alt="" /> <span>Quick Installation</span></a></div>

<div class="Group84"><a href="./tuv-certified/"> <img class="responsive-img" src="../images/hero/tuv_certification.png" alt="" /> <span>TÜV Certified</span></a></div>

<div class="Group85"><a href="./make-in-india/"><img class="responsive-img" src="../images/hero/makeinindia.svg" alt="" /> <span>Make in&nbsp;India</span></a></div>

</div>

<a class="btns" title="" href="./design-wind-speed/">Learn more</a></div>

<div class="slickblock slide-list">

<div class="slickimage"><a href="./quick-installation/"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Fill-3.png" alt="Logo Solar-kit.in - photovoltaic panels" /></a></div>

<div class="slicktitle">Quick Installation</div>

<div class="slickdescription">Designed to save more than 50% of the time required for installation</div>

<div class="slickicons">

<div class="Group86"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="images/hero/FlexTilt-icon.png" alt="" /> <span>Innovation 2021</span></a></div>

<div class="Group83"><a href="./warranty/"><img class="responsive-img" src="../images/hero/ico-warranty.png" alt="" /> <span>Warranty</span></a></div>

<div class="Group82"><a href="./design-wind-speed/"><img class="responsive-img" src="../images/hero/ico wind tunnel.png" alt="" /> <span>Design Wind Speed</span></a></div>

<div class="Group81 active"><a href="./quick-installation/"><img class="responsive-img" src="../images/hero/ico-stopwatch-complex.png" alt="" /> <span>Quick Installation</span></a></div>

<div class="Group84"><a href="./tuv-certified/"> <img class="responsive-img" src="../images/hero/tuv_certification.png" alt="" /> <span>TÜV Certified</span></a></div>

<div class="Group85"><a href="./make-in-india/"><img class="responsive-img" src="../images/hero/makeinindia.svg" alt="" /> <span>Make in&nbsp;India</span></a></div>

</div>

<a class="btns" title="" href="./quick-installation/">Learn more</a></div>

<div class="slickblock slide-list">

<div class="slickimage"><a href="./tuv-certified/"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Fill-2.png" alt="Logo Solar-kit.in - photovoltaic panels" /></a></div>

<div class="slicktitle">TÜV Certified</div>

<div class="slickdescription">Safety and testing criteria are confirmed by an independent TÜV institute</div>

<div class="slickicons">

<div class="Group86"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="images/hero/FlexTilt-icon.png" alt="" /> <span>Innovation 2021</span></a></div>

<div class="Group83"><a href="./warranty/"><img class="responsive-img" src="../images/hero/ico-warranty.png" alt="" /> <span>Warranty</span></a></div>

<div class="Group82"><a href="./design-wind-speed/"><img class="responsive-img" src="../images/hero/ico wind tunnel.png" alt="" /> <span>Design Wind Speed</span></a></div>

<div class="Group81"><a href="./quick-installation/"><img class="responsive-img" src="../images/hero/ico-stopwatch-complex.png" alt="" /> <span>Quick Installation</span></a></div>

<div class="Group84 active"><a href="./tuv-certified/"> <img class="responsive-img" src="../images/hero/tuv_certification.png" alt="" /> <span>TÜV Certified</span></a></div>

<div class="Group85"><a href="./make-in-india/"><img class="responsive-img" src="../images/hero/makeinindia.svg" alt="" /> <span>Make in&nbsp;India</span></a></div>

</div>

<a class="btns" title="" href="./tuv-certified/">Learn more</a></div>

<div class="slickblock slide-list">

<div class="slickimage"><a href="./make-in-india/"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Fill-4.png" alt="Logo Solar-kit.in - photovoltaic panels" /></a></div>

<div class="slicktitle">Make in&nbsp;India</div>

<div class="slickdescription">All components made in India</div>

<div class="slickicons">

<div class="Group86"><a href="./flextilt-inovation-2021/"><img class="responsive-img" src="images/hero/FlexTilt-icon.png" alt="" /> <span>Innovation 2021</span></a></div>

<div class="Group83"><a href="./warranty/"><img class="responsive-img" src="../images/hero/ico-warranty.png" alt="" /> <span>Warranty</span></a></div>

<div class="Group82"><a href="./design-wind-speed/"><img class="responsive-img" src="../images/hero/ico wind tunnel.png" alt="" /> <span>Design Wind Speed</span></a></div>

<div class="Group81"><a href="./quick-installation/"><img class="responsive-img" src="../images/hero/ico-stopwatch-complex.png" alt="" /> <span>Quick Installation</span></a></div>

<div class="Group84"><a href="./tuv-certified/"> <img class="responsive-img" src="../images/hero/tuv_certification.png" alt="" /> <span>TÜV Certified</span></a></div>

<div class="Group85 active"><a href="./make-in-india/"><img class="responsive-img" src="../images/hero/makeinindia.svg" alt="" /> <span>Make in&nbsp;India</span></a></div>

</div>

<a class="btns" title="" href="./make-in-india/">Learn more</a></div>

</div>

<div class="lpruka">&nbsp;</div>

</div>

</div>

<div class="section pad27" style="background-color: #f1f5f9;">

<div class="container ">

<div class="row">

<h2 class="solutionsh2">Our best solutions</h2>

<div class="solutions"><img src="http://localhost/solarkitindia.com/images/hero/33ee06f9e7c676443dade62c50c637f4" alt="" />

<div class="img__description"><span><span class="VIiyi"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="cs" data-phrase-index="0">Components for standing seam roof</span></span> <br /></span></div>

<a class="flip-this" href="http://localhost/solarkitindia.com/product-metal-roof/#SE-LA-LR">+</a></div>

<div class="solutions"><img src="http://localhost/solarkitindia.com/images//hero/390683772070678aa2f238480769acf5" alt="" />

<div class="img__description"><span>Screw for metal roof Pullout Strength = 333 Kg</span></div>

<a class="flip-this" href="http://localhost/solarkitindia.com/product-metal-roof/#TR-LA-SR-SS-MC-30">+</a></div>

<div class="solutions"><img src="http://localhost/solarkitindia.com/images/hero/20f1225c3397120657c4f6b86dac080d" alt="" />

<div class="img__description"><span>Long rail for portrait position<br />Sustainability : 150km/Hr</span></div>

<a class="flip-this" href="http://localhost/solarkitindia.com/xxx/product-metal-roof/#tr-po-lr">+</a></div>

<div class="solutions"><img src="http://localhost/solarkitindia.com/images/hero/hero1.jpg" alt="" />

<div class="img__description"><span><span class="VIiyi"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="cs" data-phrase-index="4">Higher rail for roof maintenance</span></span> <br /></span></div>

<a class="flip-this" href="http://localhost/solarkitindia.com/product-metal-roof/#TR-PO-SR-SS-AR-100">+</a></div>

</div>

</div>

</div>

<div id="product" class="section" style="background-color: #f1f5f9;">

<div class="container">

<div class="row">

<div class="col s12">

<h2>Our product<br />portfolio</h2>

</div>







<div class="col s12 m6">

<h3 class="detail-produkt">Innovation 2021</h3>

<ul class="detail-produkt">

<li>Patent Applied</li>

<li>Quick Installation</li>

<li>Lightweight & Durable</li>

<li>Best in market warranty</li>

<li>Design wind speed 200km/h*</li>

<li>Thermal & Mechanical compensation</li>

</ul>

</div>

<div class="col s12 m6"><a href="http://localhost/solarkitindia.com/product-metal-roof/#SE"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/hero/Solar-Mounting_Web_Product-Flextilt.png" alt="Innovation 2021" width="100%" /></a> <a class="product-more btleft" href="http://localhost/solarkitindia.com/product-metal-roof/#SE"><em class="material-icons">add</em></a></div>







<div class="col s12 m6 push-m6">

<h3 class="detail-produkt">Mounting system for trapezoidal roofs</h3>

<ul class="detail-produkt">

<li>Lightweight system</li>

<li>Unique thermal effect compensation built-in</li>

<li>Integrated cable management system</li>

<li>Suitable for <strong>portrait and landscape</strong> panel orientation</li>

<li>Tested in a wind tunnel</li>

<li>3 variants of attaching the profile to the roof</li>

<li>Easy and fast installation<span></span></li>

</ul>

<img class="label-bg" src="/images/hero/label.png" alt="" /> <img class="logo-technischer" src="../images/hero/TUV-icon1.png" alt="" /></div>

<div class="col s12 m6 pull-m6"><a href="http://localhost/solarkitindia.com/product-metal-roof/#TR"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/trapez_long_portrait2.jpg" alt="mounting system - trapezoidal roof" width="100%" /></a> <a class="product-more btright" href="http://localhost/solarkitindia.com/product-metal-roof/#TR"><em class="material-icons">add</em></a></div>

</div>

<div class="row">

<div class="col s12 m6">

<h3 class="detail-produkt">Mounting system for standing seam roofs</h3>

<ul class="detail-produkt">

<li>Quick installation</li>

<li>Simple and safe solution</li>

<li>No drilling required</li>

<li>Designed for a wind of 150km / h</li>

<li>Long life guarantee</li>

<li>Suitable for <strong>portrait and landscape</strong> panel orientation</li>

</ul>

</div>

<div class="col s12 m6"><a href="http://localhost/solarkitindia.com/product-metal-roof/#SE"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/picture_metal_roof_large2.jpg" alt="mounting system - standing seam roof" width="100%" /></a> <a class="product-more btleft" href="http://localhost/solarkitindia.com/product-metal-roof/#SE"><em class="material-icons">add</em></a></div>

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

<a class="button" href="#form">Contact us</a></div>

<div class="col s12"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/feature2.jpg" alt="Solar-kit.in" width="100%" /></div>

</div>

<div id="feature" class="row">

<div class="col s12 m3"><img class="responsive-img" src="../images/ico-stopwatch-copy.png1" alt="Save more than 50% installation time" width="44" height="52" />

<h3>Up to 50% faster installation</h3>

<p>The solar-kit solution saves 50% of the time required for installation.</p>

</div>

<div class="col s12 m3"><img class="responsive-img" src="../images/ico-support.png" alt="Our experts are ready to help you" width="52" height="52" />

<h3>Online service</h3>

<p>Our team of experts is always ready to help you.</p>

</div>

<div class="col s12 m3"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/Icons2/makeinindia_8.png" alt="Make in India" width="52" height="52" />

<h3>Make in India</h3>

<p><span class="tlid-translation translation"><span class="">We manufacture solar-kit products in India.</span> <span class="">We are based in Mumbai</span></span></p>

</div>

<div class="col s12 m3"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/Icons2/Certificate_8.png" alt="Certified products" width="52" height="52" />

<h3>Certified products</h3>

<p><span class="tlid-translation translation"><span class="">Quality verified by leading institutes of Germany and India.</span></span></p>

</div>

</div>

</div>

</div>

';

*/

 echo $text;



include("footer.php");?>

