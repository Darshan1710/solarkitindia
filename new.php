<?php include("connect.php"); 



// https://www.gieson.com/Library/projects/utilities/countdown/



$url="flextilt-inovation-2021";



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

 

 $text="";

 ?>

 <style>

 .pad70{padding:70px 0;}

 

 #foo{margin-left:214px; position: relative;

    top: -100px;}

 #cta-form.zoho { position: relative; top: 200px; }

#cta-form.zoho .zcwf_col_fld input.btn{text-align: center;} 

.zcwf_col_fld {margin-bottom:10px;}

 #foo1 {display:none;}

 

 #fo .formsubmit.btn{

    background-color: #ff5345!important;border-radius: 30px!important;

    }

 .resetrow .row img {text-align: center;}

    

    .zoho-title-text{font-family: Adieu; position:relative;top:-124px;text-align: center; font-size: 39px; color: white;}

    

 @media only screen and (max-width: 640px){

   #foo {   margin-left:0!important;display:none!important;}

   #foo1 {   display:block!important;position: relative;   top: -111px!important;  }

   .asq{height:620px!important; background-image:url('http://localhost/solarkitindia.com/images/20210611/Mob_Banner.png')!important;}

    .section.zohoform { max-height: 500px!important;}

   .zohoform .bgz{background-image: url('http://localhost/solarkitindia.com/images/20210611/Subsribe_Form_desc.png')!important;}

   #cta-form.zoho { top: 80px!important;}

   #cta-form.zoho.zcwf_col_fld {  margin-bottom:0!important;}

 #fo .formsubmit.btn{ padding: 10px!important;

 font-size: 14px!important;

    height: 40px!important;

    line-height: 11px!important;}

 #Stage_jbeeb_5{left:calc(50% - 160px)!important;}

}

 

    

 @media only screen and (max-width: 700px){

      .zohoform .bgz{height:540px!important;

      background-image: url('http://localhost/solarkitindia.com/images/20210611/Subsribe_Form_mob.png')!important;

      background-size: 120% 100%!important;}

      .section.zohovid{padding:0!important;}

 .zohovid .col{margin-bottom:15px!important;}

 .resetrow .row {margin-bottom:0!important;}

 .zoho-title-text{font-size: 22px!important;}

    

}



 </style>

 <div class="section asq" style="height:450px; background-size: cover !important; margin: 0; padding: 0;

 background-repeat: no-repeat; 

 background-image: url('http://localhost/solarkitindia.com/images/20210611/Desk_Banner.png');background-attachment: scroll; background-position: top center;">

  <div class="container" >&nbsp; </div>

 </div>

 

 <div class="section pad70" style="background-color: #e6e8e8;">

<div class="container">

<div class="row ">

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Front_Support.png" alt="Solar-kit.in" >

</div>

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Rear_Support.png" alt="Solar-kit.in" >

</div>

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Base_Rail.png" alt="Solar-kit.in" >

</div>



  </div>

 </div>

</div>

 

  <script type="text/javascript" src="../js/countdown_v5.3/countdown.js"></script>



 

 <div class="section pad70 resetrow">

<div class="container">

<div class="row">

<div class="col s12 m8 offset-m2">	

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Icon_1.png" alt="Solar-kit.in" >

</div>

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Icon_2.png" alt="Solar-kit.in" >

</div>

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Icon_3.png" alt="Solar-kit.in" >

</div>

</div>

</div>



<div class="row">

<div class="col s12 m8 offset-m2">	

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Icon_4.png" alt="Solar-kit.in" >

</div>

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Icon_5.png" alt="Solar-kit.in" >

</div>

<div class="col s10 m4 offset-s1">

	<img class="responsive-img" src="http://localhost/solarkitindia.com/images/20210611/Icon_6.png" alt="Solar-kit.in" >

</div>



</div>

</div>





 

 </div>

</div>

 

 

  <div class="section zohoform" >

<div class="container" >

<div class="row" >

<div class="col s12 m10 offset-m1 bgz" 	

	style="height:718px; 

 

 background-repeat: no-repeat; 

 background-image: url('http://localhost/solarkitindia.com/images/20210611/Subsribe_Form_desc.png');

 background-attachment: scroll; 

 background-position: top center;

     background-size: 100%;">



