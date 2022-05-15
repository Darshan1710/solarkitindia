<?php include("connect.php"); 



if(isset($_GET["url"])) $url=$_GET["url"]; else $url="after-launch";



 $vysledek = mysqli_query($db,"select * from page1 where url='$url' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  

 $title=$row["title"];

 $desc=$row["description"];

 $keyw=$row["keywords"];

 $nazev=$row["nazev"];

 $baner=$row["baner"];

 $text=$row["text"];

 

 

include("header.php");

 

 //echo $url;

 //echo $baner;

 

 

 

 $text='<style>

 .features .row div{

 height:220px; 

 background-size: auto 216px; 

 margin: 0; padding: 0;

 background-repeat: no-repeat;  

 background-attachment: scroll; 

 }

 

 

 

 p.flex-features{

text-align: center;

    vertical-align: middle;

    margin: 3% 25%;

    color: #555;

    

	position: relative;

  top: 50%;

  -ms-transform: translateY(-50%);

  -webkit-transform: translateY(-50%);

  transform: translateY(-50%);

  

    }    

 p.flex-features em{color:#3e74b0!important;font-size: 30px;}

 

 .flex_1-title{

 	background: #3e74b0;

    color: white;

    font-size: 24px;

    font-family: Silka;

    padding: 3px 50px;

    max-width: 480px;

    text-align: left;

    margin: 35px 0 20px 0;

 }

 

 .flex-parm .slogo{

    max-height: 115px;

    margin-top: 22px;}

 

 .flex-parm-title{color: #555;

    font-family: SilkaRegular;

    font-weight: 700;

    font-size: 20px;

}

.flex-parm p{

    border-top: 1px solid #888;

    border-bottom: 1px solid #888;

    margin: 0;

    color: #555;

    font-family: SilkaRegular;

}

.flex-parm li {

    float: left;

    width: 30%;

    font-size: 14px;

    margin: 0 5px;

}



.flex-parm .img{

    max-height: 166px;

 }

 .flex-parm .img img {

    max-width: 31%;

    padding: 5px 0;

    border-left: 1px solid #3e74b0;

    margin: 0;

    float: left;

}.flex-parm .img img:first-child {

    border-left: 0px solid #3e74b0;

   

}

.assemly {

	color:white;

	line-height: 24px;

    font-size: 18px;}

.assemly .flex_x2-title{

 	color: white;

    font-size: 24px;

    font-family: Silka;    

	 margin-top: 30px;

 }

.assemly p{border-top: 1px solid white;

    border-bottom: 1px solid white;

    color: white;

	padding: 5px 0;

    margin: 8px 0;

    }

.assemly .flex_x2-title{color:white;}

.quality{line-height: 24px;

    font-size: 18px	;}



.ekotool{margin:0;max-width: 100%;}



.collapsible.flex_3 {margin: 0;}

.collapsible.flex_3,.collapsible-body{ border: none;

    box-shadow: none;

}



.collapsible.flex_3 .material-icons {

    font-size: 35px;}



.flex-compo{}



.flex-compo .compo_block {

    width: 100%;

    margin: 0; 

}



.components .compo.flex-compo  {

    display: inline-grid;

    grid-template-columns: 540px 540px; 

    column-gap: 48px;

    margin-left: 40px;

}

.flex-compo .compo_block li {

    width: 100%;

    max-width: 420px;

	font-size:18px;

	line-height:24px;

	padding-left: 25px;

	margin-bottom: 10px;

}

.flex-compo .compo_block li:before {

    top: 2px;}



.flex-compo .compo_block span {

    display: inherit;

}



@media (min-width: 360px) and (max-width: 480px){

.flex-compo .compo_block {

    margin: 0!important;

}

.flex-compo .components .compo {

    margin-left: 10px!important;

}

.flex-compo .compo_block li {

    width: 310px!important;

    padding-left: 24px!important;

    font-size: 18px!important;

    line-height: 24px!important;

}



}



.ulcompo{

	column-count: 3;

    column-gap: 58px;

    column-rule: 1px solid #888;

    column-width: 227px;}





 .quality p {font-family: SilkaRegular;

 }

 

 .flex-toggle{display:none;}

 .flex-bod p,.flex-bod p span{color: #555;

    font-family: Silka;}

 .flex-bod p em {

    color: #3e74b0!important;

    font-size: 30px;

	line-height: 22px;



}

 

 .flex_3 a {

    font-family: Silka;

    font-style: normal;

    font-weight: 500;

    font-size: 22px;

    line-height: 18px;

    letter-spacing: -0.333333px;

    color: #FF5345;

    margin-right: 40px;

    margin-top: 33px;

    display: inline-block;

}

 .flex_3 a span.download {

    width: 270px;

    display: grid;

    background: url(http://localhost/solarkitindia.com/images/icons/download.svg) no-repeat;

    background-size: 24px 24px;

    background-position: right;

 }

 

 

 

@media only screen and (max-width: 700px){

.flex_1-title {

    font-size: 20px;

    padding: 3px 10px;

    max-width: auto;

    }

.assemly .flex_x2-title{ 	

    font-size: 20px;

	margin-top: 27px;

}

 .features .row {

    margin-bottom: 0!important;

 }

.flex-parm .col.s2{display:none!important;}



.quality-blok{height: 680px!important;

   background: url(http://localhost/solarkitindia.com/images/after_launch/QUALITY_ASSURANCE_1.png) no-repeat,url(http://localhost/solarkitindia.com/images/after_launch/QUALITY_ASSURANCE_2.png) bottom center no-repeat!important;

    background-size: 100%!important;

}



}



@media only screen and (max-width: 640px){

.baner-flex{height: 270px!important;

 background-image:url(http://localhost/solarkitindia.com/images/after_launch/Product_Launch_Website_Banner.gif)!important;}

.zohovid .embed-responsive {margin-bottom: 20px;}

   

 .features .row div{

  background-size: contain!important;

  height:150px!important;

  }

 

 .features .fbg-1 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-1_mob.png)!important;}

 .features .fbg-2 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-2_mob.png)!important;}

 .features .fbg-3 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-3_mob.png)!important;}

 .features .fbg-4 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-4_mob.png)!important;}

 .features .fbg-5 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-5_mob.png)!important;}

 .features .fbg-6 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-6_mob.png)!important;}

 .features .fbg-7 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-7_mob.png)!important;}

 .features .fbg-8 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-8_mob.png)!important;}

 .features .fbg-9 {background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature-9_mob.png)!important;}

 

 p.flex-features {

   margin: 1% 18%!important;

    line-height: 20px!important;

    font-size: 16px!important;}

 

 

 .flex-parm {

    text-align: center!important;

	position: relative!important;

	min-height: 420px;

}

 .flex-parm p {  width: 250px;

    height: 56px;

    margin: 0 auto;}

 .flex-parm li {

    float: none!important;

    width: 100%!important;

    font-size: 16px!important;

    }

 .flex-parm ul{

    position: relative!important;

    top: 150px!important;

    

}

 .flex-parm .img {

    position: absolute!important;

    top: 116px!important;

}

 .flex-parm .img img {

    max-width: 33%!important;}



 

 .quality p {position:relative!important;

top:250px!important;

 }

 }

