<?php
$pageWords = "Gear cutting machine, gear measuring instruments, gearspect, Gear Hobbing Machines, Gear Shaping Machines, Bevel Gear Grinding Machines, geometric deviation of cylindrical gears and gear cutting tools";
$pageDescription = "GearSpect-We are leading gear service provider";
$pageTitle = "GearSpect - Services";
$url = ($_SERVER["REQUEST_URI"]);
$query_str = base64_decode(parse_url(($url), PHP_URL_QUERY));
$id = (empty($query_str))?1:$query_str;
include_once('header.php'); 
?>   

<style>
#accordion_services .accordion_none {
  background-color: #005fb3;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

#accordion_services a.active_c {
  background-color: #006dcc !important;
}

</style>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title text-center">
                       <h1>Gear Lab Testing Services</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area-->     

<!--Start Project single area-->
<section class="project-single-area" id="product-single-area" style="padding: 50px 0 56px">
    <div class="container">
			
        <div class="row">
			<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                <div class="how-can-help-box">
                    <div class="inner-content">
						<div class="container">
							<div id="accordion_services" class="">
								<div class="card mb-0">
									<a class="card-header collapsed accordion_none" id="accordion_1" onclick="openTab(1);">
										Installation & Commissioning
									</a>
									<a class="card-header collapsed accordion" id="accordion_2" data-toggle="collapse" href="#collapse_2">
										<span>Gear Testing & Instrument</span>
									</a>
									<div id="collapse_2" class="card-body collapse" data-parent="#accordion">
										<ul>
											<li onclick="openTab(2);">Master Gear</li>
											<li onclick="openTab(3);">Measuring Device Calibration</li>
										</ul>
									</div>
									<a class="card-header collapsed accordion_none" id="accordion_4" onclick="openTab(4);">
										<span>In-house Gear Testing Laboratory</span>
									</a>
									<a class="card-header collapsed accordion_none" id="accordion_5" onclick="openTab(5);">
										<span>Reconditioning Gear Measuring Devices</span>
									</a>
								</div>
							</div>
						</div>
                    </div>
                </div>      
            </div>
			<div class="col-xl-9 col-lg-12">
				<div class="row collapse-info" id="collapseOpen_1">
					<div class="col-xl-7 col-lg-12 n-p-l f-l">
						<div class="project-carousel-box">
							<div class="project-single-carousel owl-carousel owl-theme">
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>    
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 f-r">
						<div class="project-info">
							<div class="title">
								<h3>Installation & Commissioning</h3>
								<p>Highly productive gear generating grinder, newly designed with 7 or 8 control axes, dynamic balancing of grinding wheel and modern cooling system</p>
							</div>							
						</div>
					</div>  
					<div class="col-xl-12 col-lg-12">
						<table class="table table-striped borderless">
							<thead>
								<th></th>
								<th>Basic</th>
								<th>High speed</th>
							</thead>
							<tbody>
								<tr>
									<td>Max. workpiece dia.</td>
									<td>340/400 mm</td>
									<td>340/400 mm</td>
								</tr>
								<tr>
									<td>Max. module</td>
									<td>6 mm</td>
									<td>8 mm</td>
								</tr>
								<tr>
									<td>Cutting speed</td>
									<td>35 m/s</td>
									<td>63 m/s</td>
								</tr><tr>
									<td>No. of CNC axes</td>
									<td>7</td>
									<td>8</td>
								</tr>
							<tbody>
						</table>	
					</div>
					
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="shop-content">
							<!--Start related product box-->
							<div class="related-product">
								<div class="title">
									<h3>Related Video</h3>
								</div>
								<div class="row">
									<!--Start single product item-->
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
										<div class="text-center">
											<div class="img-holder">
												<a class="html5lightbox video" title="Gearspect Video Gallery" href="https://youtu.be/Bb95y3xDUi0">
													<img src="http://img.youtube.com/vi/Bb95y3xDUi0/maxresdefault.jpg" title="YouTube Video" alt="YouTube Video" />
													<span><i class="fa fa-play fa-3x"></i></span>
												<a/>
											</div>
										</div>
									</div>
									<!--End single product item--> 
									<!--Start single product item-->
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
										<div class="text-center">
											<div class="img-holder">
												<a class="html5lightbox video" title="Gearspect Video Gallery" href="https://youtu.be/VujGxYDqjEc">
													<img src="http://img.youtube.com/vi/VujGxYDqjEc/maxresdefault.jpg" title="YouTube Video" alt="YouTube Video" />
													<span><i class="fa fa-play fa-3x"></i></span>
												</a>
											</div>
										</div>
									</div>
									<!--End single product item-->
									<!--Start single product item-->
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
										<div class="text-center">
											<div class="img-holder">
												<a class="html5lightbox video" title="Gearspect Video Gallery" href="https://youtu.be/VujGxYDqjEc">
													<img src="http://img.youtube.com/vi/D-3Ylgbzo9I/maxresdefault.jpg" title="YouTube Video" alt="YouTube Video" />
													<span><i class="fa fa-play fa-3x"></i></span>
												</a>	
											</div>
										</div>
									</div>
									<!--End single product item-->  
									 
								</div>
							</div>
							<!--End related product box-->
						</div> 
					</div>
				</div> 
				<div class="row collapse-info" id="collapseOpen_2">
					<div class="col-xl-7 col-lg-12 n-p-l f-l">
						<div class="project-carousel-box">
							<div class="project-single-carousel owl-carousel owl-theme">
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>    
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 f-r">
						<div class="project-info">
							<div class="title">
								<h3>Master Gear</h3>
								<p>Form Gear Grinding machine , 6 axes CNC controlled form horizontal gear grinder with high mechanical rigidity. High operating accuracy is ensured by temperature stabilization of machine's main parts.</p>
							</div>							
						</div>
					</div>  
					<div class="col-xl-12 col-lg-12">
						<table class="table table-striped borderless">
							<thead>
								<th></th>
								<th>SBP 400 CNC</th>
							</thead>
							<tbody>
								<tr>
									<td>Max. workpiece dia.</td>
									<td>400 mm</td>
								</tr>
								<tr>
									<td>Max. module</td>
									<td>12 mm</td>
								</tr>
								<tr>
									<td>Max. face width</td>
									<td>380 mm</td>
								</tr>
								<tr>
									<td>Max. spindle travel</td>
									<td>650 mm</td>
								</tr>
							<tbody>
						</table>	
					</div>	
				</div> 
				<div class="row collapse-info" id="collapseOpen_3">
					<div class="col-xl-7 col-lg-12 n-p-l f-l">
						<div class="project-carousel-box">
							<div class="project-single-carousel owl-carousel owl-theme">
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>    
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 f-r">
						<div class="project-info">
							<div class="title">
								<h3>Measuring Device Calibration</h3>
								<p>Form Gear Grinding machine, 6 axes CNC controlled profile vertical gear grinder with high mechanical rigidity. High operating accuracy is ensured by temperature stabilization of machine's main parts.</p>
							</div>							
						</div>
					</div>  
					<div class="col-xl-12 col-lg-12">
						<table class="table table-striped borderless">
							<thead>
								<th> </th>
								<th>SBP 800 CNC</th>
								<th>SBP 1250 CNC</th>
								<th>SBP 2000 CNC</th>
							</thead>
							<tbody>
								<tr>
									<td>Max. workpiece dia</td>
									<td>800 mm</td>
									<td>1250 mm</td>
									<td>2000 mm</td>
								</tr>
								<tr>
									<td>Max. module</td>
									<td>20 mm</td>
									<td>25 mm</td>
									<td>35 mm</td>
								</tr>
								<tr>
									<td>Max. tooth width</td>
									<td>400 mm</td>
									<td>700 mm</td>
									<td>1000 mm</td>
								</tr>
							<tbody>
						</table>	
					</div>	
				</div>
				<div class="row collapse-info" id="collapseOpen_4">
					<div class="col-xl-7 col-lg-12 n-p-l f-l">
						<div class="project-carousel-box">
							<div class="project-single-carousel owl-carousel owl-theme">
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>    
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 f-r">
						<div class="project-info">
							<div class="title">
								<h3>In-house Gear Testing Laboratory</h3>
								<p>Gear Hobbing machine with high rate of productivity. Modern mechanical design with torque motor ensures excellent dynamics machine characteristics for efficient utilisation of tools.</p>
							</div>							
						</div>
					</div>  
					<div class="col-xl-12 col-lg-12">
						<table class="table table-striped borderless">
							<thead>
								<th></th>
								<th>SF 90 CNC</th>
							</thead>
							<tbody>
								<tr>
									<td>Max. workpiece dia.</td>
									<td>80 mm</td>
								</tr>
								<tr>
									<td>Max. module</td>
									<td>2.5 mm</td>
								</tr>
								<tr>
									<td>Horizontal work range</td>
									<td>210 mm</td>
								</tr>
							<tbody>
						</table>	
					</div>	
				</div> 
				<div class="row collapse-info" id="collapseOpen_5">
					<div class="col-xl-7 col-lg-12 n-p-l f-l">
						<div class="project-carousel-box">
							<div class="project-single-carousel owl-carousel owl-theme">
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>
								<div class="single-item">
									<img src="images/projects/project-single/project-info-1.jpg" alt="Awesome Image">    
								</div>    
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 f-r">
						<div class="project-info" id="project-info">
							<div class="title">
								<h3>Reconditioning Gear Measuring Devices</h3>
								<p>Gear Hobbing machine, 6 axes CNC controlled gear generaitng machine with high mechanical rigidity and high operating machine accuracy.</p>
							</div>							
						</div>
					</div>  
					<div class="col-xl-12 col-lg-12">
						<table class="table table-striped borderless">
							<thead>
							<tr>
								<th></th>
								<th>SF 150 CNC</th>
								<th>SF 250 CNC</th>
								<th>SF 350 CNC</th>
								<th>SF 500 CNC</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td>Max. workpiece dia.</td>
									<td>150 mm</td>
									<td>250 mm</td>
									<td>350 mm</td>
									<td>500 mm</td>
								</tr>
								<tr>
									<td>Max. module</td>
									<td>3.5 mm</td>
									<td>4 mm</td>
									<td>6 mm</td>
									<td>12 mm</td>
								</tr>
								<tr>
									<td>Vertical work range</td>
									<td>250 mm</td>
									<td>250 mm</td>
									<td>320 mm</td>
									<td>380 mm</td>
								</tr>
							<tbody>
						</table>	
					</div>	
				</div>
				 				
            </div>   
        </div>
    </div>
