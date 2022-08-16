<?php include_once 'connect.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>What are the components of the small flat photovoltaic solar mounting brackets</title>
    <meta name="keywords" content="solar mounting brackets" />
    <meta property="og:image" content="uploadfile/news/3c46c1bd13b873ed48ba7b21b76d6154.jpg"/>
    <link href="<?= $link;?>uploadfile/userimg/5fb86e9addafa6d964bb096eae4db0c0.ico" rel="shortcut icon"  />
    <?php include_once 'head.php'; ?>
</head>
<body>
<?php include_once 'header1.php'; ?>
<div class="page_banner">
</div>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$previousId = $id;
$nextId = $id;

$newsQuery = 'SELECT * FROM projects WHERE id ='.$id.' LIMIT 1';
$project = mysqli_query($db,$newsQuery);
if($project){
    foreach($project as $projectRow){
        ?>
        <div class="breadcrumb clearfix">
            <div class="container">
                <div class="breadcrumbm">
                    <div class="main_title">
                        <em>News & Knowledge </em>
                    </div>
                    <div class="bread_right">
                        <a class="home" href="<?php echo $base_url; ?>"><i class="fa fa-home"></i>Home</a>
                        <i class="fa fa-angle-right"></i><a href="projects.php">Projects </a>
                        <i class="fa fa-angle-right"></i><a href="projectDetails.php?id=<?php echo $projectRow['id'] ?>"><h2>What are the components of the small flat photovoltaic solar mounting brackets?</h2></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page_section clearfix">
            <div class="container">
                <div class="page_column clearfix">

                    <div class="page-left clearfix">
                        <?php include_once 'categories.php';
                        include_once 'newProducts.php'; ?>
                    </div>
                    <div class="page-right clearfix">
                        <div class="news_detail_info clearfix">
                            <div class="news_detail_title">
                                <p><?php echo $projectRow['title'] ?></p>
                                <span class="page_date"><?php echo date('M d,Y',strtotime($projectRow['created_at'])); ?></span>
                            </div>
                            <div class="txt"><p><?php echo $projectRow['short_description']; ?></p>
                                <p>
                                    <img src="<?php echo $image_link.$projectRow['image']; ?>" alt="" />
                                </p></div>
                            <ul class="navigation clearfix">
                                <?php if($id > 1){
                                    $previousNewsQuery = 'SELECT * FROM projects WHERE id ='.--$previousId.' LIMIT 1';
                                    $previousNews = mysqli_query($db,$previousNewsQuery);
                                    if($previousNews){
                                        foreach($previousNews as $previousRow){
                                            ?>
                                            <li class="prev_post">
                                                <a href="<?= $link;?>project-details/?id=<?php echo $previousId; ?>">
                                                    <span class="meta_nav">Previous</span>
                                                    <h4 class="post_title"><?php echo $previousRow['title'] ?></h4>
                                                </a>
                                            </li>
                                        <?php } } } ?>
                                <?php
                                $nextNewsQuery = 'SELECT * FROM projects WHERE id ='.++$nextId.' LIMIT 1';
                                $nextNews = mysqli_query($db,$nextNewsQuery);
                                if(!empty($nextNews)){
                                    foreach($nextNews as $nextNewsRow){
                                        ?>
                                        <li class="next_post">
                                            <a href="<?= $link;?>project-details/?id=<?php echo $nextId; ?>">
                                                <span class="meta_nav">Next</span>
                                                <h4 class="post_title"><?php echo $nextNewsRow['title'] ?></h4>
                                            </a>
                                        </li>
                                    <?php } } ?>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    <?php } } ?>
