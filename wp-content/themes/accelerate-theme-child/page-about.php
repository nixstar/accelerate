<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-hero">
					<?php the_content(); ?>
				</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="about-page-content">

	<div class="our-services">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them.<br>
			Here's a brief overview of our offered services.</p>
	</div>

	<div class="strategies">

		<?php query_posts('posts_per_page=4&post_type=services&order=ASC'); ?>
			<?php while (have_posts()) : the_post();

				$icon = get_field("icon");
				$size = "medium";
			?>

				<figure class="icon-align-left">
					<?php echo wp_get_attachment_image($icon, $size); ?>
				</figure>

				<?php if( get_field('icon_align') == 'right' ): ?>
					<figure class="icon-align-right">
						<?php echo wp_get_attachment_image($icon, $size); ?>
					</figure>
				<?php endif; ?>

				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>


			<?php endwhile; ?>
		<?php wp_reset_query(); ?>


</section>

<section class="work-with-us">
	<div class="interested">
	<h4>Interested in working with us?</h4>
	</div>

	<div class="contact-us-btn">
		<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
	</div>

</section>

<?php get_footer(); ?>
