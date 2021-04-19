
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

	<section class="about-me-section p-3 p-lg-5 theme-bg-light">
		<div class="container">
			<?php include_once 'include/sections/about.php' ?>
		</div>
	</section><!--//about-me-section-->

	<section class="overview-section p-3 p-lg-5">
		<div class="container">
			<?php include_once 'include/sections/overview.php' ?>
		</div><!--//container-->
	</section>

	<div class="container"><hr></div>

	<section class="testimonials-section p-3 p-lg-5">
		<div class="container">
			<?php include_once 'include/sections/testimonials.php' ?>	
		</div><!--//container-->
	</section><!--//testimonials-section-->

	<div class="container"><hr></div>

	<section class="featured-section p-3 p-lg-5">
		<div class="container">
			<?php include_once 'include/sections/featured.php' ?>

		</div><!--//container-->
	</section><!--//featured-section-->

	<div class="container"><hr></div>

	<section class="latest-blog-section p-3 p-lg-5">
		<div class="container">
			<?php include_once 'include/sections/latest_blog.php' ?>
		</div><!--//container-->

	</section><!--//latest-blog-section-->

	<footer class="footer text-center py-4">
		<?php include_once 'include/footer.php' ?>
	</footer>

</div><!--//main-wrapper-->

<?php include_once 'include/html_footer.php' ?>

</body>
</html>