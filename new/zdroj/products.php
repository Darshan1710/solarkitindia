<?php include("connect.php"); 



if(isset($_GET["url"])) $url=$_GET["url"]; else $url="homepage";



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



<div class="section product">

 <div class="container row">



 <div class="line">Products<span></span></div>

  <h1 class="center">Choose your roof</h1>

  

 

 	<div class="col s12 m4 offset-m2 ">

 		<a href="../producst/" class="button invert"><span class="icon flat active">Flat roof</span></a>

 	</div>

 <div class="col s12 m4">

 		<a href="../products1/" class="button invert"><span class="icon metal">Metal roof</span></a>

 	</div>

 

  

  

 	<div class="col s12 m10 offset-m1 center">	 

	



 <p class="large">Flat Roof mounting system is designed for quick and easy mounting of solar panels on a flat roof.  Its lightweight system and unique click connection enables to provide optimal solutions. It also has a unique thermal effect compensation built-in and an integrated cable management system. You only need one tool to install the solar panels. This drastically reduces the time required for installation of the PV system without compromising on quality. 

The aerodynamic design protects the PV system from the effects of the weather and the wind. The PV system are shielded by wind deflectors. This increase the life span of the PV solar panels.</p>

 </div>

 <img src="http://localhost/solarkitindia.com/images/product/hero-image-flat-roof.png" class="responsive-img">

 

  <ul class="features-icon ">

  	<li class=""><img src="http://localhost/solarkitindia.com/images/hero/ico-warranty.png" class="responsive-img">

  		<span>20&nbsp;YEARS WARRANTY</span></li>

  	<li class=""><img src="http://localhost/solarkitindia.com/images/hero/ico wind tunnel.png" class="responsive-img">

  		<span>WIND TUNNEL TESTED</span></li>

  	<li class=""><img src="http://localhost/solarkitindia.com/images/hero/ico-stopwatch-complex.png" class="responsive-img">

  		<span>QUICK INSTALLATION</span></li>

  	<li class=""><img src="http://localhost/solarkitindia.com/images/icons/ico-urability.png" class="responsive-img">  	

  	    <span>DURABILITY TESTED</span></li>

  	<li class=""><img src="http://localhost/solarkitindia.com/images/icons/ico-fire.png" class="responsive-img">

  		<span>FIRE TESTED</span></li>

  	<li class=""><img src="http://localhost/solarkitindia.com/images/icons/ico-chemical.png" class="responsive-img">

  		<span>CHEMICAL TESTED</span></li>

  </ul>

 

 </div>

</div>



 

 

 

<div class="section">

 <div class="container row center">

 <h2 >System composition</h2>

 <img src="http://localhost/solarkitindia.com/images/product/image-composition.png" class="responsive-img">



<ul class="slick-slider">

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/ballast-container-low.png"><span>Ballast container 1</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/ballast-container-high.png"><span>Ballast container 2</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/base-plate.png"><span>Base plate</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/end-cap-rail.png"><span>End cap rail</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/clamp-panel.png"><span>Panel clamp</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/hIgh-base-with-deflector-holder.png"><span>high base</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/low-base.png"><span>Low base</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/rail-1345.png"><span>Rail</span></li>

	<li class='item'><img class="responsive-img" src="http://localhost/solarkitindia.com/images/product/wind-deflector.png"><span>Wind deflector</span></li>

<ul>	

</div>

 </div>











 <div class="section" style="background-color: #F6F8FB;">

 <div class="container pad50" >

<h2 class="features-h2">See all the available

features</h2>



<div class="blog feature">

<div class="blog-item">

<img src="http://localhost/solarkitindia.com/images/icons/dual.png">	

<span>Dual orientation of solar panels</span>

<ul>

<li>South</li>

<li>East - West</li>

<li>South - North</li>

</ul>

</div>

<div class="blog-item">

<img src="http://localhost/solarkitindia.com/images/icons/wind.png">	

<span>Aerodynamic design</span>

<ul>

<li>Less wind load on solar panels</li>

<li>Passively cooled</li>

<li>Aesthetic design</li>

</ul>

</div>

<div class="blog-item">

<img src="http://localhost/solarkitindia.com/images/icons/stopwatch.png">	

<span>Fast and easy installation</span>

<ul>

<li>Click system for connections</li>

<li>Single tool approach

<li>Integrated cable management system</li>

<li>Minimum number of components</li>

</ul>

</div>

<div class="blog-item">

<img src="http://localhost/solarkitindia.com/images/icons/feather.png">	

<span>Ballasted system without penetration</span>

<ul>

<li>No roof penetration, no drilling, no glue</li>

<li>Lighweight, easy assembling & disassembling</li>

<li>Possibility of different ballast material</li>

</ul>

</div>

<div class="blog-item">

<img src="http://localhost/solarkitindia.com/images/icons/temperature.png">	

<span>Thermal effect compensation</span>

<ul>

<li>Thermal compensation on each connection</li>

<li>Self-levelling base plates</li>

</ul>

</div>

<div class="blog-item">

<img src="http://localhost/solarkitindia.com/images/icons/certificate.png">	

<span>Project planning & certification</span>

<ul>

<li>Easy to pull and layout on the roof</li>

<li>Detailed project plan with layout & ballast location</li>

<li>Inverter & DC Cable layout</li>

<li>Variable for module dimensions</li>

</ul>

</div>

</div>







<div class="pad50"><div class="row">

 	<div class="col s12 m8 offset-m2 center">	 

		<p>Do you need to get an individual solution for your solar system?</p>

		<a href="http://localhost/solarkitindia.com/blog-detail/" class="button auto">Request quote</a>

			</div>

</div>





 </div>



 </div>

 </div>

 

 

 

 

<div class="section download pad50">

 <div class="container">

<div class="row center pad50">

<div class="col s12 m4">

 <img src="http://localhost/solarkitindia.com/images/icons/ico-certificate-color.png">

 <span>Certificates</span>

 <p>Download all the certificates of Flat roof mounting system</p>

 <a href="" class="button auto">Download certificates<i class="material-icons">file_download</i></a>

</div> 

<div class="col s12 m4">

 <img src="http://localhost/solarkitindia.com/images/icons/ico-guide-color.png">

 <span>Guides</span>

 <p>Our leaflets will guide you trough the all process of using our systems</p>

<a href="" class="button auto">Download guides<i class="material-icons">file_download</i></a> 

</div> 

<div class="col s12 m4"> 

 <img src="http://localhost/solarkitindia.com/images/icons/ico-brochure-color.png">

 <span>Brochures</span>

 <p>Download the brochures to learn more details about Solar-Kit systems</p>

<a href="" class="button auto">Download brochures<i class="material-icons">file_download</i></a>

</div> 







  </div> 

 </div>

</div>







<div class="section pad50">

 <div class="container" style="background-color: #F6F8FB;">

<div class="row pad50">

<div class="col s12 m6">

<span class="big">How does<br>Solar-Kit<br>system<br>work?

</span>

</div>

<div class="col s12 m6">

	<div class="embed-responsive embed-responsive-16by9">

		<iframe src="https://www.youtube.com/embed/ptEX09NVVGc" frameborder="0" allowfullscreen="" class="embed-responsive-item"></iframe>

		</div>

</div>



  </div> 

 </div>

</div>

 



<?php include("footer.php");?>

