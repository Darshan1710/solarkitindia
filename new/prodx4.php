<?php include("../connect.php"); 



if(isset($_GET["url"])) $url=$_GET["url"]; else $url="homepage";



if(isset($_POST["myurl"])){

	$result=array();

	$vysledek = mysqli_query($db,"select * from page1 where url='{$_POST["myurl"]}' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  	$result[]= $row["nazev"];

	$result[]=$row["text"];

	echo json_encode($result);

	exit;

}





$url="product-metal-roof";

 $vysledek = mysqli_query($db,"select * from page1 where url='$url' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  

 $title=$row["title"];

 $desc=$row["description"];

 $keyw=$row["keywords"];

 $nazev=$row["nazev"];

 $baner=$row["baner"];

 $text=$row["text"];

  

 

 //if($row["typ"]==3 or $row["typ"]==4)$text='<div class="section top"><div class="container"><h2>'.$nazev.'</h2><hr class="divider-line">'.$text.'</div></div>';

 

$classHtml='class="mobile-menu-open"';







$menu_filtr='

<div class="varianty hed-1">

 <span class="right close"><i class="material-icons">close</i></span>

 

<div class="var-wrapper" >

 <div class="row">

 <ul>

 <li class="va_0">		

 <div class="tit va_0">type of metal roof</div> 

 	<div class="col s6">

 		<label for="r11">

 			<input id="r11"  class="browser-default" type="radio" name="va_0" value="TR""/>

 		 <span class="r11">Trapez</span>

  </label> 		

 	</div> 

 	

 <div class="col s6">

 		<label for="r12">

 			<input id="r12"  class="browser-default" type="radio" name="va_0" value="SE"  />

 		 <span class="r12">Seam</span>

  </label>

</div> 	

</li>		

 

 

 <li class="va_1">	 	

  	

<div class="tit va_1">panel orientation</div> 	

 	<div class="col s6">

 		<label for="r1">

 			<input id="r1"  class="browser-default" type="radio" name="va_1" value="PO""/>

 		 <span class="r1">Portrait</span>

  </label> 		

 	</div>

 	

 <div class="col s6">

 		<label for="r2">

 			<input id="r2"  class="browser-default" type="radio" name="va_1" value="LA"/>

 		 <span class="r2">Landscape</span>

  </label>

</div> 		

 	 </li>		

 <li class="va_2">	 	

		

<div class="tit va_2">rail type</div> 

 	<div class="col s6">

 		<label for="r13">

 			<input id="r13"  class="browser-default" type="radio" name="va_2" value="SR""/>

 		 <span class="r13">Short Rail</span>

  </label> 		

 	</div>

 	

 <div class="col s6 ">

 		<label for="r14">

 			<input id="r14"  class="browser-default" type="radio" name="va_2" value="LR"/>

 		 <span class="r14">Long Rail</span>

  </label>

</div> 		

 		 </li>		

 <li class="va_5">	 	

		

<div class="tit va_5">rail height</div>		

 <div class="col s3 va_5">

  <label for="r9">

  	<input id="r9" class="browser-default" type="radio" name="va_5" value="30""/>

  <span class="r9">30 mm</span>

  </label> 

 	</div>

 	

 <div class="col s3 va_5">

  <label for="r15">

  	<input id="r15" class="browser-default" type="radio" name="va_5" value="41""/>

  <span class="r15">41 mm</span>

  </label> 

 	</div>

	

<div class="col s3 va_5">

   <label for="r10">

 <input id="r10" class="browser-default" type="radio" name="va_5" value="65"/>

 <span class="r10">65 mm</span>

  </label>  

 	</div>		

 			

  	

<div class="col s3 va_5">

   <label for="r16">

 <input id="r16" class="browser-default" type="radio" name="va_5" value="100"/>

 <span class="r16">100 mm</span>

  </label>  

 	</div>		

 	

 

 </li>		

 <li class="va_4">	 	

 

 	

<div class="tit va_4">type of panel attachment</div>	

 <div class="col s6">

  <label for="r7">

  	<input id="r7"  class="browser-default" type="radio" name="va_4" value="MC"/>

  <span class="r7">Clamp</span>

  </label>

  	</div>

 	

<div class="col s6 ">

   <label for="r8">

 <input id="r8"  class="browser-default" type="radio" name="va_4" value="AR"/>

 <span class="r8">AR Clip</span>

  </label>  

 	</div>	

 	

	  </li>		

 <li class="va_3">	 	

	 



<div class="tit va_3">type of attachment to the roof</div> 		

 	<div class="col s3 va_3">

 		<label for="r3">

 		<input id="r3"  class="browser-default" type="radio" name="va_3" value="SS""/>

 		<span class="r3">Screw</span>

  </label>

 		

 	</div>

 <div class="col s3 va_3">

 		<label for="r4">

 		<input id="r4"  class="browser-default" type="radio" name="va_3" value="SD"/>

 		<span class="r4">Screw 2</span>

  </label>

 		

 	</div>



 <div class="col s3 va_3">

 	<label for="r5">

 		<input id="r5"  class="browser-default" type="radio" name="va_3" value="RI"/>

 		 <span class="r5">Rivet</span>

  </label>

 		

 	</div>

 <div class="col s3 va_3">

 	<label for="r6">

 	<input id="r6"  class="browser-default" type="radio" name="va_3" value="GL"/>

 		 <span class="r6">Glue</span>

  </label> 		

 	</div>

 

  </li>		

 

 	

</ul>

	

 <span class="right"><a href="http://localhost/solarkitindia.com/new/prodx2.php" class="reset black-text">Reset filter<i class="material-icons">close</i></a></span>

  </div> 	

 		</div> 	

</div>	

  	

 	';

include("header.php");

 

 

echo "<h1 class='hide'>{$nazev}</h1>";

// echo $baner;

 

// echo $text;

?>







<div id="mobnav-btn">

  <div class="mobnav-icon">

    <i class="material-icons">filter_list</i> Choose your roof

  </div>

</div>



  	

  

  <style>

  

  

  

  

  

  

  	.varianty .col label span{

  		border:1px solid #D3DBE7;

  	line-height: 130px;

    height: 90px;

    width: 100%;

    display: block;

    color:#111111;

    margin: 7px 0;

    padding: 0;

    vertical-align: middle;

    text-align: center;

  	   }

  	.varianty .col label span.active{

  	  border-color:#FF5345;

  	   color:#FF5345;

    }

    

    

 .varianty [type="radio"]:checked + span:before {

    border: 2px solid transparent;

}

.varianty[type="radio"]:not(:checked) + span:before,

.varianty [type="radio"]:not(:checked) + span:after,

.varianty [type="radio"]:checked + span:before,

.varianty [type="radio"]:checked + span:after, 

.varianty[type="radio"].with-gap:checked + span:before,

.varianty [type="radio"].with-gap:checked + span:after {

    border-radius: none;

}

.varianty [type="radio"] + span:before, 

.varianty [type="radio"] + span:after {

    display:none;

    content: '';

    position: fixed;

    left: -9990;

    top: -9990;

    margin:0;

    width:0;

    height:0;

    z-index: 0;

    

}



.varianty [type="radio"]:disabled + span{

  filter: invert(41%) sepia(2%) saturate(3%) hue-rotate(334deg) brightness(160%) contrast(101%);

 

}



.varianty-hide, .ref{display:none;}

.varianty-hide. show{display:block;}



.varianty span.active {border: 1px solid #FF5345;color:#FF5345;}

.varianty span.r1  {background-image: url('http://localhost/solarkitindia.com/images/icons/Portrait.svg'); }

.varianty span.r2  {background-image: url('http://localhost/solarkitindia.com/images/icons/Landscape.svg');}

.varianty span.r12 {background-image: url('http://localhost/solarkitindia.com/images/icons/Seam.svg');}

.varianty span.r11 {background-image: url('http://localhost/solarkitindia.com/images/icons/Trapez.svg');}

.varianty span.r13 {background-image: url('http://localhost/solarkitindia.com/images/icons/Short-Rail.svg');}

.varianty span.r14 {background-image: url('http://localhost/solarkitindia.com/images/icons/Long-Rail.svg');}

.varianty span.r9  {background-image: url('http://localhost/solarkitindia.com/images/icons/Rail-30.svg');}

.varianty span.r10 {background-image: url('http://localhost/solarkitindia.com/images/icons/Rail-65.svg');}

.varianty span.r15  {background-image: url('http://localhost/solarkitindia.com/images/icons/Rail-30.svg');}

.varianty span.r16 {background-image: url('http://localhost/solarkitindia.com/images/icons/Rail-65.svg');}

.varianty span.r7  {background-image: url('http://localhost/solarkitindia.com/images/icons/End-Mid-Clamp.svg');}

.varianty span.r8 {background-image: url('http://localhost/solarkitindia.com/images/icons/Raymond-Clip.svg');}

.varianty span.r3 {background-image: url('http://localhost/solarkitindia.com/images/icons/Screw 1.svg');}

.varianty span.r4 {background-image: url('http://localhost/solarkitindia.com/images/icons/Screw 2.svg');}

.varianty span.r5 {background-image: url('http://localhost/solarkitindia.com/images/icons/Rivet.svg');}

.varianty span.r6 {background-image: url('http://localhost/solarkitindia.com/images/icons/Glue.svg');}

    

 .varianty .col label span.active{

   filter:invert(41%) sepia(57%) saturate(2034%) hue-rotate(334deg) brightness(102%) contrast(101%);

   } 



.varianty span {

    background-repeat: no-repeat;

    background-position: center top;

    background-position-y: 5px;

  }

.varianty .col {padding:0;}



.varianty .col:nth-child(2n) {

  /*  padding-right: 0.75rem;*/

}

.varianty .col:nth-child(7) {

  /*  padding-left: 0.75rem;*/

}





.varianty .col:nth-child(2n+1) span{

    /* border-right:0px;*/

  /*   border-radius : 0 5px 5px 0;*/

}

.varianty .col:nth-child(2n+1) label span.active{

  	  border-right:1px solid #FF5345;

  }

  	

.varianty .col:nth-child(2n-2) span{

  /* border-radius : 5px 0 0 5px;*/

     

}



.varianty .col:nth-child(10) {

  /*  padding-right: 0;*/     

}

.varianty .col:nth-child(10) span,.varianty .col:nth-child(11) span{

    /* border-radius : 0;*/   

}



 p.title {width: 100%;

    text-align: center;

    margin:0 0 10px 0;}

 .reset { padding: 10px;}

  



::-webkit-scrollbar-track

{

    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);

    background-color: #F5F5F5;

}



::-webkit-scrollbar

{

    width: 10px;

    background-color: #F5F5F5;

}



::-webkit-scrollbar-thumb

{

    background-color: #000000;

    border: 2px solid #555555;

}





html {

  left: 0%;

  position: relative;

  overflow-x: hidden;

  -webkit-transition: all .2s ease;

  -moz-transition: all .2s ease;

  -ms-transition: all .2s ease;

  -o-transition: all .2s ease;

  transition: all .2s ease;

}



/* start MOBILE NAV */



#mobnav-btn {

 position: fixed;

    top: 100px;

    opacity: 1;

    color: #000;

    display: block;

    cursor: pointer;

    padding: 20px 50px;

    font-size: 16px;

    border: 2px solid #DEDEDE;

    z-index: 999999999999;

    -webkit-transition: all .2s ease;

    -moz-transition: all .2s ease;

    -ms-transition: all .2s ease;

    -o-transition: all .2s ease;

    transition: all .2s ease;

    background-color: white;

    -webkit-border-radius: 3px;

    border-radius: 18px;

    left: 41%;

}



.mobile-menu #mobnav-btn .mobnav-btn-label {

  display: block;

}



