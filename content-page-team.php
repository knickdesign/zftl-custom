<?php
/**
 * The template used for displaying page content in page-team.php
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_do_microdata( 'article' ); ?>>
	<div class="inside-article">
		<?php
		/**
		 * generate_before_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_featured_page_header_inside_single - 10
		 */
		do_action( 'generate_before_content' );

		if ( generate_show_entry_header() ) :
			?>

			<header <?php generate_do_attr( 'entry-header' ); ?>>
				<?php
				/**
				 * generate_before_page_title hook.
				 *
				 * @since 2.4
				 */
				do_action( 'generate_before_page_title' );

				if ( generate_show_title() ) {
					?>
					<div class="subpage-header">
					<div class="subpage-header__txt-container">
						<?php
					$params = generate_get_the_title_parameters();

					the_title( $params['before'], $params['after'] );
					?>
					<p class="h1-subline">
						<?php
							echo get_field('slogan');
						?>
					</p>
					</div>
					<div class="subpage-header__featured-img-container">
					<div class="featured-image <?php echo esc_attr( $class ); ?> grid-container grid-parent">
			<?php
				the_post_thumbnail(
					apply_filters( 'generate_page_header_default_size', 'full' ),
					$attrs
				);
			?>
		</div>
					</div>
					</div>
					<?php
				}


				/**
				 * generate_after_page_title hook.
				 *
				 * @since 2.4
				 */
				do_action( 'generate_after_page_title' );
				?>
			</header>

			<?php
		endif;

		/**
		 * generate_after_entry_header hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_post_image - 10
		 */
		do_action( 'generate_after_entry_header' );

		$itemprop = '';

		if ( 'microdata' === generate_get_schema_type() ) {
			$itemprop = ' itemprop="text"';
		}
		?>

		<div class="entry-content"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>
			<?php
			// the query
$team_query = new WP_Query(array('post_type'=>'teammitglieder')); ?>
 
<?php if ( $team_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; 


			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<?php
		/**
		 * generate_after_content hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_after_content' );
		?>
	</div>
</article>
