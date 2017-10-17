<?php get_header(); ?>

<?php if(display_header_text()==true): ?>
	<h1><?php bloginfo('name'); ?></h1>
	<h3><?php bloginfo('description'); ?></h3>
<?php endif; ?>

<hr>

	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>

					<?php get_template_part('content',get_post_format()); ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>





<?php get_footer(); ?>