.mobile-menu-open #mobnav-btn {

  display:none;

}



.mobile-menu-open {

  left: 300px;

  /*overflow: hidden;*/

}

.mobile-menu-open #mobnav-btn .mobnav-icon {

  color: white;

}



.mobile-menu-open .container { margin:0 5%;}

.varianty {

  position: fixed;

  background: white;

  width: 310px;

  left: -310px;

  bottom: 0%;

  top: 0%;

  z-index: 99999999999999999;

  zoom: 1;

  -webkit-transition: all .2s ease;

  -moz-transition: all .2s ease;

  -ms-transition: all .2s ease;

  -o-transition: all .2s ease;

  transition: all .2s ease;

  border-right:1px solid #888;

  padding: 15px 10px 80px 10px;

}



.mobile-menu-open .varianty {

  z-index: 9999999999999;

  zoom: 1;

  left: 0%;

}



.var-wrapper { width: 300px;

  overflow-y: auto;

  -webkit-overflow-scrolling: touch;

  height: 100%;

  padding: 0 5px

}







@media only screen and (max-width: 640px){

.mobile-menu-open {

    left: 0px;    

}













.mobile-menu-open .slick-var {

    position: relative;

    display: block;

    z-index: 3;

    overflow: hidden;

    box-sizing: border-box;

    -webkit-user-select: none;

    -moz-user-select: none;

    -ms-user-select: none;

    user-select: none;

    -webkit-touch-callout: none;

    -khtml-user-select: none;

    -ms-touch-action: pan-y;

    touch-action: pan-y;

    -webkit-tap-highlight-color: transparent

}



.slick-list {

    position: relative;

    display: block;

    margin: 0;

    padding: 0

}



.slick-list:focus {

    outline: 0

}



.slick-list.dragging {

    cursor: pointer;

    cursor: hand

}



.mobile-menu-open .slick-var .slick-list,.mobile-menu-open .slick-var .slick-track {

    -webkit-transform: translate3d(0,0,0);

    -moz-transform: translate3d(0,0,0);

    -ms-transform: translate3d(0,0,0);

    -o-transform: translate3d(0,0,0);

    transform: translate3d(0,0,0)

}



.slick-track {

    position: relative;

    top: 0;

    left: 0;

    display: block;

    margin-left: auto;

    margin-right: auto

}



.slick-track:after,.slick-track:before {

    display: table;

    content: ''

}



.slick-track:after {

    clear: both

}



.slick-loading .slick-track {

    visibility: hidden

}



.slick-slide {

    display: none;

    float: left;

    height: 100%;

    min-height: 1px

}



[dir=rtl] .slick-slide {

    float: right

}



.slick-slide img {

    display: block

}



.slick-slide.slick-loading img {

    display: none

}



.slick-slide.dragging img {

    pointer-events: none

}



.slick-initialized .slick-slide {

    display: block

}



.slick-loading .slick-slide {

    visibility: hidden

}



.slick-vertical .slick-slide {

    display: block;

    height: auto;

    border: 1px solid transparent

}



.slick-arrow.slick-hidden {

    display: none

}



.slick-next,.slick-prev {

    font-size: 0;

    line-height: 0;

    position: absolute;

    top: 50%;

    display: block;

    width: 40px;

    height: 40px;

    padding: 0;

    cursor: pointer;

    color: transparent;

    border: 0;

    outline: 0;

    background: #eee;

    z-index: 3;

    border-radius: 50%

}



.slick-next:focus,.slick-next:hover,.slick-prev:focus,.slick-prev:hover {

    color: transparent;

    outline: 0;

    background: 0 0

}



.slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before {

    opacity: 1;

    color: #555

}



.slick-next:before,.slick-prev:before {

    font-family: FontAwesome;

    font-size: 20px;

    line-height: 1;

    opacity: .75;

    color: #fff;

    -webkit-font-smoothing: antialiased;

    -moz-osx-font-smoothing: grayscale

}



.slick-prev {

    left: 0

}



.slick-prev:before {

    content: "<";

    text-shadow: 0 0 2px #111

}



.slick-next {

    right: 0

}



.slick-next:before {

    content: ">";

    text-shadow: 0 0 2px #111

}



.slick-slide ul {

    margin: 0

}



.mobile .varianty p.title {font-size: 16px;margin: 0;}

.mobile .varianty .tit {font-size: 14px;text-align: center;}

.mobile .close {display: none;}



.mobile-menu-open.mobile .varianty {

    position: absolute;

    background: white;

    width: 100%;

    left: 0;

    bottom: 0%;

    top: 92px;

    z-index: 3;

    zoom: 1;

    -webkit-transition: all .2s ease;

    -moz-transition: all .2s ease;

    -ms-transition: all .2s ease;

    -o-transition: all .2s ease;

    transition: all .2s ease;

    border-right: 0px solid #888;

    padding: 0;

height: 200px;

}



.mobile .result{padding-top: 200px;}

  

  

 .mobile-menu-open .var-wrapper{ width: 100%;

    overflow: hidden;

    height: 400px;

    padding: 

    }

.mobile .var-wrapper{ 

    height: 180px;

   }

 

 .slick-var{height: 120px;}

/*.mobile-menu-open .var-wrapper .col{ /* width:50%;*/ }

