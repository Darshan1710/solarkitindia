<?php include("../connect.php");

 include("funkce.php");



if(isset($_POST["submit_new"])){

  

  $result = mysqli_query($db,"select * from page1 where id = '{$_POST["id"]}'");

  $myrow2 = mysqli_fetch_assoc($result);

	$myrow2["typ"]=1;

	

	$myrow2["nazev"]="Šablona: ".$myrow2["nazev"];

	if($myrow2["url"]=="") $myrow2["url"]=nastavurl($myrow2["nazev"]);

 	

 	$myrow2["url"]="sablona-".$myrow2["url"];

	$myrow2["zakazat"]="1";

	$myrow2["id"]="";

	

    $pole_data=array();$pole_data1=array();

    while ($fieldinfo=mysqli_fetch_field($result))   {

   if(isset($myrow2[$fieldinfo->name])){  	 $pole_data[]=$fieldinfo->name;  $pole_data1[]="'".addslashes($myrow2[$fieldinfo->name])."'";}

    }

	

    $sql = "INSERT INTO page1 (".implode(",",$pole_data).") VALUES (".implode(",",$pole_data1).")";

      $result1 = mysqli_query($db,$sql);   



 header("location:admin.php");    

}





if(isset($_POST["submit_add"])){

   $pole_data=array();$pole_data1=array();

  	$_POST["typ"]="1";

  	if(!isset($_POST["formular"])) $_POST["formular"]="0"; else $_POST["formular"]="1";

  	if(!isset($_POST["zakazat"])) $_POST["zakazat"]="0"; else $_POST["zakazat"]="1";

 	if($_POST["url"]=="") $_POST["url"]=nastavurl($_POST["nazev"]);

 	$result=mysqli_query($db,"SELECT * FROM page1");

      while ($fieldinfo=mysqli_fetch_field($result))   {

     	if(isset($_POST[$fieldinfo->name])) { $pole_data[]=$fieldinfo->name; $pole_data1[]="'".addslashes($_POST[$fieldinfo->name])."'";}

       } 

    $sql = "INSERT INTO page1 (".implode(",",$pole_data).") VALUES (".implode(",",$pole_data1).")";

    $result1 = mysqli_query($db,$sql);

    header("location:index.php");    

}



if(isset($_POST["submit_edit"])){

	$pole_data=array();

	  	if(!isset($_POST["formular"])) $_POST["formular"]="0"; else $_POST["formular"]="1";

  	$_POST["typ"]="1";

  	if(!isset($_POST["zakazat"])) $_POST["zakazat"]="0"; else $_POST["zakazat"]="1";

 	if($_POST["url"]=="") $_POST["url"]=nastavurl($_POST["nazev"]);

 	$result=mysqli_query($db,"SELECT * FROM page1 where id='{$_POST["id"]}'");

     while ($fieldinfo=mysqli_fetch_field($result))   {

     	 if(isset($_POST[$fieldinfo->name])) $pole_data[]=$fieldinfo->name."='".addslashes($_POST[$fieldinfo->name])."'"; 

     }

    $sql="update page1 set ".implode(",",$pole_data)." where id='{$_POST["id"]}'";

   $result = mysqli_query($db,$sql);

    header("location:index.php"); 

}

if (isset($_GET["delete"])){

	$sql = "delete from page1 where id = '{$_GET["delete"]}'";

    $result = mysqli_query($db,$sql); 

    header("location:index.php"); 

}



include("log.php"); 

$header_title="Admin";

 include("header.php");

if ($_data["prava"] == "1") { 



	







	

?>

<div class="container white"> 

 <div class="row">

<?php/*

 <?php 



if (isset($_GET["edit"]) or isset($_GET["add"])){

	

?><form method="POST"><?php

 if (isset($_GET["edit"])){

  $result = mysqli_query($db,"select * from page1 where id = '{$_GET["edit"]}'");

  $myrow2 = mysqli_fetch_assoc($result);

  

  ?><div class="col s12">

  <input type="hidden" name="id" value="<?php echo $_GET["edit"];?>"/>

  <div class="input-field">

 <?php echo "<a class=\"right\" href=\"?delete={$myrow2["id"]}\" title=\"Smazat\" onclick=\"return confirm('Delete?')\"><i class=\"material-icons\">delete</i></a>";?>

  </div> </div> 

  <?php} else {

  	$myrow2=array();



$myrow2["baner"]="";

$myrow2["title"]="";

$myrow2["description"]="";

$myrow2["keywords"]="";

$myrow2["nazev"]="";

$myrow2["url"]="";

$myrow2["text"]="";

$myrow2["zakazat"]="0";

	

  }

 ?>

<div class="col s12">

  



 <div class="input-field">

  <span>Baner</span>

<textarea name="baner"><?php echo $myrow2["baner"];?></textarea>

  </div>



  

  <div class="input-field">

  <span>Title</span>

<input type="text" name="title" value="<?php echo $myrow2["title"];?>"/>

  </div>



  <div class="input-field">

  <span>Description</span>

<input type="text" name="description" value="<?php echo $myrow2["description"];?>"/>

  </div>



  <div class="input-field">

  <span>Keywords</span>

<input type="text" name="keywords" value="<?php echo $myrow2["keywords"];?>"/>

  </div>

  

<div class="input-field">

  <span>Name</span>

<input type="text" name="nazev" value="<?php echo $myrow2["nazev"];?>"/>

  </div>

  

<div class="input-field">

  <span>Url</span>

<input type="text" name="url" value="<?php echo $myrow2["url"];?>"/>

  </div>



  <div class="input-field">

  <span>Text</span>

<textarea name="text"><?php echo $myrow2["text"];?></textarea>

  </div>

  

 </div>

 

 

 

 <div class="col s12">

  <p>

  	<?php if ($myrow2["zakazat"]=="1") {?>

  		<input id="za" NAME="zakazat" TYPE="checkbox" checked="checked"><?php} 

                    else {?>

        <input id="za" NAME="zakazat" TYPE="checkbox"><?php} ?>

     <label for="za"><span>Disable the page</span></label>

</p>

</div>







<div class="col s12">



 <div class="input-field">



<button class="btn" type="submit" name="submit_<?php if (isset($_GET["edit"])) echo "edit"; else echo "add";?>" value="true">Save</button>



<button class="btn" type="submit" name="submit_new" value="true">Save as new</button>

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

 <a class="collection-item" href="?add=true" title="Přidat">Category <div class="right"><i class="material-icons">add</i></div></a>

<?php $vysledek = mysqli_query($db,"select * from page1 where typ='1' order by nazev asc");

    while ($row = mysqli_fetch_assoc($vysledek)) {

    	$zakazat="";

    	if($row["zakazat"]==1)$zakazat=" <span class='red-text'>Disable</span>";

?>

<a class="collection-item black-text" href="?edit=<?php echo $row["id"]; ?>"><?php echo $row["nazev"]. $zakazat;?> </a>



<?php } 

*/

?>



</div>



</div>



</div>



<?php}

include "footer.php";

?>