<?php 

include("../connect.php");



/* 

 $sql = "INSERT INTO pracovni.arduino (id,cidlo,nazev) VALUES ('','CID6','CID6')";

 $sql = "ALTER TABLE pracovni.arduino ADD COLUMN data_id INT(9) AFTER id";

 $sql = "update pracovni.arduino set tep_set='20' where data_id='1'";

 $sql = "DELETE FROM pracovni.arduino where id='9'";

 $sql = "ALTER TABLE produkt ADD COLUMN spotreba VARCHAR(100) AFTER vykon";

$sql="ALTER TABLE produkt MODIFY rocni_vyroba text;";

  

 $doSql = mysqli_query($db,$sql); //vykonání SQL

 exit;

 */



 //id, lat, lng,company,city, name, office, email, phone, img

 /*

 $sql = "CREATE TABLE `contact` (

  id int(11) NOT NULL AUTO_INCREMENT,

  lat varchar(20) NOT NULL,

  lng varchar(20) NOT NULL,

  company varchar(50) NOT NULL,

  city varchar(50) NOT NULL,

  name varchar(50) NOT NULL,

  office varchar(50) NOT NULL,

  email varchar(100) NOT NULL,

  phone varchar(20) NOT NULL,

  img varchar(200) NOT NULL, 

  zakazat enum('0','1') NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";

$doSql = mysqli_query($db,$sql); //vykonání SQL

    

  * 

  * 

  * */

/*

$sql = "ALTER TABLE contact MODIFY office VARCHAR(50) NOT NULL;";

$doSql = mysqli_query($db,$sql); //vykonání SQL

*/





 

/*

//$sql = "update user set prava='1'";

  $sql = "ALTER TABLE page1 ADD COLUMN year INT(9) AFTER date";

 $doSql = mysqli_query($db,$sql); //vykonání SQL

  $sql = "ALTER TABLE page1 ADD COLUMN flat VARCHAR(50) AFTER year";

 $doSql = mysqli_query($db,$sql); //vykonání SQL

  $sql = "ALTER TABLE page1 ADD COLUMN ouput VARCHAR(50) AFTER flat";

 $doSql = mysqli_query($db,$sql); //vykonání SQL

  $sql = "ALTER TABLE page1 ADD COLUMN mounting VARCHAR(50) AFTER ouput";

 $doSql = mysqli_query($db,$sql); //vykonání SQL

 

/*

$pass=sha1("eliska"."Y_t1343x");

   

$sql = "DROP TABLE user";

$doSql = mysqli_query($db,$sql); //vykonání SQL

  

  

$sql = "CREATE TABLE user (

  id int(11) NOT NULL AUTO_INCREMENT,

  login varchar(100) NOT NULL,

  heslo varchar(100) NOT NULL,

  name varchar(50) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";

$doSql = mysqli_query($db,$sql); //vykonání SQL

printf("Error message: %s\n", mysqli_error($db));



$sql = "INSERT INTO user (id,login,heslo,name) VALUES ('','libor','$pass','Libor Havlík')";

$doSql = mysqli_query($db,$sql); //vykonání SQL

printf("Error message: %s\n", mysqli_error($db));

 */



/*

$sql = "CREATE TABLE `blog` (

  id int(11) NOT NULL AUTO_INCREMENT,

  name varchar(255) NOT NULL,

  url varchar(255) NOT NULL,

  article_content text NOT NULL,

  img varchar(50) NOT NULL, 

  zakazat enum('0','1') NOT NULL,

  date DATETIME DEFAULT NULL, 

  date_edit timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";

$doSql = mysqli_query($db,$sql); //vykonání SQL

printf("Error message: %s\n", mysqli_error($db));



*/

/*

$sql = "CREATE TABLE `page` (

  id int(11) NOT NULL AUTO_INCREMENT,

  title varchar(255) NOT NULL,

  description varchar(255) NOT NULL,

  keywords varchar(255) NOT NULL,

  nazev varchar(255) NOT NULL,

  url varchar(255) NOT NULL,

  text text NOT NULL,

  baner text NOT NULL, 

  zakazat enum('0','1') NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";

$doSql = mysqli_query($db,$sql); //vykonání SQL

printf("Error message: %s\n", mysqli_error($db));



*/





/*

$query  = mysqli_query($db,"

 ALTER TABLE new_product ADD COLUMN product_desc text AFTER url

 ");

*/





$vysledek = mysqli_query($db,"select * from new_product order by url asc");

    while ($row = mysqli_fetch_assoc($vysledek)) {

 



$dom = new DOMDocument();

$dom->loadHTML($row["product_desc"]);



$xpath = new DOMXpath($dom);

$result = $xpath->query('//p[@class="shape"]');

if ($result->length > 0) {

    echo $result->item(0)->nodeValue."<br>";

 

    $query  = mysqli_query($db,"

 update new_product set product_desc='".$result->item(0)->nodeValue."' where id ='{$row["id"]}'

 ");

 

echo "<br>";}





	}



exit;

echo "<table>";

$query  = mysqli_query($db,"select * from new_product");

	

$field = mysqli_field_count($db);

echo "<tr>";

for($i = 0; $i < $field; $i++) {

    echo "<td>".mysqli_fetch_field_direct($query, $i)->name.'</td>';

}

echo "</tr>";

while($row = mysqli_fetch_array($query)) {



echo "<tr>";

    for($i = 0; $i < $field; $i++) {

        echo "<td>".$row[mysqli_fetch_field_direct($query, $i)->name].'</td>';

    }

    

echo "</tr>";

}



echo "</table>";

exit;









?>