/*.mobile-menu-open .close {display:none;}*/





}



















 </style>



		

  <div class="col ref"></div>



<div class="result"><?php echo $text;?></div>

  

  <?php

  /*

<div class="section ">

 <div class="container">



<div class="row"> 	

  

  

  </div> 	 	

</div>	</div>	*/?>



<?php include("footer.php");





/*

  <a class="button invert auto">Download brochures<em class="material-icons">file_download</em></a> <a class="button auto">Request quote</a>

<a href="http://localhost/solarkitindia.com/image/brochure/SolarKit-Brochure-interactive.pdf" class="button invert auto">Download brochures<em class="material-icons">file_download</em></a> <a href="#form" class="button auto">Request quote</a>



 <a class="button invert auto" href="http://localhost/solarkitindia.com/images/brochure/SolarKit-Brochure-interactive.pdf" target="_blank">Download brochures<em class="material-icons">file_download</em></a> <a class="button auto" href="#form">Request quote</a>

 

  */





?>



<script>	





 if (window.matchMedia("(max-width: 600px)").matches)  

        { 

            

             $(".var-wrapper ul").addClass("slick-var");  

             $("html").addClass("mobile");

        } else { 

            

            $("html").removeClass("mobile"); 

            $(".var-wrapper ul").removeClass("slick-var"); 

        } 

        

        

