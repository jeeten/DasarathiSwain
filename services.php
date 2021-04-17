<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>DevCard - Bootstrap 4 vCard &amp; Portfolio Template For Developers</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 4 Template">
	<meta name="author" content="Xiaoying Riley at Thinker Board">
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
	<!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
	
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 

<body>
	
	<header class="header text-center">	    
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Dasarathi Swain</a></h1>
			
			<nav class="navbar navbar-expand-lg navbar-dark" >
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navigation" class="collapse navbar-collapse flex-column" >
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image" >			
						
						<div class="bio mb-3">Hi, my name is Dasarathi Swain and I'm a senior software engineer. Welcome to my personal website!</div><!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-left">
						<li class="nav-item">
							<a class="nav-link" href="index.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="portfolio.html"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="services.html"><i class="fas fa-briefcase fa-fw mr-2"></i>Services &amp; Pricing<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="resume.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog-home.html"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-cogs fa-fw mr-2"></i>More Pages
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="project.html">Project Page</a>
								<a class="dropdown-item" href="blog-home.html">Blog Home 1</a>
								<a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a>
								<a class="dropdown-item" href="blog-post.html">Blog Post</a>
							</div>
						</li>
					</ul>
					
					<div class="my-2">
						<a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
					</div>
					
	
					<div class="dark-mode-toggle text-center w-100">
						<hr class="mb-4">
					    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Dark Mode</h4>
					    
					    <input class="toggle" id="darkmode" type="checkbox">
					    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
					    
					</div><!--//dark-mode-toggle-->
				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>
	
	<div class="main-wrapper">
		<section class="cta-section theme-bg-light py-5">
			<div class="container text-center single-col-max-width">
				<h2 class="heading">Services &amp; Pricing</h2>
				<div class="intro">
					<p>I have 10+ years of development experience building software for the web and mobile devices. You can take a look at my <a href="portfolio.html" target="_blank">project portfolio</a> and <a href="resume.html" target="_blank">online resume</a> to find out more about my skills and experiences.</p>
					<p class="mb-0">I'm currently taking on freelance software development work. You're welcome to contact me for a custom quote for your project. I also offer development service packages with fixed pricing. </p>
				</div>
				
			</div><!--//container-->
		</section>
		
		<section class="pricing-section py-5">
			<div class="container single-col-max-width">
				<h3 class="text-center mb-4">Service Packages</h3>
				<div id="pricing-tabs" class="pricing-tabs d-block d-md-none mb-3">
	                <a href="#" class="pricing-tab active mb-2" data-target="pricing-1-data">Basic</a>	           
	                <a href="#" class="pricing-tab mb-2" data-target="pricing-2-data">Standard</a>
	                <a href="#" class="pricing-tab" data-target="pricing-3-data">Premium</a>
				</div><!--//pricing-mobile-tabs-->
			
				<table id="pricing-table" class="pricing-table table-bordered">
					<thead>
						<tr class="border-0">
							<th scope="col" class="pricing-0-data theme-bg-light"></th>
							<th scope="col" class="pricing-package-title pricing-1-data">Basic</th>
							<th scope="col" class="pricing-package-title pricing-2-data mobile-is-hidden">Standard</th>
							<th scope="col" class="pricing-package-title pricing-3-data mobile-is-hidden">Premium</th>
						</tr>
					</thead>
					<tbody>
						<tr class="pricing-price-row">
							<th scope="row" class="pricing-0-data">Package Price</th>
							<td class="pricing-1-data"><span class="price-number">$900</span></td>
							<td class="pricing-2-data mobile-is-hidden"><span class="price-number">$2500</span></td>
							<td class="pricing-3-data mobile-is-hidden"><span class="price-number">$5000+</span></td>
						</tr>
						
						<tr class="pricing-desc-row">
							<th scope="row" class="pricing-0-data">Details</th>
							<td class="pricing-1-data"><span class="pricing-package-desc">A small app lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span></td>
							<td class="pricing-2-data mobile-is-hidden"><span class="pricing-package-desc">An medium app lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span></td>
							<td class="pricing-3-data mobile-is-hidden"><span class="pricing-package-desc">A complex app lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span></td>
						</tr>
						
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Lorem<br><small class="feature-desc font-weight-normal text-muted">Optional feature description goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></th>
							<td class="pricing-1-data"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Ipsum<br><small class="feature-desc font-weight-normal text-muted">Optional feature description goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></th>
							<td class="pricing-1-data"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Commodo</th>
							<td class="pricing-1-data"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Consectetuer</th>
							<td class="pricing-1-data"><span class="text-muted">–</span></td>
							<td class="pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
							<td class="pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Aenean</th>
							<td class="pricing-1-data"><span class="text-muted">–</span></td>
							<td class="pricing-2-data mobile-is-hidden"><span class="text-muted">–</span></i></td>
							<td class="pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Duis</th>
							<td class="pricing-1-data"><span class="text-muted">–</span></td>
							<td class="pricing-2-data mobile-is-hidden"><span class="text-muted">–</span></td>
							<td class="pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Revisions</th>
							<td class="pricing-1-data"><span class="text-muted">1</span></td>
							<td class="pricing-2-data mobile-is-hidden"><span class="text-muted">2</span></td>
							<td class="pricing-3-data mobile-is-hidden">5+</td>
						</tr>
						<tr class="pricing-feature-row">
							<th class="pricing-feature-row-name pricing-0-data" scope="row">Delivery Time</th>
							<td class="pricing-1-data">7 days</td>
							<td class="pricing-2-data mobile-is-hidden">14 days</td>
							<td class="pricing-3-data mobile-is-hidden">2 - 3 month(s)</td>
						</tr>
						
					</tbody>
					<tfoot>
						<tr class="pricing-cta-row">
							<td class="pricing-0-data"></td>
							<td class="pricing-1-data"><a class="btn btn-primary" href="#">Book Now</a></td>
							<td class="pricing-2-data mobile-is-hidden"><a class="btn btn-primary" href="#">Book Now</a></td>
							<td class="pricing-3-data mobile-is-hidden"><a class="btn btn-primary" href="#">Get A Quote</a></td>
						</tr>
					</tfoot>
				</table><!--//pricing-table-->
				
			</div><!--//container-->
		</section><!--//pricing-section-->
		
		<section class="faq-section">
			<div class="container single-col-max-width">
				<h3 class="text-center mb-4">FAQs</h3>
				<div class="text-center mb-5">You can use this section to address any queries your potential clients may have.</div>
				<div id="faq-accordion" class="faq-accordion mx-auto">
			        <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq1" aria-expanded="false"><i class="fas fa-chevron-down"></i>Can you sit amet quam eget lacinia?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq1">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq2" aria-expanded="false"><i class="fas fa-chevron-down"></i>What is the ipsum dolor sit amet quam tortor?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq2">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq3" aria-expanded="false"><i class="fas fa-chevron-down"></i>What if ultricies nec vulputate eget?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq3">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq4" aria-expanded="false"><i class="fas fa-chevron-down"></i>Is it possible to tellus eget auctor condimentum?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq4">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
	            
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq5" aria-expanded="false"><i class="fas fa-chevron-down"></i>Do you elementum turpis semper imperdiet?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq5">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq6" aria-expanded="false"><i class="fas fa-chevron-down"></i>How much imperdiet lorem sem non nisl?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq6">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq7" aria-expanded="false"><i class="fas fa-chevron-down"></i>How long does it take to imperdiet lorem sem non nisl?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq7">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-3">
		                <div class="card-header border-0 p-3 theme-bg-light">
		                    <h4 class="card-title mb-0"><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq8" aria-expanded="false"><i class="fas fa-chevron-down"></i>Where can I imperdiet lorem sem non nisl?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq8">
		                    <div class="card-body pt-0 theme-bg-light">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
	            
	            </div><!--//faq-accordion-->
			</div><!--//container-->
		</section><!--//faq-section-->

		<footer class="footer text-center py-4">
			<small class="copyright">Template Copyright &copy; <a href="http://www.dasarathiswain.in/" target="_blank">Thinker Board</a></small>
		</footer>
		
	</div><!--//main-wrapper-->
	
	<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
	<div id="config-panel" class="config-panel d-none d-lg-block">
		<div class="panel-inner">
			<a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog mx-auto" data-fa-transform="down-6" ></i></a>
			<h5 class="panel-title">Choose Colour</h5>
			<ul id="color-options" class="list-inline mb-0">
				<li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
				<li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
				<li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
				<li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
				<li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
				<li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
				<li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
				<li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
				<li class="theme-9  list-inline-item"><a data-style="assets/css/theme-9.css" href="#"></a></li>
				<li class="theme-10  list-inline-item"><a data-style="assets/css/theme-10.css" href="#"></a></li>
			</ul>
			<a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
		</div><!--//panel-inner-->
	</div><!--//configure-panel-->

	<!-- Javascript -->          
	<script src="assets/plugins/jquery-3.4.1.min.js"></script>
	<script src="assets/plugins/popper.min.js"></script> 
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
	<script src="assets/js/pricing.js"></script> 
	
	<!-- Dark Mode -->
	<script src="assets/plugins/js-cookie.min.js"></script>
	<script src="assets/js/dark-mode.js"></script>

	<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="assets/js/demo/style-switcher.js"></script>     
	

</body>
</html> 

