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
        <title>What are the components of the small flat photovoltaic solar mounting brackets</title>
        <meta name="keywords" content="solar mounting brackets" />
        <meta property="og:image" content="uploadfile/news/3c46c1bd13b873ed48ba7b21b76d6154.jpg"/>
        <link href="<?= $link;?>uploadfile/userimg/5fb86e9addafa6d964bb096eae4db0c0.ico" rel="shortcut icon"  />
        <?php include_once 'head.php'; ?>
        <script type="text/javascript" src="<?= $link; ?>js/product.js"></script>
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
                    <h1 class="text-center step-title">Build Your Own Solution (Step 1 of 5)</h1>
                <div class="col-md-2 filter-input">
                    <label>Step 1</label>
                    <select class="selectInput" name="rail_type" id="rail_type">
                        <option value="">Select Rail Type</option>
                        <?php $railTypeId = isset($_SESSION['railTypeId']) ? 'WHERE id="'.$_SESSION['railTypeId'].'"' : '';
                        $railTypeQuery = "SELECT * FROM rail_type ".$railTypeId." ORDER BY id";
                        $railTypes = mysqli_query($db, $railTypeQuery); 
                        foreach($railTypes as $row){ ?>
                        <option value="<?= $row['id'] ?>"><?php echo $row['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-2 filter-input">
                    <label>Step 2</label>
                    <select class="selectInput" name="panel_position" id="panel_position" disabled>
                        <option value="">Panel Position</option>
                    </select>
                </div>
                <div class="col-md-2 filter-input">
                    <label>Step 3</label>
                    <select class="selectInput" name="roof_type" id="roof_type" disabled>
                        <option value="">Roof Type</option>
                    </select>
                </div>
                <div class="col-md-2 filter-input height-input" style="display: none">
                    <label>Step 4</label>
                    <select class="selectInput" name="height" id="height" disabled>
                        <option value="">Height</option>
                    </select>
                </div>
                    <div class="col-md-1">
                        <label>&nbsp;</label>
                        <a class="btn btn-primary quote-btn" href="#getQuote"><span>Get Quote</span></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="page_column clearfix">
                    <div class="col-md-12">
                        <div class="pro-text">
                            <div class="column"></div>
                        </div>
                        <div class="main">
                            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-list">
                                <div class="cbp-vm-options clearfix">
<!--                                    <a href="#" class="cbp-vm-icon cbp-vm-grid "-->
<!--                                       data-view="cbp-vm-view-grid"></a>-->
                                    <a href="#" class="cbp-vm-icon cbp-vm-list cbp-vm-selected" data-view="cbp-vm-view-list"></a>
                                </div>
                                <ul class="wow clearfix" id="products">
                                            
                                </ul>
                            </div>
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
