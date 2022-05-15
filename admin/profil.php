<?php include("../connect.php");



if(isset($_GET["delpar"])){

	$sql = "delete from user where id = '{$_GET["delpar"]}'";

    $result = mysqli_query($db,$sql);      

    header("location:../admin/?log_akce=5"); 

}







if(isset($_GET["addNew"])){

	

	$login="newuser";

	$email="";

	$jmeno="NewUser";

	$heslo=sha1($login."Y_t1343x");

	  $sql = "insert into user (id,login,heslo,name,prava) values (null,'$login','$heslo','$jmeno','1')";

    $result = mysqli_query($db,$sql); 

	

   header("location:profil.php"); 

}



if(isset($_POST["submit_edit"])){

	$newpass="";

	if(isset($_POST["pass"])){

		$pass=sha1($_POST["pass"]."Y_t1343x");

		$newpass="heslo='$pass',";

	}

	 $sql = "update user set login='{$_POST["login"]}', $newpass name='{$_POST["name"]}',prava='{$_POST["p"]}' where id = '{$_POST["id"]}'";

      $result = mysqli_query($db,$sql);

	  

    header("location:profil.php"); 

}







?>

<?php include("log.php"); 

$header_title="Admin";

 include("header.php");

if ($_data["prava"] == "1") { 





?>

 <div class="container white"> 

 <div class="row">

 <div class="col s12">





<?php





if (isset($_GET["edit"]) or isset($_GET["add"])){

?><form method="post"><?php



 if (isset($_GET["edit"])){

  $result = mysqli_query($db,"select * from user where id = '{$_GET["edit"]}'");

  $myrow2 = mysqli_fetch_assoc($result);

  ?><input type="hidden" name="id" value="<?php echo $myrow2["id"];?>"/>

  <input type="hidden" name="p" value="<?php echo $myrow2["prava"];?>"/>

  

    

<div class="input-field">

 <?php echo "<a href=\"?delpar={$myrow2["id"]}\" onclick=\"return confirm('Opravdu chcete smazat tento box?')\"><i class=\"material-icons\">delete</i> Delete</a>";?>

  </div> 

  <?php}?>

  

  </div> 

 <div class="col s12 m6">

  <div class="input-field">

  <span>Login</span>

<input type="text" name="login" value="<?php echo $myrow2["login"];?>"/>

  </div>

 



  <div class="input-field">

  <span>Name</span>

<input type="text" name="name" value="<?php echo $myrow2["name"];?>"/>

  </div>

  

   

  <div class="input-field">

  <span>Change password</span>

<input type="password" name="pass" value="" />

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

}?>

      

 

 <div class="col s12">

 <span class="right"><a href="?addNew=newuser" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i> </a> Add</span>

 </div>

 <div class="col s12">

 

 <div class="collection">

<?php 

$data_id="0";

$vysledek = mysqli_query($db,"select * from user order by name");

 while ($row = mysqli_fetch_assoc($vysledek)) {?>

<a class="collection-item black-text" href="?edit=<?php echo $row["id"]; ?>">

<?php echo "<span class='blue-text'>{$row["name"]}</span> / {$row["login"]}";?></a>

<?php  } ?>

  </div>



</div>

</div>

</div>

<?php }



include "footer.php";

?>