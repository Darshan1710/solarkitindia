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



<div class="section">

 <div class="container">

  <div class="line">About as<span></span></div>

  <h1 class="shape">Mounting Solar Kit provides world class Solar Mounting Structures that are engineered for durability, reliability and innovation.</h1>

  <p class="shape twC">Established 12 years ago in the Czech Republic Europe, we have global presence with offices in the Middle East as well as a large Manufacturing and production centre in Navi Mumbai MIDC India. Mounting Solar Kit Pvt Ltd. is one of the leading solar energy solution company, that  provides end to end solutions for the mounting structure of solar PV rooftop projects. We have delivered more than 1.8GWP rooftop structure to more than 20 countries across the globe.</p>

  

  

 </div>

</div>





<div class="section" style="background: url('http://localhost/solarkitindia.com/images/hero/427357302.png') center center; height:791px;">

</div>







<div class="section pad50" style="background: #FF5345;">

 <div class="container row">

  <div class="line bk-w">OUR STATEMENT<span></span></div>

  <h2 class="white-text">Our success continues to be driven through our teams’ experience and expertise, as well as a complete approach to quality assurance that is supported by comprehensive project management principles during all stages of the design, production and quality assurance stages which helps us to deliver projects on time.<br><br></h2>

  

 </div>

</div>





<div class="section">

 <div class="container">

  <div class="line bk">COMPANY MANAGEMENT<span></span></div>

 <div class="row">

<div class="col s12 m4"><div class="portrait-block"><img src="http://localhost/solarkitindia.com/images/portrait/portrait1.png" class="responsive-img"><p><span>Tomáš Korostenský</span>CEO<a href="mailto:xxxxx"><em class="material-icons">email</em></a></p></div></div>

<div class="col s12 m4"><div class="portrait-block"><img src="http://localhost/solarkitindia.com/images/portrait/portrait2.png" class="responsive-img"><p><span>Darshan Mamledesai</span>Sales head<a href="mailto:xxxxx"><em class="material-icons">email</em></a></p></div> </div>

<div class="col s12 m4"><div class="portrait-block"><img src="http://localhost/solarkitindia.com/images/portrait/portrait3.png" class="responsive-img"><p><span>Tushar Kulkarni</span>Technical support<a href="mailto:xxxxx"><em class="material-icons">email</em></a></p></div> </div>

  </div>

 </div>

</div>



<?php include("footer.php");?>

