<?php include_once 'connect.php';
$where = isset($_GET) && !empty($_GET) ? ' WHERE id = "'.$_GET['id'].'"' : ' WHERE id = "1"';
$productQuery = "SELECT * from sub_products".$where;
$products = mysqli_query($db,$productQuery);
if($products){
foreach($products as $productRow){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $productRow['title'] ?></title>
    <meta name="keywords" content="Standing Seam Solar Panel Clamp,Standing Seam Roof Solar Mounting System,Standing Seam Metal Roof Clamps" />
    <meta property="og:image" content="https:///"/>
    <link href="uploadfile/userimg/5fb86e9addafa6d964bb096eae4db0c0.ico" rel="shortcut icon"  />
    <?php include_once 'head.php'; ?>
</head>
<body>
<?php include_once 'header1.php'; ?>
<div class="page_banner">
</div>

<div class="breadcrumb clearfix">
    <div class="container">
        <div class="breadcrumbm">
            <div class="main_title">
                <em>Products</em>
            </div>
            <div class="bread_right">
                <a class="home" href="<?= $link;?>"><i class="fa fa-home"></i>Home</a>
                <i class="fa fa-angle-right"></i><a href="<?= $link;?>products/"><h2>Products</h2></a>
                <i class="fa fa-angle-right"></i><?php echo $productRow['title']; ?>
            </div>
        </div>
    </div>
</div>

<div class="pro_info_top ">
    <div class="container ">
        <div class="pro_info_web clearfix">
            <div class="prom_img col-sm-4 col-xs-12">
                <div class="sp-loading"><br><img id="product_detail_img"  alt="Standing Seam Solar Panel Clamp" src="<?php echo $image_link.$productRow['thumbnail'] ?>" /></div>
                <div class="sp-wrap">
                    <a href="<?php echo $image_link.$productRow['thumbnail'] ?>">
                        <img src="<?php echo $image_link.$productRow['thumbnail'] ?>" alt = "Standing Seam Solar Panel Clamp" /></a>
                    <a href="<?php echo $image_link.$productRow['thumbnail'] ?>">
                        <img src="<?php echo $image_link.$productRow['thumbnail'] ?>" alt = "Standing Seam Solar Panel Clamp" /></a>
                    <a href="<?php echo $image_link.$productRow['thumbnail'] ?>">
                        <img src="<?php echo $image_link.$productRow['thumbnail'] ?>" alt = "Standing Seam Solar Panel Clamp" /></a>
                    <a href="<?php echo $image_link.$productRow['thumbnail'] ?>">
                        <img src="<?php echo $image_link.$productRow['thumbnail'] ?>" alt = "Standing Seam Solar Panel Clamp" /></a>
                    <a href="<?php echo $image_link.$productRow['thumbnail'] ?>">
                        <img src="<?php echo $image_link.$productRow['thumbnail'] ?>" alt = "Standing Seam Solar Panel Clamp" /></a>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.sp-wrap').smoothproducts();
                });
            </script>
            <div class="prom-right clearfix col-sm-8 col-xs-12">
                <h1><?php echo $productRow['title']; ?></h1>
                <div class="main"><?php echo $productRow['short_description']; ?></div>
                <div class="mobile_inquiry clearfix">
                    <span class="main_more"><a rel="nofollow" href="#pro_inquiry" class="more_inq" data-scroll="" data-options="{ &quot;easing&quot;: &quot;linear&quot; }">Inquire now</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page_section clearfix">
    <div class="container">
        <div class="page_column clearfix">

            <div class="page-left clearfix">
                <?php include_once('categories.php');
                include_once('newProducts.php'); ?>
            </div>
            <div class="page-right clearfix">
                <div class="mostBox clearfix">
                    <div class="pro-tab clearfix">
                        <div id="parentHorizontalTab02" class="clearfix">
                            <ul class="resp-tabs-list hor_1 clearfix">
                                <li>Product Details</li>

                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <div class="text">
                                        <?php echo $productRow['long_description']; ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
