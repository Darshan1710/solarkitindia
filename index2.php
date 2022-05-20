<?php
include("connect.php");
include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>


    <link type="text/css" rel="stylesheet" href="template/css/font-awesome.min.css">

    <!-- <script type="text/javascript" src="template/js/jquery-1.8.3.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="demo/js/front/common.js"></script>
    <script type="text/javascript" src="demo/template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="demo/template/js/demo.js"></script>
    <script type="text/javascript" src="demo/template/js/jquery.velocity.min.js"></script>

    <link rel="stylesheet" type="text/css" href="demo/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="demo/template/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="demo/template/css/custom.css">


</head>
<body>


<div class="slide_content">
    <div class="htmleaf-container">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line"
             data-ride="carousel" data-pause="hover" data-interval="5000">
            <ol class="carousel-indicators">

                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>

                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>

                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <a href="#"><img src="images/banner/solar-mounting_all-product-launch.png"
                                     alt="Solar Panel Mounting Brackets" class="slide-image"/></a>

                </div>
                <div class="item">
                    <a href="#"><img
                                src="images/banner/solar-mounting_all-product-launch.png"
                                alt="Tile Roof Solar Mounting Brackets" class="slide-image"/></a>

                </div>
                <div class="item">
                    <a href="#"><img src="images/banner/solar-mounting_all-product-launch.png"
                                     alt="Solar mounting brackets" class="slide-image"/></a>

                </div>


            </div>
            <div class="left carousel-control" rel="nofollow" href="#bootstrap-touch-slider" role="button"
                 data-slide="prev">
                <div class="icon icon-wrap"></div>
            </div>

            <div class="right carousel-control" rel="nofollow" href="#bootstrap-touch-slider" role="button"
                 data-slide="next">
                <div class="icon icon-wrap"></div>
            </div>
        </div>

    </div>
</div>


<div class="in_categW">
    <div class="container">
        <div class="in_title">
            <span>Product Categories</span>
            <p>We design and manufacture solar mounting systems, also we sell the accessories seperately and accept OEM.&nbsp;</p>
        </div>
        <ul class="in_categL clearfix">
            <?php
            $categories_query = "SELECT * FROM category WHERE status = '1'";
            $categories = mysqli_query($db, $categories_query);
            if ($categories) {
                foreach ($categories as $cat) {
                    ?>
                    <li class="col-sm-3 col-xs-6">
                        <div class="column">
                            <a href="#"></a>
                            <div class="images"
                                 style="background-image: url(demo/uploadfile/category/f4fa715dceb26ac5d143123c121ac2d4.jpg)"></div>
                            <div class="in_categ_w">
                                <img class="in_categ_img" src="<?php echo $link . $cat['image']; ?>"
                                     alt="Metal Roof Solar Mounting System">
                                <p class="title"><?php echo $cat['category'] ?></p>
                                <em class="line"></em>
                                <div class="text">Bristar metal roof solar mounting systems are widely applied for
                                    commercial
                                    and residential tin roof project. With wide range of metal roof clamps, it is
                                    possible to
                                    mount panels on almost all sorts of tin rooftops.&nbsp;
                                </div>
                                <span class="main_more"><a rel="nofollow" href="#">view more</a></span>
                            </div>
                        </div>
                    </li>
                <?php }
            } ?>
        </ul>

    </div>
</div>