<div class="col s8 m6 offset-s2 offset-m3" id="fo">

	

	<!-- Note :

   - You can modify the font style and form style to suit your website. 

   - Code lines with comments Do not remove this code are required for the form to work properly, make sure that you do not remove these lines of code. 

   - The Mandatory check script can modified as to suit your business needs. 

   - It is important that you test the modified form before going live.-->

<div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm'>

  <meta name='viewport' content='width=device-width, initial-scale=1.0'>

   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>

   <form id="cta-form" class='zoho' action='https://crm.zoho.com/crm/WebToLeadForm' name='WebToLeads3599922000036925016' method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory3599922000036925016()' accept-charset='UTF-8'>

 <input type='text' style='display:none;' name='xnQsjsdp' value='cc77978e3d8adfa296093a6728be5389a9ff81e23b5440690873665282bb2c21'></input> 

 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 

 <input type='text' style='display:none;' name='xmIwtLD' value='87e02a7af85ee721b7ca2876d1d9b8d6e331912ef0feab274516a4975f41c431'></input> 

 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>

 <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.solar-kit.in&#x2f;form-submitted' > </input>

	 <!-- Do not remove this code. -->





<div class='zcwf_row'>

	<div class='zcwf_col_fld'><i class='material-icons'>person</i><input type='text' id='Last_Name' name='Last Name' maxlength='80' placeholder="Last name"></input><div class='zcwf_col_help'></div></div></div>

<div class='zcwf_row'>

	

<div class='zcwf_col_fld'><i class='material-icons'>phone</i><input type='text' id='Phone' name='Phone' maxlength='50' placeholder="Mobile"></input><div class='zcwf_col_help'></div></div></div>

<div class='zcwf_row'>

<div class='zcwf_col_fld'><i class='material-icons'>email</i><input type='text' ftype='email' id='Email' name='Email' maxlength='100' placeholder="Email"></input><div class='zcwf_col_help'></div></div></div>





<div class='zcwf_row wfrm_fld_dpNn'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Lead_Source'>Lead Source</label></div><div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='Lead_Source' name='Lead Source'  >

			<option value='-None-'>-None-</option>

			<option value='Google&#x20;Advertisement'>Google Advertisement</option>

			<option value='Trade&#x20;India'>Trade India</option>

			<option value='LinkedIN&#x20;Ads'>LinkedIN Ads</option>

			<option value='Indiamart'>Indiamart</option>

			<option value='Facebook&#x20;Group'>Facebook Group</option>

			<option value='Cold&#x20;Call'>Cold Call</option>

			<option value='Employee&#x20;Referral'>Employee Referral</option>

			<option value='External&#x20;Referral'>External Referral</option>

			<option value='Online&#x20;Store'>Online Store</option>

			<option value='Facebook'>Facebook</option>

			<option value='Twitter'>Twitter</option>

			<option value='Partner'>Partner</option>

			<option value='Website&#x20;Visit'>Website Visit</option>

			<option value='Public&#x20;Relations'>Public Relations</option>

			<option value='Sales&#x20;Mail&#x20;Alias'>Sales Mail Alias</option>

			<option value='Seminar&#x20;Partner'>Seminar Partner</option>

			<option value='Seminar-Internal'>Seminar-Internal</option>

			<option value='Exhibition'>Exhibition</option>

			<option value='Web&#x20;Download'>Web Download</option>

			<option value='Web&#x20;Research'>Web Research</option>

			<option value='Chat'>Chat</option>

		<option selected value='Webform'>Webform</option>

			<option value='WhatsApp'>WhatsApp</option>

		</select><div class='zcwf_col_help'></div></div></div><div class='zcwf_row'><div class='zcwf_col_lab'></div>

		<div class='zcwf_col_fld center'><input type='submit' id='formsubmit' class='formsubmit zcwf_button btn' value='SUBSCRIBE NOW' title='Submit'>

			</div></div>

	<script>

	function validateEmail3599922000036925016()

	{

		var form = document.forms['WebToLeads3599922000036925016'];

		var emailFld = form.querySelectorAll('[ftype=email]');

		var i;

		for (i = 0; i < emailFld.length; i++)

		{

			var emailVal = emailFld[i].value;

			if((emailVal.replace(/^\s+|\s+$/g, '')).length!=0 )

			{

				var atpos=emailVal.indexOf('@');

				var dotpos=emailVal.lastIndexOf('.');

				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailVal.length)

				{

					alert('Please enter a valid email address. ');

					emailFld[i].focus();

					return false;

				}

			}

		}

		return true;

	}



 	  function checkMandatory3599922000036925016() {

		var mndFileds = new Array('Last Name','Email','Mobile');

		var fldLangVal = new Array('Name','Email','Mobile');

		for(i=0;i<mndFileds.length;i++) {

		  var fieldObj=document.forms['WebToLeads3599922000036925016'][mndFileds[i]];

		  if(fieldObj) {

			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {

			 if(fieldObj.type =='file')

				{ 

				 alert('Please select a file to upload.'); 

				 fieldObj.focus(); 

				 return false;

				} 

			alert(fldLangVal[i] +' cannot be empty.'); 

   	   	  	  fieldObj.focus();

   	   	  	  return false;

			}  else if(fieldObj.nodeName=='SELECT') {

  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {

				alert(fldLangVal[i] +' cannot be none.'); 

				fieldObj.focus();

				return false;

			   }

			} else if(fieldObj.type =='checkbox'){

 	 	 	 if(fieldObj.checked == false){

				alert('Please accept  '+fldLangVal[i]);

				fieldObj.focus();

				return false;

			   } 

			 } 

			 try {

			     if(fieldObj.name == 'Last Name') {

				name = fieldObj.value;

 	 	 	    }

			} catch (e) {}

		    }

		}

		if(!validateEmail3599922000036925016()){return false;}

		document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);

	}



