<?php
	$page_id 	= '11';
	$fields 	= get_fields($page_id);
?>
<section id="slider">
	<div class="wrapper">
		<div class="slick">

			<?php foreach ($fields['home-slider-conteudo'] as $item): ?>
	
				<div class="item">
					<div class="banner" style="background:url(<?= $item['home-slider-conteudo-featured_image']; ?>) top center no-repeat; background-size:cover !important">
						<hgroup>
							<h2 class="wow animate fadeIn"><?= $item['home-slider-conteudo-headline']; ?></h2>
							<span class="wow animate fadeIn"><?= $item['home-slider-conteudo-subtitulo']; ?></span>
							<a href="<?= $item['home-slider-conteudo-link_button']; ?>" class="wow animate fadeIn"><?= $item['home-slider-conteudo-text_button']; ?></a>
						</hgroup>
					</div>
				</div>

			<?php endforeach; ?>	

		</div>
		<div class="tr-slick-arrows">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="slick-arrows">
							<button class="slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.png"></button>
							<button class="slick-next"><img src="<?php echo get_template_directory_uri(); ?>/images/next.png"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tr-slick-dots">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="dots-wrapper"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="mouse hvr-bob">
			<img src="<?php echo get_template_directory_uri(); ?>/images/img-mouse.png" alt="mouse">
		</div>
	</div>
</section>