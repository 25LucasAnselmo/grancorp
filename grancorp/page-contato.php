<?php get_header(); ?>
<?php
	$page_id 	= get_the_id();
	$campos 	= get_fields($page_id);
?>

	<section id="contato">
			
		<!-- BANNER -->

			<section id="banner-contato" style="background:url('<?= $campos['contato-banner-imagem']; ?>') top center no-repeat;">
				<div class="bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><?= $campos['contato-banner-titulo']; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- FORM -->

			<section id="form">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="wow animate fadeInUp"><?= $campos['form-titulo']; ?></h3>
						</div>
						<div class="formulario">
							<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 5, 'title' => false, 'description' => false ) ); ?>
						</div>
					</div>
				</div>
			</section>

		<!-- DUVIDAS -->

			<section id="duvidas" class="duvidas">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<h3 class="wow animate fadeInUp"><?= $campos['contato-duvidas-headline']; ?></h3>

						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="tabela">
								<ul class="tabs">
									<?php foreach ($campos['contato-duvidas-tabs'] as $ti => $tab): ?>
	
										<li class="tab-link wow animate fadeInUp <?php if ($ti == 0) { echo 'current'; } ?>" data-tab="<?= $ti; ?>">
											<span class="title"><?= $tab['contato-duvidas-titulo']; ?></span>
										</li>

									<?php endforeach; ?>	
								</ul>

								<?php foreach ($campos['contato-duvidas-tabs'] as $ti => $tab): ?>
									
									<div class="tab-content <?php if ($ti == 0) { echo 'current'; } ?>" data-tab="<?= $ti; ?>">
										<div class="el-accordion">
									
											<?php foreach ($tab['contato-duvidas-conteudo'] as $ii => $item): ?>
										
												<div class="item <?php if ($ii == 0) { echo 'active'; } ?>">
													<header>
														<a href="JavaScript:void(0);">
															<span class="title-wrapper">
																<span><?= $item['contato-duvidas-conteudo-titulo']; ?></span>
															</span>
														</a>
													</header>
													<div class="content-accordion">
											            <div class="wrapper-accordion">
															<span class="content"><?= $item['contato-duvidas-conteudo-conteudo']; ?></span>
											            </div>
											        </div>
												</div>

											<?php endforeach; ?>

										</div>
									</div>

								<?php endforeach; ?>	
								
									
								
							</div>
						</div>

					</div>
				</div>
			</section>

		<?php echo get_template_part('loop', 'simule'); ?>

	</section>

<?php get_footer(); ?>