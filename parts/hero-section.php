<?php
$args = array(
    'post_type' => 'post',
    'orderby'    => 'id',
    'order' => 'asc',
    'post_status' => 'publish',
    'posts_per_page' => 10
);
$data = new WP_Query($args);
?>

<div class="hero-section" style="background: url(<?= get_template_directory_uri() . '/assets/img/leaf.jpg' ?>)">
    <div class="hero-section-overlay">
        <div class="hero-section-content">
            <div class="hero-section-main-slide swiper">
                <div class="swiper-wrapper">
                    <?php if ($data->have_posts()) while ($data->have_posts()) : $data->the_post(); ?>
                        <div class="hero-section-item-main swiper-slide" data-thumbnail="<?= get_the_post_thumbnail_url();  ?>">
                            <span class="type">Featured</span>
                            <h2>
                                <a href="<?= the_permalink() ?>"><?= mb_strimwidth(the_title('', '', false), 0, 40, '...') ?></a>
                            </h2>
                            <span class="category"><?= get_the_category_list(', ') ?></span>
                            <p>
                                <?= mb_strimwidth(get_the_excerpt(), 0, 250, '...') ?>
                            </p>
                            <span class="item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="hero-section-second-slide swiper">
                <div class="swiper-wrapper">
                    <?php if ($data->have_posts()) while ($data->have_posts()) : $data->the_post(); ?>
                        <div class="item swiper-slide" data-thumbnail="<?= get_the_post_thumbnail_url();  ?>">
                            <span class="item-category"><?= get_the_category_list(', ') ?></span>
                            <h4><a href="<?= the_permalink() ?>"><?= mb_strimwidth(the_title('', '', false), 0, 40, '...') ?></a></h4>
                            <span class="item-meta"><?= get_the_author() ?> / 1 Minute Read</span>
                            <hr />
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>