<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<table class="index_menu" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="<?php bloginfo('template_directory'); ?>/images/1_on.jpg" />
		</td>
	</tr>
	<tr>
		<td><a href="schedule/index.html"><img src="<?php bloginfo('template_directory'); ?>/images/2_off.jpg" /></a></td>
	</tr>
	<tr>
		<td>
		<a href="map.html">
			<img src="<?php bloginfo('template_directory'); ?>/images/3_off.jpg" /></a>
		</td>
	</tr>
		<tr>
			<td>
				<a href="gohan/recipe/index.html">
				<img src="<?php bloginfo('template_directory'); ?>/images/8_off.jpg" /></a>
			</td>
		</tr>
	<!--tr>
		<td><a href="webshop/index.html"><img src="<?php bloginfo('template_directory'); ?>/images/6_off.jpg"/></a></td>
	</tr-->
</table>

		<?php query_posts('cat=2&post_type=post&posts_per_page=1&paged='.$paged); ?>

					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
								<div class="index_news">
									<p class="index_date"><?php the_title(); ?></p>
									
									<?php the_content(); ?>
								</div>
						<?php endwhile; ?>
					<?php else : ?>
							 
					<?php endif; ?>	

<?php
get_footer();
