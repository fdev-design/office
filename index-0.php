<?php
include("init.php");
$cp = 'index.php';
$at = 'index';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("inc.htmlhead.php"); ?>	
	<!-- REVOLUTION SLIDER CSS -->	
	
	<!-- LOADING FONTS AND ICONS -->
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400%2C600%7CRoboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

			
	<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">			
	<link rel="stylesheet" type="text/css" href="css/rs6.css">
	<script type="text/javascript" src="js/rbtools.min.js"></script>
	<script type="text/javascript" src="js/rs6.min.js?v=1"></script>

	<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
</head>
<body id="bg">
<div class="page-wraper">

<!-- header -->
<?php include('inc.header.php'); ?>
<!-- header END -->

    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- Slider -->
		<?php include('inc.slider.php'); ?>      
		<!-- Slider END -->
        <!-- contact area -->
        <div class="content-block">

		  	<!-- About Us -->
			<div class="section-full content-inner bg-white">
				<div class="container">
					  
					<div class="section-head text-center">
						<h1 class="title">Seamless & Welded Steel <span class="text-primary">Pipe Manufacturer</span> in India</h1>
						<p>Prime Tube Impex is a prominent manufacturer of Stainless Steel Seamless Pipe, Stainless Steel Welded Pipe, Duplex & Super Duplex Pipe and Tubing, IBR Pipes and Tubes, API 5L Line Pipes, ASTM A312 Pipes, ASTM A335 Pipe and much more in wide range of grades and materials.</p>
					</div>

					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
							<div class="our-story">
								<span>About Prime Tube Impex</span>
								<?php /*
								<h2 class="title">Commited to High <br/> Quality <span class="text-primary">  Service </span></h2>
								<h4 class="title">Amazing things happen to your business when we connect those dots of utility and value.</h4>
								*/ ?>
								
								<p>Prime Tube Impex is one of the most prominent manufacturers, exporter, supplier of ferrous and non-ferrous products.  Prime Tube Impex is an ISO 9001:2015 certified organization, located in Mumbai, India. Specialized in manufacturing IBR Pipes, IBR Tubes, IBR Fittings, Seamless Pipes & Tubes, Welded Pipes & Tubes, Chequered Plates, Coiled Tubes, U- Tubes, Capillary Tubes, Buttweld Fittings, Flanges, and much more, Prime Tube Impex serves customer world-wide. </p>

								<p>Our products are used in a wide range of applications and industries such as oil & gas, LNG, Thermal & Nuclear Power Plants, Chemical Industries, Fertilizers Plants, (petro) chemical, shipbuilding, desalination, water treatment, energy industries, EPC and Pipes for General Engineering Purpose.</p>

								<p >Prime Tube Impex is the leader in tubular technologies. We can meet the most stringent market demands in terms of price, quality, and delivery times.</p>
    							<p >Prime Tube Impex has been distributoring the needs of the Oil Country Tubalar Goods (OCTG) products for Oil and Gas wells for Seamless Pipes &amp; welded Tubes. </p>

								<a href="about-prime-tube-impex.php" class="site-button btnhover14">Read More</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<img src="images/common/prime-tube-impex.png" class="radius-sm" alt="">
						</div>
					</div>
				</div>
			</div>
			<!-- About Us End -->
			
			<!-- Features -->
			<div class="section-full content-inner bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
							<div class="dlab-box service-box-2">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate"> 
									<a href="#"><img src="images/products/stainless-steel-pipes.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<h4 class="title"><a href="#">Stainless Steel Pipes / Tubes</a></h4>
									<p>Stainless Steel Seamless Pipes, S.S. Welded Pipes, SS Tubes..</p>
									<a href="#" class="site-button btnhover14">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="dlab-box service-box-2">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate"> 
									<a href="#"><img src="images/products/carbon-steel-pipes.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<h4 class="title"><a href="#">Carbon Steel Pipes / Tubes</a></h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button btnhover14">View Details</a> 
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
							<div class="dlab-box service-box-2">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate"> 
									<a href="#"><img src="images/products/alloy-steel-pipes-tubes.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<h4 class="title"><a href="#">Alloy Steel Pipes/Tubes</a></h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button btnhover14">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
							<div class="dlab-box service-box-2">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate"> 
									<a href="#"><img src="images/products/nickel-alloy-pipes-tubes.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<h4 class="title"><a href="#">Nickel Alloy Pipes/Tubes</a></h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button btnhover14">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="dlab-box service-box-2">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate"> 
									<a href="#"><img src="images/products/duplex-steel-pipes-tubes.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<h4 class="title"><a href="#">Duplex & Super Duplex Pipes</a></h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button btnhover14">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
							<div class="dlab-box service-box-2">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate"> 
									<a href="#"><img src="images/products/capillary-tubes.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<h4 class="title"><a href="#">Capillary Tubes</a></h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button btnhover14">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Features End -->

			<!-- Service Info Head -->
			<div class="section-full content-inner-2 bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url(images/background/map-bg.png);">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center service-info">
							<h2 class="title text-white">Prime Tube Impex - An ISO 9001:2015 Certified Company.</h2>
							<p>We are an ISO certified company. Although we are located in Mumbai, India, we serve customers across the world. Our huge experience in the metal industry and excellent infrastructure helps us to provide quality service in a timely manner. Contact us today with your requirement.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Service Info Head End -->

			<div class="section-full bg-gray content-inner about-carousel-ser">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="title">Industries We Serve</h2>
						<p>Our Pipes, Tubing and Piping Products are used in the following industries.</p>
					</div>
					<div class="about-ser-carousel owl-carousel owl-theme owl-btn-center-lr owl-dots-primary-full owl-btn-3 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/automation-industry.jpg" class="lazy" data-src="images/industries/automation-industry.jpg" alt="Automation Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Automation Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/chemical-industry.jpg" class="lazy" data-src="images/industries/chemical-industry.jpg" alt="Chemical Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Chemical Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/distillery-industry.jpg" class="lazy" data-src="images/industries/distillery-industry.jpg" alt="Distillery Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Distillery Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/fertilizer-industry.jpg" class="lazy" data-src="images/industries/fertilizer-industry.jpg" alt="Fertilizer Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Fertilizer Industry</a></h2>
									
								</div>
							</div>
						</div>	
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/food-procesing-industry.jpg" class="lazy" data-src="images/industries/food-procesing-industry.jpg" alt="Food Procesing Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Food Procesing Industry</a></h2>
									
								</div>
							</div>
						</div>
												
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/gas-processing-industry.jpg" class="lazy" data-src="images/industries/gas-processing-industry.jpg" alt="Gas Processing Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Gas Processing Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/oil-gas-industry.jpg" class="lazy" data-src="images/industries/oil-gas-industry.jpg" alt="Oil Gas Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Oil Gas Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/paper-industry.jpg" class="lazy" data-src="images/industries/paper-industry.jpg" alt="Paper Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Paper Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/petrochemical-industry.jpg" class="lazy" data-src="images/industries/petrochemical-industry.jpg" alt="Petrochemical Industry"></a> 
								</div>
								<div class="dlab-info text-center">
									<h2 class="dlab-title"><a href="#">Petrochemical Industry</a></h2>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/pharmaceuticals-industry.jpg" class="lazy" data-src="images/industries/pharmaceuticals-industry.jpg" alt="Pharmaceuticals Industry"></a> 
								</div>
							<div class="dlab-info text-center">
								<h2 class="dlab-title"><a href="#">Pharmaceuticals Industry</a></h2>
								
							</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/power-generation-industry.jpg" class="lazy" data-src="images/industries/power-generation-industry.jpg" alt="Power Generation Industry"></a> 
								</div>
								<div class="dlab-info text-center">
								<h2 class="dlab-title"><a href="#">Power Generation Ind.</a></h2>
								
							</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/ship-building-industry.jpg" class="lazy" data-src="images/industries/ship-building-industry.jpg" alt="ShipBuilding Industry"></a> 
								</div>
								<div class="dlab-info text-center">
								<h2 class="dlab-title"><a href="#">Ship Building Industry</a></h2>
								
							</div>
							</div>
						</div>		
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/oil-gas-industry.jpg" class="lazy" data-src="images/industries/oil-gas-industry.jpg" alt="Oil Gas Industry"></a> 
								</div>
								<div class="dlab-info text-center">
								<h2 class="dlab-title"><a href="#">Oil Gas Industry</a></h2>
								
							</div>
							</div>
						</div>
						
						<div class="item">
							<div class="dlab-box service-media-bx">
								<div class="dlab-media"> 
									<a href="#"><img src="images/industries/sugar-industry.jpg" class="lazy" data-src="images/industries/sugar-industry.jpg" alt="Oil Gas Industry"></a> 
								</div>
								<div class="dlab-info text-center">
								<h2 class="dlab-title"><a href="#">Sugar Industry</a></h2>
								
							</div>
							</div>
						</div>
					</div>
				</div>	
			</div>


			

		<?php /*

		  	<!-- Our Project  -->
			<div class="section-full content-inner-2 bg-gray wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="title">Our Project</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
								<div class="item">
									<div class="dlab-box project-bx">
										<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom"> 
											<a href="portfolio-details.html"><img src="images/products/pic10.jpg" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h5 class="dlab-title"><a href="portfolio-details.html">Manufacturing</a></h5>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box project-bx">
										<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom"> 
											<a href="portfolio-details.html"><img src="images/products/pic9.jpg" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h5 class="dlab-title"><a href="portfolio-details.html">Iron Making</a></h5>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box project-bx">
										<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom"> 
											<a href="portfolio-details.html"><img src="images/products/pic8.jpg" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h5 class="dlab-title"><a href="portfolio-details.html">Steel Pipes</a></h5>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box project-bx">
										<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom"> 
											<a href="portfolio-details.html"><img src="images/products/pic7.jpg" alt=""></a> 
										</div>
										<div class="dlab-info">
											<h5 class="dlab-title"><a href="portfolio-details.html">Structural Steel</a></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Project END -->

			<!-- Our Team -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="title">Our team</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
					</div>
					<div class="row dlab-team10-area">
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">
									<a href="team-1.html">
										<img alt="" src="images/our-team/pic1.jpg">
									</a>
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title"><a href="team-1.html">Nashid Martines</a></h4>
									<span class="dlab-position">Director</span>
									<ul class="dlab-social-icon">
										<li><a class="site-button fa fa-facebook facebook" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-twitter twitter" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-linkedin linkedin" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-pinterest pinterest" href="javascript:void(0);"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">
									<a href="team-1.html">
										<img alt="" src="images/our-team/pic2.jpg">
									</a>
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title"><a href="team-1.html">Konne Backfield</a></h4>
									<span class="dlab-position">Designer</span>
									<ul class="dlab-social-icon">
										<li><a class="site-button fa fa-facebook facebook" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-twitter twitter" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-linkedin linkedin" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-pinterest pinterest" href="javascript:void(0);"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">
									<a href="team-1.html">
										<img alt="" src="images/our-team/pic3.jpg">
									</a>
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title"><a href="team-1.html">Hackson Willingham</a></h4>
									<span class="dlab-position">Developer</span>
									<ul class="dlab-social-icon">
										<li><a class="site-button fa fa-facebook facebook" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-twitter twitter" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-linkedin linkedin" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-pinterest pinterest" href="javascript:void(0);"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">
									<a href="team-1.html">
										<img alt="" src="images/our-team/pic4.jpg">
									</a>
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title"><a href="team-1.html">Konne Backfield</a></h4>
									<span class="dlab-position">Manager</span>
									<ul class="dlab-social-icon">
										<li><a class="site-button fa fa-facebook facebook" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-twitter twitter" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-linkedin linkedin" href="javascript:void(0);"></a></li>
										<li><a class="site-button fa fa-pinterest pinterest" href="javascript:void(0);"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Team -->

			*/ ?>

			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="title">Our Reputed Clients</h2>
						<p>Prime Tube Impex had the privilige to work with some of the top reputed clients in various sectors. A few of our reputed clients: </p>
					</div>
					<div class="row dlab-team10-area">
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">									
										<img alt="National Aerospace Laboratories" src="images/clients/nal.png">								
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title">National Aerospace Laboratories</h4>								
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">									
									<img alt="Aeronautical Development Agency" src="images/clients/ada.png">									
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title">Aeronautical Development Agency</h4>									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">									
									<img alt="Thermax Limited" src="images/clients/thermax.png">									
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title">Thermax Limited</h4>									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
							<div class="dlab-box m-b30 dlab-team10">
								<div class="dlab-media">									
									<img alt="Vikram Sarabhai Space Centre (ISRO)" src="images/clients/isro.png">								
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title">Vikram Sarabhai Space Centre (ISRO)</h4>					
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>







			<!-- Testimonials -->
			<div class="section-full content-inner-2 bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="title">Words from Our Happy Customers</h2>
						<p>Prime Tube Impex is serving customers across the world. Our products are used in a wide range of industries and application. Here are a few words from our long list of happy customers.</p>
					</div>
					<div class="testimonial-six owl-loaded owl-theme owl-carousel owl-none dots-style-2">
						<div class="item">
							<div class="testimonial-8">
								<div class="testimonial-text">
									<p>Prime Tube Impex is a great company to work with. Very professional to deal with. Has been importing Stainless Steel Seamless Pipes and tubes and always got prompt service.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius shadow"></div>
									<h5 class="testimonial-name m-t0 m-b5">Kerri Walker</h5> <span class="testimonial-position">Mexico</span> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-8">
								<div class="testimonial-text">
									<p>A very reliable source for pipes and tubes. Impressed with their prompt service. Looking forward to a long term association with Prime Tube Impex. Highly recommended.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius shadow"></div>
									<h5 class="testimonial-name m-t0 m-b5">David Matin</h5> <span class="testimonial-position">Senior Engineer</span> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-8">
								<div class="testimonial-text">
									<p>Prime Tube Impex and their founder Mr. Dilip Jain are a delight to work with. A good source in India for IBR Pipes and Tubes.  Always got our products delivered on time.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius shadow"></div>
									<h5 class="testimonial-name m-t0 m-b5">Suresh Palamel</h5> <span class="testimonial-position">Director</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Testimonials END -->
			
			<!-- Latests News -->
			<div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="title">Latest Blogs & Updates</h2>
						<p>Updates, Guides, & Much more in the Stainless Steel Industry.</p>
					</div>
					<div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
						<div class="item">
							<div class="blog-post blog-grid blog-rounded blog-effect1">
								<div class="dlab-post-media dlab-img-effect rotate"> <a href="javascript:void(0);"><img src="images/blog/api-5l-line-pipes.jpg" alt=""></a> </div>
								<div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>                                            
                                            <li class="post-author"> By <a href="javascript:void(0);">Prime Tube Impex</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">API 5l Line Pipes - Complete Guide</a></h4>
                                    </div>
									<div class="dlab-post-text">
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button btnhover14">READ MORE</a>
									</div>
                                </div>
							</div>
						</div>
						<div class="item">
							<div class="blog-post blog-grid blog-rounded blog-effect1">
								<div class="dlab-post-media dlab-img-effect rotate"> <a href="javascript:void(0);"><img src="images/blog/ibr-pipe-tubes.jpg" alt=""></a> </div>
								<div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta ">
                                        <ul>
											<li class="post-author"> By <a href="javascript:void(0);">Prime Tube Impex</a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">IBR Pipes and Tubes Specifications</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
									</div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button btnhover14">READ MORE</a>
									</div>
                                </div>
							</div>
						</div>
						<div class="item">
							<div class="blog-post blog-grid blog-rounded blog-effect1">
								<div class="dlab-post-media dlab-img-effect rotate"> <a href="javascript:void(0);"><img src="images/blog/astm-a312-specifications.jpg" alt=""></a> </div>
								<div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
											<li class="post-author"> By <a href="javascript:void(0);">Prime Tube Impex</a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">ASTM A312 Pipes Tubing Specifications</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button btnhover14">READ MORE</a>
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Latest News End -->
			
			<!-- Call To Action -->
			<div class="section-full call-action bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 text-white">
							<h2 class="title">Send us your enquiry today! </h2>
							<p class="m-b0">We respond to all enquiries withing 8 hours on any business day.</p>
						</div>
						<div class="col-lg-3 d-flex">
							<a href="contact.php" class="site-button white align-self-center outline ml-auto outline-2 btnhover14">Get In Touch</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Call To Action End -->

		</div>
		<!-- contact area END -->
    </div>
	<!-- Content END -->
	
	<!-- Footer -->
    <?php include("inc.footer.php"); ?>
    <!-- Footer END-->

    
</div>
<?php include("inc.footerscripts.php"); ?>

</body>
</html>