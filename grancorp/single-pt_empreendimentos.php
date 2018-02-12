<?php get_header(); ?>
<?php
	$page_id 	= get_the_id();
	$campos 	= get_fields($page_id);
	$fields_filter = array_filter($campos);
	$fields_count = count($fields_filter);
?>
	
	<section id="single-empreendimentos">
		
		<!-- BANNER PRINCIPAL -->
		<section id="cta" style="background: url('<?= $campos['empreendimentos-interna-banner']; ?>') top center no-repeat;">
			<div class="container">
				<div class="row">
					
					<?php if ($campos['empreendimentos-interna-mostrar-cta']) { ?>
						<div class="col-md-6">
							<h2><?= $campos['empreendimentos-interna-banner-titulo']; ?></h2>
						</div>
						<div class="col-md-6">
							<div class="border">
								<div class="formulario">
									<h3><?= $campos['empreendimentos-interna-cta-titulo']; ?></h3>
									<hr>
									<span class="content"><?= $campos['empreendimentos-interna-cta-conteudo']; ?></span>
									<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); ?>
								</div>
							</div>
						</div>
					<?php } else { ?>

						<div class="col-md-12">
							<h2><?= $campos['empreendimentos-interna-banner-titulo']; ?></h2>
						</div>

					<?php } ?>

				</div>
			</div>
		</section>

		<!-- DETALHES - LISTA -->
		<section id="detalhes">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8 col-md-offset-2">
						<h2 class="wow animated fadeInUp"><?= $campos['empreendimentos-detalhes-titulo']; ?></h2>
						<div class="subtitle wow animated fadeInUp"><?= $campos['empreendimentos-detalhes-subtitulo']; ?></div>
					</div>

					<div class="col-md-10 col-md-offset-1">
						<ul>	
							<?php foreach ($campos['empreendimentos-detalhes-conteudo'] as $item): ?>
	
								<li class="wow animated fadeInUp">
									<div class="img">
										<img src="<?= $item['imagem']; ?>">
									</div>
									<span class="title"><?= $item['texto']; ?></span>
								</li>

							<?php endforeach; ?>
						</ul>
					</div>

				</div>
			</div>
		</section>

		<!-- SLICK - FACHADA - IMAGEM DO PREDIO -->
		<section id="fachada">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<?php if (count($campos['empreendimentos-interna-slider-um-fotos']) >= 2) { ?>
							<div class="slider-slick wow animated fadeInUp slider-left">
								<div class="slider slider-for">
									<div>
									</div>
									<?php foreach ($campos['empreendimentos-interna-slider-um-fotos'] as $item): ?>
		
										<div class="img" style="background:url('<?= $item['imagem']; ?>') top center no-repeat;">
										</div>

									<?php endforeach; ?>
								</div>
								<div class="slider slider-nav">
									<?php foreach ($campos['empreendimentos-interna-slider-um-fotos'] as $item): ?>
		
										<div>
											<div class="img-mini" style="background:url('<?= $item['imagem']; ?>') top center no-repeat;">
											</div>
										</div>

									<?php endforeach; ?>
								</div>
							</div>
						<?php } else { ?>
							<?php foreach ($campos['empreendimentos-interna-slider-um-fotos'] as $item): ?>
		
								<div class="slider-left">
									<img class="img" src="<?= $item['imagem']; ?>">
								</div>

							<?php endforeach; ?>
						<?php } ?>
						<hgroup>
							<h2 class="wow animated fadeInUp"><?= $campos['empreendimentos-interna-slider-um-titulo']; ?></h2>
							<div class="content wow animated fadeInUp"><?= $campos['empreendimentos-interna-slider-um-subtitulo']; ?></div>
						</hgroup>

					</div>
				</div>
			</div>
		</section>
		
		<!-- INTERESSADO -->
		<section id="interessado" style="background:url('<?= $campos['empreendimentos-interna-interessado-imagem']; ?>') top center no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<h2 class="wow animated fadeInUp"><?= $campos['empreendimentos-interna-interessado-titulo']; ?></strong></h2>
						<hr class="wow animated fadeInUp">
						<span class="subtitle wow animated fadeInUp"><?= $campos['empreendimentos-interna-interessado-subtitulo']; ?></span>
						<hr class="wow animated fadeInUp">
						<ul>
							<?php foreach ($campos['empreendimentos-interna-interessado-conteudo'] as $item): ?>
	
								<li class="wow animated fadeInUp">
									<hgroup data-toggle="modal" data-target="#modalLigue">
										<div class="img">
											<img src="<?= $item['imagem']; ?>">
										</div>
										<span class="title"><?= $item['texto']; ?></span>
									</hgroup>
								</li>

							<?php endforeach; ?>
						</ul>

					</div>
				</div>
			</div>
		</section>

		<!-- PLANTAS -->
		<section id="plantas">
			<div class="container">
				<div class="row">
					
					<div class="col-md-10 col-md-offset-1">
						<h2 class="wow animated fadeInUp"><?= $campos['empreendimentos-interna-plantas-titulo']; ?></h2>
						<span class="subtitle wow animated fadeInUp"><?= $campos['empreendimentos-interna-plantas-subtitulo']; ?></span>
					</div>
					
					<hgroup class="wow animated fadeInUp">
						<h2><?= $campos['empreendimentos-interna-plantas-headline']; ?></h2>
						<div class="content"><?= $campos['empreendimentos-interna-plantas-conteudo']; ?></div>
					</hgroup>
					<?php if (count($campos['empreendimentos-interna-plantas-fotos']) >= 2) { ?>
						<div class="slider-slick wow animated fadeInUp slider-right">
							<div class="slider slider-for">
								<?php foreach ($campos['empreendimentos-interna-plantas-fotos'] as $item): ?>

									<div>
										<div class="img" style="background-image: url('<?= $item['imagem']; ?>');">
										</div>
									</div>

								<?php endforeach; ?>
							</div>
							<div class="slider slider-nav">
								<?php foreach ($campos['empreendimentos-interna-plantas-fotos'] as $item): ?>
		
									<div>
										<div class="img-mini" style="background:url('<?= $item['imagem']; ?>') top center no-repeat;">
										</div>
									</div>

								<?php endforeach; ?>
							</div>
						</div>
					<?php } else { ?>
						<?php foreach ($campos['empreendimentos-interna-plantas-fotos'] as $item): ?>
		
							<div class="slider-right">
								<img class="img" src="<?= $item['imagem']; ?>">
							</div>

						<?php endforeach; ?>
					<?php } ?>

				</div>
			</div>
		</section>

		<!-- ANDAMENTO -->
		<section id="andamento">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<h2 class="wow animated fadeInUp"><?= $campos['empreendimentos-interna-andamento-titulo']; ?></h2>
						<span class="subtitle wow animated fadeInUp"><?= $campos['empreendimentos-interna-andamento-subtitulo']; ?></span>

					</div>
					<div class="img wow animated fadeInLeft" style="background:url('<?= $campos['empreendimentos-interna-andamento-imagem']; ?>') top center no-repeat;"></div>
					<div class="col-md-4 col-md-offset-6">
						<div class="progresso">
							<?php foreach ($campos['empreendimentos-interna-andamento-conteudo'] as $item): ?>
	
								<div class="andamento">
									<div class="descricao">
										<span><?= $item['titulo']; ?></span>
										<span><?= $item['porcentagem']; ?>%</span>
									</div>
									<div class="progress">
										<div class="progress-bar tc-appear" role="progressbar" aria-valuenow="<?= $item['porcentagem']; ?>" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
								</div>

							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- MAPA -->
		<section id="mapa">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<h2 class="wow animated fadeInUp"><?= $campos['empreendimentos-interna-mapa-titulo']; ?></h2>
						<span class="subtitle wow animated fadeInUp"><?= $campos['empreendimentos-interna-mapa-conteudo']; ?></span>

					</div>
				</div>
			</div>
			<?php 

				$location = $campos['empreendimentos-interna-mapa-localizacao'];
				$address  = $location['address'];
				$lat      = $location['lat'];
				$lng      = $location['lng'];

			 ?>
			<?php if($campos['empreendimentos-interna-mapa-localizacao']){ ?>
				<!-- <div class="localizacao"> -->
					<!-- <?php get_map('contact','16','100%','100%',$lat,$lng); ?> -->
				<!-- </div> -->
			<?php } else {} ?>
			<div>
				<div id="map" class="localizacao" data-lat="<?= $campos['empreendimentos-interna-mapa-localizacao']['lat']; ?>" data-lng="<?= $campos['empreendimentos-interna-mapa-localizacao']['lng']; ?>" ></div>
				</div>
				<div class="hidden">
					<?php foreach ($campos['map-poi-list'] as $poi): ?>
						<div class="place" data-cat="<?= $poi['category']; ?>" data-ident="<?= rand(0,999); ?>" data-lat="<?= $poi['location']['lat']; ?>" data-lng="<?= $poi['location']['lng']; ?>" data-title="<?= $poi['label']; ?>"></div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<!-- SIMULE -->
		<?php get_template_part('loop', 'simule'); ?>

		<!-- BLOG -->
		<?php get_template_part('loop', 'blog'); ?>

	</section>

<?php get_footer(); ?>