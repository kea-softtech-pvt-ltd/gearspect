<?php
    $pageWords = "Gear cutting machine, gear measuring instruments, gearspect, Gear Hobbing Machines, Gear Shaping Machines, Bevel Gear Grinding Machines, geometric deviation of cylindrical gears and gear cutting tools";
    $pageDescription = "GearSpect-We are leading gear service provider";
    $pageTitle = "GearSpect - Home";
?>
<?php include_once('header.php'); ?>
    
<!--Main Slider-->
<section class="main-slider style2">
    <div class="rev_slider_wrapper fullwidthbanner-container "  id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <li>
                    <img alt="" class="rev-slidebg" src="images/slides/v1-1.jpg"> 
                </li>
            </ul>
        </div>
    </div>
	<section class="categories-area d-n-m">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="categories-box">
						<div class="single-categories-box">
							<h2><?php echo $lang['index']['slider']['eroupe']; ?></h2>
							<p><?php echo $lang['index']['slider']['text']; ?></p>
							<a class="btn-one" href="./product"><?php echo $lang['index']['slider']['read_more']; ?><span class="icon-thin-right-arrow"></span></a>    
						</div>
						<div class="single-categories-box style2">
							<h2><?php echo $lang['index']['slider']['india']; ?></h2>
							<p><?php echo $lang['index']['slider']['text']; ?></p>
							<a class="btn-one" href="./productind"><?php echo $lang['index']['slider']['read_more']; ?><span class="icon-thin-right-arrow"></span></a>    
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section>
</section>
<!--End Main Slider-->

<!--Start Call To Action area-->
<section class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="call-to-action">
                    <div class="call_to_action_title">
                        <div class="title"><?php echo $lang['index']['container']['title']; ?></div>
                    </div>
                    <div class="video-holder-box2 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-holder">
                            <div class="icon">
                                <div class="inner">
                                    <a class="html5lightbox" title="Gearspect Video Gallery" href="https://youtu.be/Le4aJdkB-jM">
                                        <span class="flaticon-music-player-play"></span>
                                    </a>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!--End Call To Action area-->

<!--Start Choose area style2-->
<section class="choose-area style2">
    <div class="container">
        <div class="row">
            <?php foreach($lang['index']['container']['areas'] as $val) { ?>
			<!--Start Single Choose Item-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-choose-item style2 text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="600ms">
                    <div class="title"><h3><?php echo $val['title']; ?></h3></div>
                    <div class="iocn-holder">
                        <img src="<?php echo $val['img']; ?>" alt="Icon">
                    </div>
                    <div class="text">
                        <p><?php echo $val['text']; ?></p>
                    </div>
                </div>   
            </div>
            <!--End Single Choose Item-->
			<?php } ?>
        </div>
    </div>
</section>
<!--End Choose area style2-->

<!--Start Testimonial Area-->
<!--section class="testimonial-area" id="testimonial-area" style="background-image: url(images/parallax-background/choose-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-content clearfix  text-center">
                    <div class="sec-title center text-center">
						<div class="title"><span class="white"><?php echo $lang['index']['words']['title']; ?></span></div>
					</div>
                    <div class="testimonial-carousel owl-carousel owl-theme">
						<?php foreach($lang['index']['words']['slider'] as $val) { ?>
                        <div class="single-testimonial-item">
                            <div class="company-logo">
                                <img src="<?php echo $val['img']; ?>" alt="Company Logo">
                            </div>
                            <div class="text col-xl-8">
                                <p><?php echo $val['text']; ?></p>
                            </div>
                            <div class="client-info">
                                <h3 class="white"><?php echo $val['name']; ?></h3>
                                <span class="white"><?php echo $val['position']; ?></span>
                            </div>
                            <div class="button">                   
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>    
</section -->
<!--End Testimonial Area-->

<!--Start Branches section-->
<section class="branches-section custom_home">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title branches_s2_title">
                    <div class="title"><span><?php echo $lang['index']['clients']['title']; ?></span></div>
                </div>
                <div class="branches_s2_text">
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="branches-carousel owl-carousel owl-theme">
					<?php foreach($lang['index']['clients']['img'] as $val) { ?>
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box">
                        <a href="#"><img src="<?php echo $val;?>" alt="Brand Image"></a>
                    </div>
                    <!--End Single Branches Box-->
					<?php } ?>
                </div> 
            </div>
        </div>
    </div>
</section>
<!--End Branches section-->

<!--Start latest blog area-->
<section class="latest-blog-area">
    <div class="container inner-content">
        <div class="sec-title center text-center">
            <div class="title"><span><?php echo $lang['index']['events']['title']; ?></span></div>
        </div>
        <div class="row">
			<?php foreach($lang['index']['events']['slider'] as $val) { ?>
            <!--Start single blog post-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="<?php echo $val['img']; ?>" alt="Awesome Image">
                        <div class="post-date">
                            <h3><?php echo $val['date']; ?></h3>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3 class="blog-title"><a href="blog-single.html"><?php echo $val['title']; ?></a></h3> 
                        <div class="text">
                            <p><?php echo $val['text']; ?></p>
                        </div>  
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--End latest blog area-->

<?php include_once('footer.php'); ?>