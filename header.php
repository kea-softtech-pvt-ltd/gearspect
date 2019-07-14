<?php 
session_start();
if(!isset($_SESSION['lang'])){ $_SESSION['lang'] = "en"; }
include_once('lang/'.$_SESSION['lang'].'.php'); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle;?></title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="<?php echo $pageWords; ?>">
    <meta name="description" content="<?php echo $pageDescription; ?>">

	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
	
	<style>
	.top-left-style2 .top-contact-info ul li {
		padding-left: 0px;
		margin-left: 0px;
	}
    </style>
	
</head>

<body>
<div class="boxed_wrapper">

<!--div class="preloader"></div--> 

<!-- Start Top Bar style2 -->  
<section class="top-bar-style2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-style2 clearfix">
                    <div class="top-left-style2 float-left clearfix" id="lang-mail" style="padding-left:0px;">
                        <!--div class="language-switcher">
                            <div id="polyglotLanguageSwitcher">
                                <form action="">
                                    <select id="polyglot-language-options">
                                        <option id="en" value="en" <?php if($_SESSION['lang']=='en') echo "selected"; ?>>English</option>
                                        <option id="fr" value="fr" <?php if($_SESSION['lang']=='fr') echo "selected"; ?>>French</option>
                                        <option id="de" value="de" <?php if($_SESSION['lang']=='de') echo "selected"; ?>>German</option>
                                        <option id="it" value="it" <?php if($_SESSION['lang']=='it') echo "selected"; ?>>Italian</option>
                                        <option id="es" value="es" <?php if($_SESSION['lang']=='es') echo "selected"; ?>>Spanish</option>
                                    </select>
                                </form>
                            </div>
                        </div-->
                        <div class="top-contact-info">
                            <ul>
                                <!--li><span class="icon-phone"></span> <?php echo $lang['header']['talk_to_us']; ?>: <b>+91 9005-765-321</b></li-->
                                <li><span class="icon-email"></span> sales.info@gearspect.com</li>
                            </ul>    
                        </div> 
                    </div>
                    <div class="top-right-style2 float-right">
                        <ul class="sociallinks-style-one fix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <!--li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li-->
                            <li><a href="https://in.linkedin.com/company/gearspect-group" target="bank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
<!-- End Top Bar style2 -->  
 
<!--Start header style2 area-->
<header class="header-style2-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="header-style2 clearfix">
                    <div class="header-style2-logo float-left">
                        <a href="./">
                            <img src="images/resources/logo.png" alt="Gearspect Logo" style="max-width:97%;">
                        </a>
                    </div>   
                    <div class="headers2-header-right float-left">
                        <nav class="main-menu style2 clearfix">
                            <div class="navbar-header clearfix">   	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="about"><?php echo $lang['menu']['about_us']; ?></a></li>
                                    <li class="dropdown"><a href="product"><?php echo $lang['menu']['eroupe']; ?></a>
                                        <ul>
                                            <li><a href="product?<?php echo base64_encode(1);?>">Gear Grinding Machines</a></li>
                                            <li><a href="product?<?php echo base64_encode(2);?>">Gear Hobbing Machines</a></li>
											<li><a href="product?<?php echo base64_encode(3);?>">Gear Shaping Machines</a></li>
											<li><a href="product?<?php echo base64_encode(4);?>">Bevel Gear Grinding Machines</a></li>
											<li><a href="product?<?php echo base64_encode(5);?>">Bevel Gear Hobbing Machines</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="productind"><?php echo $lang['menu']['india']; ?></a>
                                        <ul>
                                            <!--li><a href="productind?<?php echo base64_encode(1);?>">Gear Testers for geometric deviation of cylindrical gears and gear cutting tools</a></li-->
                                            <li><a href="productind?<?php echo base64_encode(2);?>">Double flank for cylindrical Gear</a></li>
											<li><a href="productind?<?php echo base64_encode(3);?>">Single flank for cylindrical Gear</a></li>
											<li><a href="productind?<?php echo base64_encode(3);?>">Double flank for worm Gear</a></li>
											<li><a href="productind?<?php echo base64_encode(3);?>">Single flank for worm Gear</a></li>
											<li><a href="productind?<?php echo base64_encode(4);?>">Gear Testers for Bevel Gears</a></li>											
											<li><a href="productind?<?php echo base64_encode(5);?>">Gear Deburring Machines</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="services"><?php echo $lang['menu']['services']; ?></a>
                                        <ul>
                                            <li><a href="#">Installation & Commissioning</a></li>
                                            <li><a href="#">Gear Testing & Instrument</a></li>
                                            <li><a href="#">Inhouse Gear Testing Laboratory</a></li>
                                            <li><a href="#">Reconditioning Gear Measuring Devices</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact"><?php echo $lang['menu']['contact']; ?></a></li>
                                </ul>
                            </div>
                        </nav>  
                    </div>
                    <div class="headers2 quote-button-box float-right">
                        <a class="btn-one" href="contact">Enquiry<span class="icon-thin-right-arrow"></span></a>
                    </div>  
                </div>
            </div>
        </div>
    </div>        
</header>  
<!--End header style2 area-->
