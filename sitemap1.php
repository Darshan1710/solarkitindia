<?php

include("connect.php");



header('Content-type: application/xml; charset=utf-8');

echo '<?phpxml version="1.0" encoding="UTF-8"?>';



//"<?php echo $link;

$data=array(

"",

"about-us/",

"products/",

"references/",

"blog/",

"faq/",

"contact/",

"product-metal-roof/");



echo '<urlset

      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"

      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"

      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9

            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->';



foreach ($data as $value) {

echo "<url>

  <loc>http://localhost/solarkitindia.com/$value</loc>

  <lastmod>".date("c")."</lastmod>

  <priority>1.00</priority>

</url>";

}

 

/*blog*/

	$vysledek = mysqli_query($db,"select * from page1 where typ='3' and zakazat='0' order by date desc");

    while ($row = mysqli_fetch_assoc($vysledek)) {

echo "<url>

  <loc>http://localhost/solarkitindia.com/{$row["url"]}</loc>

  <lastmod>".date("c")."</lastmod>

  <priority>0.9</priority>

</url>";    	 

  }

/*reference*/	

	$vysledek = mysqli_query($db,"select * from page1 where typ='4' and zakazat='0' order by id desc");

   while ($row = mysqli_fetch_assoc($vysledek)) {

echo "<url>

  <loc>http://localhost/solarkitindia.com/{$row["url"]}</loc>

  <lastmod>".date("c")."</lastmod>

  <priority>0.9</priority>

</url>";    	 

  }

	

echo '</urlset>';

 ?>

 