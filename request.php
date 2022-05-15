<?php include("../connect.php"); 

 $vysledek = mysqli_query($db,"select * from page1 where url='contact' and zakazat='0'");
    $row = mysqli_fetch_assoc($vysledek);
  
 $title=$row["title"];
 $desc=$row["description"];
 $keyw=$row["keywords"];
 $nazev=$row["nazev"];
 $baner=$row["baner"];
 $text=$row["text"];

include("header.php");
 
 echo $baner;
 
 ?>
 
<div class="section top" id="request">
 <div class="container">
  <div class="row">
<?php /* //  <iframe height="1500px" width="100%" frameborder="0" allowTransparency="true" scrolling="auto" src="https://forms.zohopublic.com/mountingsolarkitprivatelimited/form/RequestforQuote/formperma/UQDM3qfoN0tBT2hNXu73t0k_eW1Rmmpv2rdzPTqxiZI"> </iframe>
   */
  
    /*
   <iframe height="1500px" width="100%" src='https://crm.zoho.com/crm/WebFormServeServlet?rid=87e02a7af85ee721b7ca2876d1d9b8d6feafa58695ea3c1011ea826c5e21b3dagidcc77978e3d8adfa296093a6728be5389a9ff81e23b5440690873665282bb2c21'></iframe>
*/
?>
 
