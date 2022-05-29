<?php
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Solar Panel Mounting Brackets,Flat Pv Solar Mounting Brackets,Photovoltaic Solar Mounting </title>
    <meta name="keywords" content="Solar Pv Mounting Brackets,Solar Panel Mounting Brackets For Roof"/>
    <meta name="description"
          content="Get the Latest news of Solar Panel Mounting Brackets from bristarpvmount.com. Learn more here!"/>
    <meta name="google-site-verification" content="0hlmt6XTPq9hWJUMwJe9WG8xzEZXv56X8cNMCA1UqUo"/>
    <link rel="canonical" href="https:///"/>
    <meta property="og:image" content=""/>
    <link href="uploadfile/userimg/5fb86e9addafa6d964bb096eae4db0c0.ico" rel="shortcut icon"/>
    <link rel="alternate" hreflang="en" href="news-knowledge-_nc1.html"/>
    <?php include_once('head.php'); ?>

</head>
<body>
<?php include_once('header1.php'); ?>
<div class="page_banner">
    <a href="javascript:void(0);"><img src="demo/uploadfile/bannerimg/161701094863631503.jpg"
                                       alt="Metal Roof|Tile Roof Solar Mounting System"></a>
</div>

<div class="breadcrumb clearfix">
    <div class="container">
        <div class="breadcrumbm">
            <div class="main_title">
                <em>Project cases</em>
            </div>
            <div class="bread_right">
                <a class="home" href="/"><i class="fa fa-home"></i>Home</a>
                <i class="fa fa-angle-right"></i><a href="/project-cases_nc2"><h2>Project cases</h2></a>
            </div>
        </div>
    </div>
</div>

<div class="page_section clearfix">
    <div class="container">
        <div class="page_column clearfix">

            <ul class="project_list clearfix">
                <?php
                $projectQuery = "SELECT * FROM projects";
                $projects = mysqli_query($db,$projectQuery);
                if($projects){
                foreach($projects as $projectsRow){
                ?>
                <li class="col-sm-4 col-xs-12">
                    <div class="column">
                        <div class="image">
                            <a href="#"></a>
                            <img src="<?php echo $image_link.$projectsRow['image']; ?>"
                                 alt="<?php echo $projectsRow['title']; ?>"/>
                            <div class="more_box">
                                <span class="main_more"><a href="#">view more</a></span>
                            </div>
                            <div class="ovrly"></div>
                            <div class="line"></div>
                        </div>
                        <div class="wrap">
                            <a href="/ground-solar-panel-mounting-system_n6" class="title"><?php echo $projectsRow['title']; ?></a>
                            <div class="text"><?php echo $projectsRow['short_description']; ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php } } ?>
            </ul>
            <div class="page_num clearfix">


                <p>A total of <strong>1</strong> pages</p>
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
        <a id="floatHide" rel="nofollow" href="javascript:void(0);"><i></i></a>
    </div>
    <div id="onlineService">
        <div class="online_form">
            <div class="i_message_inquiry">
                <em class="title">Leave A Message</em>
                <div class="inquiry">
                    <form role="form" action="/inquiry/addinquiry" method="post" name="email_form" id="email_form1">
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
                <a rel="nofollow" href="Tel:+86 18359719902">+86 18359719902</a>
            </div>
        </li>

        <li class="online_e">
            <div>
                <i class="icon"></i>
                <a rel="nofollow" target="_blank" href="mailto:lancy@bristarxm.com">lancy@bristarxm.com</a>
            </div>
        </li>


        <li class="online_w">
            <div>
                <i class="icon"></i>
                <a rel="nofollow" target="_blank" href="https://api.whatsapp.com/send?phone=8618359719902&text=Hello">8618359719902</a>
            </div>
        </li>


        <li class="online_code">
            <div>
                <i class="icon"></i>
                <a>
                    <p>Scan to wechat :</p><img src="/uploadfile/single/e88e5502116a406cfcf8e37a16f1b9a8.png"/>
                </a>
            </div>
        </li>
    </ul>
</div>


<div class="mobile_nav clearfix">
    <a href="/"><i class="fa fa-home"></i>
        <p>Home</p></a>
    <a href="/products"><i class="fa fa-th-large"></i>
        <p>Products</p></a>
    <a href="/about-us_d1"><i class="fa fa-user"></i>
        <p>About</p></a>
    <a href="/contact-us_d2"><i class="fa fa-comments-o"></i>
        <p>contact</p></a>
</div>
<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>
<script type="text/javascript" src="/template/js/slick.js"></script>
<script type="text/javascript" src="/template/js/wow.min.js"></script>
<script type="text/javascript" src="/template/js/owl.carousel.min.js"></script>
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
