<?php
include("connect.php");
?>
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
    <script type="text/javascript" src="js/product.js"></script>
</head>
<body>
<?php include_once 'header1.php'; ?>
<div class="section">
    <div class="page_banner">
    </div>
    <div class="breadcrumb clearfix">
        <div class="container">
            <div class="breadcrumbm">
                <div class="main_title">
                    <em>Products</em>
                </div>
                <div class="bread_right">

                    <a class="home" href="<?php echo $base_url; ?>"><i class="fa fa-home"></i>Home</a>
                    <i class="fa fa-angle-right"></i><a href="newsList.php">Products </a>

                </div>
            </div>
        </div>
    </div>
    <div class="page_section clearfix">
        <div class="container">
            <div class="filter-strip">
                <h1>We will get back to you soon</h1>
                <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hello this is the starting message"><img src=""> </a>
                <div class="social_footer">
                    <a class="s__btn ic_fb" href="https://www.facebook.com/SolarKitIndia/" target="_blank"></a>
                    <a class="s__btn ic_twitter" href="https://twitter.com/solarkit_in" target="_blank"></a>
                    <a class="s__btn ic_instagram" href="https://www.producthunt.com/posts/devsheet" target="_blank"></a>
                    <a class="s__btn ic_linkedin" href="https://www.linkedin.com/company/mounting-solar-kit-private-limited/?viewAsMember=true" target="_blank"></a>
                    <a class="s__btn ic_youtube" href="https://www.youtube.com/channel/UC0Re8bR_jgjnbuxOFEv9b9A"></a>
                    <a class="s__btn ic_email" href="mailto:sales@solar-kit.in"></a>
                    <a class="s__btn ic_pintrest" href="https://www.pinterest.com/"></a>
                    <a class="s__btn ic_whatsapp" href="https://api.whatsapp.com/send?phone=919321342273&text=Hello this is the starting message"></a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'contactUsForm.php'; ?>
    <div class="in_newsletterW">
        <div class="container">
            <div class="in_newsletter">
                <div class="in_title">
                    <span>Get the latest offers Subscribe for our newsletter</span>
                </div>
                <div class="letter_box">
                    <p>Please read on, stay posted, subscribe, and we welcome you to tell us what you think.</p>
                    <div class="letter-input">
                        <input name="textfield" id="user_email" type="text" class="fot_input"
                               placeholder="Enter your email"
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
</div>


<div class="result"><?php  echo $text; ?></div>

<?php include("footer1.php");
include_once 'sidebar.php';
?>

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
