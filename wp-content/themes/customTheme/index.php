<?php get_header(); ?>

<h1>This is our Custom Site</h1>
	
<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post();?>
		<h3><?php the_title(); ?></h3>
		<div><?php the_post_thumbnail('thumbnail'); ?></div>
		<small>Posted on: <?php the_time('F j Y'); ?></small>
		<div><?php the_content(); ?></div>
		<hr>
	<?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>