<div class="in_newsletterW">
    <div class="container">
        <div class="in_newsletter">

            <div class="in_title">
                <span>Get the latest offers Subscribe for our newsletter</span>

            </div>
            <div class="letter_box">
                <p>Please read on, stay posted, subscribe, and we welcome you to tell us what you think.</p>
                <div class="letter-input">
                    <input name="textfield" id="user_email" type="text" class="fot_input" placeholder="Enter your email" onfocus="if(this.placeholder=='Enter your email'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Enter your email';}">
                    <input type="button" value="submit" onclick="add_email_list();" class="send">
                </div>
                <script>
                    var email = document.getElementById('user_email');
                    function add_email_list()
                    {
                        $.ajax({
                            url: "/common/ajax/addtoemail/emailname/" + email.value,
                            type: 'GET',
                            success: function(info) {
                                if (info == 1) {
                                    alert('Successfully!');
                                } else {
                                    alert('lost!');
                                }
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer1.php'; ?>




<a href="javascript:;" rel="nofollow" class="back_top"></a>

<div id="online_qq_layer">
    <div id="online_qq_tab">
        <div id="floatShow" rel="nofollow" href="javascript:void(0);">
            <p>click here to leave a message</p><i></i>
            <div class="animated-circles">
                <div class="circle c-1"></div>
                <div class="circle c-2"></div>
                <div class="circle c-3"></div>
            </div>
        </div>
        <a id="floatHide" rel="nofollow" href="javascript:void(0);" ><i></i></a>
    </div>
    <div id="onlineService" >
        <div class="online_form">
            <div class="i_message_inquiry">
                <em class="title">Leave A Message</em>
                <div class="inquiry">
                    <form role="form" action="#" method="post" name="email_form" id="email_form1">
                        <input type="hidden" name="msg_title" value="Leave a Message" class="meInput" />
                        <div class="text">If you are interested in our products and want to know more details,please leave a message here,we will reply you as soon as we can.</div>
                        <div class="input-group">
                            <span class="ms_e"><input class="form-control" name="msg_email" id="msg_email" tabindex="10" type="text" placeholder="* Email"></span>
                        </div>
                        <div class="input-group">
                            <span class="ms_p"><input class="form-control" name="msg_tel" id="phone" tabindex="10" type="text" placeholder="Tel/WhatsApp"></span>
                        </div>
                        <div class="input-group">
                            <span class="ms_m"><textarea name="msg_content" class="form-control" id="message" tabindex="13" placeholder="* Enter product details (such as color, size, materials etc.) and other specific requirements to receive an accurate quote."></textarea></span>
                        </div>
                        <span class="main_more"><input class="submit" type="submit" value="Submit"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-contact-wrap">
    <ul class="item-list clearfix">
        <li class="online_p">
            <div>
                <i class="icon"></i>
                <a rel="nofollow" href="Tel:+86 186 5000 7009">+86 186 5000 7009</a>
            </div>
        </li>

        <li class="online_e">
            <div>
                <i class="icon"></i>
                <a rel="nofollow" target="_blank" href="mailto:ada@xyz.com">ada@xyz.com</a>
            </div>
        </li>


        <li class="online_w">
            <div>
                <i class="icon"></i>
                <a rel="nofollow"  target="_blank" href="https://api.whatsapp.com/send?phone=18650007009&amp;text=Hello">18650007009</a>
            </div>
        </li>




        <li class="online_code">
            <div>
                <i class="icon"></i>
                <a>
                    <p>Scan to wechat :</p><img src="<?= $link; ?>uploadfile/single/e88e5502116a406cfcf8e37a16f1b9a8.png" />
                </a>
            </div>
        </li>
    </ul>
</div>


<div class="mobile_nav clearfix">
    <a href="index.html"><i class="fa fa-home"></i><p>Home</p></a>
    <a href="products.html"><i class="fa fa-th-large"></i><p>Products</p></a>
    <a href="about-us_d1.html"><i class="fa fa-user"></i><p>About</p></a>
    <a href="contact-us_d2.html"><i class="fa fa-comments-o"></i><p>contact</p></a>
</div>
<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>
<script type="text/javascript" src="template/js/slick.js"></script>
<script type="text/javascript" src="template/js/wow.min.js"></script>
<script type="text/javascript" src="template/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    baguetteBox.run('.tz-gallery');
</script>

</body>

</html>
