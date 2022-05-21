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
                                            <li><b></b><a href="productdemo.php?category_id=<?php echo $cat['id']; ?>"><?php echo $cat['category'] ?></a>
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
                                                                 src="<?php echo $image_link.$newProductsRow['thumbnail'] ?>"/>
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
                                    $category = isset($_GET['category_id']) ? 'AND category_id="'.$_GET['category_id'].'"' : '';
                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $recordsPerPage = 9;
                                    $fromRecordNum = ($recordsPerPage * $page) - $recordsPerPage;
                                    $products_query = "SELECT * FROM products WHERE product_status = '1' ".$category." ORDER BY id ASC LIMIT ".$fromRecordNum.",".$recordsPerPage;
                                    $products = mysqli_query($db, $products_query);
                                    if ($products) {
                                        foreach ($products as $productRow) {
                                            ?>
                                            <li class="wow">
                                                <div class="clearfix">
                                                    <div class="cbp-vm-image">
                                                        <a class="link" href="#"></a>
                                                        <img id="product_detail_img" alt="<?php echo $productRow['title'] ?>"
                                                             src="<?php echo $image_link.$productRow['thumbnail']; ?>"/>
                                                        <div class="cbp-image-hover"><img
                                                                    src="<?php echo $image_link.$productRow['thumbnail']; ?>"
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
                                              $category_id = isset($_GET['category_id']) ? ' AND category_id = "'.$_GET['category_id'].'"' : '';
                                              $query = "SELECT COUNT(*) as total_rows FROM products WHERE product_status = '1'".$category_id;
                                              $pagination = mysqli_query($db,$query);
                                              $row = mysqli_fetch_assoc($pagination);
                                              $total_rows = $row['total_rows'];
                                              $total_pages = ceil($total_rows/$recordsPerPage);
                                              $range = 5;
                                              $initial_num = $page - $range;
                                              $condition_limit_num = ($page + $range)  + 1;
                                              $category_id = isset($_GET['category_id']) ? '&category_id='.$_GET['category_id'] : '';

                                              for ($x=$initial_num; $x<$condition_limit_num; $x++) {

                                                  // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
                                                  if (($x > 0) && ($x <= $total_pages)) {

                                                      // current page
                                                      $activeClass = isset($_GET['page']) && $_GET['page'] == $x ? 'active-menu' : '';
                                                      if ($x == $page) {
                                                          echo "<a href='#' class='pages underline $activeClass'>$x</a>";
                                                      }

                                                      // not current page
                                                      else {
                                                          echo "<a href=".$image_link."productdemo.php?page=".$x.$category_id." class='pages underline'>$x</a>";
                                                      }
                                                  }
                                              }
                                              ?>
                                             

                                             <p>A total of <strong><?php echo $total_rows; ?></strong> pages</p>
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


    <div class="result"><?php  echo $text; ?></div>

    <?php include("footer1.php");
