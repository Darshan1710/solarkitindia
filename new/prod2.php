

<?php include("../connect.php"); 





if(isset($_GET["url"])) $url=$_GET["url"]; else $url="homepage";





if(isset($_POST["myurl"])){

	$vysledek = mysqli_query($db,"select * from page1 where url='{$_POST["myurl"]}' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  	echo $row["text"];

	exit;

}



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

 

// echo $baner;

 

// echo $text;

?>



<div class="section product">

 <div class="container row">



 <div class="line">Products<span></span></div>

  <h1 class="center">Choose your roof</h1>

  

  

  

  

  	<div class="col s12 m4 offset-m2 ">

 		<a href="../products-flat-roof/" class="button invert"><span class="icon flat">Flat roof</span></a>

 	</div>

 <div class="col s12 m4">

 		<a href="../newproducts/" class="button invert"><span class="icon metal active">Metal roof</span></a>

 	</div>

 

  <div class="col s12 m4 offset-m2 ">

 		<a href="../products-flat-roof-trapez/" class="button invert">Trapez</a>

 	</div>

 <div class="col s12 m4">

 		<a href="../products-flat-roof-seam/" class="button">Seam</span></a>

 	</div>

  

  

  <style>

  	.varianty .col label span{

  		

  	line-height: 52px;

    height: 50px;

    width: 100%;

    display: block;

    background:#fff;

    color:#FF5345;

    border: 1px solid #FF5345;

    border-radius: 5px;

    margin: 15px 0;

    padding: 0;

    vertical-align: middle;

    text-align: center;

  	   }

  	.varianty .col label span.active{

  	   border:1px solid #FF5345;

  	   background:#FF5345;

       color:#fff;

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

    content: '';

    position: fixed;

    left: -9990;

    top: -9990;

    margin:0;

    width:0;

    height:0;

    z-index: 0;

    

}



  .ref{display:none;}

 

 </style>



 <div class="varianty">

 	

 	

 	

 	

 	

 	

 	

 	<div class="col s6 m4 offset-m2">

 		<label for="r1">

 			<input id="r1"  class="browser-default" type="radio" name="va_0" value="SR" checked="checked"/>

 		 <span>Portrait</span>

  </label> 		

 	</div>

 	

 <div class="col s6 m4">

 		<label for="r2">

 			<input id="r2"  class="browser-default" type="radio" name="va_0" value="V2"/>

 		 <span>Landscape</span>

  </label>

</div> 		

 		

 		

 <div class="col s6 m4 offset-m2">

  <label for="r9">

  	<input id="r9" class="browser-default" type="radio" name="va_3" value="30" checked="checked"/>

  <span>Rail H30mm</span>

  </label> 

 	</div>

 	

<div class="col s6 m4">

   <label for="r10">

 <input id="r10" class="browser-default" type="radio" name="va_3" value="65"/>

 <span>Rail H65mm</span>

  </label>  

 	</div>		

 	

 	

 	<div class="col s3 m2 offset-m2 ">

 		<label for="r3">

 		<input id="r3"  class="browser-default" type="radio" name="va_1" value="SS" checked="checked"/>

 		<span>Screw</span>

  </label>

 		

 	</div>

 <div class="col s3 m2 ">

 		<label for="r4">

 		<input id="r4"  class="browser-default" type="radio" name="va_1" value="SD"/>

 		<span>Screw 2</span>

  </label>

 		

 	</div>



 <div class="col s3 m2  ">

 	<label for="r5">

 		<input id="r5"  class="browser-default" type="radio" name="va_1" value="RI"/>

 		 <span>Rivet</span>

  </label>

 		

 	</div>

 <div class="col s3 m2  ">

 	<label for="r6">

 	<input id="r6"  class="browser-default" type="radio" name="va_1" value="GL"/>

 		 <span>Glue</span>

  </label> 		

 	</div>

 

 <div class="col s6 m4 offset-m2 ">

  <label for="r7">

  	<input id="r7"  class="browser-default" type="radio" name="va_2" value="MC"/>

  <span>End & Mid Clamp</span>

  </label>

 

 	</div>

 	

<div class="col s6 m4  ">

   <label for="r8">

 <input id="r8"  class="browser-default" type="radio" name="va_2" value="AR" checked="checked"/>

 <span>ARaymond Clip</span>

  </label>  

 	</div>	

 	 	

</div>		

  

  <div class="col s12 ref"></div>



 </div> 	 	

</div>	

<div class="result"><?php echo $text;?></div>

 



<?php include("footer.php");?>



<script>

var hash="";

if( location.hash && location.hash.length ) {

       var hash = decodeURIComponent(location.hash.substr(1));

        $('.ref').text(hash);

        

        var array = hash.split('-');

        

        $.each(array , function(index, val) { 

  $(":radio[value=" + val + "]").attr('checked', 'checked');

  

});

    $('html,body').animate({scrollTop: $('.result').offset().top}, 800, function() {});    

    }

    

function hledej(hash){

	var pole = {};

	$('.ref').text("");

    $(".varianty label span").removeClass();

    $(".varianty").find(":radio:checked").each(function(){

        	$(this).closest("label").find("span").addClass("active");

        	var key=$(this).attr("name");

        	pole[ key ] = $(this).val();      

        });

    $('.ref').text( pole['va_0'] + "-" + pole['va_1'] + "-" + pole['va_2'] + "-" + pole['va_3'] );

    if(hash){$('.ref').text(hash);  }

    $.ajax({    type: "POST",    data: "myurl=" + $('.ref').text(),success: function(data, textStatus){$(".result").html(data); }});  

}

        

$(document).ready(function () {

  hledej(hash);



   $('.varianty input:radio').change(function () {

      var value = $(this).val();

      hledej();

      location.hash = $('.ref').text();

      $('html,body').animate({scrollTop: $('.result').offset().top}, 800, function() {});    

   });

});

</script>