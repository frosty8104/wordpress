<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://m.facebook.com/laura.gieg?eav=Afa24L0phIupJbn8vfj0XD0vwrWRR1q031na1Cz2pRXTNHLCD-iMcvVZ317cBRo2Oy8&paipv=0" 
					class="soc-icon fb"><span class="screen-reader-text">Facebook</span></a>
					<a href="https://www.linkedin.com/in/laura-gieg-front-end-developer/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://github.com/frosty8104" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://www.instagram.com/permafrostphotodesign/" class="soc-icon in"><span class="screen-reader-text">Instagram</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
