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



<div class="section" id="faq">

 <div class="container">

  <div class="line"><span>FAQ</span></div>

  <h1 class="shape">We are here to help you</h1>

  <p class="shape">These are the most frequently asked questions. If you can’t find the answer, please <a href="">contact us</a>.</p>

  

  

  <ul class="collapsible">

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Do you provide solar panel/ installation/inverter services?</div>

<div class="collapsible-body"><span>No we are the manufacturers of the module mounting structures.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Where are you based at?</div>

<div class="collapsible-body"><span>Our Head office is located in Mumbai. We have sales division at Delhi, Gurugoan, Hydrabad, Pune, Bangalore</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Where is your factory or warehouse located?</div>

<div class="collapsible-body"><span> Our factory is located at Navi- Mumbai.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i> What type of solutions are available?</div>

<div class="collapsible-body"><span>We have rooftop solutions. In which we offer metal roof and flat roof soltution.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>What services we provide?</div>

<div class="collapsible-body"><span>Services provided by us are- <br />Design <br />Calculations <br />Installation Inspection <br />Technical support</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Does non-penerative structures can handle the panel load?</div>

<div class="collapsible-body"><span>Yes, All our structures are tested and certified. We have done load and wind testing for all the solutions.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Can we provide installation service?</div>

<div class="collapsible-body"><span>We don't provide installation service but we can provide inspections or supervision during installation. (Only for higher capacity)</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Can we provide dealership or distributorship?</div>

<div class="collapsible-body"><span>We don't have dealership or distribution policy at this moment. We will let you know whenever we will start distribution.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>What is the warranty of structures?</div>

<div class="collapsible-body"><span>We give warranty of 15 years.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>In which regions you can deliver the product?</div>

<div class="collapsible-body"><span>We have distributed our product all over India. So we can deliver it anywhere in India as per requirement</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>How much time it takes to reach their location?</div>

<div class="collapsible-body"><span>Delivery time depends totally on location. But approx it will take 4-5 days.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>Which certifications do we have for our structures?</div>

<div class="collapsible-body"><span>We have pull out test certification for all our solutions. Certificates are approved by TUV.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>How much capacity is installed till now?</div>

<div class="collapsible-body"><span> We have installated around 20MW capacity last year in India. We installed 2.2GW all around the world.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>What is the minimum quantity order we take?</div>

<div class="collapsible-body"><span>We don't have any minimum and maximum limit for placing orders.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>From how many years we are dealing in Solar structures?</div>

<div class="collapsible-body"><span>We have started manufacturing in India 2 years ago. But we are working in Europe from last 15 years in solar EPC field.</span></div>

</li>

<li>

<div class="collapsible-header"><i class="material-icons iconadd">add</i>

             <i class="material-icons iconremove">remove</i>What is the price for structures?</div>

<div class="collapsible-body"><span>Price totally depends on the project capacity and layout of the site. It also depends on the type of solutions you require.</span></div>

</li>

</ul>

 </div>

</div>









<?php include("footer.php");?>

