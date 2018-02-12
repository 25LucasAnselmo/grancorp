<?php get_header(); ?>
<?php
	$page_id 	= '75';
	$fields 	= get_fields($page_id);
?>
	<section id="blog">

		<!-- BANNER -->

			<section id="banner-blog" style="background: url('<?= $fields['blog-banner-imagem']; ?>') top center no-repeat;">
				<div class="bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><?= $fields['blog-banner-headline']; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</section>

		<section id="single">
			<div class="container">
				<div class="row">
					<div class="col-md-9">

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							
							<hgroup>

								<span class="date"><?php the_time('j \d\e F \d\e Y'); ?></span>
								<h2><?php the_title(); ?></h2>
								
								<div class="img">
									<img src="<?php the_field('blog-imagem_destacada'); ?>" alt="<?php echo get_the_title(); ?>">
								</div>
								
								<span class="content">
									<?php the_content(); ?>
								</span>

								<div class="fb-comments" data-href="<?php the_permalink(); ?>" width="100%" data-numposts="5"></div>

							</hgroup>

						<?php endwhile; ?>

						<?php else: ?>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						<?php endif; ?>
						

					</div>
					<div class="col-md-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('loop', 'simule'); ?>

	</section>

<?php get_footer(); ?>