</style>







 <h1 class="hide">Flextilt pro tilted solar structure</h1>





 <div class="section" >

 <img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Product_Launch_Website_Banner.gif">

 </div>

 

 

 <div class="section" >

 

  <img class="hide-on-small-only responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Made_in_India_icon_banner.png">

 <img class="show-on-small hide-on-med-and-up responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Made_in_India_icon_banner_mob.png">



 </div>

 

 

 <div class="section pad27 flex-bod ">

<div class="container">

<div class="row ">

<p class="col s12">

FlexTilt Pro is designed to use as tilted structure where desired angle can be achieved. These 

angle variations can be achieved be changing rear support and distance between front and rear 

Base Rails. <span class="flex-toggle">There is possibility of changing angles from 7° to 15°. These angles can be achieved in 

group 7° to 10° and 11° to 15° by using different Rear Support. Possible permutation combinations 

are shown below.</span>&nbsp;<em>...</em>

</p>

</div>

</div>

</div>







<div class="section pad27 zohovid">

<div class="container">

<div class="row">



 <div class="col s12 m4" >

<div class="embed-responsive embed-responsive-16by9">

 <iframe width="100%" height="315" src="https://www.youtube.com/embed/LZAyRvQtJtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

</div>

 <div class="col s12 m4">

<div class="embed-responsive embed-responsive-16by9">

