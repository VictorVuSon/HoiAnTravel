<div class="slider flexslider" id="slider"> <!-- begin slider -->
	<div class = "back-f">
		<img src="/wp-content/themes/wp-hotel/images/back-f.jpg" />
	</div>
        		<ul class="slides">
        				<?php //cach thuc an toan nhat de tao mot loop rieng biet hoac nhieu loop tren mot trang
    						global $post;
						    $args = array('numberposts'=>10, 'category'=>3);
						    $custom_posts = get_posts($args);
						    foreach($custom_posts as $post) : setup_postdata($post);
						 ?>
		            <li>
		                <div class="item" style="position:absolute;z-index:10;">
		                	<?php the_post_thumbnail();?>
		                </div><!-- item -->
		                <div class="inf-room">
		                	<h3><?php the_title();?></h3>
		                	<p>
		                		<?php the_content();?>
		                	</p>
		                </div>
		            </li>
			        <?php   endforeach;
					    wp_reset_postdata();
					?>
	        	</ul>
	  	<div class = "back-u">
			<img src="/wp-content/themes/wp-hotel/images/hotel-final.jpg" />
		</div>
	  <div class="clear"></div>
</div>								<!-- End slider -->