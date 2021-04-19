
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once "include/html_head.php" ?>
</head>	
<body>
	<header class="header text-center">
		<?php include_once "include/header.php" ?>
	</header>
	    
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center single-col-max-width">
			    <h2 class="heading">Contact</h2>
			    <div class="intro">
			    <p>Interested in hiring me for your project or just want to say hi? You can fill in the contact form below or send me an email to <a href="mailto:#">dasarathiswain@hotmail.com</a></p>
			    <p>Want to get connected? Follow me on the social channels below.</p>
			    <ul class="list-inline mb-0">
		            <li class="list-inline-item mb-3"><a class="twitter" href="#"><i class="fab fa-twitter fa-fw fa-lg"></i></a></li>
		            
	                <li class="list-inline-item mb-3"><a class="linkedin" href="#"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="github" href="#"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="stack-overflow" href="#"><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="medium" href="#"><i class="fab fa-medium-m fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="codepen" href="#"><i class="fab fa-codepen fa-fw fa-lg"></i></a></li>
	                
	                
	                <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw fa-lg"></i></a></li>-->
	                
	                
	            </ul><!--//social-list-->
			    
			</div><!--//container-->
	    </section>
	    <section class="contact-section px-3 py-5 p-md-5">
		    <div class="container">
			    <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="">
			        <h3 class="text-center mb-3">Get In Touch</h3>
			        <div class="form-row">                                                           
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cname">Name</label>
		                    <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" aria-required="true">
		                </div>                    
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cemail">Email</label>
		                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" aria-required="true">
		                </div>
		                <div class="form-group col-12">
			                <select id="services" class="custom-select" name="services">
								<option selected>Select a service package you're interested in...</option>
								<option value="basic">Basic</option>
								<option value="standard">Standard</option>
								<option value="premium">Premium</option>
								<option value="not sure">Not sure</option>
							</select>
							<small class="form-text text-muted pt-1"><i class="fas fa-info-circle mr-2 text-primary"></i>Want to know what's included in each package? Check the <a href="services.php" target="_blank">Services &amp; Pricing</a> page.</small>
						</div>
		                <div class="form-group col-12">
		                    <label class="sr-only" for="cmessage">Your message</label>
		                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true"></textarea>
		                </div>
		                 <div class="form-group col-12">
		                    <button type="submit" class="btn btn-block btn-primary py-2">Send Now</button>
		                </div>                           
		            </div><!--//form-row-->
		        </form>
		    </div><!--//container-->
	    </section>
	    
	<footer class="footer text-center py-4">
		<?php include_once 'include/footer.php' ?>
	</footer>

</div><!--//main-wrapper-->

	<?php include_once 'include/html_footer.php' ?>

	<!--Page Specific JS -->
	<script type="text/javascript" src="assets/plugins/jquery-validation/jquery.validate.min.js"></script> 

	<!-- Custom JS -->
	<script type="text/javascript" src="assets/js/form.js"></script>

</body>
</html>

