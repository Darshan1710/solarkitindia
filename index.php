<?php
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include_once 'head.php'; ?>
    <link rel="stylesheet" type="text/css" href="demo/template/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="demo/template/css/owl.theme.default.min.css">

</head>
<body>
<?php include_once 'header1.php'; ?>
<div class="slide_content">
    <div class="htmleaf-container">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="images/banner/solarKit-website.png" class="img-responsive">
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
                            <a href="products.php?category_id=<?php echo $cat['id'] ?>"></a>
                            <div class="images"
                                 style="background-image: url(demo/uploadfile/category/f4fa715dceb26ac5d143123c121ac2d4.jpg)"></div>
                            <div class="in_categ_w">
                                <img class="in_categ_img" src="<?php echo $image_link . $cat['image']; ?>"
                                     alt="Metal Roof Solar Mounting System">
                                <p class="title"><?php echo $cat['category'] ?></p>
                                <em class="line"></em>
                                <div class="text"><?php echo $cat['short_description']; ?></div>
                                <span class="main_more"><a rel="nofollow" href="products.php?category_id=<?php echo $cat['id'] ?>">view more</a></span>
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
                <em>2018</em>
                <p>Company Establishment</p>
            </div>
            <div class="in_videoW">
                <div class="text">India's leading
                    <span>solar structure manufacture & supplier</span> offers most economical Metal Roof Solar Mounting Structure.
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
                    are a Sole Proprietorship based firm, engaged as the foremost Manufacturer and Supplier of Solar
                    Panel Mounting
                    Structure, Trapezoidal Roof Solar Structure and Standing Seam Roof 180° Solar Structure and Flat
                    Roof Ballasted
                    Structure. These products are offered by us at most affordable rates. Our products are high in
                    demand due to
                    their premium quality, seamless finish, different patterns and affordable prices. Furthermore, we
                    ensure to timely
                    deliver these products to our clients, through this we have gained a huge client base in the market.
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
                        <div class="li"><a href="#"><img
                                        src="demo/uploadfile/bannerimg/16230471101468.jpg"
                                        alt="Metal Roof Solar Mounts"></a></div>
                    </div>
                    <div>
                        <div class="li"><a href="#"><img
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
            $newProductsQuery = "SELECT * FROM sub_products WHERE product_status = '2'";
            $newProducts = mysqli_query($db, $newProductsQuery);
            if ($newProducts) {
                foreach ($newProducts as $newProductsRow) { ?>
                    <li class="col-sm-3">
                        <div class="column">
                            <a href="productDetails.php?id=<?php echo $newProductsRow['id']; ?>" class="image">
                                <img id="product_detail_img"
                                     alt="<?php echo $newProductsRow['title']; ?>"
                                     src="<?php echo $image_link . $newProductsRow['thumbnail']; ?>"/></a>
                            <a href="productDetails.php?id=<?php echo $newProductsRow['id']; ?>" class="title"><?php echo $newProductsRow['title']; ?></a>
                            <div class="text"><?php echo $newProductsRow['short_description']; ?></div>
                            <a rel="nofollow" href="productDetails.php?id=<?php echo $newProductsRow['id']; ?>" class="more">view more<i></i></a>
                        </div>
                    </li>
                <?php }
            } ?>
        </ul>
        <div class="in_title">
            <span>Testimonials</span>
        </div>
        <div class="slider autoplay2">

            <div>
                <div class="li">
                    <div class="column">
                        <div class="text">

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h5 class="mt-20"> - XYZ</h5>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <div class="li">
                    <div class="column">
                        <div class="text">

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h5 class="mt-20"> - PQR</h5>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <div class="li">
                    <div class="column">
                        <div class="text">

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h5 class="mt-20"> - ABC</h5>
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
                            <a href="projectDetails.php?id=<?php echo $projectRow['id']; ?>"></a>
                            <img src="<?php echo $image_link . $projectRow['image'] ?>"
                                 alt="<?php echo $projectRow['title'] ?>">
                            <div class="wrap">
                                <i class="icon"></i>
                                <div class="in_CaseL_w">
                                    <a href="projectDetails.php?id=<?php echo $projectRow['id']; ?>"><?php echo $projectRow['title'] ?></a>
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
                    <div class="numbers__body chart" data-percent="2018">
                        <div class="numbers__num percent">2018</div>

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
            <?php $blogQuery = "SELECT * FROM blogs LIMIT 3";
            $blogs = mysqli_query($db, $blogQuery);
            if ($blogs) {
                foreach ($blogs as $blogRow) {
                    ?>
                    <li class="col-sm-4 col-xs-12">
                        <div class="image">
                            <a href="blogDetails.php?blog_id=<?php echo $blogRow['id'] ?>"></a>
                            <img src="<?php echo $image_link . $blogRow['img'] ?>"
                                 alt="<?php echo $blogRow['title']; ?>">
                            <div class="date"><em>29</em>
                                <p>Mar</p></div>

                        </div>
                        <div class="wrap">
                            <a href="blogDetails.php?blog_id=<?php echo $blogRow['id'] ?>"
                               class="title"><?php echo $blogRow['title']; ?></a>
                            <div class="text"><?php echo $blogRow['description']; ?></div>
                            <span class="page_date">Mar 29, 2021</span>

                            <a rel="nofollow"
                               href="blogDetails.php?blog_id=<?php echo $blogRow['id'] ?>"
                               class="page_more">view more<i></i></a>
                        </div>
                    </li>
                <?php }
            } ?>
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


<?php include("footer1.php"); ?>

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

<script type="text/javascript" src="demo/template/js/slick.js"></script>
<script type="text/javascript" src="demo/template/js/wow.min.js"></script>
<script type="text/javascript" src="demo/template/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    baguetteBox.run('.tz-gallery');

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.autoplay2').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
</script>
</body>
</html>
