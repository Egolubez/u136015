<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animations.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fonts.css", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/modernizr-2.6.2.min.js", true);?>

    <!--[if lt IE 9]>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/html5shiv.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/respond.min.js", true);?>
    <![endif]-->

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- login modal -->

<div class="modal fade order-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="loginModalLabel">Web&Sign<span class="highlight"> Service</span> Order</h4>
            </div>
            <form role="form" action="/">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="modal_name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="modal_phone" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="modal_address" placeholder="Your Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="modal_date" placeholder="Date of Cleaning">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="theme_button"><i class="rt-icon-ok"></i> Order Now!</button>
                    <a href="#" class="theme_button" data-dismiss="modal"><i class="rt-icon-times"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="box_wrapper">


    <section id="topline" class="light_section table_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="./" class="navbar-brand"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"));?>Web&<span>Sign</span></a>

                </div>
                <div class="col-sm-9 text-right">
                    <span>
                        <i class="fa fa-envelope-o"></i> <a href="mailto:<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/e-mail.php"));?>"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/e-mail.php"));?></a>
                    </span>
                    <span>
                        <i class="fa fa-phone"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"));?>

                    </span>
                    <span>
                        <a href="#" class="theme_button btn-sm" data-toggle="modal" data-target=".order-modal"><i class="rt-icon-pen-alt-stroke"></i> Order Now!</a>
                    </span>
                </div>

            </div>
        </div>
    </section>


    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <span id="toggle_mobile_menu"></span>
                        <span id="toggle_search"></span>
                        <div class="widget widget_search">
                            <form role="search" method="get" id="searchform" class="searchform form-inline" action="/">
                                <div class="form-group">
                                    <label class="screen-reader-text" for="search">Search for:</label>
                                    <input type="text" value="" name="search" id="search" class="form-control" placeholder="Search...">
                                </div>
                                <button type="submit" id="searchsubmit" class="theme_button">Search</button>
                            </form>
                        </div>
                        <nav id="mainmenu_wrapper">
                            <ul id="mainmenu" class="nav sf-menu">
                                <li class="active">
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="#info">About</a>
                                </li>
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#prices">Prices</a>
                                </li>
                                <li>
                                    <a href="#history">History</a>
                                </li>
                                <li>
                                    <a href="service.html">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="service.html">Service</a>
                                        </li>
                                        <li>
                                            <a href="icons.html">Features</a>
                                            <ul>
                                                <li>
                                                    <a href="icons.html">Icons</a>
                                                </li>
                                                <li>
                                                    <a href="animation.html">Animation</a>
                                                </li>
                                                <li>
                                                    <a href="shortcodes.html">Shortcodes&amp;Widgets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="comingsoon.html">Soon / Construction</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="blog.html">Blog</a>
                                    <ul>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                            <ul>
                                                <li>
                                                    <a href="blog-right.html">Blog With Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-full.html">Blog Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog Post</a>
                                            <ul>
                                                <li>
                                                    <a href="blog-single-right.html">Post With Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-single-full.html">Post Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </header>


    <section id="mainslider" class="light_section">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/example/flex_slide01.jpg" alt="">
                    <div class="slide_description_wrapper right">
                        <div class="slide_description">
                            <p data-animation="fadeInLeft">Cleaning And Housekeeping</p>

                            <h3 data-animation="fadeInLeft">We Working</h3>

                            <h3 data-animation="fadeInLeft">While <span class="highlight">You</span> Rest</h3>

                            <p><a class="theme_button" href="#services">All Services</a></p>

                        </div>
                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/example/flex_slide02.jpg" alt="">
                    <div class="slide_description_wrapper">
                        <div class="slide_description">
                            <p data-animation="fadeInLeft">Cleaning And Housekeeping</p>

                            <h3 data-animation="fadeInLeft">Let Us Clean</h3>

                            <h3 data-animation="fadeInLeft"><span class="highlight">Your Premises</span></h3>

                            <p><a class="theme_button" href="#services">All Services</a></p>

                        </div>
                    </div>
                </li>


            </ul>
        </div>

    </section>



    <section id="info" class="grey_section">
        <div class="container">