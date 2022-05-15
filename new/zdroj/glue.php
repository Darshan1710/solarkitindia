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



<div class="section detail-product">

 <div class="container">



<div class="row mar15"> 

 <a href="../products/" class="button invert auto left">Back</a>

</div>



<div class="row pad50">

<div class="col s12 m6">

  		 <h1 class="shape">Adhesive Glue</h1>

  <p class="shape">A broader text describing general information about what cases is this system suitable for so the customer gets the idea if its suitable for his needs and can quickly decide whether to stay on this page or return back</p>

 

  <div class="shape">

  		<a href="" class="button invert auto">Download brochures<i class="material-icons">file_download</i></a>

  		<a href="" class="button auto">Request quote</a><br>

  	</div>	

  </div>

 

 <div class="col s12 m6">

 	<img src="http://localhost/solarkitindia.com/images/product/solar-screw.png" class="responsive-img">

 	</div>

  </div>

 </div>

</div>

 

 

 

 <div class="section  pad50" style="background-color: #F1F5F9;">

 <div class="container">

 	<div class="line bk">COMPONETS<span></span></div>

 <div class="row">

 

  <div class="col s12 m6">

   <img src="http://localhost/solarkitindia.com//images/product/glue.png" class="responsive-img">

    </div>

  	<div class="col s12 m6">

<h3 class="detail-produkt">Self-Stitching Screw</h3>

<ul class="detail-produkt">

<li>Eliminate Drilling and bolting operations.</li>

<li>Electricity not required-Conservation of energy.</li>

<li>Metal roof is intact.</li>

<li>No leakages.</li>

<li>Reduce operational time.</li>

<li>Faster installation.</li>

<li>Improves aesthetics.</li>

</ul>

 </div> </div>

 <div class="row">  

 

  <div class="col s12 m6 push-m6">

   <img src="http://localhost/solarkitindia.com//images/product/clamp.png" class="responsive-img">

    </div>

  	<div class="col s12 m6 pull-m6">

<h3 class="detail-produkt">Universal<br>Solar Clamp</h3>

<ul class="detail-produkt">

<li>Fastening and grounding in a single operation.</li>

<li>Up to 5 times faster than a clamp.</li>

<li>Tool-free set up.</li>

<li>Minimized inter module gap</li>

<li>Screwless - lower maintenance costs</li>

<li>High protection against corrosion and lightening.</li>

<li>Anti-theft designed.</li>

</ul>

 </div>

   </div>

   

   

   <div class="row">

 

  <div class="col s12 m6">

   <img src="http://localhost/solarkitindia.com//images/product/profile.png" class="responsive-img">

    </div>

  	<div class="col s12 m6">

<h3 class="detail-produkt">Aluminium Rail</h3>

<ul class="detail-produkt">

<li>Aluminium 6063 T6</li>

<li>Lightweight</li>

<li>Corrosion resistance</li>



</ul>

 </div> </div>

 <div class="row">  

  	<div class="col s12 m6">

<h3 class="detail-produkt">Adhesive Gun</h3>

 </div>

 

  <div class="col s12 m6">

   <img src="http://localhost/solarkitindia.com//images/product/adhesive-gun.png" class="responsive-img">

    </div>

   </div>

   



   

 </div>

</div>

 

 

<div class="section pad50">

 <div class="container">

<div class="row pad50">

<div class="col s12 m6">

<span class="big">Self taping<br> 

 screw for<br> 

 metal roof<br>

 solutions</span>

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