<div id='crmWebToEntityForm' style='width:900px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads3599922000009594460 method='POST' enctype='multipart/form-data' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory3599922000009594460()' accept-charset='UTF-8'>
 <input type='text' style='display:none;' name='xnQsjsdp' value='cc77978e3d8adfa296093a6728be5389a9ff81e23b5440690873665282bb2c21'></input> 
 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
 <input type='text' style='display:none;' name='xmIwtLD' value='87e02a7af85ee721b7ca2876d1d9b8d6feafa58695ea3c1011ea826c5e21b3da'></input> 
 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
 <input type='text' style='display:none;' name='returnURL' value='http://localhost/solarkitindia.com/' > </input><br></br>
	 <!-- Do not remove this code. -->
	 <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
	 <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
	 <!-- Do not remove this code. -->
	<style>
		#crmWebToEntityForm tr , #crmWebToEntityForm td { 
			padding:6px;
			border-spacing:0px;
			border-width:0px;
			}
	</style>
	<table style='width:900px;background-color:#ffffff;background-color:white;color:black'><tr><td colspan='2' align='left' style='color:black;font-family:Arial;font-size:14px;word-break: break-word;'><strong>Request for Quote</strong></td></tr> <br></br><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Company Name<span style='color:red;'>*</span></td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Company' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>First Name<span style='color:red;'>*</span></td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='40' name='First Name' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Last Name<span style='color:red;'>*</span></td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='80' name='Last Name' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Phone<span style='color:red;'>*</span></td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='30' name='Phone' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Email<span style='color:red;'>*</span></td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Email' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Roof Type</td><td style='width:40%;'>
		<select style='width:100%;box-sizing:border-box;' name='LEADCF10'>
			<option value='-None-'>-None-</option>
			<option value='Flat&#x20;Roof'>Flat Roof</option>
			<option value='Metal&#x20;Roof'>Metal Roof</option>
		</select></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project size</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='9' name='LEADCF51' /></td><td style='width:30%;word-break: break-word; vertical-align: bottom;'><span title='in &#x28;Wp&#x29;' style='cursor: pointer; width: 16px; height: 16px; display: inline-block; background: #fff; border: 1px solid #ccc; color: #ccc; text-align: center; font-size: 11px; line-height: 16px; font-weight: bold; border-radius: 50%; vertical-align: middle;'>?</span></td><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project Street Address </td><td style='width:40%;'> <textarea name='LEADCF16' maxlength='2000' style='width:100%;'>&nbsp;</textarea></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project Address Line 2 </td><td style='width:40%;'> <textarea name='LEADCF15' maxlength='2000' style='width:100%;'>&nbsp;</textarea></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project State&#x2f;Region&#x2f;Province</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF12' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project Postal &#x2f; Zip Code</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF11' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project City</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF17' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Project Country</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF13' /></td><td style='width:30%;'></td></tr><tr><td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:30%;box-sizing:border-box;'>Layout</td>
	    <td style='padding-top: 10px;width:40%;box-sizing:border-box;'><input type='file' name='theFile' id='theFile' multiple style='width:100%;box-sizing:border-box;'/><p style='color:black;font-size:11px;padding-left:3px;'>File(s) size limit is 20MB.</p></td>
	<td style='width:30%;vertical-align: bottom;'></td>
	</tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>PV panel datasheet URL</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF14' /></td><td style='width:30%;'></td></tr><tr><td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:30%;box-sizing:border-box;'>Enter the Captcha</td>
	    <td style='width:40%;box-sizing:border-box;'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='10' name='enterdigest' /></td><td style='width:30%;'></td>
	</tr>

	 <tr><td style='width:30%;'></td>
	 <!-- Do not remove this code. -->
	    <td style='width:40%;box-sizing:border-box;'><img id='imgid' src='https://crm.zoho.com/crm/CaptchaServlet?formId=87e02a7af85ee721b7ca2876d1d9b8d6feafa58695ea3c1011ea826c5e21b3da&grpid=cc77978e3d8adfa296093a6728be5389a9ff81e23b5440690873665282bb2c21'>
	    <a href='javascript:;' onclick='reloadImg()'>Reload</a></td><td style='30%;'></td>
	</tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%'>Lead Source</td><td style='width:40%;'>
		<select style='width:100%;box-sizing:border-box;' name='Lead Source'>
			<option value='-None-'>-None-</option>
			<option value='Advertisement'>Advertisement</option>
			<option value='Cold&#x20;Call'>Cold Call</option>
			<option value='Employee&#x20;Referral'>Employee Referral</option>
			<option value='External&#x20;Referral'>External Referral</option>
			<option value='Online&#x20;Store'>Online Store</option>
			<option value='Facebook'>Facebook</option>
			<option value='Twitter'>Twitter</option>
			<option value='Partner'>Partner</option>
			<option value='Google&#x2b;'>Google&#x2b;</option>
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
		</select></td><td style='width:30%;'></td></tr>



	<tr><td colspan='2' style='text-align:center; padding-top:15px;font-size:12px;'>
		<input class="btn" id='formsubmit' type='submit' value='Submit' onclick="return gtag_request();" ></input> <input type='reset' name='reset' class='btn' value='Reset' ></input> </td></tr></table>
	<script>
 	  var mndFileds=new Array('Company','First Name','Last Name','Email','Phone');
 	  var fldLangVal=new Array('Company Name','First Name','Last Name','Email','Phone'); 
		var name='';
		var email='';

  /* Do not remove this code. */
 	  function reloadImg() {
		if(document.getElementById('imgid').src.indexOf('&d') !== -1 ) {
  	  	  document.getElementById('imgid').src=document.getElementById('imgid').src.substring(0,document.getElementById('imgid').src.indexOf('&d'))+'&d'+new Date().getTime();
		}  else {
  	  	  document.getElementById('imgid').src = document.getElementById('imgid').src+'&d'+new Date().getTime();
		 } 
 	 }

 	  function checkMandatory3599922000009594460() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads3599922000009594460'][mndFileds[i]];
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
		 return validateFileUpload();

		trackVisitor();
		document.getElementById('formsubmit').disabled=true;
	}function validateFileUpload(){
		 var uploadedFiles = document.getElementById('theFile'); 
		 var totalFileSize =0; 
		 if(uploadedFiles.files.length >3){ 
			 alert('You can upload a maximum of three files at a time.'); 
			 return false; 
		 } 
		 if ('files' in uploadedFiles) { 
			 if (uploadedFiles.files.length != 0) { 
				 for (var i = 0; i < uploadedFiles.files.length; i++) { 
					 var file = uploadedFiles.files[i]; 
					 if ('size' in file) { 
						 totalFileSize = totalFileSize + file.size; 
					 } 
				 } 
				 if(totalFileSize > 20971520){ 
					 alert('Total file(s) size should not exceed 20MB.'); 
					 return false; 
				 } 
			 } 
		 } 
	 }
</script>
<script type='text/javascript' id='VisitorTracking'>
var $zoho= $zoho || {};$zoho.salesiq = $zoho.salesiq || {
	widgetcode:'1970eb187bae84758fe37a41aeecfc3ac73f4ef28614e5fcef2e7c2236ba5e26e4d83408e3a09d50b54a10b6d32b1569b6fe7662e70a2efd0a3d0d42589d16a3', 
	values:{},
	ready:function(){$zoho.salesiq.floatbutton.visible('show');}};
	var d=document;s=d.createElement('script');s.type='text/javascript';s.id='zsiqscript';s.defer=true;s.src='https://salesiq.zoho.com/widget';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads3599922000009594460']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads3599922000009594460']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads3599922000009594460']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}
	</script>
	</form>
  <!-- Do not remove this code. -->
     <iframe name='captchaFrame' style='display:none;'></iframe>
</div>
 
 </div></div></div>
  
 <?php include("footer.php");?>
