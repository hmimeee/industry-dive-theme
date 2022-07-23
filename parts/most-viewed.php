<?php
$data = new WP_Query(array(
	'meta_key' => 'post_views_count',
	'orderby' => 'meta_value_num',
	'posts_per_page' => 2
));
?>

<div class="showcase">
	<h2 class="showcase-heading">Most Viewed</h2>
	<div class="showcase-box showcase-most-viewed">
		<?php if ($data->have_posts()) while ($data->have_posts()) : $data->the_post(); ?>
			<div class="showcase-item flex-2 ">
				<img class="showcase-item-cover" src="<?= get_the_post_thumbnail_url();  ?>" />
				<div class="showcase-item-body">
					<span class="showcase-item-category"><?= get_the_category_list(', ') ?></span>
					<h4>
						<a href="<?= the_permalink() ?>"><?= mb_strimwidth(the_title('', '', false), 0, 40, '...') ?></a>
					</h4>
					<span class="showcase-item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
				</div>
			</div>
		<?php endwhile;
		wp_reset_postdata(); ?>

		<div class="showcase-item flex-3">
			<p class="newsletter-heading">Subscribe to our newsletter for the latest update</p>
			<form class="newsletter-form" action="<?= admin_url('admin-ajax.php'); ?>" method="post">
				<input type="hidden" name="action" value="newsletter" />
				<input name="email" class="newsletter-field" placeholder="Enter your email" />
				<button class="newsletter-button">
					<i class="fa fa-envelope-open"></i>
				</button>
			</form>
		</div>
	</div>
</div>