function tooltipShow3599922000036925016(el){

	var tooltip = el.nextElementSibling;

	var tooltipDisplay = tooltip.style.display;

	if(tooltipDisplay == 'none'){

		var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');

		for(i=0; i<allTooltip.length; i++){

			allTooltip[i].style.display='none';

		}

		tooltip.style.display = 'block';

	}else{

		tooltip.style.display='none';

	}

}

</script>

	<!-- Do not remove this --- Analytics Tracking code starts --><script id='wf_anal' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=87e02a7af85ee721b7ca2876d1d9b8d6e331912ef0feab274516a4975f41c431gidcc77978e3d8adfa296093a6728be5389a9ff81e23b5440690873665282bb2c21gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'></script><!-- Do not remove this --- Analytics Tracking code ends. --></form>

</div>











































	</div>



    </div>  </div>

  </div>

</div>







 

  <div class="section " style="border-top: 150px solid #ff5345;">

<div class="zoho-title-text">

 Launching Soon

</div>

<div class="container">

	



<div class="" id="foo"><script type="application/javascript"> var myCountdownTest = new Countdown({

									year : 2021,

                              		month : 7,

                              		day : 7, 

                              		hour : 12,

                              		ampm : "am",

                              		minute : 0,

                                    second : 0,

									width:500, 

									height:120,

									padding:0.6, 

									rangeHi:"day",

				        target   : "foo",    // A reference to an html DIV id (e.g. DIV id="foo")

                         style    : "boring"

									});</script> </div>

<div class="" id="foo1"><script type="application/javascript"> var myCountdownTest1 = new Countdown({

									year : 2021,

                              		month : 7,

                               		day : 7,

                              		hour : 12,

                              		ampm : "am",

                              		minute : 0,

                                    second : 0,

                                    width:200, 

									height:50,

									padding:0.6, 

									rangeHi:"day",

				        target   : "foo1",    // A reference to an html DIV id (e.g. DIV id="foo")

                         style    : "boring"

									});

</script> </div>







 



</div>

 

</div>

 

 

 

 <div class="section pad70 zohovid">

<div class="container">

<div class="row ">

 <div class="col s12 m4">

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

 

 

 <?php

 

 echo $text;



include("footer.php");?>

