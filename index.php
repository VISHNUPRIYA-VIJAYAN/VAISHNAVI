<?php get_header();?>
<?php if(have_posts()):?>

		<div class="row">
		
		<?php while(have_posts()):the_post();?>
			
		<div class="col">
		<h1>
		<?php the_title();?></h1>
		<?php echo the_date();?>
		<?php echo the_time();?>
		<?php  the_author();?>
		<?php the_excerpt();?>
		
		</div>
		
		<?php endwhile;?>
		</div>
				<?php endif;?>

		        <?php get_footer();?>