<!--                <div class="send_content clearfix" id="pro_inquiry">-->
<!---->
<!--                    <div class="send_column clearfix">-->
<!--                        <div class="page_title"><span>Leave A Message</span></div>-->
<!--                        <div class="text">If you are interested in our products and want to know more details,please leave a message here,we will reply you as soon as we can.</div>-->
<!--                        <form id="email_form" name="email_form" method="post" action="https://www.bristarpvmount.com/inquiry/addinquiry">-->
<!--                            <input type="hidden" name="msg_title" value="Standing Seam Metal Roof Solar Mounting Clip" class="meInput" />-->
<!--                            <input type="hidden" name="to_proid[]" value="15" class="meInput" />-->
<!--                            <input type="hidden" name="product_id" value="15" class="meInput" />-->
<!--                            <input type='hidden' name='msg_userid' value=1 />-->
<!--                            <ul class="clearfix row">-->
<!--                                <li class="col-xs-12">-->
<!--                                    <p>Subject : <a href="standing-seam-metal-roof-solar-mounting-clip_p15.html">Standing Seam Metal Roof Solar Mounting Clip</a></p>-->
<!--                                </li>-->
<!--                                <li class="col-sm-6 col-xs-12">-->
<!--                                    <span class="ms_e"><input type="text" name="msg_email" id="msg_email" class="meInput" placeholder="* Your email" ></span>-->
<!--                                </li>-->
<!--                                <li class="col-sm-6 col-xs-12">-->
<!--                                    <span class="ms_p"><input type="text" name="msg_tel" class="meInput" placeholder="Tel/Whatsapp" ></span>-->
<!--                                </li>-->
<!---->
<!--                                <li class="col-xs-12">-->
<!--                                    <span class="ms_m"><textarea id="meText" placeholder="* Enter product details (such as color, size, materials etc.) and other specific requirements to receive an accurate quote." onkeyup="checknum(this,3000,'tno')" maxlength="3000" name="msg_content"></textarea></span>-->
<!--                                </li>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </ul>-->
<!--                            <span class="main_more"><input class="submit" type="submit" value="Submit"></span>-->
<!--                        </form>-->
<!--                    </div>-->
<!---->
<!--                </div>-->

                <ul class="post_blog_tag">
                    <p><i class="fa fa-tags"></i>Tags :</p>
                    <?php $tags = explode(',', $productRow['tags']);
                    if (COUNT($tags) > 0) {
                        foreach ($tags as $tagsRow) {
                            ?>
                            <li><a href=""><?php echo $tagsRow; ?></a></li>
                        <?php }
                    } ?>
                </ul>
<!--                <ul class="navigation clearfix">-->
<!--                    <li class="prev_post">-->
<!--                        <a href="solar-panel-roof-mount-kit_p13.html">-->
<!--                            <span class="meta_nav">Previous</span>-->
<!--                            <h4 class="post_title">Solar Panel Roof Mount Kit</h4>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="next_post">-->
<!--                        <a href="metal-roof-clamps-for-solar-panels_p21.html">-->
<!--                            <span class="meta_nav">Next</span>-->
<!--                            <h4 class="post_title">Metal Roof Clamps for Solar Panels</h4>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>


        </div>
    </div>
</div>
<?php } } ?>
<div class="page_pro clearfix">
    <div class="container">
        <div class="page_prom">
            <div class="in_title">
                <span>Related products</span>
            </div>
            <div class="slider autoplay4">

                <?php
                $relatedWhere = isset($_GET) && !empty($_GET) ? ' WHERE id != "'.$_GET['id'].'"' : ' WHERE id != "1"';
                $relatedProductsQuery = "SELECT * FROM sub_products ".$relatedWhere." ORDER BY ID DESC LIMIT 10";

                $relatedProducts = mysqli_query($db,$relatedProductsQuery);
                if($relatedProducts){
                foreach($relatedProducts as $relatedProductRow){
                ?>
                <div>
                    <div class="li">
                        <div class="image">
                            <a href="<?= $link;?>product-details/?id=<?php echo $relatedProductRow['id'] ?>"></a>
                            <img id="product_detail_img"  alt="Metal Roof Solar Mounts" src="<?php echo $image_link.$relatedProductRow['thumbnail']; ?>" />						<div class="line"></div>
                            <div class="ovrly"></div>
                            <div class="icon_box"><div class="icon"></div></div>
                        </div>
                        <a href="<?= $link;?>product-details/?id=<?php echo $relatedProductRow['id'] ?>" class="title"><?php echo $relatedProductRow['title']; ?></a>
                        <div class="text"><?php echo $relatedProductRow['short_description']; ?></div>
                    </div>
                </div>
                <?php } } ?>

            </div>
        </div>
    </div>
