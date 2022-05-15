<?php include("connect.php"); 

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
 <div class="tit va_0">Select Metal Roof Type to Proceed</div> 
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
  	
<div class="tit va_1">Select panel orientation</div> 	
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
		
<div class="tit va_2">Select rail type</div> 
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
		
<div class="tit va_5">Select rail height</div>		
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
 
 	
<div class="tit va_4">Select type of panel attachment</div>	
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
	 

<div class="tit va_3">Select type of attachment to the roof</div> 		
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
	
 <span class="right"><a href="http://localhost/solarkitindia.com/product-metal-roof/" class="reset black-text">Reset filter<i class="material-icons">close</i></a></span>
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
  
   /*	$('.ref').text("");
   	location.hash = $('.ref').text();
   	$('.varianty input:radio').prop( "checked", false );
   	$(".result").html("");
   	$('.slick-var').slick('slickGoTo', 0);
   	hledej();
return false;*/
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
