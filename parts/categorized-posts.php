	<?php

	$categories = get_categories();
	$category = get_category($_GET['category'] ?? $categories[0]);
	$page = $_GET['page'] ?? 1;

	$args = array(
		'posts_per_page' => 9,
		'category_name' => $category->name,
		'paged' => $page,
		'post_type' => 'post',
		'order' => 'asc'
	);

	$posts = new WP_Query($args);

	if ($page == 2 || $posts->have_posts()) :
	?>

		<!-- Showcase Three Start -->
		<div class="showcase loadable-posts">
			<?php if ($page < 2) : ?>
				<div class="showcase-filter">
					<label for="filter"><i class="fa fa-filter"></i> Filter - </label>
					<select id="filter" class="showcase-filter-dropdown">
						<?php foreach ($categories as $cat) : ?>
							<option value="<?= $cat->term_id ?>" <?= $category->term_id == $cat->term_id ? 'selected' : '' ?>><?= $cat->name ?></option>
						<?php endforeach ?>
					</select>
				</div>
			<?php endif ?>
			<div class="showcase-box">
				<?php
				$i = 0;
				if ($posts->have_posts()) while ($posts->have_posts()) : $posts->the_post(); ?>
					<div class="showcase-item-main" style="background: url(<?= get_the_post_thumbnail_url() ?>)">
						<div class="showcase-item-floatbox">
							<span class="showcase-item-category">
								<?= get_the_category_list(', ') ?>
							</span>
							<h2>
								<a href="<?= get_the_permalink() ?>"><?= mb_strimwidth(get_the_title(), 0, 40, '...') ?></a>
							</h2>
							<p>
								<?= mb_strimwidth(get_the_excerpt(), 0, 150, '...') ?>
							</p>
							<span class="showcase-item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
						</div>
					<?php
					$i++;
					break;
				endwhile;
					?>
					</div>

					<div class="showcase-items">
						<?php
						if ($posts->have_posts() && $i)
							while ($posts->have_posts()) : $posts->the_post();
						?>
							<div class="showcase-item">
								<img class="showcase-item-cover" src="<?= get_the_post_thumbnail_url() ?>" />
								<div class="showcase-item-body">
									<span class="showcase-item-category">
										<?= get_the_category_list(', ') ?>
									</span>
									<h4>
										<a href="<?= get_the_permalink() ?>"><?= mb_strimwidth(get_the_title(), 0, 40, '...') ?></a>
									</h4>
									<span class="showcase-item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
								</div>
							</div>
						<?php
								$i++;
								if ($i > 2) :
									if ($posts->have_posts())
										$i = 4;
									break;
								endif;
							endwhile;
						?>
					</div>
			</div>
		</div>
		<!-- Showcase Three End -->

		<?php if ($posts->have_posts() && $i > 3): ?>
		<!-- Showcase Four Start -->
		<div class="showcase loadable-posts">
			<div class="showcase-box showcase-updates-top">
				<?php
					while ($posts->have_posts()) : $posts->the_post();
				?>

					<div class="showcase-item" style="background: url(<?= get_the_post_thumbnail_url() ?>)">
						<div class="showcase-item-floatbox">
							<span class="showcase-item-category">
								<?= get_the_category_list(', ') ?>
							</span>
							<h2>
								<a href="<?= get_the_permalink() ?>"><?= mb_strimwidth(get_the_title(), 0, 40, '...') ?></a>
							</h2>
							<p>
								<?= mb_strimwidth(get_the_excerpt(), 0, 150, '...') ?>
							</p>
							<span class="showcase-item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
						</div>
					</div>
				<?php
						$i++;
						if ($i > 5) :
							if ($posts->have_posts())
								$i = 7;
							break;
						endif;
					endwhile;
				?>
			</div>
			<?php endif ?>

			<?php if ($posts->have_posts() && $i > 6) : ?>
				<div class="showcase-box showcase-updates-bottom">
					<?php
					while ($posts->have_posts()) : $posts->the_post();
					?>
						<div class="showcase-item flex-2">
							<img class="showcase-item-cover" src="<?= get_the_post_thumbnail_url() ?>" />
							<div class="showcase-item-body">
								<span class="showcase-item-category">
									<?= get_the_category_list(', ') ?>
								</span>
								<h4>
									<a href="<?= get_the_permalink() ?>"><?= mb_strimwidth(get_the_title(), 0, 40, '...') ?></a>
								</h4>
								<span class="showcase-item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
							</div>
						</div>
					<?php
						$i++;
						if ($i > 10) :
							if ($posts->have_posts())
								$i = 12;
							break;
						endif;
					endwhile;
					?>
				</div>
			<?php endif ?>
		</div>
		<!-- Showcase Four End -->

	<?php endif ?>