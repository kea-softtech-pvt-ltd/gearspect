<?php include_once('header.php'); ?>   
<style>
.checkout-area .form form .field-input input[type="text"], textarea {
    border: 1px solid #cccccc;
	box-shadow: 0px 0px 0px 1px #8c8c8c;
	color:#8c8c8c;
}
</style>

<!--Start Google Map Area-->
<section class="google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="google-map-box">
                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="40.584160" 
                        data-map-lng="-74.415543" 
                        data-icon-path="images/resources/map-marker.png" 
                        data-map-title="Brooklyn, New York, United Kingdom" 
                        data-map-zoom="12" 
                        data-markers='{
                            "marker-1": [40.584160, -74.415543, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],
                            "marker-2": [40.602230, -74.689910, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],
                            "marker-3": [35.616959, -87.838852, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"]

                        }'>
                    </div>   
                </div> 
            </div>
        </div>
    </div>
</section>
<!--End Google Map Area-->

<!--Start Global Offices Area-->
<section class="global-office-area">
    <div class="container">
        <div class="sec-title max-width center text-center">
            <div class="title"><span>Connect with our Global Offices</span></div>
        </div>
        <div class="row">
            <!--Start Single Global Office-->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="single-global-office headquater">
                    <div class="inner">
                        <div class="icon">
                            <span class="icon-map"></span>
                        </div>
                        <div class="text">
							<h3>Gearspect Europe <span>Headquarters</span></h3>
                            <p>Engineering organization for development and production of gear cutting machines</p>
                            <p>Stankovskeho 2062, Celakovice 25088, Czech Republic</p>
							<a class="btn-two" href="#">Find us on Map<span class="icon-thin-right-arrow"></span></a>     
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Global Office-->
            <!--Start Single Global Office-->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="single-global-office">
                    <div class="inner">
                        <div class="icon">
                            <span class="icon-map"></span>
                        </div>
                        <div class="text">
                            <h3>Gearspect USA Llc.</h3>
                            <p>production of spare parts, sales and service centre in NY, US.</p>
                            <p>14 Nosband Avenue, White Plains, New York 10605, USA</p>
                            <a class="btn-two" href="#">Find us on Map<span class="icon-thin-right-arrow"></span></a>   
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Global Office-->
			
			 <!--Start Single Global Office-->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="single-global-office">
                    <div class="inner">
                        <div class="icon">
                            <span class="icon-map"></span>
                        </div>
                        <div class="text">
                            <h3>Gearspect India Pvt. Ltd.</h3>
                            <p>Engineering organization for development of gear measuring instruments</p>
                            <p>104, S.V. Industrial Estate, Handewadi Road Hadapsar, Pune 411028, Maharashtra, India</p>
                            <a class="btn-two" href="#">Find us on Map<span class="icon-thin-right-arrow"></span></a>     
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Global Office-->
           
        </div>
        <!--div class="all-global-branch">
            <h3>View Our All Global Branches <a href="#">Contact Details.</a></h3>
        </div-->
    </div>
</section>  
<!--End Global Offices Area-->  


