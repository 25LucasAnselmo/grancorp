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

		<!-- CONTEUDO -->
		
			<section id="posts">
				<h3><?php echo sprintf( __( '%s resultados encontrados para:  ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>
				<div class="container">
					<div class="row">
						<div class="col-md-9">

							<?php get_template_part('loop'); ?>
							<?php get_template_part('pagination'); ?>

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