<?php include("../connect.php");
	
if(isset($_GET["delpar"])){
	  $sql = "delete from help where id = '{$_GET["delpar"]}'";
      $result = mysqli_query($db,$sql);  
	 header("location:help.php"); 
}

if(isset($_POST["submit_add"])){
	$result=mysqli_query($db,"SELECT * FROM help");
	$pole_data=array();$pole_data1=array();
    while ($fieldinfo=mysqli_fetch_field($result))   {
   if(isset($_POST[$fieldinfo->name])){  	 $pole_data[]=$fieldinfo->name;  $pole_data1[]="'".$_POST[$fieldinfo->name]."'"; }
    }
    $sql = "INSERT INTO help (".implode(",",$pole_data).") VALUES (".implode(",",$pole_data1).")";
      $result1 = mysqli_query($db,$sql);   
 header("location:help.php"); 
}

if(isset($_POST["submit_edit"])){
$pole_data=array();
	$result=mysqli_query($db,"SELECT * FROM help where id='{$_POST["id"]}'");
         while ($fieldinfo=mysqli_fetch_field($result))   {
     	if(isset($_POST[$fieldinfo->name])){  $pole_data[]=$fieldinfo->name."='".$_POST[$fieldinfo->name]."'"; }
         }       
     $sql="update help set ".implode(",",$pole_data)." where id='{$_POST["id"]}'";
     $result = mysqli_query($db,$sql); 
     header("location:help.php"); 
}


include("log.php"); 
$header_title="Admin";
 include("header.php");
if ($_data["prava"] == "1") { 
?>
 <div class="container white"> 
 <div class="row">
 <div class="col s12">


<?php

if (isset($_GET["edit"]) or isset($_GET["add"])){
$myrow2["nazev"]="";
	$myrow2["text"]="";
?><form method="post"><?php
 if (isset($_GET["edit"])){
  $result = mysqli_query($db,"select * from help where id = '{$_GET["edit"]}'");
  $myrow2 = mysqli_fetch_assoc($result);
  ?><input type="hidden" name="id" value="<?php echo $myrow2["id"];?>"/>
<div class="input-field">
 <?php echo "<a href=\"?delpar={$myrow2["id"]}\" onclick=\"return confirm('Delete?')\"><i class=\"material-icons\">delete</i> Delete</a>";?>
  </div> 
  <?php}?>
  
</div>  
 <div class="col s12 m6">
  <div class="input-field">
  <span>Name</span>
<input type="text" name="nazev" value="<?php echo $myrow2["nazev"];?>"/>
  </div>
  
  <div class="input-field">
  <textarea name='text'><?php echo $myrow2["text"]?></textarea>
 </div>
     	
 <div class="input-field">
 
<button class="btn" type="submit" name="submit_<?php if (isset($_GET["edit"])) echo "edit"; else echo "add";?>">Save</button>
  </div>
 
 </div>
</form>
</div></div></div>
	<?php
include "footer.php";
exit;
}


?> 
 <span class="right"><a href="?add=true" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i> </a> Add</span>
 </div>
 
   
   <div class="col s12">
 <h3>Nápověda</h3>  	
   	
 <ul class="collapsible find">
<?php $vysledek = mysqli_query($db,"select * from help order by nazev asc");
    while ($row = mysqli_fetch_assoc($vysledek)) {
?>
    <li>
      <div class="collapsible-header"><?php echo $row["nazev"]."<a class='right' href='?edit={$row["id"]}'><i class='material-icons'>edit</i></a>";    ?></div>
      <div class="collapsible-body"><?php echo $row["text"];?></div>
    </li>



<?php } ?>
  </ul>

</div>
</div>
</div>
<?php }

include "footer.php";
?>