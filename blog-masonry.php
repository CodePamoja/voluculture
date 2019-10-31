<?php
/*
Template Name: Blog: Masonry
*/
?>
<?php get_header(); ?>
<?php goodwish_edge_get_title(); ?>
<?php get_template_part('slider'); ?>
	<div class="edgtf-container">
		<?php do_action('goodwish_edge_after_container_open'); ?>
		<div class="edgtf-container-inner">
			<?php goodwish_edge_get_blog('masonry'); ?>
		</div>
		<?php do_action('goodwish_edge_before_container_close'); ?>
	</div>
<?php get_footer(); ?>