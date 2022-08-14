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
    <title>What are the components of the small flat photovoltaic solar mounting brackets?-bristarpvmount.com</title>
    <meta name="keywords" content="solar mounting brackets" />
    <meta name="description" content="Generally,the installation of small flat photovoltaic brackets is mainly divided into three main components,which are triangle beam bracket,cross beam bracket and vertical brack" />
    <meta name="google-site-verification" content="0hlmt6XTPq9hWJUMwJe9WG8xzEZXv56X8cNMCA1UqUo" />

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

$newsQuery = 'SELECT * FROM blogs WHERE id ='.$id.' LIMIT 1';
$news = mysqli_query($db,$newsQuery);
if($news){
    foreach($news as $newsRow){
?>
<div class="breadcrumb clearfix">
    <div class="container">
        <div class="breadcrumbm">
            <div class="main_title">
                <em>News & Knowledge </em>
            </div>
            <div class="bread_right">
                <a class="home" href="<?= $link;?>"><i class="fa fa-home"></i>Home</a>
                <i class="fa fa-angle-right"></i><a href="<?= $link;?>blog/">News & Knowledge </a>
                <i class="fa fa-angle-right"></i><a href="<?= $link;?>blog-details/?id=<?php echo $newsRow['id'] ?>"><h2>What are the components of the small flat photovoltaic solar mounting brackets?</h2></a>
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
                        <p><?php echo $newsRow['title'] ?></p>
                        <span class="page_date"><?php echo date('M d,Y',strtotime($newsRow['date'])); ?></span>
                    </div>
                    <div class="txt"><p><?php echo $newsRow['text']; ?></p>
                        <p>
                            <img src="js/htmledit/kindeditor/attached/20210507/20210507105725_41319.jpg" alt="" />
                        </p></div>
                    <ul class="navigation clearfix">
                        <?php if($id > 1){
                            $previousNewsQuery = 'SELECT * FROM blogs WHERE id ='.--$previousId.' LIMIT 1';
                            $previousNews = mysqli_query($db,$previousNewsQuery);
                            if($previousNews){
                                foreach($previousNews as $previousRow){
                            ?>
                        <li class="prev_post">
                            <a href="<?= $link;?>blog-details/?id=<?php echo $previousId; ?>">
                                <span class="meta_nav">Previous</span>
                                <h4 class="post_title"><?php echo $previousRow['title'] ?></h4>
                            </a>
                        </li>
                        <?php } } } ?>
                        <?php
                        $nextNewsQuery = 'SELECT * FROM blogs WHERE id ='.++$nextId.' LIMIT 1';
                        $nextNews = mysqli_query($db,$nextNewsQuery);
                        if(!empty($nextNews)){
                        foreach($nextNews as $nextNewsRow){
                        ?>
                        <li class="next_post">
                            <a href="<?= $link;?>blog-details/?id=<?php echo $nextId; ?>">
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
                    <form role="form" action="https://www.bristarpvmount.com/inquiry/addinquiry" method="post" name="email_form" id="email_form1">
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
<?php include_once 'sidebar.php'; ?>
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
<script>
    (function (window, document) {
        'use strict';
        var hotcss = {};
        (function () {
            var viewportEl = document.querySelector('meta[name="viewport"]'),
                hotcssEl = document.querySelector('meta[name="hotcss"]'),
                dpr = window.devicePixelRatio || 1,
                maxWidth = 640,
                designWidth = 0;

            document.documentElement.setAttribute('data-dpr', dpr);
            hotcss.dpr = dpr;
            document.documentElement.setAttribute('max-width', maxWidth);
            hotcss.maxWidth = maxWidth;
            if (designWidth) {
                document.documentElement.setAttribute('design-width', designWidth);
                hotcss.designWidth = designWidth;
            }
        })();
        hotcss.px2rem = function (px, designWidth) {
            if (!designWidth) {
                designWidth = parseInt(hotcss.designWidth, 10);
            }
            return parseInt(px, 10) * 640 / designWidth / 20;
        }
        hotcss.rem2px = function (rem, designWidth) {
            if (!designWidth) {
                designWidth = parseInt(hotcss.designWidth, 10);
            }
            return rem * 20 * designWidth / 640;
        }
        hotcss.mresize = function () {
            var innerWidth = document.documentElement.getBoundingClientRect().width || window.innerWidth;
            if (hotcss.maxWidth && (innerWidth / hotcss.dpr > hotcss.maxWidth)) {
                innerWidth = hotcss.maxWidth * hotcss.dpr;
            }
            if (!innerWidth) {
                return false;
            }
            document.documentElement.style.fontSize = (innerWidth * 20 / 640) + 'px';
        };
        hotcss.mresize();
        window.addEventListener('resize', function () {
            clearTimeout(hotcss.tid);
            hotcss.tid = setTimeout(hotcss.mresize, 400);
        }, false);
        window.addEventListener('load', hotcss.mresize, false);
        setTimeout(function () {
            hotcss.mresize();
        }, 333)
        window.hotcss = hotcss;
    })(window, document);
    (function ($) {
        var mainWit = $(window).width(),
            mainHit = $(window).height(),
            carouselBar = $(".page-header-bar"),
            fixedContact = $(".fixed-contact-wrap");
        /*fixed-contact*/
        $(".fixed-contact-wrap").hover(function () {
            $(this).addClass("active");
        }, function () {
            $(this).removeClass("active");
        });
        $(window).scroll(function () {
            if ($(window).width() > 992) {
                if ($(this).scrollTop() > mainHit / 2) {
                    carouselBar.addClass("active");
                    fixedContact.addClass("show");
                } else {
                    carouselBar.removeClass("active");
                    fixedContact.removeClass("show");
                }
            }
        });
    })(jQuery);
</script>
</body>

</html>
