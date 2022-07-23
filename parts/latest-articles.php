<?php
$args = array(
    'post_type' => 'post',
    'orderby'    => 'id',
    'post_status' => 'publish',
    'posts_per_page' => 3
);
$data = new WP_Query($args);
$latestPosts = [];
if ($data->have_posts())
    while ($data->have_posts()) :
        $data->the_post();

        $latestPosts[] = [
            'title' => get_the_title(),
            'author' => get_the_author(),
            'thumbnail' => get_the_post_thumbnail_url(),
            'category' => get_the_category_list(', '),
            'excerpt' => get_the_excerpt(),
            'permalink' => get_the_permalink(),
        ];
    endwhile;
wp_reset_postdata();
?>

<div class="showcase">
    <h2 class="showcase-heading">Latest Articles</h2>
    <div class="showcase-box">
        <div class="showcase-item-main" style="background: url(<?= $latestPosts[0]['thumbnail'] ?? '' ?>)">
            <div class="showcase-item-floatbox">
                <span class="showcase-item-category"><?= $latestPosts[0]['category'] ?></span>
                <h2><a href="<?= $latestPosts[0]['permalink'] ?>"><?= mb_strimwidth($latestPosts[0]['title'], 0, 40, '...') ?></a></h2>
                <p>
                    <?= mb_strimwidth($latestPosts[0]['excerpt'], 0, 100) ?>...
                </p>
                <span class="showcase-item-meta"><?= $latestPosts[0]['author'] ?> / 1 Minute Read</span>
            </div>
        </div>

        <div class="showcase-items">
            <div class="showcase-item">
                <img class="showcase-item-cover" src="<?= $latestPosts[1]['thumbnail'] ?>" />
                <div class="showcase-item-body">
                    <span class="showcase-item-category"><?= $latestPosts[1]['category'] ?></span>
                    <h4><a href="<?= $latestPosts[1]['permalink'] ?>"><?= mb_strimwidth($latestPosts[1]['title'], 0, 40, '...') ?></a></h4>
                    <span class="showcase-item-meta"><?= $latestPosts[1]['author'] ?> / 1 Minute Read</span>
                </div>
            </div>

            <div class="showcase-item">
                <img class="showcase-item-cover" src="<?= $latestPosts[2]['thumbnail'] ?>" />
                <div class="showcase-item-body">
                    <span class="showcase-item-category"><?= $latestPosts[2]['category'] ?></span>
                    <h4><a href="<?= $latestPosts[2]['permalink'] ?>"><?= mb_strimwidth($latestPosts[2]['title'], 0, 40, '...') ?></a></h4>
                    <span class="showcase-item-meta"><?= $latestPosts[2]['author'] ?> / 1 Minute Read</span>
                </div>
            </div>
        </div>
    </div>
</div>