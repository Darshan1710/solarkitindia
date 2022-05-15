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

 



include("header.php");

 

 

echo "<h1 class='hide'>{$nazev}</h1>";

// echo $baner;

 

// echo $text;

?>







  	

  

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



.varianty-hide, .ref{display:none;}

.varianty-hide.show{display:block;}



.varianty span.active {border: 1px solid #FF5345;color:#FF5345;}

.varianty span.r1  {background-image: url('http://localhost/solarkitindia.com/images/icons/Portrait.svg'); }

.varianty span.r2  {background-image: url('http://localhost/solarkitindia.com/images/icons/Landscape.svg');}

.varianty span.r12 {background-image: url('http://localhost/solarkitindia.com/images/icons/Seam.svg');}

.varianty span.r11 {background-image: url('http://localhost/solarkitindia.com/images/icons/Trapez.svg');}

.varianty span.r13 {background-image: url('http://localhost/solarkitindia.com/images/icons/Short-Rail.svg');}

.varianty span.r14 {background-image: url('http://localhost/solarkitindia.com/images/icons/Long-Rail.svg');}

.varianty span.r9  {background-image: url('http://localhost/solarkitindia.com/images/icons/Rail-30.svg');}

.varianty span.r10 {background-image: url('http://localhost/solarkitindia.com/images/icons/Rail-65.svg');}

.varianty span.r7  {background-image: url('http://localhost/solarkitindia.com/images/icons/End-Mid-Clamp.svg');}

.varianty span.r8 {background-image: url('http://localhost/solarkitindia.com/images/icons/Raymond-Clip.svg');}

.varianty span.r3 {background-image: url('http://localhost/solarkitindia.com/images/icons/Screw 1.svg');}

.varianty span.r4 {background-image: url('http://localhost/solarkitindia.com/images/icons/Screw 2.svg');}

.varianty span.r5 {background-image: url('http://localhost/solarkitindia.com/images/icons/Rivet.svg');}

.varianty span.r6 {background-image: url('http://localhost/solarkitindia.com/images/icons/Glue.svg');}

    

 .varianty .col label span.active{

   filter:invert(41%) sepia(57%) saturate(2034%) hue-rotate(334deg) brightness(102%) contrast(101%);} 

.varianty span {

    background-repeat: no-repeat;

    background-position: center top;

    background-position-y: 5px;

  }

.varianty .col {padding:0;}



.varianty .col:nth-child(2n) {

    padding-right: 0.75rem;

}

.varianty .col:nth-child(7) {

  /*  padding-left: 0.75rem;*/

}





.varianty .col:nth-child(2n+1) span{

     border-right:0px;

     border-radius : 5px 0 0 5px;

}

.varianty .col:nth-child(2n+1) label span.active{

  	  border-right:1px solid #FF5345;

  }

  	

.varianty .col:nth-child(2n-2) span{

    border-radius : 0 5px 5px 0;

     

}



.varianty .col:nth-child(10) {

    padding-right: 0;     

}

.varianty .col:nth-child(10) span,.varianty .col:nth-child(11) span{

     border-radius : 0;   

}





.varianty { width: 300px;

    position: absolute;

    right: 0;

    background: white;

    padding: 15px;

    box-shadow: -2px 1px 7px 0px #888888;

    z-index: 9999;

    border-radius: 5px 0 0 5px;

    top:71px;overflow: auto;}

 </style>





 <div class="varianty" >

 <i class="material-icons varianty-click">navigate_next</i> 	

 <p class="title"> Choose your roof</p>

 	<div class="row">

 	<div class="col s6">

 		<label for="r11">

 			<input id="r11"  class="browser-default" type="radio" name="va_0" value="TR""/>

 		 <span class="r11">Trapez</span>

  </label> 		

 	</div> 

 	

 <div class="col s6">

 		<label for="r12">

 			<input id="r12"  class="browser-default" type="radio" name="va_0" value="SE" disabled="disabled" />

 		 <span class="r12">Seam</span>

  </label>

</div> 		

 		

 	 	

 	

 	<div class="varianty-hidexxx">

 	

 	

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

 		

 

 		

 <div class="col s6 va_5">

  <label for="r9">

  	<input id="r9" class="browser-default" type="radio" name="va_5" value="30""/>

  <span class="r9">Rail 30</span>

  </label> 

 	</div>

 	

<div class="col s6 va_5">

   <label for="r10">

 <input id="r10" class="browser-default" type="radio" name="va_5" value="65"/>

 <span class="r10">Rail 65</span>

  </label>  

 	</div>		

 	

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

 

 

 	 	

</div>		

  

 	</div> 	

 	</div> 	

		

  <div class="col ref"></div>



<div class="result"><?php echo $text;?></div>

  

  <?php

  /*

<div class="section ">

 <div class="container">



<div class="row"> 	

  

  

  </div> 	 	

</div>	</div>	*/?>



<?php include("footer.php");?>



<script>	

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

        });

  //  alert( $('input:radio').length ); 

  

  

  

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

	$("input[name='" + groups[i] +"']").closest("label").find("span").hide();}

	

}

$("input[name='" + groups_1[0] +"']").closest("label").find("span").show();





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



   $('.varianty input:radio').change(function () {

   	$('.va_5,.va_3').show();

   	if( $(this).val() == "LR" || $(".varianty #r14").is(':checked')){ 

   		$('.varianty input:radio[name="va_5"], .varianty input:radio[name="va_3"]').prop( "checked", false );

   		$('.va_5,.va_3').hide();

   	}

   	

      var value = $(this).val();

      hledej();

      location.hash = $('.ref').text();

     // $('html,body').animate({scrollTop: $('.result').offset().top}, 800, function() {});    

   });

   

   $('.varianty-click').click(function () {

   	$( this ).toggleClass( "panel" );;

   	

   	if($(".varianty-click").hasClass("panel")){

   		var kam=-250; 

   		$("i.varianty-click").text("navigate_before");

   		}else {

   			var kam=0;

   			$("i.varianty-click").text("navigate_next");

   			}

    $('.varianty').animate({

      right: kam

      }, 700, function() {

        // Animation complete.

      });

   });

}); 

</script>