<div class="in_aboutW">
    <div class="container about_topw">
        <div class="about_top clearfix">
            <div class="about_since">
                <em>2010</em>
                <p>Company Establishment</p>
            </div>
            <div class="in_videoW">
                <div class="text">We are specialized in
                    <span>research, development, produce, service and marketing</span> of solar mounting system.
                </div>
                <div class="in_videos video">

                    <a href="https://www.youtube.com/watch?v=4M70tvu_gEI"></a>

                    <div class="video_icon">
                        <div class="video-player">
                            <p class="video-button">
                                <i class="fa fa-play"></i>
                                <span class="line-video-animation line-video-1"></span>
                                <span class="line-video-animation line-video-2"></span>
                                <span class="line-video-animation line-video-3"></span>
                            </p>
                        </div>
                    </div>

                    <p class="video_t">Watch Our Video</p>

                </div>
            </div>
        </div>
    </div>

    <div class="container container02 clearfix">
        <div class="in_about clearfix">
            <div class="about_column col-sm-6 col-xs-12">
                <div class="in_title">
                    <span>About us</span>
                </div>

                <p class="about_title">Mounting Solar-Kit Private Limited</p>
                <div class="text text-justify">
                    Established in the year 2018 at Navi Mumbai, Maharashtra, We "Mounting Solar-Kit Private Limited”
                    are a Sole
                    Proprietorship based firm, engaged as the foremost Manufacturer and Supplier of Solar Panel Mounting
                    Structure,
                    Trapezoidal Roof Solar Structure and Standing Seam Roof 180° Solar Structure and Flat Roof Ballasted
                    Structure.
                    These products are offered by us at most affordable rates. Our products are high in demand due to
                    their premium
                    quality, seamless finish, different patterns and affordable prices. Furthermore, we ensure to timely
                    deliver these
                    products to our clients, through this we have gained a huge client base in the market.
                </div>
                <span class="main_more"><a rel="nofollow" href="#">view more<i></i></a></span>
                <span class="main_more more_conts"><a rel="nofollow"
                                                      href="#">Contact Us<i></i></a></span>
                <ul class="adv_list clearfix">
                    <li class="col-xs-6">
                        <div class="icon"><img src="demo/uploadfile/single/ebf2cf8d7cad921567249bd6aee313cb.png"
                                               alt="R&D Team"></div>
                        <div class="wrap">
                            <em class="title">R&D Team</em>
                            <div class="text">We design and manufacture the solar mounting systems.</div>
                        </div>
                    </li>
                    <li class="col-xs-6">
                        <div class="icon"><img src="demo/uploadfile/single/3fbde64e606e045cb2ce8783bca6cb6c.png"
                                               alt="Professional Certification"></div>
                        <div class="wrap">
                            <em class="title">Professional Certification</em>
                            <div class="text">We offer certificates according to customer's requests.</div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="about_image col-sm-6 col-xs-12">

                <div class="slider autoplay1">
                    <div>
                        <div class="li"><a href="about-us_d1.html"><img
                                        src="demo/uploadfile/bannerimg/16230471101468.jpg"
                                        alt="Metal Roof Solar Mounts"></a></div>
                    </div>
                    <div>
                        <div class="li"><a href="about-us_d1.html"><img
                                        src="demo/uploadfile/bannerimg/1617011897434831503.jpg"
                                        alt="Metal Roof Solar Mounts"></a></div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="in_aboutbg" style="background-image: url(template/images/about_bg2.jpg)"></div>
</div>

