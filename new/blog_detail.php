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



<div class="section top" >

 <div class="container ">

 <div class="row">

 	<a href="../blog/" class="button invert auto pad15">Back</a>

 	</div></div></div>

 

 

 

 <div class="section" id="references-detail">

 <div class="container ">	

 	<img src="http://localhost/solarkitindia.com/images/blog/image-blog-hero.png" class="responsive-img">

 

 

  	  

  <div class="row">

 	<div class="col s12 m6 offset-m3">	 

 

 	<div class="date">2 days ago</div>	 

 

 <h1 class=" center">Prevent the destruction of photovoltaic systems</h1>	 

 		

  <p class="large">There are a large number of extreme weather fluctuations in India every year. Strong winds, cyclones and hurricanes are common in many Indian states.</p>

   

  <p>With the increasing photovoltaic panels on the roofs of Indian buildings, a new phenomenon has emerged.<br>

Photovoltaic panels can become a dangerous element of houses if they are not fixed with a quality construction solution.<br>

As we can see in the photos, there are a number of low-quality construction systems.<br><br>



If poor quality construction systems cause damage to property or health, the owner of the photovoltaic systems is responsible.<br><br>



Therefore, the requirement for a tested and verified design system is the basis for a reasonable investment.<br>

A reliable construction system will not only ensure photovoltaic panels, but will also prevent possible damage to the health and property of others.<br>

<br>

The Indian Government's recommendation is to use quality systems for photovoltaic panels. It is only a matter of time before certificates and tests in the wind tunnel become mandatory for manufacturers of photovoltaic structures.<br>

<br>

Solar-kit systems are developed and tested for maximum load, watertightness, electrical stability, and most importantly for wind load, which is the biggest danger in India</p> 

 

 <img src="http://localhost/solarkitindia.com/images/blog/image-middle.png" class="responsive-img">

 

 <p>If poor quality construction systems cause damage to property or health, the owner of the photovoltaic systems is responsible.<br>

<br>

Therefore, the requirement for a tested and verified design system is the basis for a reasonable investment.<br>

A reliable construction system will not only ensure photovoltaic panels, but will also prevent possible damage to the health and property of others.<br>

<br>

The Indian Government's recommendation is to use quality systems for photovoltaic panels. It is only a matter of time before certificates and tests in the wind tunnel become mandatory for manufacturers of photovoltaic structures.<br>

<br>

Solar-kit systems are developed and tested for maximum load, watertightness, electrical stability, and most importantly for wind load, which is the biggest danger in India</p>

 </div>

</div>

	 

  

  

 </div>

</div>











<div class="section top45">	

	<div class="container">

		

<h2>You might also like…<h2>

<div class="blog">



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image1.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image2.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image3.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



  </div>

 </div>

</div>

	





<?php include("footer.php");?>

