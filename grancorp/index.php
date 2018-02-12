<?php get_header(); ?>
<?php
	$page_id 	= '75';
	$campos 	= get_fields($page_id);
?>
	<section id="blog">

		<!-- BANNER -->

			<section id="banner-blog" style="background: url('<?= $campos['blog-banner-imagem']; ?>') top center no-repeat;">
				<div class="bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><?= $campos['blog-banner-headline']; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- CONTEUDO -->
		
			<section id="posts">
				<h3><?= $campos['blog-headline']; ?></h3>
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