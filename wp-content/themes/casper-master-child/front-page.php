<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Nul Energie Woubrugge
 * @since Nul Energie Woubrugge 1.0
 */


get_header(); ?>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php casper_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
			<ul class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			  <?php while ( have_posts() ) : the_post();
			  $image_1 = get_field("image_1");
			  $image_4 = get_field("image_4");
			  $image_5 = get_field("image_5");
			  $size = "medium";
			  ?>
			    <li class="individual-featured-work">
			      <figure>
			        <?php echo wp_get_attachment_image($image_1, $size); ?>
			      </figure>
			      <figure>
			        <?php echo wp_get_attachment_image($image_4, $size); ?>
			      </figure>
			      <figure>
			        <?php echo wp_get_attachment_image($image_5, $size); ?>
			      </figure>

			      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    </li>

			  <?php endwhile; ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>

		<?php endwhile; // end of the loop. ?>


<?php// get_sidebar(); ?>

<?php get_footer(); ?>
