<?php get_header(); ?>
	<?php 
// 		if(is_page(15))
// 			include (TEMPLATEPATH . '/inc/slider-restau.php' );
// 		if(is_page(13))
// 			include (TEMPLATEPATH . '/inc/slide-spa.php' );
// 		if(is_page(17))
// 			include (TEMPLATEPATH . '/inc/slide-special.php' );
		?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if(!is_home()){?>
		<div class = "back-f">
			<img src="/wp-content/themes/wp-hotel/images/back-f.jpg" />
		</div>
	<?php }?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class = "main-post">
			<?php if(!is_home()){?>
				<h3><?php the_title(); ?></h3>
				<?php }?>
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</div>
		<?php if(!is_home()){?>
			<div class = "back-u">
				<img src="/wp-content/themes/wp-hotel/images/hotel-final.jpg" />
			</div>
		<?php }?>
		
		<?php endwhile; endif; ?>
<?php get_footer(); ?>