var hash='';

if( location.hash && location.hash.length ) {

       var hash = decodeURIComponent(location.hash.substr(1));

        $('.ref').text(hash);        

        var array = hash.split('-');  

        var disable_LR=false;      

        $.each(array , function(index, val) { 

            $(":radio[value=" + val + "]").attr('checked', 'checked');

            if( val == "LR"){disable_LR=true;}

     	});

     	if(disable_LR){

     		$('.varianty #r14').attr('checked', 'checked');	 

   			$('.varianty input:radio[name="va_5"], .varianty input:radio[name="va_3"]').prop( "checked", false );

   			$('.va_5,.va_3').hide();

   	    }   

   // $('html,body').animate({scrollTop: $('.result').offset().top}, 800, function() {});    

    }

    

function hledej(hash){

	var pole = {};

	$('.ref').text("");

	

    $(".varianty label span").removeClass("active");

    $(".varianty").find(":radio:checked").each(function(){

        	$(this).closest("label").find("span").addClass("active");

        	var key=$(this).attr("name").substring(3);

        	pole[ key ] = $(this).val();

        	$("." + key).hide();        	      

        });

  

  

var inputs = $('input:radio');

var groups = [];

var groups_1 = [];



for (var i = 0; i < inputs.length; ++i) {	

  groups.push(inputs[i].name)

}







for (var i = 0; i < groups.length; ++i) {



if($("input:radio[name='" + groups[i] +"']:checked").length > 0) {} else {

	console.log(groups[i]);

	groups_1.push(groups[i]);

	$("input[name='" + groups[i] +"']").closest("li").find("span").hide();

	$(".mobile input[name='" + groups[i] +"']").closest("li").find("span").show();

	$("." + groups[i] + " .tit").hide();

	$(".mobile ." + groups[i] + " .tit").show();

	}

	

}



$("input[name='" + groups_1[0] +"']").closest("li").find("span").show();

$("." + groups_1[0] + " .tit").show();

if($(".varianty #r13").is(':checked') ) {$("." + groups_1[0]).show();}



 if($(".varianty #r12").is(':checked')) { 

   	$('.varianty .va_5, .varianty .va_3, .varianty va_4').hide();

   		} 

   		

   		

     text = $.map(pole, function(val,index) {                  

     var str = val;

     return str;

     }).join("-"); 



    $('.ref').text(text);

    if(hash){$('.ref').text(hash);  }

    if($('.ref').text()) $.ajax({    type: "POST",dataType: 'json',data: "myurl=" + $('.ref').text(),success: function(data, textStatus){$("h1").text(data[0]);$(".result").html(data[1]); }});  

}

        