</div>

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
<!--    <div id="onlineService" >-->
<!--        <div class="online_form">-->
<!--            <div class="i_message_inquiry">-->
<!--                <em class="title">Leave A Message</em>-->
<!--                <div class="inquiry">-->
<!--                    <form role="form" action="https://www.bristarpvmount.com/inquiry/addinquiry" method="post" name="email_form" id="email_form1">-->
<!--                        <input type="hidden" name="msg_title" value="Leave a Message" class="meInput" />-->
<!--                        <div class="text">If you are interested in our products and want to know more details,please leave a message here,we will reply you as soon as we can.</div>-->
<!--                        <div class="input-group">-->
<!--                            <span class="ms_e"><input class="form-control" name="msg_email" id="msg_email" tabindex="10" type="text" placeholder="* Email"></span>-->
<!--                        </div>-->
<!--                        <div class="input-group">-->
<!--                            <span class="ms_p"><input class="form-control" name="msg_tel" id="phone" tabindex="10" type="text" placeholder="Tel/WhatsApp"></span>-->
<!--                        </div>-->
<!--                        <div class="input-group">-->
<!--                            <span class="ms_m"><textarea name="msg_content" class="form-control" id="message" tabindex="13" placeholder="* Enter product details (such as color, size, materials etc.) and other specific requirements to receive an accurate quote."></textarea></span>-->
<!--                        </div>-->
<!--                        <span class="main_more"><input class="submit" type="submit" value="Submit"></span>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
<?php include_once 'sidebar.php'; ?>
<div class="mobile_nav clearfix">
    <a href="index.html"><i class="fa fa-home"></i><p>Home</p></a>
    <a href="products.html"><i class="fa fa-th-large"></i><p>Products</p></a>
    <a href="about-us_d1.html"><i class="fa fa-user"></i><p>About</p></a>
    <a href="contact-us_d2.html"><i class="fa fa-comments-o"></i><p>contact</p></a>
</div>
<script>
    (function( window , document ){
        'use strict';
        var hotcss = {};
        (function() {
            var viewportEl = document.querySelector('meta[name="viewport"]'),
                hotcssEl = document.querySelector('meta[name="hotcss"]'),
                dpr = window.devicePixelRatio || 1,
                maxWidth = 640,
                designWidth = 0;

            document.documentElement.setAttribute('data-dpr', dpr);
            hotcss.dpr = dpr;
            document.documentElement.setAttribute('max-width', maxWidth);
            hotcss.maxWidth = maxWidth;
            if( designWidth ){
                document.documentElement.setAttribute('design-width', designWidth);
                hotcss.designWidth = designWidth;
            }
        })();
        hotcss.px2rem = function( px , designWidth ){
            if( !designWidth ){
                designWidth = parseInt(hotcss.designWidth , 10);
            }
            return parseInt(px,10)*640/designWidth/20;
        }
        hotcss.rem2px = function( rem , designWidth ){
            if( !designWidth ){
                designWidth = parseInt(hotcss.designWidth , 10);
            }
            return rem*20*designWidth/640;
        }
        hotcss.mresize = function(){
            var innerWidth = document.documentElement.getBoundingClientRect().width || window.innerWidth;
            if( hotcss.maxWidth && (innerWidth/hotcss.dpr > hotcss.maxWidth) ){
                innerWidth = hotcss.maxWidth*hotcss.dpr;
            }
            if( !innerWidth ){ return false;}
            document.documentElement.style.fontSize = ( innerWidth*20/640 ) + 'px';
        };
        hotcss.mresize();
        window.addEventListener( 'resize' , function(){
            clearTimeout( hotcss.tid );
            hotcss.tid = setTimeout( hotcss.mresize , 400 );
        } , false );
        window.addEventListener( 'load' , hotcss.mresize , false );
        setTimeout(function(){
            hotcss.mresize();
        },333)
        window.hotcss = hotcss;
    })( window , document );
    (function($){
        var mainWit = $(window).width(),
            mainHit = $(window).height(),
            carouselBar = $(".page-header-bar"),
            fixedContact = $(".fixed-contact-wrap");
        /*fixed-contact*/
        $(".fixed-contact-wrap").hover(function(){
            $(this).addClass("active");
        },function(){
            $(this).removeClass("active");
        });
        $(window).scroll(function() {
            if($(window).width() > 992){
                if ($(this).scrollTop() > mainHit/2 ){
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
