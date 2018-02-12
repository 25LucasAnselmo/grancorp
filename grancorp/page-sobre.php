<?php get_header(); ?>
<?php
	$page_id 	= get_the_id();
	$campos 	= get_fields($page_id);
?>

	<section id="sobre">
		
		<!-- BANNER -->

			<section id="banner-sobre" style="background: url('<?= $campos['sobre-banner-imagem']; ?>');">
				<div class="bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><?= $campos['sobre-banner-titulo']; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- APRESENTAÇÃO -->

			<section id="apresentation">
				<div class="container">
					<div class="row">
						
						<div class="col-md-10 col-md-offset-1">
							<h2 class="wow animated fadeInUp"><?= $campos['sobre-apresentacao-titulo']; ?></h2>
							<span class="subtitle wow animated fadeInUp"><?= $campos['sobre-apresentacao-conteudo']; ?></span>
						</div>

						<ul>
							<?php foreach ($campos['sobre-apresentacao-informacoes'] as $item): ?>
		
								<li class="wow animated fadeInUp">
									<hgroup>
										<span class="title"><?= $item['sobre-apresentacao-numero']; ?></span>
										<span class="content"><?= $item['sobre-apresentacao-texto']; ?></span>
									</hgroup>
								</li>

							<?php endforeach; ?>
						</ul>

					</div>
				</div>
			</section>

		<!-- QUALIDADE -->

			<section id="qualidade">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							
							<h2 class="wow animated fadeInUp"><?= $campos['sobre-qualidade-titulo']; ?></h2>
							<span class="content wow animated fadeInUp"><?= $campos['sobre-qualidade-subtitulo']; ?></span>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="img wow animated fadeInUp">
							<img src="<?= $campos['sobre-qualidade-imagem']; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<ul>
							<?php foreach ($campos['sobre-qualidade-conteudo'] as $item): ?>
	
								<!-- MIOLO -->

									<li class="wow animated fadeInUp">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icn-lista.png">
										<span class="texto"><?= $item['sobre-qualidade-texto']; ?></span>
									</li>

							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</section>

		<!-- VIDEO -->

			<section id="video">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<div class="col-md-5">
								<h2 class="wow animated fadeInUp"><?= $campos['sobre-quote-titulo']; ?></h2>
							</div>
							<div class="col-md-7">
								<div class="video popup popup_toggler wow animated fadeInUp" style="background: url('<?= $campos['sobre-quote-imagem']; ?>') top center no-repeat;">
									
								</div>
							</div>
							<div class="row"></div>

							<div class="col-md-10 col-md-offset-1">
								<span class="content wow animated fadeInUp"><?= $campos['sobre-quote-conteudo']; ?></span>
								<div class="botao wow animated fadeInUp">
									<a href="<?= $campos['sobre-quote-link_botão']; ?>"><?= $campos['sobre-quote-texto_botao']; ?></a>
								</div>
							</div>

							<div class="popuptext" id="myPopup">
								<div class="wrapper">
									<a href="JavaScript:void(0);" class="close_popup">X Fechar</a>
									<div class="video-wrapper">
										<iframe width="100%" height="100%" src="<?= $campos['sobre-quote-link_video']; ?>?rel=0&amp;showinfo=0?rel=0&amp;showinfo=0;enablejsapi=1" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

		<?php echo get_template_part('loop', 'simule'); ?>

	</section>

<?php get_footer(); ?>