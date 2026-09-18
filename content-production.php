<?php
/**
 * The default template for displaying content single/search/archive
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.3.0
 */
?>
	<!-- START: content.php -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<div class="row">
				<div class="six columns">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'requiredfoundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark" style="text-decoration:none;color:inherit">
					<?php the_title(); ?></a> // <?php the_time('d . m . Y'); ?></h1>
				</div>
				<div class="six columns aligright" style="margin-top:5px;">
					
					<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
					<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone" data-size="medium" data-annotation="none"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
					  window.___gcfg = {lang: 'es-419'};

					  (function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
				</div>
			</div>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_post_thumbnail('medium',array('class' => 'alignleft')); ?>
			<h2 class="entry-by-author"><?php _e('[:en]By[:es]Por'); ?> <?php echo get_the_author(); ?></h2>
			<?php remove_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 ); ?>
			<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'requiredfoundation' ) ) ;
					the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'requiredfoundation' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php //if ( 'post' == get_post_type() ) : ?>
			<?php //get_template_part('entry-meta', get_post_format() ); ?>
			<?php //endif; ?>
		</footer><!-- #entry-meta -->

	</article><!-- #post-<?php the_ID(); ?> -->
	<!-- END: content.php -->