<script type="text/javascript">
    $(".video a").on("click", function (e) {
        e.preventDefault();
        var $url = $(this).attr('href');
        $(document.body).append('<div id="video-wrap"><button type="button" id="close-button1" aria-label="Close" class="baguetteBox-button1"><svg onclick="removeVideoWrap()" width="30" height="30"><g stroke="rgb(160,160,160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"></line><line x1="5" y1="25" x2="25" y2="5"></line></g></svg></button><div id="video-dialog"><iframe src="https://www.youtube.com/embed/' + getID($url) + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div></div>');


    });

    function removeVideoWrap() {
        $('#video-wrap').remove();
    }

    function getID(url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        return (match && match[7].length == 11) ? match[7] : false;
    }

</script>

<div class="in_proW">
    <div class="container">
        <div class="in_title">
            <span>Hot Products</span>
            <p>We have stocks for most of items, we accept small orders for them and can ship goods quickly.&nbsp;</p>
        </div>
        <ul class="in_proL clearfix">
            <?php
            $newProductsQuery = "SELECT * FROM products WHERE product_status = '2'";
            $newProducts = mysqli_query($db, $newProductsQuery);
            if ($newProducts) {
                foreach ($newProducts as $newProductsRow) { ?>
                    <li class="col-sm-3">
                        <div class="column">
                            <a href="#" class="image">
                                <img id="product_detail_img"
                                     alt="<?php echo $newProductsRow['title']; ?>"
                                     src="<?php echo $link.$newProductsRow['thumbnail']; ?>"/></a>
                            <a href="#" class="title"><?php echo $newProductsRow['title']; ?></a>
                            <div class="text"><?php echo $newProductsRow['short_description']; ?></div>
                            <a rel="nofollow" href="#" class="more">view more<i></i></a>
                        </div>
                    </li>
                <?php }
            } ?>
        </ul>
        <div class="slider autoplay2 hidden">

            <div>
                <div class="li">
                    <div class="column">
                        <a href="rv-solar-panel-mounting-feet-hardware_p47.html" class="image"><img
                                    id="product_detail_img" alt="RV Solar Panel Mounting Hardware"
                                    src="demo/uploadfile/202105/05/9a21386b3f7416085134a36d4dcd7459_small.jpg"/></a>
                        <a href="rv-solar-panel-mounting-feet-hardware_p47.html" class="title">RV Solar Panel Mounting
                            Feet Hardware</a>
                        <div class="text">The RV solar panel mounting hardware works for mounting smaller solar panels
                            on flat surface.
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <div class="li">
                    <div class="column">
                        <a href="abs-plastic-solar-panel-corner-mounts_p43.html" class="image"><img
                                    id="product_detail_img" alt="Solar Panel Corner Mounts"
                                    src="demo/uploadfile/202105/05/b316ea881b3240b9e0ca669c7426d8dd_small.jpg"/></a>
                        <a href="abs-plastic-solar-panel-corner-mounts_p43.html" class="title">ABS Plastic Solar Panel
                            Corner Mounts</a>
                        <div class="text">The solar panel corner mounts are used to attach PV modules to the roof of
                            motorhome or deck of boat without drilling holes on the surface.
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <div class="li">
                    <div class="column">
                        <a href="self-locking-304-stainless-steel-cable-ties_p39.html" class="image"><img
                                    id="product_detail_img" alt="Stainless Steel Cable Ties"
                                    src="demo/uploadfile/202105/04/c023edc335f5d6a29929708b1331f100_small.jpg"/></a>
                        <a href="self-locking-304-stainless-steel-cable-ties_p39.html" class="title">Self Locking 304
                            Stainless Steel Cable Ties</a>
                        <div class="text">The self locking stainless steel cable ties are ideal for bundling wires or
                            hoses in demanding applications, they are designed with an easy install, low profile,
                            self-locking ball bearing head.
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="in_caseW">
    <div class="container">
        <div class="in_title">
            <span>Our Projects</span>
            <p>Projects we have done all around the world.&nbsp;</p>
        </div>
        <ul class="in_CaseL clearfix">
            <?php $projectQuery = "SELECT * FROM projects WHERE status = '1'";
            $projects = mysqli_query($db, $projectQuery);
            if ($projects) {
                foreach ($projects as $projectRow) {

                    ?>
                    <li class="col-sm-3">
                        <div class="in_CaseL_m">
                            <a href="#"></a>
                            <img src="<?php echo $link . $projectRow['image'] ?>"
                                 alt="<?php echo $projectRow['title'] ?>">
                            <div class="wrap">
                                <i class="icon"></i>
                                <div class="in_CaseL_w">
                                    <a href="#"><?php echo $projectRow['title'] ?></a>
                                    <p><?php echo $projectRow['short_description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
</div>
<div class="in_numberW">
    <div class="container">

        <div class="numbers">
            <div class="clearfix percent-blocks" data-waypoint-scroll="true">
                <div class="numbers__one"
                     style="background-image:url(demo/uploadfile/single/5a60308ab3b89173f391d487528139aa.png)">
                    <div class="numbers__body chart" data-percent="2010">
                        <div class="numbers__num percent">2010</div>

                    </div>
                    <div class="number__desc">Established</div>
                </div>
                <div class="numbers__one"
                     style="background-image:url(demo/uploadfile/single/125d707a2943df4c83c8b6559f09887b.png)">
                    <div class="numbers__body chart" data-percent="26000">
                        <div class="numbers__num percent">26000</div>

                    </div>
                    <div class="number__desc">Factory area(m²)</div>
                </div>
                <div class="numbers__one numbers__thr"
                     style="background-image:url(demo/uploadfile/single/b8117e2069bdeb24f7aba1e3f20130c0.png)">
                    <div class="numbers__body chart" data-percent="90">
                        <div class="numbers__num percent">90</div>
                        <span>+</span>
                    </div>
                    <div class="number__desc">Countries</div>
                </div>
                <div class="numbers__one"
                     style="background-image:url(demo/uploadfile/single/a7e2eaedc03fe3a2b215f59a17c3525b.png)">
                    <div class="numbers__body chart" data-percent="60000">
                        <div class="numbers__num percent">60000</div>

                    </div>
                    <div class="number__desc">Annual Sales(M)</div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="news_content">
    <div class="container">
        <div class="in_title">
            <span>News & Knowledge </span>
            <p>Know more about the solar mounting systems</p>
        </div>
        <ul class="list clearfix">
            <li class="col-sm-4 col-xs-12">
                <div class="image">
                    <a href="how-to-effectively-extend-the-service-life-of-solar-panel-mounting-brackets_n9.html"></a>
                    <img src="demo/uploadfile/news/33caa5a8c73e64ca8ad247b1712426ec.jpg"
                         alt="How to effectively extend the service life of solar panel mounting brackets?">
                    <div class="date"><em>29</em>
                        <p>Mar</p></div>

                </div>
                <div class="wrap">
                    <a href="how-to-effectively-extend-the-service-life-of-solar-panel-mounting-brackets_n9.html"
                       class="title">How to effectively extend the service life of solar panel mounting brackets?</a>
                    <div class="text">Ground photovoltaic system is generally adopts a concrete strip (block) foundation
                        form. The challenges faced by the design of solar panel mounting brackets, the most important
                        feature of the assembly...
                    </div>
                    <span class="page_date">Mar 29, 2021</span>

                    <a rel="nofollow"
                       href="how-to-effectively-extend-the-service-life-of-solar-panel-mounting-brackets_n9.html"
                       class="page_more">view more<i></i></a>
                </div>
            </li>
            <li class="col-sm-4 col-xs-12">
                <div class="image">
                    <a href="what-are-the-components-of-the-small-flat-photovoltaic-solar-mounting-brackets_n8.html"></a>
                    <img src="demo/uploadfile/news/3c46c1bd13b873ed48ba7b21b76d6154.jpg"
                         alt="What are the components of the small flat photovoltaic solar mounting brackets?">
                    <div class="date"><em>07</em>
                        <p>May</p></div>

                </div>
                <div class="wrap">
                    <a href="what-are-the-components-of-the-small-flat-photovoltaic-solar-mounting-brackets_n8.html"
                       class="title">What are the components of the small flat photovoltaic solar mounting brackets?</a>
                    <div class="text">Generally, the installation of small flat photovoltaic brackets is mainly divided
                        into three main components, which are triangle beam bracket, cross beam bracket and vertical
                        bracket, the main purpose...
                    </div>
                    <span class="page_date">May 07, 2021</span>

                    <a rel="nofollow"
                       href="what-are-the-components-of-the-small-flat-photovoltaic-solar-mounting-brackets_n8.html"
                       class="page_more">view more<i></i></a>
                </div>
            </li>
            <li class="col-sm-4 col-xs-12">
                <div class="image">
                    <a href="what-aspects-of-the-photovoltaic-solar-mounting-support-that-you-need-to-focus-on_n7.html"></a>
                    <img src="demo/uploadfile/news/652c687da159dc389c039076723d2f17.jpg"
                         alt="What aspects of the photovoltaic solar mounting support that you need to focus on?">
                    <div class="date"><em>29</em>
                        <p>Mar</p></div>

                </div>
                <div class="wrap">
                    <a href="what-aspects-of-the-photovoltaic-solar-mounting-support-that-you-need-to-focus-on_n7.html"
                       class="title">What aspects of the photovoltaic solar mounting support that you need to focus
                        on?</a>
                    <div class="text">As an emerging industry, photovoltaic solar mounting supports are facing more and
                        more customer needs. At the same time, some customers lack the knowledge of photovoltaic solar
                        mounting support bracke...
                    </div>
                    <span class="page_date">Mar 29, 2021</span>

                    <a rel="nofollow"
                       href="what-aspects-of-the-photovoltaic-solar-mounting-support-that-you-need-to-focus-on_n7.html"
                       class="page_more">view more<i></i></a>
                </div>
            </li>

        </ul>
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
                    <input name="textfield" id="user_email" type="text" class="fot_input" placeholder="Enter your email"
                           onfocus="if(this.placeholder=='Enter your email'){this.placeholder='';}"
                           onblur="if(this.placeholder==''){this.placeholder='Enter your email';}">
                    <input type="button" value="submit" onclick="add_email_list();" class="send">
                </div>
                <script>
                    var email = document.getElementById('user_email');

                    function add_email_list() {
                        $.ajax({
                            url: "/common/ajax/addtoemail/emailname/" + email.value,
                            type: 'GET',
                            success: function (info) {
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


<?php include("footer.php"); ?>

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
        <a id="floatHide" rel="nofollow" href="javascript:void(0);"><i></i></a>
    </div>
    <div id="onlineService">
        <div class="online_form">
            <div class="i_message_inquiry">
                <em class="title">Leave A Message</em>
                <div class="inquiry">
                    <form role="form" action="https://www.bristarpvmount.com/inquiry/addinquiry" method="post"
                          name="email_form" id="email_form1">
                        <input type="hidden" name="msg_title" value="Leave a Message" class="meInput"/>
                        <div class="text">If you are interested in our products and want to know more details,please
                            leave a message here,we will reply you as soon as we can.
                        </div>
                        <div class="input-group">
                            <span class="ms_e"><input class="form-control" name="msg_email" id="msg_email" tabindex="10"
                                                      type="text" placeholder="* Email"></span>
                        </div>
                        <div class="input-group">
                            <span class="ms_p"><input class="form-control" name="msg_tel" id="phone" tabindex="10"
                                                      type="text" placeholder="Tel/WhatsApp"></span>
                        </div>
                        <div class="input-group">
                            <span class="ms_m"><textarea name="msg_content" class="form-control" id="message"
                                                         tabindex="13"
                                                         placeholder="* Enter product details (such as color, size, materials etc.) and other specific requirements to receive an accurate quote."></textarea></span>
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
                <a rel="nofollow" target="_blank" href="mailto:ada@bristarxm.com">ada@bristarxm.com</a>
            </div>
        </li>


        <li class="online_w">
            <div>
                <i class="icon"></i>
                <a rel="nofollow" target="_blank" href="https://api.whatsapp.com/send?phone=18650007009&amp;text=Hello">18650007009</a>
            </div>
        </li>


        <li class="online_code">
            <div>
                <i class="icon"></i>
                <a>
                    <p>Scan to wechat :</p><img src="uploadfile/single/e88e5502116a406cfcf8e37a16f1b9a8.png"/>
                </a>
            </div>
        </li>
    </ul>
</div>


<div class="mobile_nav clearfix">
    <a href="index.html"><i class="fa fa-home"></i>
        <p>Home</p></a>
    <a href="products.html"><i class="fa fa-th-large"></i>
        <p>Products</p></a>
    <a href="about-us_d1.html"><i class="fa fa-user"></i>
        <p>About</p></a>
    <a href="contact-us_d2.html"><i class="fa fa-comments-o"></i>
        <p>contact</p></a>
</div>
<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>
<script type="text/javascript" src="demo/template/js/slick.js"></script>
<script type="text/javascript" src="demo/template/js/wow.min.js"></script>
<script type="text/javascript" src="demo/template/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    baguetteBox.run('.tz-gallery');
</script>
<script>
    (function ($) {
        var $nav = $('#main-nav');
        var $toggle = $('.toggle');
        var defaultData = {
            maxWidth: false,
            customToggle: $toggle,
            levelTitles: true
        };

        // we'll store our temp stuff here
        var $clone = null;
        var data = {};

        // calling like this only for demo purposes

        const initNav = function (conf) {
            if ($clone) {
                // clear previous instance
                $clone.remove();
            }

            // remove old toggle click event
            $toggle.off('click');

            // make new copy
            $clone = $nav.clone();

            // remember data
            $.extend(data, conf)

            // call the plugin
            $clone.hcMobileNav($.extend({}, defaultData, data));
        }

        // run first demo
        initNav({});

        $('.actions').find('a').on('click', function (e) {
            e.preventDefault();

            var $this = $(this).addClass('active');
            var $siblings = $this.parent().siblings().children('a').removeClass('active');

            initNav(eval('(' + $this.data('demo') + ')'));
        });
    })(jQuery);
</script>
<script>
    /*------------------------------------------------------------------
    [Table of contents]

    - Author:  Andrey Sokoltsov
    - Profile:	http://themeforest.net/user/andreysokoltsov
    --*/

    (function () {

        "use strict";

        var Core = {

            initialized: false,

            initialize: function () {

                if (this.initialized) return;
                this.initialized = true;

                this.build();

            },

            build: function () {


                // Counter
                this.initNumberCounter();


            },


            initNumberCounter: function (options) {
                if ($('body').length) {
                    var waypointScroll = $('.percent-blocks').data('waypoint-scroll');
                    if (waypointScroll) {
                        $(window).on('scroll', function () {
                            var winH = $(window).scrollTop();
                            $('.percent-blocks').waypoint(function () {
                                $('.chart').each(function () {
                                    CharsStart();
                                });
                            }, {
                                offset: '80%'
                            });
                        });
                    }
                }

                function CharsStart() {
                    $('.chart').easyPieChart({
                        barColor: false,
                        trackColor: false,
                        scaleColor: false,
                        scaleLength: false,
                        lineCap: false,
                        lineWidth: false,
                        size: false,
                        animate: 1000,
                        onStep: function (from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }
            },


        };

        Core.initialize();

    })();
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
