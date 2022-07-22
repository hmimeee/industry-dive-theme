<?php get_header(); ?>

<!-- Hero Section Start -->
<div class="hero-section" style="background: url(<?= get_template_directory_uri() . '/assets/img/leaf.jpg' ?>)">
	<div class="hero-section-overlay">
		<div class="hero-section-content">
			<div class="item-main">
				<span class="type">Featured</span>
				<h2>Voluptas ea fugit commodi</h2>
				<span class="category">Industries</span>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
				</p>
				<span class="item-meta">John Doe / 1 Minute Read</span>
			</div>
			<div class="item-second">
				<div class="item">
					<span class="item-category">Innovations</span>
					<h4>Sed ut perspiciatis unde omnis iste...</h4>
					<span class="item-meta">John Doe / 1 Minute Read</span>
					<hr />
				</div>
				<div class="item">
					<span class="item-category">Innovations</span>
					<h4>At vero eos et accusamus et iusto odio...</h4>
					<span class="item-meta">John Doe / 1 Minute Read</span>
					<hr />
				</div>
				<div class="item">
					<span class="item-category">Innovations</span>
					<h4>Neque porro quisquam est qui dolorem ipsum...</h4>
					<span class="item-meta">John Doe / 1 Minute Read</span>
					<hr />
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Hero Section End -->

<div class="content">

	<!-- Showcase One Start -->
	<div class="showcase">
		<h2 class="showcase-heading">Latest Articles</h2>
		<div class="showcase-box">
			<div class="showcase-item-main" style="background: url(<?= get_template_directory_uri() . '/assets/img/city.jpg' ?>)">
				<div class="showcase-item-floatbox">
					<span class="showcase-item-category">Innovations</span>
					<h2>Ut enim ad minim veniam</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
					</p>
					<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
				</div>
			</div>
			<div class="showcase-items">
				<div class="showcase-item">
					<img class="showcase-item-cover" src="<?= get_template_directory_uri() . '/assets/img/coffe.jpg' ?>" />
					<div class="showcase-item-body">
						<span class="showcase-item-category">Innovations</span>
						<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</h4>
						<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
					</div>
				</div>

				<div class="showcase-item">
					<img class="showcase-item-cover" src="<?= get_template_directory_uri() . '/assets/img/house.jpg' ?>" />
					<div class="showcase-item-body">
						<span class="showcase-item-category">Innovations</span>
						<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</h4>
						<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Showcase One End -->

	<!-- Showcase Two Start -->
	<div class="showcase">
		<h2 class="showcase-heading">Most Viewed</h2>
		<div class="showcase-box showcase-most-viewed">
			<div class="showcase-item flex-2 ">
				<img class="showcase-item-cover" src="<?= get_template_directory_uri() . '/assets/img/coffe.jpg' ?>" />
				<div class="showcase-item-body">
					<span class="showcase-item-category">Innovations</span>
					<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</h4>
					<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
				</div>
			</div>

			<div class="showcase-item flex-2">
				<img class="showcase-item-cover" src="<?= get_template_directory_uri() . '/assets/img/house.jpg' ?>" />
				<div class="showcase-item-body">
					<span class="showcase-item-category">Innovations</span>
					<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</h4>
					<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
				</div>
			</div>
			<div class="showcase-item flex-3">
				<p class="newsletter-heading">Subscribe to our newsletter for the latest update</p>
				<div>
					<input class="newsletter-field" placeholder="Enter your email" />
					<button class="newsletter-button">
						<i class="fa fa-envelope-open"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Showcase Two End -->

	<!-- Showcase Three Start -->
	<div class="showcase">
		<h2 class="showcase-filter">Latest Articles</h2>
		<div class="showcase-box">
			<div class="showcase-item-main" style="background: url(<?= get_template_directory_uri() . '/assets/img/city.jpg' ?>)">
				<div class="showcase-item-floatbox">
					<span class="showcase-item-category">Innovations</span>
					<h2>Ut enim ad minim veniam</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
					</p>
					<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
				</div>
			</div>
			<div class="showcase-items">
				<div class="showcase-item">
					<img class="showcase-item-cover" src="<?= get_template_directory_uri() . '/assets/img/coffe.jpg' ?>" />
					<div class="showcase-item-body">
						<span class="showcase-item-category">Innovations</span>
						<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</h4>
						<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
					</div>
				</div>

				<div class="showcase-item">
					<img class="showcase-item-cover" src="<?= get_template_directory_uri() . '/assets/img/house.jpg' ?>" />
					<div class="showcase-item-body">
						<span class="showcase-item-category">Innovations</span>
						<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</h4>
						<span class="showcase-item-meta">John Doe / 1 Minute Read</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Showcase Three End -->

</div>

</div>

<?php get_footer(); ?>