<iframe width="100%" height="315" src="https://www.youtube.com/embed/SZR0zwTwZ7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

</div>

 <div class="col s12 m4">

<div class="embed-responsive embed-responsive-16by9">

<iframe width="100%" height="315" src="https://www.youtube.com/embed/n9EuoCKyBRc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

</div>



   </div>

 </div>

</div>

 

 

<div class="section features flex-bod">

<div class="container">

<div class="flex_1-title">

FEATURES OF FLEXTILT PRO

</div>

<div class="row ">

 <div class="col s10 m4 offset-s1 fbg-1" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_1.png);">

<p class="flex-features">

Low Rise of panel 

due to single <span class="flex-toggle"> 

Landscape panel 

Tilt which results in 

less wind pressure acting

 on panel surface.</span>&nbsp;<em>...</em></p>

 </div>

 <div class="col s10 m4 offset-s1 fbg-2" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_2.png);">

<p class="flex-features">Thermal & Mechanical 

<span class="flex-toggle">compensation</span>&nbsp;<em>...</em></p>

</div>

 <div class="col s10 m4 offset-s1 fbg-3" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_3.png);">

<p class="flex-features">Panel to Panel earthing by 

<span class="flex-toggle">means of grounding plate.</span>&nbsp;<em>...</em></p>

</div>

</div>

<div class="row ">

 <div class="col s10 m4 offset-s1 fbg-4" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_4.png);">

<p class="flex-features">Lower shading distance due to 

<span class="flex-toggle">landscape 

orientation 

of the solar panel.</span>&nbsp;<em>...</em></p>

</div>

 <div class="col s10 m4 offset-s1 fbg-5" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_5.png);">

<p class="flex-features">It can be installed on 

<span class="flex-toggle">both South-north 

& East-West Shed.

</span>&nbsp;<em>...</em></p>

</div>

 <div class="col s10 m4 offset-s1 fbg-6" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_6.png);">

<p class="flex-features">Rofing sheet mounted solution 

<span class="flex-toggle">enables equal panel to panel row distance.</span>&nbsp;<em>...</em></p>

</div>

</div>

<div class="row ">

 <div class="col s10 m4 offset-s1 fbg-7" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_7.png);">

<p class="flex-features">EPDM Rubber Sheet for Excellent 

<span class="flex-toggle">Water/UV/High Temperature resistance.</span>&nbsp;<em>...</em></p>

</div>

 <div class="col s10 m4 offset-s1 fbg-8" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_8.png);">

<p class="flex-features">Self Stitching Screw of A2 

<span class="flex-toggle">stainless steel 

with hardened

steel drill point for 

extreme fastening</span>&nbsp;<em>...</em></p>

