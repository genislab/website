<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Doly
 */

?>
<div class="col-lg-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail () ): ?>
		<div class="post-thumbnail">
			<?php doly_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<div class="post-content">
			<?php doly_category();  ?>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			<?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php 
						doly_posted_on(); 
						doly_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
	</article>
</div>