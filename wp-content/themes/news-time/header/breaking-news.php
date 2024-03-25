<?php

/**
 * breaking-news
 */
?>
<?php

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 8,
  'ignore_sticky_posts'   => true
);
$breakingnews = new WP_Query($args);
?>

<div class="breaking-news-wrap">
  <div class="grid-container">
    <div class="breaking-news-inner container-inner">
      <div class="breaking-news-left">
        <div class="breaking-news-title">
          <span><?php echo esc_html_e('Breaking News', 'news-time'); ?></span>
          <i class="mobile-headline fa fa-bolt"></i>
        </div>
        <div class="breaking-news-content">
          <div class="slick-slider" data-slick='{"autoplay":true,"fade":true,"pauseOnHover":true}'>

            <?php if ($breakingnews->have_posts()) : ?>
              <?php /* Start the Loop */ ?>
              <?php while ($breakingnews->have_posts()) : $breakingnews->the_post(); ?>
                <article class="post-wrap post-breaking-news">
                  <?php the_title(sprintf('<h3 class="post-title entry-title "><a class="post-title-link" href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
                </article>
              <?php endwhile; ?>
            <?php else : ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
      <!--#breaking news left -->

    </div>
  </div>
</div>