</section>
<!--End Project single area-->

<?php include_once('footer.php'); ?>
<script>
var i;
var acc = document.getElementsByClassName("accordion");
for (i = 0; i < acc.length; i++) {		
	acc[i].addEventListener("click", function() {
		$('.accordion').removeClass("active");  
		this.classList.toggle("active");
	});
}

function setAccordian(_a) {
	$('#collapse_'+_a+' li:first').click().addClass("active_c");
}

function openTab(_id) {
	$('.collapse-info').hide();
	$('#collapseOpen_'+_id).show();
}

function getSearchParams(k){
	var p={};
	location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(s,k,v){p[k]=v})
	return k?p[k]:p;
}

$(document).ready(function(){
	
	var _m = '<?php echo $id; ?>';
	
	setAccordian(_m);
	$('#accordion_'+_m).click().addClass("active_c");
	
	$("li").click(function(){
		if (!$(this).hasClass("active_c")) {
			$("li.active_c").removeClass("active_c");
			$(this).addClass("active_c");
		}
	});
	
	$("a").click(function(){
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
		}
		$("li.active_c").removeClass("active_c");
		$('.collapse').removeClass("show").addClass('hide');		
		if (!$(this).hasClass("active_c")) {
			$("a.active_c").removeClass("active_c");
			$(this).addClass("active_c");
		}
	});
})
</script>