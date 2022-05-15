<?php include("../connect.php");

 include("funkce.php");



if(isset($_POST["submit_add"])){

   $pole_data=array();$pole_data1=array();

  	if(!isset($_POST["zakazat"])) $_POST["zakazat"]="0"; else $_POST["zakazat"]="1";

 	$result=mysqli_query($db,"SELECT * FROM contact");

      while ($fieldinfo=mysqli_fetch_field($result))   {

     	if(isset($_POST[$fieldinfo->name])) { $pole_data[]=$fieldinfo->name; $pole_data1[]="'".addslashes($_POST[$fieldinfo->name])."'";}

       } 

    $sql = "INSERT INTO contact (".implode(",",$pole_data).") VALUES (".implode(",",$pole_data1).")";

    $result1 = mysqli_query($db,$sql);

    header("location:contact.php");    

}



if(isset($_POST["submit_edit"])){

	$pole_data=array();

  	if(!isset($_POST["zakazat"])) $_POST["zakazat"]="0"; else $_POST["zakazat"]="1";

 	$result=mysqli_query($db,"SELECT * FROM contact where id='{$_POST["id"]}'");

     while ($fieldinfo=mysqli_fetch_field($result))   {

     	 if(isset($_POST[$fieldinfo->name])) $pole_data[]=$fieldinfo->name."='".addslashes($_POST[$fieldinfo->name])."'"; 

     }

    $sql="update contact set ".implode(",",$pole_data)." where id='{$_POST["id"]}'";

   $result = mysqli_query($db,$sql);

    header("location:contact.php"); 

}

if (isset($_GET["delete"])){

	$sql = "delete from contact where id = '{$_GET["delete"]}'";

    $result = mysqli_query($db,$sql); 

    header("location:contact.php"); 

}



include("log.php"); 

$header_title="Admin";

 include("header.php");

if ($_data["prava"] == "1") { 



	







	

?>

<div class="container white"> 

 <div class="row">



 <?php 



if (isset($_GET["edit"]) or isset($_GET["add"])){

	

?><form method="POST"><?php

 if (isset($_GET["edit"])){

  $result = mysqli_query($db,"select * from contact where id = '{$_GET["edit"]}'");

  $myrow2 = mysqli_fetch_assoc($result);

  

  ?><div class="col s12">

  <input type="hidden" name="id" value="<?php echo $_GET["edit"];?>"/>

  <div class="input-field">

 <?php echo "<a class=\"right\" href=\"?delete={$myrow2["id"]}\" title=\"Smazat\" onclick=\"return confirm('Smazat?')\"><i class=\"material-icons\">delete</i></a>";?>

  </div> </div> 

  <?php} else {

  	$myrow2=array();



$myrow2["lat"]="";

$myrow2["lng"]="";

$myrow2["company"]="";

$myrow2["city"]="";

$myrow2["name"]="";

$myrow2["office"]="";

$myrow2["email"]="";

$myrow2["phone"]="";

$myrow2["text"]="";



$myrow2["zakazat"]="0";



$myrow2["img"]="";

	//lat, lng,company,city, name, office, email, phone, img

  }

 ?>

<div class="col s12">

     

  <div class="input-field">

  <span>Lat</span>

<input type="text" name="lat" value="<?php echo $myrow2["lat"];?>"/>

  </div>



 <div class="input-field">

  <span>Lng</span>

<input type="text" name="lng" value="<?php echo $myrow2["lng"];?>"/>

  </div>



 

   <div class="input-field">

  <span>Company</span>

<input type="text" name="company" value="<?php echo $myrow2["company"];?>"/>

  </div>

  

  <div class="input-field">

  <span>City</span>

<input type="text" name="city" value="<?php echo $myrow2["city"];?>"/>

  </div>

  

<div class="input-field">

  <span>Name</span>

<input type="text" name="name" value="<?php echo $myrow2["name"];?>"/>

  </div>

  

<div class="input-field">

  <span>Office</span>

<input type="text" name="office" value="<?php echo $myrow2["office"];?>"/>

  </div>



<div class="input-field">

  <span>Email</span>

<input type="text" name="email" value="<?php echo $myrow2["email"];?>"/>

  </div>



<div class="input-field">

  <span>Phone</span>

<input type="text" name="phone" value="<?php echo $myrow2["phone"];?>"/>

  </div>



  <div class="input-field">

  <span>Text</span>

<textarea name="text"><?php echo $myrow2["text"];?></textarea>

  </div>

  

  <div class="input-field">

  <span>Img</span>

<input type="text" id="txtSelectedFile" name="img" value="<?php echo $myrow2["img"];?>"   style="border:1px solid #ccc;cursor:pointer;padding:4px;width:80%;" value="Click here to select a file" ondblclick="openRoxy()">







  </div>

 

 </div>





 <div class="col s12">

  <p>

  	

  	<?php if ($myrow2["zakazat"]=="1") {?>

  		<input id="za" NAME="zakazat" TYPE="checkbox" checked="checked" value="1"><?php} 

                    else {?>

        <input id="za" NAME="zakazat" TYPE="checkbox" value="0"><?php} ?>

    <label for="za"> <span>Disable the contact</span> </label>

</p>

</div>





<div class="col s12">



 <div class="input-field">



<button class="btn" type="submit" name="submit_<?php if (isset($_GET["edit"])) echo "edit"; else echo "add";?>" value="true">Save</button>



  </div>

  



 </div>

</form>

</div></div></div>

	<?php

include "footer.php";

exit;

}





?>

 </div>







   

 <div class="col s12">

  

 <div class="collection">

 <a class="collection-item" href="?add=true" title="Přidat">Contact <div class="right"><i class="material-icons">add</i></div></a>

<?php $vysledek = mysqli_query($db,"select * from contact order by city asc");

    while ($row = mysqli_fetch_assoc($vysledek)) {

    	$zakazat="";

    	if($row["zakazat"]==1)$zakazat=" <span class='red-text'>Disable</span>";

?>

<a class="collection-item black-text" href="?edit=<?php echo $row["id"]; ?>"><?php echo $row["city"].", ".$row["name"]. $zakazat;?> </a>



<?php } 



?>



</div>



</div>



</div>



<?php}

include "footer.php";

?>