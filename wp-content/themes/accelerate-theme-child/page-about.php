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
		<img src="content-strategy.png" alt="arrow icon">
		<h2>Content Strategy</h2>
		<p>Dolore consequat esse anim reprehenderit est aliqua anim cillum sit dolore. Ullamco mollit velit eu ad pariatur excepteur Lorem cupidatat duis velit veniam. Eiusmod proident reprehenderit velit id non voluptate sint in adipisicing dolore sunt cillum id.</p>
	</div>

	<div class="strategies-alt">
		<img src="influencer-mapping.png" alt="atom icon">
		<h2>Influencer Mapping</h2>
		<p>Dolore consequat esse anim reprehenderit est aliqua anim cillum sit dolore. Ullamco mollit velit eu ad pariatur excepteur Lorem cupidatat duis velit veniam. Eiusmod proident reprehenderit velit id non voluptate sint in adipisicing dolore sunt cillum id.</p>
	</div>

	<div class="strategies">
		<img src="social-media-strategy.png" alt="thumbs-up icon">
		<h2>Social Media Strategy</h2>
		<p>Dolore consequat esse anim reprehenderit est aliqua anim cillum sit dolore. Ullamco mollit velit eu ad pariatur excepteur Lorem cupidatat duis velit veniam. Eiusmod proident reprehenderit velit id non voluptate sint in adipisicing dolore sunt cillum id.</p>
	</div>

	<div class="strategies-alt">
		<img src="design-development.png" alt="wand icon">
		<h2>Design &amp Development</h2>
		<p>Dolore consequat esse anim reprehenderit est aliqua anim cillum sit dolore. Ullamco mollit velit eu ad pariatur excepteur Lorem cupidatat duis velit veniam. Eiusmod proident reprehenderit velit id non voluptate sint in adipisicing dolore sunt cillum id.</p>
	</div>

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
