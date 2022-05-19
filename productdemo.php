<?php
include("connect.php");
include("header.php");
?>

    <link rel="stylesheet" type="text/css" href="demo/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="demo/template/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="demo/template/css/custom.css">
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
                        <a class="home" href="#"><i class="fa fa-home"></i>Home</a>
                        <i class="fa fa-angle-right"></i>
                        <a href="#">Products</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_section clearfix">
            <div class="container">
                <div class="page_column clearfix">
                    <div class="page-left clearfix">
                        <div id="right_column" class="left-cat column clearfix">
                            <section class="block blockcms column_box">
                                <span class="left_title"><em>Categories</em><span></span><i
                                            class="column_icon_toggle icon-plus-sign"></i></span>
                                <div class="block_content toggle_content">
                                    <ul class="mtree">
                                        <?php
                                        $categories_query = "SELECT * FROM category";
                                        $categories = mysqli_query($db, $categories_query);
                                        foreach ($categories as $cat) {
                                            ?>
                                            <li><b></b><a href="#"><?php echo $cat['category'] ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div id="right_column" class="left-pro column clearfix">
                            <section class="block blockcms column_box">
                                <span class="left_title"><em>New Products</em><span></span><i
                                            class="column_icon_toggle icon-plus-sign"></i></span>
                                <div class="block_content toggle_content">
                                    <ul class="list clearfix">
                                        <?php
                                        $newProductsQuery = "SELECT * FROM products WHERE product_status = '2'";
                                        $newProducts = mysqli_query($db, $newProductsQuery);
                                        if ($newProducts) {
                                            foreach ($newProducts as $newProductsRow) {
                                                ?>
                                                <li class="clearfix">
                                                    <div class="box clearfix">
                                                        <div class="image pro_image">
                                                            <a href="#"></a>
                                                            <img id="product_detail_img"
                                                                 alt="<?php echo $newProductsRow['title'] ?>"
                                                                 src="<?php echo $newProductsRow['thumbnail'] ?>"/>
                                                            <em class="icon"><i></i></em>
                                                        </div>
                                                        <div class="main">
                                                            <a href="#"
                                                               class="title"><?php echo $newProductsRow['title'] ?></a>
                                                            <a rel="nofollow" href="#" class="page_more">view more</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php }
                                        } ?>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="pro-text">
                            <div class="column"></div>
                        </div>
                        <div class="main">
                            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                                <div class="cbp-vm-options clearfix">
                                    <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected"
                                       data-view="cbp-vm-view-grid"></a>
                                    <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list"></a>
                                </div>
                                <ul class="wow clearfix">
                                    <?php
                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $recordsPerPage = 9;
                                    $fromRecordNum = ($recordsPerPage * $page) - $recordsPerPage;
                                    $products_query = "SELECT * FROM products WHERE product_status = '1' ORDER BY id ASC LIMIT ".$fromRecordNum.",".$recordsPerPage;
                                    $products = mysqli_query($db, $products_query);
                                    if ($products) {
                                        foreach ($products as $productRow) {
                                            ?>
                                            <li class="wow">
                                                <div class="clearfix">
                                                    <div class="cbp-vm-image">
                                                        <a class="link" href="#"></a>
                                                        <img id="product_detail_img" alt="<?php echo $productRow['title'] ?>"
                                                             src="<?php echo $link.$productRow['thumbnail']; ?>"/>
                                                        <div class="cbp-image-hover"><img
                                                                    src="<?php echo $link.$productRow['thumbnail']; ?>"
                                                                    alt="<?php echo $productRow['title'] ?>"></div>
                                                        <div class="line"></div>
                                                        <div class="ovrly"></div>
                                                        <div class="icon_box">
                                                            <div class="icon"></div>
                                                        </div>
                                                    </div>
                                                    <div class="cbp-list-center clearfix">
                                                        <div class="cbp-list-left">
                                                            <a class="cbp-title"
                                                               href="#"><?php echo $productRow['title'] ?></a>
                                                            <span class="line"></span>
                                                            <div class="cbp-vm-details"><?php echo $productRow['short_description'] ?> </div>
                                                            <ul class="post_blog_tag">
                                                                <p><i></i>Tags :</p>
                                                                <?php $tags = explode(',', $productRow['tags']);
                                                                if (COUNT($tags) > 0) {
                                                                    foreach ($tags as $tagsRow) {
                                                                        ?>
                                                                        <li><a href=""><?php echo $tagsRow; ?></a></li>
                                                                    <?php }
                                                                } ?>
                                                            </ul>
                                                            <div class="more"><span class="main_more"><a rel="nofollow"
                                                                                                         href="<?php echo $productRow['id']?>">view more</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                                          <div class="page_num clearfix">
                                              <?php
                                              $query = "SELECT COUNT(*) as total_rows FROM products WHERE product_status = '1'";
                                              $pagination = mysqli_query($db,$query);
                                              $row = mysqli_fetch_assoc($pagination);
                                              $total_rows = $row['total_rows'];
                                              $total_pages = ceil($total_rows/$recordsPerPage);
                                              $range = 5;
                                              $initial_num = $page - $range;
                                              $condition_limit_num = ($page + $range)  + 1;

                                              for ($x=$initial_num; $x<$condition_limit_num; $x++) {

                                                  // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
                                                  if (($x > 0) && ($x <= $total_pages)) {

                                                      // current page
                                                      if ($x == $page) {
                                                          echo "<a href='#' class='pages underline'>$x</a>";
                                                      }

                                                      // not current page
                                                      else {
                                                          echo "<a href='{$_SERVER['PHP_SELF']}?page=$x' class='pages underline'>$x</a>";
                                                      }
                                                  }
                                              }
                                              ?>
                                             

                                             <p>A total of <strong>5</strong> pages</p>
                                          </div>
                        <script>
                            (function () {

                                var container = document.getElementById('cbp-vm'),
                                    optionSwitch = Array.prototype.slice.call(container.querySelectorAll('div.cbp-vm-options > a'));

                                function init() {
                                    optionSwitch.forEach(function (el, i) {
                                        el.addEventListener('click', function (ev) {
                                            ev.preventDefault();
                                            _switch(this);
                                        }, false);
                                    });
                                }

                                function _switch(opt) {
                                    // remove other view classes and any any selected option
                                    optionSwitch.forEach(function (el) {
                                        classie.remove(container, el.getAttribute('data-view'));
                                        classie.remove(el, 'cbp-vm-selected');
                                    });
                                    // add the view class for this option
                                    classie.add(container, opt.getAttribute('data-view'));
                                    // this option stays selected
                                    classie.add(opt, 'cbp-vm-selected');
                                }

                                init();

                            })();


                            (function (window) {

                                'use strict';

                                // class helper functions from bonzo https://github.com/ded/bonzo

                                function classReg(className) {
                                    return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
                                }

                                // classList support for class management
                                // altho to be fair, the api sucks because it won't accept multiple classes at once
                                var hasClass, addClass, removeClass;


                                if ('classList' in document.documentElement) {
                                    hasClass = function (elem, c) {
                                        return elem.classList.contains(c);
                                    };
                                    addClass = function (elem, c) {
                                        elem.classList.add(c);
                                    };
                                    removeClass = function (elem, c) {
                                        elem.classList.remove(c);
                                    };
                                } else {
                                    hasClass = function (elem, c) {
                                        return classReg(c).test(elem.className);
                                    };
                                    addClass = function (elem, c) {
                                        if (!hasClass(elem, c)) {
                                            elem.className = elem.className + ' ' + c;
                                        }
                                    };
                                    removeClass = function (elem, c) {
                                        elem.className = elem.className.replace(classReg(c), ' ');
                                    };
                                }

                                function toggleClass(elem, c) {
                                    var fn = hasClass(elem, c) ? removeClass : addClass;
                                    fn(elem, c);
                                }

                                var classie = {
                                    // full names
                                    hasClass: hasClass,
                                    addClass: addClass,
                                    removeClass: removeClass,
                                    toggleClass: toggleClass,
                                    // short names
                                    has: hasClass,
                                    add: addClass,
                                    remove: removeClass,
                                    toggle: toggleClass
                                };

                                // transport
                                if (typeof define === 'function' && define.amd) {
                                    // AMD
                                    define(classie);
                                } else {
                                    // browser global
                                    window.classie = classie;
                                }

                            })(window);


                        </script>
                    </div>
<!--                    <div class="col-md-3">-->
<!--                        <form action="/action_page.php">-->
<!--                            <div class="form-group">-->
<!--                                <label for="email">Email address:</label>-->
<!--                                <input type="email" class="form-control" id="email">-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="pwd">Password:</label>-->
<!--                                <input type="password" class="form-control" id="pwd">-->
<!--                            </div>-->
<!--                            <div class="checkbox">-->
<!--                                <label><input type="checkbox"> Remember me</label>-->
<!--                            </div>-->
<!--                            <button type="submit" class="btn btn-default">Submit</button>-->
<!--                        </form>-->
<!--                        <div class="classima-ad ad-after-sidebar"><a href="#" target="_blank" rel="nofollow"><img-->
<!--                                        width="280" height="429"-->
<!--                                        src="https://new.hanksadvertising.com/wp-content/uploads/2019/10/ads3.png"-->
<!--                                        class="attachment-full size-full" alt="" loading="lazy"-->
<!--                                        srcset="https://new.hanksadvertising.com/wp-content/uploads/2019/10/ads3.png 280w, https://new.hanksadvertising.com/wp-content/uploads/2019/10/ads3-196x300.png 196w, https://new.hanksadvertising.com/wp-content/uploads/2019/10/ads3-91x140.png 91w"-->
<!--                                        sizes="(max-width: 280px) 100vw, 280px"></a></div>-->
<!--                    </div>-->
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


    <div class="result"><?php


        echo $text; ?></div>


<?php include("footer.php");


if ($load and $load == "metal") {
    ?>

    <script>
        var produkt = [
            ['', ''],
            ['tr', 'se'],
            ['po', 'la'],
            ['sr', 'lr'],
            ['30', '41', '65', '100'],
            ['ss', 'sd', 'ri', 'gl']
        ];
        //['mc','ar'],
        var produkt_name = [
            ['', ''],
            ['Trapez', 'Seam'],
            ['Portrait', 'Landscape'],
            ['Short Rail', 'Long Rail'],
            ['30 mm', '41 mm', '65 mm', '100 mm'],
            ['Screw 1', 'Screw 2', 'Rivet', 'Glue']
        ];
        var krok = 1;
        var hash = '';
        var map = new Map();
        map.set('krok1', '');
        map.set('krok2', '');
        map.set('krok3', '');
        map.set('krok4', '');
        map.set('krok5', '');
        map.set('krok6', '');
        //location.hash = "tr";
        if (location.hash && location.hash.length) {
            var hash = decodeURIComponent(location.hash.substr(1));
            $('.ref').text(hash);
            var array = hash.split('-');
            var krok = array.length;
            console.log(array);
            map.set('krok1', array[0]);
            if (krok > 1) map.set('krok2', array[1]);
            if (krok > 2) map.set('krok3', array[2]);
            if (krok == "5") {
                map.set('krok4', array[4]);
                map.set('krok6', array[3]);
                var krok = 4;
            }
            if (krok == "6") {
                map.set('krok4', array[5]);
                map.set('krok5', array[3]);
                map.set('krok6', array[4]);
                var krok = 5;
            }
            /*-------------------*/
            $('.progress li').removeClass('progress__step--active');
            $('#step-' + krok).addClass('progress__step--active');
            $('.select a').remove();
            /*-------------------*/
            for (var i = 0; i < produkt[krok].length; ++i) {
                if (map.get("krok1") == "se" && map.get("krok2") == "po" && krok == 3 && i == 0) {
                    // podminka sc-po-lr
                    i = 1;
                    map.set('krok3', 'lr');
                    get_cesta(map);
                    load_data($('.ref').text());
                }
                var $link = $('<a onclick="return myFunction(' + "'" + produkt[krok][i] + "'" + ');"><span>' + produkt_name[krok][i] + '</span></a>');
                $link.attr("id", "s" + produkt[krok][i]);
                $link.addClass("sel");
                if (produkt[krok][i] == map.get("krok" + krok)) {
                    $link.addClass("active");
                    load_data($('.ref').text());
                }
                if (map.get("krok1") == "se" && map.get("krok2") == "po" && krok == 3 && i == 1) {
                    // podminka sc-po-lr
                    $link.addClass("active");
                    $link.addClass("col");
                }
                // $link.addClass("active");
                if (produkt[krok][i] == hash.substring(hash.length - 2)) {
                    $link.addClass("active");
                }
                $link.attr("href", "#");
                $(".select").append($link);
            }
            podminka();
            /*------------------------*/
            console.log(map);
            console.log(krok);
        } else {
            map.set('krok1', 'tr');
            $('.ref').text("tr");
        }

        function load_data(d) {
            if ($('.ref').text()) $.ajax({
                type: "POST",
                dataType: 'json',
                data: "myurl=" + $('.ref').text(),
                success: function (data, textStatus) {
                    $("h1").text(data[0]);
                    $(".prod_container1 .prod_title span").text(d.toUpperCase());
                    $(".prod_container1 img").attr('src', 'http://localhost/solarkitindia.com/images/products1/' + d.replace(/-/g, '_').toUpperCase() + ".jpg");
                    $(".result").html(data[1]);
                    $("p.desc").html(data[2]);
                    $(".prod_container1 a.down").attr("href", data[3]);
                }
            });
        }

        function get_krok(krok, stav) {
            map.set('krok' + krok, produkt[krok][0]);
            if (krok == 4) map.set('krok6', 'mc');
            get_cesta(map);
            console.log(krok);
            //console.log(map);
            $('.progress li').removeClass('progress__step--active');
            $('#step-' + krok).addClass('progress__step--active');
            $('.select a').remove();
            for (var i = 0; i < produkt[krok].length; ++i) {
                if (map.get("krok1") == "se" && map.get("krok2") == "po" && krok == 3 && i == 0) {
                    // podminka sc-po-lr
                    i = 1;
                    map.set('krok3', 'lr');
                    get_cesta(map);
                    load_data($('.ref').text());
                }
                var $link = $('<a onclick="return myFunction(' + "'" + produkt[krok][i] + "'" + ');"><span>' + produkt_name[krok][i] + '</span></a>');
                $link.attr("id", "s" + produkt[krok][i]);
                $link.addClass("sel");
                if (i == 0) {
                    $link.addClass("active");
                    load_data($('.ref').text());
                }
                if (map.get("krok1") == "se" && map.get("krok2") == "po" && krok == 3 && i == 1) {
                    // podminka sc-po-lr
                    $link.addClass("active");
                    $link.addClass("col");
                }
                // $link.addClass("active");
                if (produkt[krok][i] == hash.substring(hash.length - 2)) {
                    $link.addClass("active");
                }
                $link.attr("href", "#");
                $(".select").append($link);
            }
            podminka();
        }

        function myFunction(clr) {
            var id = clr;
            if (location.hash && location.hash.length) {
                var hash = location.hash.substr(1)
                var pole_hash = hash.split('-');
                var kolik_hash = hash.length;
                pole_hash[krok - 1] = id;
            }
            map.set('krok' + krok, id);
            //console.log(map);
            if (krok == 4 && id == '30') map.set('krok6', 'mc');
            if (krok == 4 && id == '41') map.set('krok6', 'ar');
            if (krok == 4 && id == '65') map.set('krok6', 'mc');
            if (krok == 4 && id == '100') map.set('krok6', 'ar');
            $(".next").prop('disabled', false);
            get_cesta(map);
            $('.select a').removeClass('active');
            $('#s' + clr).addClass('active');
            $(".i_finish").remove();
            var cesta = location.hash.substr(1);
            $('.ref').text(cesta);  //cesta
            load_data(qqq);//cesta
            podminka()
            return false;
        }

        function get_cesta(map) {
            qqq = map.get('krok1');
            if (!map.get('krok2') == "") qqq = qqq + '-' + map.get('krok2');
            if (!map.get('krok3') == "") qqq = qqq + '-' + map.get('krok3');
            if (!map.get('krok5') == "") qqq = qqq + '-' + map.get('krok5');
            if (!map.get('krok6') == "") qqq = qqq + '-' + map.get('krok6');
            if (!map.get('krok4') == "") qqq = qqq + '-' + map.get('krok4');
            location.hash = qqq;
            $('.ref').text(qqq);
            //console.log('cesta krok'+krok);
        }

        function podminka() {
            $('.finish').attr("href", "mailto:sales@solar-kit.in?subject=Product " + $('.ref').text());
            if (map.get("krok3") == "lr") {
                $(".next").prop('disabled', true).hide();
                ;
                $('.finish').css("display", "block");
                //$(".prod_container1").append("<div class='i_finish'></div>");
                return false;
            }
            if (map.get("krok1") == "se" && map.get("krok3") == "sr") {
                $(".next").prop('disabled', true).hide();
                $('.finish').css("display", "block");
                //$(".prod_container1").append("<div class='i_finish'></div>");
                return false;
            }
            if (krok == "5") {
                $('.finish').css("display", "block");
                $(".next").hide();
                //$(".prod_container1").append("<div class='i_finish'></div>");
                return false;
            }
        }

        $(document).ready(function () {
            $('.prod_block1 button').click(function () {
                $(".next").prop('disabled', false);
                var stav = "p";
                if ($(this).hasClass("next")) {
                    krok = krok + 1;
                    if (krok >= 6) {
                        krok = 5;
                        return false;
                    }
                } else {
                    map.set('krok' + krok, '');
                    krok = krok - 1;
                    var stav = "m";
                    if (krok <= 0) {
                        krok = 1;
                        return false;
                    }
                    if (krok == 3) {
                        map.set('krok4', '');
                        map.set('krok5', '');
                        map.set('krok6', '');
                    }
                }
                $(".i_finish").remove();
                $(".finish").hide();
                $(".next").show();
                get_cesta(map);
                get_krok(krok, stav);
            });
        });
    </script>

<?php } ?>