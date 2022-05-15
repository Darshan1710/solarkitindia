<?php include("../connect.php"); 

 $vysledek = mysqli_query($db,"select * from page1 where url='blog' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  

 $title=$row["title"];

 $desc=$row["description"];

 $keyw=$row["keywords"];

 $nazev=$row["nazev"];

 $baner=$row["baner"];

 $text=$row["text"];





include("header.php");

 

 //echo $baner;

 

 echo $text;

 $data=array();



	$vysledek = mysqli_query($db,"select * from page1 where typ='3' and zakazat='0' order by date desc");

    while ($row = mysqli_fetch_assoc($vysledek)) {

    	

		$data[]=array(

		"url"=> $row["url"],

      	"img" => $row["img"],

      	"date" => $row["date"],

        "title"=> $row["title"],

        "description" => $row["description"]);

	}

	?>



<div class="section">

	

	<div class="container" style="background: url('<?php echo $link."/".$data[0]['img'];?>') center center;">

		

		<div class="pad50"><div class="row">

 	<div class="col s12 m8 offset-m2 center">	 

		<span class="white-text"><?php echo $data[0]['date'];?></span>

		<h1 class="blog white-text"><?php echo $data[0]['title'];?></h1>

		<a href="<?php echo $link."/new/".$data[0]['url'];?>" class="button auto">View article</a>

	</div></div>



  </div>

 </div>

</div>









<div class="section top45">	

	<div class="container">



<div class="blog">

			

<?php 

    foreach ($data as $key => $v) { 

    	if ($key>0) {?>

    <div class="blog-item">

    	  <a href="<?php echo $link."/new/".$v["url"];?>" title="<?php echo $v["title"];?>">

      	<img class="responsive-img" src="<?php echo $link."/".$v["img"];?>" alt="<?php echo $v["title"];?>">

      	</a>

      <span><?php echo date_format(date_create($v["date"]),"d.m.Y");?></span>

      <h2><?php echo $v["title"];?></h2>

      <p><?php echo $v["description"];?></p>

     </div>

    <?php}}?>



    </div>

 





<?php /*





<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image2.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image3.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image4.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image5.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



<div class="blog-item">

<a href="../blog-detail/"><img src="http://localhost/solarkitindia.com/images/blog/image6.png" class="responsive-img"></a>

<span>2 days ago</span>

<h2>Invitation to exhibition REI Chennai 13-15 Feb 2020</h2>

<p>Mounting Solar kit Pvt. ltd. part of EKOTECHNIK Czech - a leading… manufacturer of structural systems for</p>

</div>



</div>



*/?>

 </div>

</div>



<?php include("footer.php");?>



 