<!--Start Checkout area-->
<section class="checkout-area" style="padding-top:0px;margin-bottom:40px;">
    <div class="container">
        <div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec-title">
					<div class="title"><span>How Can We Help?</span></div>
				</div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="form shipping-info">
                    <form method="post" action="checkout.html">
                        <div class="row">
							<div class="col-md-5">
								<div class="col-md-12">
									<div class="field-label"><h3 style="padding: 0px 0px 15px 0px;color:#005aab;">Gear Cutting Machines</h3></div>
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us" class="check_1" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Cutting Machines</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_1">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SBO 340/400 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SBP 400 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SBP 800/1250/2000 CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_2" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Cutting Machines</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_2">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SF 90 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SF 150/250/350/500 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SFH 160/250 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SF 800/1000 CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_3" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Shaping Machines</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_3">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>OHA 16/32 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SO 800CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_4" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Bevel Gear Grinding Machines</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_4">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SBK 350/600/1000 CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_5" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Bevel Gear Hobbing Machines</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_5">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SFK 200 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>SFK 350/600/1000 CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_6" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Deburring Machines</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_6">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>GT 600</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>	
                            <div class="col-md-7">
								<div class="col-md-12">
									<div class="field-label"><h3 style="padding: 0px 0px 15px 0px;color:#005aab;">Gear Measuring Instruments</h3></div>
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_7" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Testers for geometric deviation of cylindrical gears and gear cutting tools</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_7">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 3 PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 300/500 CNC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 800 CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_8" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Testers for inspection of cylindrical gears by double flank rolling method</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_8">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 0 PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 1 PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 1 W PC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_9" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Testers for inspection of cylindrical gears by single flank rolling method</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_9">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 2 PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 2 S PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 2 K PC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="field-input">
										<div class="option-block">
											<div class="checkbox">
												<label>
													<input name="pay-us n"  class="check_10" onclick="checkAll(this);" type="checkbox" style="margin:0px;"> 
													<span class="c-title">Gear Testers for Bevel Gears</span>
												</label>
											</div>
											
										</div>
										<div class="option-block sub_check_10">
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>DO 140 K PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>ZLK 600 PC</span>
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input name="pay-us" type="checkbox">
													<span>IMO 1000 K CNC</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>    
                    </form>
                </div>    
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="form billing-info">
                    <form method="post" action="checkout.html">
                        <div class="row">
                            <div class="col-md-12">
                                <!--div class="contact-form">First Name*</div-->
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="First Name*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!--div class="contact-form">Last Name *</div-->
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="Last Name*">
                                </div>
                            </div>
							<div class="col-md-12">
                                <!--div class="contact-form">Company*</div-->
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="Company*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--div class="contact-form">City *</div-->
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="City*">
                                </div>
                            </div>
							<div class="col-md-6">
                                <!--div class="contact-form">Country *</div-->
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="Country*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!--div class="contact-form">Email *</div-->
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="Email*">
                                </div>
                            </div>
							<div class="col-md-12">
                                <!--div class="contact-form">Phone *</div-->
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="Phone*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!--div class="contact-form">Website *</div-->
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="Website*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!--div class="contact-form">Address *</div-->
                                <div class="field-input">
                                    <textarea type="text" name="address" placeholder="Address*" style="border: 1px solid #cccccc;"></textarea>
                                </div>
                            </div>
                        </div>    
                    </form>
                </div>    
            </div>
			<script>
			function checkAll(obj)
			{
				var _class = $(obj).attr('class');				
				if ($('.'+_class).is(":checked")) {
					$('.sub_'+_class+' input:checkbox').prop('checked',true);  
				} else {
					$('.sub_'+_class+' input:checkbox').prop('checked',false); 
				}					
			}
			</script>			
			<div class="col-md-12">
				<div class="placeorder-button text-right">
					<a class="btn-one" href="#">Submit <span class="icon-thin-right-arrow"></span></a>
				</div>   
			</div> 
        </div>
    </div>
</section>         
<!--End Checkout area-->

<!--Start Branches section-->
<section class="branches-section">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title branches_s2_title">
                    <div class="title"><span>Other Branches</span></div>
                </div>
                <div class="branches_s2_text">
                    <p>Our 190 branches in 36 countries, serve the # 1 quality industrial service to our customers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel owl-theme branches-carousel-contact">
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box">
                        <div class="title-box"><h3>Sanfransico</h3></div>
                        <ul>
                            <li>
                                <div class="title">
                                    <h5>Address:</h5>
                                </div>
                                <div class="text">
                                    <p>24/7, Global Factory Street, 2nd Cross, Newyork 10002.</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <h5>Phone:</h5>
                                </div>
                                <div class="text">
                                    <p>+0 (625) 07520-6644 & 55</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <h5>Email:</h5>
                                </div>
                                <div class="text">
                                    <p>supportteam@example.com</p>
                                </div>
                            </li>
                        </ul>   
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box">
                        <div class="title-box"><h3>Sanfransico</h3></div>
                        <ul>
                            <li>
                                <div class="title">
                                    <h5>Address:</h5>
                                </div>
                                <div class="text">
                                    <p>24/7, Global Factory Street, 2nd Cross, Newyork 10002.</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <h5>Phone:</h5>
                                </div>
                                <div class="text">
                                    <p>+0 (625) 07520-6644 & 55</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <h5>Email:</h5>
                                </div>
                                <div class="text">
                                    <p>supportteam@example.com</p>
                                </div>
                            </li>
                        </ul>   
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box">
                        <div class="title-box"><h3>Sanfransico</h3></div>
                        <ul>
                            <li>
                                <div class="title">
                                    <h5>Address:</h5>
                                </div>
                                <div class="text">
                                    <p>24/7, Global Factory Street, 2nd Cross, Newyork 10002.</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <h5>Phone:</h5>
                                </div>
                                <div class="text">
                                    <p>+0 (625) 07520-6644 & 55</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <h5>Email:</h5>
                                </div>
                                <div class="text">
                                    <p>supportteam@example.com</p>
                                </div>
                            </li>
                        </ul>   
                    </div>
                    <!--End Single Branches Box-->
                </div> 
            </div>
        </div>
    </div>
</section>
<!--End Branches section-->

<?php include_once('footer.php'); ?>