$(document).ready(function () {



  hledej(hash);



   $('.varianty input:radio[name="va_5"]').click(function () {

      $('.r7,.r8').removeClass("active");

      $('#r7,#r8').attr('disabled', false);  

      $('#r7,#r8').prop( "checked", false );    

    $("input[name='va_4']").closest("label").find("span").show();

	$(".va_4").show();

	

	  });    	

    	

     

    $('#r15,#r16').click(function () {

      $('.r7,.r8').removeClass("active");

       $('#r7').attr('disabled', 'disabled');   

       $('#r8').prop( "checked", true );   

          

    });    	

    $('#r9,#r10').click(function () {

      $('.r7,.r8').removeClass("active");

       $('#r8').attr('disabled', 'disabled');

       $('#r7').prop( "checked", true );      

    });    	

   

   

   

   

   $('.varianty input:radio').change(function () {

   	if( $(this).val() == "TR"){

   		$(".varianty input").attr('disabled',false);

   	}

 

   	if( $(this).val() == "SE"){

   		$('.varianty input:radio[name="va_5"], .varianty input:radio[name="va_3"], .varianty input:radio[name="va_4"]').prop( "checked", false ).hide();

   		$(".varianty #r13").attr('disabled','disabled').prop("checked", false );

   	}

   	   	 

   	if( $(this).val() == "PO" && $(".varianty #r12").is(':checked')){ 

   		$(".varianty #r13").prop( "checked", false ).attr('disabled', 'disabled');

   		} 

   	

  	if( $(this).val() == "LA" && $(".varianty #r12").is(':checked')){ 

   		$(".varianty #r13").attr('disabled',false);

   		$(".varianty #r14").prop("checked", false );

   		} 

   	

   	if( $(this).val() == "SR" && $(".varianty #r12").is(':checked')){ 

   		$('.varianty input:radio[name="va_5"], .varianty input:radio[name="va_3"], .varianty input:radio[name="va_4"]').prop( "checked", false ).hide();

   		} 

   		

   	

   	

   	$('.va_5,.va_3').show();

   	if( $(this).val() == "SR" || $(".varianty #r13").is(':checked')){ 

   			$('.va_5,.va_3').show();   			

   			$('.varianty input:radio[name="va_5"]').attr('disabled', false);

    }

    

    if( $(this).val() == "LR" || $(".varianty #r14").is(':checked')){ 

   		$('.varianty input:radio[name="va_5"], .varianty input:radio[name="va_3"], .varianty input:radio[name="va_4"]').prop( "checked", false ).hide();

   		$('.varianty input:radio[name="va_4"]').prop( "checked", false ).attr('disabled', 'disabled');

   		$('.va_5').hide();

   		$('.varianty input:radio[name="va_5"]').prop( "checked", false );

   		

   	}

   		

      var value = $(this).val();

      hledej();

    

        	

   	location.hash = $('.ref').text();

      var name = $(this).attr("name");

      

      if(name=="va_5") { $('.slick-var').slick('slickGoTo', 5);

      } else if (value=="LR"){

      } else if (value=="SR" && $(".varianty #r12").is(':checked')){

      } else if (name=="va_3"){

       } else {

      $('.slick-var').slick('slickNext');

      

      }

      

      //$('html, body').animate({scrollTop: $('.mobile').offset().top}, 100, function() {});    

       $('html.mobile,body').animate({scrollTop: $('.result').offset().top}, 800, function() {}); 

   });

   

   

    	

    	

    	

    	

    	

    $('.reset').click(function () {

   	$('.ref').text("");

   	location.hash = $('.ref').text();

   	$('.varianty input:radio').prop( "checked", false );

   	$(".result").html("");

   	$('.slick-var').slick('slickGoTo', 0);

   	hledej();

return false;

});



   

   $('#mobnav-btn, .varianty .close').click(

  function() {

    $("html").toggleClass("mobile-menu-open");

    $(".varianty").delay(500).queue(function(reset_scroll) {

      $(this).scrollTop(0);

      reset_scroll();

    });

  });

}); 

</script>

