<?php include("connect.php"); 



if(isset($_POST["myurl"])){

	$pole=array(

	"tr"=>"http://localhost/solarkitindia.com/images/brochure/SolarKit-Brochure-interactive.pdf",

	"se"=>"http://localhost/solarkitindia.com/images/brochure/SolarKit_Seam_Brochure_180_Sola.pdf",

	"tf"=>"");

	$result=array();

	$vysledek = mysqli_query($db,"select * from new_product where url='{$_POST["myurl"]}' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);



  	$result[]= $row["nazev"];

	$result[]=$row["text"];

	$result[]=$row["product_desc"];

	$result[]=$pole[substr($_POST["myurl"],0,2)];

	

	echo json_encode($result);

	exit;

}



include("header.php");

 







 

//echo "<h1 class='hide'>{$nazev}</h1>";

// echo $baner;

 

// echo $text;



?> 

	

	<?php

	$load="";

	$url=$_SERVER["REQUEST_URI"];

	

	//if($url=="/product-metal-roof/") {$load="metal";}

	

	$load="metal";

	

	?>

	<div class="section ">

 <div class="container">

<div class="prod_1">

Choose Your Roof Type to Proceed 

</div>

<div class="prod_1a">

<a href="http://localhost/solarkitindia.com/products/#" class="btns flat disabled"><span>Flat roof</span></a>

<a href="http://localhost/solarkitindia.com/product-metal-roof/" class="btns metal"><span>Metal roof</span></a>

</div>

 

 <div class="prod_more">

<p class="prod_1p">

All structures are customized as per client’s requirement and geography of project. We have the latest software to evaluate and aerodynamically design structure and layouts for optimal space utilization for maximum watt generation.

<br/><br/>

Our success continues to be driven through our teams’ experience and expertise, as well as a complete approach to quality assurance that is supported by comprehensive project management principles during all stages of the design, manufacture / operational production and quality assurance stages which helps us to deliver projects on time.

<br/><br/>

Contact us for more information or to understand how Mounting Solar Kit can help you with your solar structure project.



</p>

<span class="show-more">Show more ...</span>

</div>

<?php



$url = $_SERVER["REQUEST_URI"].$_SERVER["QUERY_STRING"];

$fragment = parse_url($url,PHP_URL_FRAGMENT);



//  echo $url ." - ".$fragment;

  

if($load and $load=="metal"){include("xxx1_new.php");}

	?>



</div>	</div>

	

  <div class="ref"></div>

    

  

<div class="result"><?php echo $text;?></div>

  

<?php include("footer.php"); 



//exit;



if($load and $load=="metal"){?>

<script>	

var produkt=[

['',''],

['tf'],

//Roof orientation	

['sn','ew'],	

			

//Structure Tilt	

['07','11'],

//Fixtation	

['ss','sd','ri','gl']



];

//['mc','ar'],

var produkt_name=[

['',''],

['Trapez Flex Tilt'],

//Roof orientation	

['South North','East West'],	

//Structure Tilt	

['7° - 10°','11° - 15°'],	

//Fixtation	

['Screw 1','Screw 2','Rivet','Glue']



];

 var krok=1;



var hash='';

var map = new Map();

map.set('krok1', '');

map.set('krok2', '');

map.set('krok3', '');



if( location.hash && location.hash.length ) {

       var hash = decodeURIComponent(location.hash.substr(1));

       $('.ref').text(hash);

              

       var array = hash.split('-');  

       var krok=array.length;

       console.log(array);

      

       map.set('krok1', array[0]);

        

    if(krok>1)map.set('krok2', array[1]);

	if(krok>2)map.set('krok3', array[2]);

	

	if(krok=="5"){

		map.set('krok4', array[4]);

		map.set('krok6', array[3]);

		var krok=4;

	}

	if(krok=="6"){

		map.set('krok4', array[5]);

		map.set('krok5', array[3]);

		map.set('krok6', array[4]);

		var krok=5;}

	

   

    

    /*-------------------*/

     $('.progress li').removeClass('progress__step--active');

    $('#step-'+krok).addClass('progress__step--active');	

    $('.select a').remove();

      /*-------------------*/

     

    for (var i = 0; i < produkt[krok].length; ++i) {

       

    var $link = $('<a onclick="return myFunction('+"'"+produkt[krok][i]+"'"+');"><span>'+produkt_name[krok][i]+'</span></a>');                         

	  $link.attr("id", "s"+produkt[krok][i]);

	  $link.addClass("sel");

	  if(produkt[krok][i]==map.get("krok"+krok)){

	   $link.addClass("active");

	   load_data($('.ref').text());

	  

	   }

	    

	        	

	  // $link.addClass("active");

	   if(produkt[krok][i]==hash.substring(hash.length-2)){$link.addClass("active");}

	  $link.attr("href", "#");

  	  $(".select").append($link); 

      }

    podminka();

    /*------------------------*/

  

       console.log(map);

       console.log(krok);

   } else {

   map.set('krok1', 'tf');

   $('.ref').text("tf");

   }

            

    

            

    function load_data(d){

    if($('.ref').text()) $.ajax({    type: "POST",dataType: 'json',data: "myurl=" + $('.ref').text(),success: function(data, textStatus){

  	  $("h1").text(data[0]);

  	  $(".prod_container1 .prod_title span").text(d.toUpperCase());	

  	  $(".prod_container1 img").attr('src', 'http://localhost/solarkitindia.com/images/products1/'+d.replace(/-/g, '_').toUpperCase()+".jpg");

      $(".result").html(data[1]);

      $("p.desc").html(data[2]);

      $(".prod_container1 a.down").attr("href",data[3]);

   }}); 	

    }

   

   

   

   

    function get_krok(krok,stav){

    	map.set('krok'+krok,produkt[krok][0]);

    	get_cesta(map);

    	console.log(krok);

        //console.log(map);

   

    $('.progress li').removeClass('progress__step--active');

    $('#step-'+krok).addClass('progress__step--active');	

    $('.select a').remove();

    

    for (var i = 0; i < produkt[krok].length; ++i) {

      

    var $link = $('<a onclick="return myFunction('+"'"+produkt[krok][i]+"'"+');"><span>'+produkt_name[krok][i]+'</span></a>');                         

	  $link.attr("id", "s"+produkt[krok][i]);

	  $link.addClass("sel");

	  if(i==0){

	   $link.addClass("active");

	   load_data($('.ref').text());

	  

	   }

	    

	  	

	  // $link.addClass("active");

	   if(produkt[krok][i]==hash.substring(hash.length-2)){$link.addClass("active");}

	  $link.attr("href", "#");

  	  $(".select").append($link); 

      }

    podminka();

    }    

    

    

    

    

    

    function myFunction(clr){

    	var id = clr;

    	if( location.hash && location.hash.length ) {

    	var hash=location.hash.substr(1)

    	var pole_hash = hash.split('-');

    	var kolik_hash=hash.length;    	    	 

    	pole_hash[krok-1]=id;    	       	

    	} 

  map.set('krok'+krok, id);

  //console.log(map);

  $(".next").prop('disabled', false);

get_cesta(map);



  $('.select a').removeClass('active');

  $('#s'+clr).addClass('active');

 $(".i_finish").remove();

  var cesta=location.hash.substr(1);

  $('.ref').text(cesta);  //cesta

  load_data(qqq);//cesta

  podminka()

   	

  return false;  

    }

    

    

    function get_cesta(map){

    

    qqq=map.get('krok1');

	if(!map.get('krok2')=="")qqq=qqq+'-'+map.get('krok2');

	if(!map.get('krok3')=="")qqq=qqq+'-'+map.get('krok3');

	if(!map.get('krok4')=="")qqq=qqq+'-'+map.get('krok4');

	location.hash = qqq;

	$('.ref').text(qqq);   	

 //console.log('cesta krok'+krok);	

    }

    

    

    function podminka(){

    	$('.finish').attr("href","mailto:sales@solar-kit.in?subject=Product " + $('.ref').text());

    	

  	  if(krok=="4"){

    	$('.finish').css("display","block");

    	$(".next").hide();

    	//$(".prod_container1").append("<div class='i_finish'></div>");

    	

     return false;    

    }

    }

    

    

$(document).ready(function () {

 





$('.prod_block1 button').click(function () {

$(".next").prop('disabled', false);

	var stav="p";

  if ($(this).hasClass("next")) { 

  	krok=krok+1;

 	if(krok>=5){ krok=4; return false;}

 	

  } else{

    map.set('krok'+krok,'');

  	krok=krok-1; 

  	var stav="m"; 

  	

  	if(krok<=0){ krok=1; return false;}

    	//if(krok==3){map.set('krok4','');map.set('krok5','');map.set('krok6','');}

   }

   

      $(".i_finish").remove(); 

 	 $(".finish").hide(); 

     $(".next").show(); 

       

  get_cesta(map);

  get_krok(krok,stav);

});

 	    	

   

 

}); 

</script>

<?php}?>