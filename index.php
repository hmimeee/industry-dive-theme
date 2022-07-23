<?php get_header(); ?>

<!-- Hero Section Start -->
<?php include('parts/hero-section.php') ?>
<!-- Hero Section End -->

<div class="content">

	<!-- Showcase One Start -->
	<?php include('parts/latest-articles.php') ?>
	<!-- Showcase One End -->

	<!-- Showcase Two Start -->
	<?php include('parts/most-viewed.php') ?>
	<!-- Showcase Two End -->

	<!-- Showcase Three Start -->
	<?php include('parts/categorized-posts.php') ?>
	<!-- Showcase Four End -->

</div>

<div class="load-posts">
	<button data-page="<?= $page ?>" id="load-more"><i class="fa fa-th"></i> Load More</button>
</div>

</div>

<div class="social-share">
	<a href="javascript:;" class="social-facebook"><i class="fa fa-facebook"></i></a>
	<a href="javascript:;" class="social-twitter"><i class="fa fa-twitter"></i></a>
	<a href="javascript:;" class="social-google-plus"><i class="fa fa-google-plus"></i></a>
	<a href="javascript:;" class="social-linkedin"><i class="fa fa-linkedin"></i></a>
	<a href="javascript:;" class="social-mail"><i class="fa fa-envelope"></i></a>
</div>

<?php get_footer(); ?>