</div>

 <div class="col s10 m4 offset-s1 fbg-9" style="

 background-image: url(http://localhost/solarkitindia.com/images/after_launch/Feature_9.png);">

<p class="flex-features">Patent applied product with slide 

<span class="flex-toggle">& Rotate action to 

achieve flexible tilt 

angles without changing 

its components.</span>&nbsp;<em>...</em></p>

</div>

</div>





</div>

</div>

</div>





<div class="section" >

  

 

 <img class="hide-on-small-only responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/7to15degree_banner.png">

 <img class="show-on-small hide-on-med-and-up responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/7to15degree_banner_mob.png">

 

 </div>

 







<div class="section">

<div class="container">

<div class="flex_1-title">

COMPONENTS

</div>



<div class="row flex-parm">

 <div class="col s2 center">

 <img class="responsive-img slogo" src="http://localhost/solarkitindia.com/images/after_launch/Slogo.png">

</div>



 <div class="col s12 m5">

<br><div class="flex-parm-title">FRONT SUPPORT</div>

<p>Slides & rotate inside front base rail</p>

<ul>

<li>

<strong>Available lengths</strong><br>

70 mm Sharing two

consecutive panels

</li>

<li>

<strong>Thickness</strong><br>

1.5 mm

</li>

<li>

<strong>Raw material used</strong><br>

Aluminium 6063 T6

</li>

 </div>

 

 <div class="col s12 m5 img">

<img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Front_Support_Actual_img.png">

<img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Front_Support_3D_img.png">

 <img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Front_Support_Fixation_img.png">

</div>  

</div>

</div>  

</div>







<div class="section" style="background-color: #f1f5f9;padding:15px 0 5px 0;">

<div class="container">

<div class="row flex-parm">

 



 <div class="col s12 m5 push-m5">

<br><div class="flex-parm-title">BASE RAIL</div>

<p>Base rail firmly attached to the crest of the roof</p>

<ul>

<li>

<strong>Available lengths</strong><br>

250/300/35/400mm <br>

Depending on crest to crest distance

</li>

<li>

<strong>Thickness</strong><br>

1.5 mm

</li>

<li>

<strong>Raw material used</strong><br>

Aluminium 6063 T6

</li>

 </div>

 <div class="col s12 m5 img pull-m5">

<img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Base_Rail_Actual_img.png">

<img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Base_Rail_3D_img.png">

 <img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Base_Rail_Fixation_img.png">

</div> 

 <div class="col s2 center">

 <img class="responsive-img slogo" src="http://localhost/solarkitindia.com/images/after_launch/Slogo.png">

</div> 

</div>

</div>  

</div>







<div class="section">

<div class="container">

<div class="row flex-parm">

 <div class="col s2 center">

 <img class="responsive-img slogo" src="http://localhost/solarkitindia.com/images/after_launch/Slogo.png">

</div>



 <div class="col s12 m5">

<br><div class="flex-parm-title">REAR SUPPORT</div>

<p>Slides & rotate inside base rail</p>

<ul>

<li>

<strong>Available lengths</strong><br>

70 mm Sharing two

consecutive panels

</li>

<li>

<strong>Thickness</strong><br>

3 mm

</li>

 </div>

 

 <div class="col s12 m5 img">

<img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Rare_Support_Actual_img.png">

<img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Rare_Support_10D_3D_img.png">

 <img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Rare_Support_15D_3D_img.png">

</div>  

</div>



</div>

</div></div>

</div>





<div class="section pad27 assemly" style="background-color: #3e74b0;">

<div class="container">

<div class="row">

 <div class="col s12 m5">

 

 <div class="col s12"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Assembly_Fixation.png"></div>

 <div class="col s6"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Assembly_Front.png"></div>

 <div class="col s6"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Assembly_Rare.png"></div>

</div>

 <div class="col s12 m5 offset-m1">

 <div class="flex_x2-title">ASSEMLY</div>

<p>

As there are two rotating parts at front & rear 

so these connection point angles are dynamic. 

</p>

As panel resting surfaces at front & rear should 

always be at right angle to the panel, this right angle 

is achieved by the rotation of the front & rear 

supports. Angle is decided by the distance between 

front & rear base rail. This arrangement of surfaces 

right angle to the panel fulfils the law of Degree of 

Freedom of used in structural engineering.

</div>

</div>

</div><br>

</div>





<div class="section quality-blok " style="height: 325px;

    background: url(http://localhost/solarkitindia.com/images/after_launch/QUALITY_ASSURANCE_2.png) no-repeat, url(http://localhost/solarkitindia.com/images/after_launch/QUALITY_ASSURANCE_1.png) top right no-repeat;

    background-size: 50%;">

<div class="container">

<div class="flex_1-title">QUALITY ASSURANCE</div>

<div class="row">

 <div class="col s12 m5 quality"><p>

Our success continues to be driven 

through our team experience and 

expertise, as well as a complete 

approch to quality assurance that is 

supported by comprehensive project 

management principle during all stage 

of the design, production and quality 

assurance stages which helps us to 

deliver projects on time.

</p></div>



</div>

</div>

</div>









<div class="section">

<div class="container">

<ul class="collapsible flex_3">

<li>

<div class="collapsible-header flex_1-title ekotool"><em class="material-icons iconadd">add</em> <em class="material-icons iconremove">remove</em>EKOTOOL</div>

<div class="collapsible-body">



<div class="row">

 <div class="col s12 m6">

 <div class="embed-responsive embed-responsive-16by9">

 <iframe width="100%" height="315" src="https://www.youtube.com/embed/LZAyRvQtJtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

</div>

 <div class="col s12 m6">

<p>

EkoTool is our online web-based tool which is

operated by our employees who are professional in

solar. We can plan project for Geo location

anywhere in the world. A detailed Project Report is

generated from this tool for a particular site. This

tool is loaded with required wind zones, Snow

loads, solar radiation & country specific standards.

Product specific details like wind study, static

study is integrated to the tool thus able to prepare

solar plant design inno time.</p> 

</div>









</div>

</li>

<li>

<div class="collapsible-header flex_1-title"><em class="material-icons iconadd">add</em> <em class="material-icons iconremove">remove</em>TECHNICAL SPECIFICATIONS</div>

<div class="collapsible-body components">



<div class="compo flex-compo">

<div class="compo_block">

<ul>

<li>Scope of Application 

<span>Pitched Roof with Trapezoidal sheet metal</span></li>



<li>Rail to Roof Fixation

<span>Self Stitching Screw / Self Drilling Screw /

Rivet / Adhesive Glue</span></li>



<li>Panel to Rail Fixation 

<span>End Clamp / Mid Clamp</span></li>



<li>Roof Slope 

<span>9° to 25°</span></li>



<li>Min. Sheet Thickness

<span>0.4mm Steel and t 0.5 mm Aluminium</span></li>



<li>Crest to Crest Distance 

<span>200 mm to 350 mm</span></li>



<li>Crest Width 

<span>At least 22 mm</span></li>

</ul>

</div>



<div class="compo_block">

<ul>



<li>Building Height

<span>Up to 20 meter</span></li>

 

<li>PV - Modules

<span>Framed</span></li>



<li>Module Orientation

<span>Landscape</span></li>



<li>Tilt Degree

<span>7 to 15</span></li>



<li>Size of Module Array

<span>Any Size Possible</span></li>



<li>Materials

<span>EN AW 6063 T6/ SS 304 / EPDM</span></li>



<li>Design Windspeed

<span>Up to 200 kmph*</span></li>



</ul>

</div>

</li>









<li>





<li>

<div class="collapsible-header flex_1-title"><em class="material-icons iconadd">add</em> <em class="material-icons iconremove">remove</em>REPORTS & CERTIFICATIONS</div>

<div class="collapsible-body"  style="background-color: #f1f5f9;">

<ul class="ulcompo">

<li><strong>COMPONENT ANALYSIS WIND</strong> </li>

<li>1. FEA analysis of All Rails. </li>

<li>2. FEA analysis of All supports </li>

<li>3. FEA analysis of All Fixations. </li>

<li>4. FEA analysis of All Fasteners. </li>



<li><strong>ANALYSIS REPORT</strong> </li>

<li>1. Rear Support 10D (South - North) </li>

<li>2. Rear Support 15D (South - North) </li>

<li>3. Rear Support 10D (East - West) </li>

<li>4. Rear Support 15D (East - West)</li> 



<li><strong>PULLOUT TEST REPORT</strong></li>

<li>1. Pullout Test report - SSS</li>

<li>2. Pullout Test report - Rivet AL</li>

<li>3. Pullout Test report - Rivet SS</li>

<li>4. Pullout Test report - Adhesive Glue</li>

</ul>



 </div>

</li>

</ul>



<img class="hide-on-small-only responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Stock_is_ready.png">

 <img class="show-on-small hide-on-med-and-up responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Stock_is_ready_mob.png">



<ul class="collapsible flex_3">

<li>

<div class="collapsible-header flex_1-title"><em class="material-icons iconadd">add</em> 

<em class="material-icons iconremove">remove</em>BROCHURE</div>

<div class="collapsible-body components center">



<a href="http://localhost/solarkitindia.com/images/after_launch/FlexTilt_Pro_Brochure.pdf" class="down" target="_blank"><span class="download">Download brochures </span></a>







</div>

</li>

</ul>







</div>

</div>









<div class="section">

<div class="container">

<div class="row center">

<div class="flex_1-title">OTHERS PRODUCTS</div>

<div class="col s10 m3 offset-s1 offset-m2">

<a href="http://localhost/solarkitindia.com/product-metal-roof/#tr" title="For trapez roof"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Trapezoidal.png"></a>

<p>Mounting system for trapezoidal roofs</p>

</div>

<div class="col s10 m3 offset-s1 offset-m2">

<a href="http://localhost/solarkitindia.com/product-metal-roof/#se" title="For seam roof"><img class="responsive-img" src="http://localhost/solarkitindia.com/images/after_launch/Standing_seam.png"></a>

<p>Mounting system for standing seam roofs</p>

</div>

</div></div>









</div>

</div>















';



 echo $text;



include("footer.php");?>

