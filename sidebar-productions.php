<?php
/**
 * The Sidebar containing the secondaries widget area.
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?>
        <!-- START: sidebar.php -->
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-secondary' ) ) : ?>

				<?php if ( is_user_logged_in() ) : ?>
                <aside class="widget panel radius">
                    <h3 class="widget-title"><?php _e( 'There are no widgets yet!', 'requiredfoundation' ); ?></h3>
                    <p><?php _e('Please add some real widgets, because otherwise your visitors get nothing but whitespace here.', 'requiredfoundation' ); ?></p>
                    <p><a class="button small radius" href="<?php echo admin_url('widgets.php'); ?>"><?php _e( 'Add widgets', 'requiredfoundation' ); ?></a></p>
                </aside>
                <?php endif; ?>

			<?php endif; // end sidebar widget area ?>
			<aside id="meta-related" class="widget meta-related-box">
				<h4 class="widget-title"><?php _e('Related Material', 'requiredfoundation' ); ?></h4>
				<div class="meta-related-content">
					<h5 class="meta-related-title"><?php _e('Related Websites', 'requiredfoundation' ); ?></h5>
					<ul>
					<?php if ( get_post_meta($post->ID, 'sitioweb', $single = true) != '' ) { ?>
					<?php 
						$arr_sitiosweb = get_post_meta($post->ID, 'sitioweb');
						foreach( $arr_sitiosweb as $sitioweb ){
							echo '<li class="meta-related"><a href="' .  $sitioweb . '" target="_blank" class="widget-more">>> ' . $sitioweb . '</a></li>';
						}
					?>
					</li>
					<?php } ?>
					</ul>
					<h5 class="meta-related-title"><?php _e('Related Articles', 'requiredfoundation' ); ?></h5>
					<ul>
					<?php if ( get_post_meta($post->ID, 'articulo', $single = true) != '' ) { ?>
					<?php 
						$arr_articulos = get_post_meta($post->ID, 'articulo');
						foreach( $arr_articulos as $articulo ){
							echo '<li class="meta-related"><a href="' .  $articulo . '" target="_blank" class="widget-more">>> ' .  $articulo . '</a></li>';
						}
					?>
					</li>
					<?php } ?>
					</ul>
				</div>
			</aside>
		</div><!-- #secondary .widget-area -->
        <!-- END: sidebar.php -->