<?php get_header(); the_post(); $post_id = get_the_id(); $fields = get_fields(); ?>


	<section id="home">
		<?php get_template_part('slider'); ?>
		<?php get_template_part('loop', 'empreendimentos'); ?>
		<?php get_template_part('loop', 'simule'); ?>
		<?php get_template_part('loop', 'blog'); ?>
	</section>

<?php get_footer(); ?>