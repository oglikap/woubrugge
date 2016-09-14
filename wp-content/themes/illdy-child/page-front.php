?php
/**
 *	The template for displaying the home-page.
 *
 *	@package WordPress
 *	@subpackage illdy-child
 */
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<section id="home-page">
				<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile;
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
			</section><!--/home-page-->
		</div><!--/.col-sm-7-->
		<?php get_sidebar(); ?>
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>
