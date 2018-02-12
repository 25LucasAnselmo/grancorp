<?php
	$page_id 	= '43';
	$fields 	= get_fields($page_id);
?>
<section id="simule">
	<div class="col-md-7 news">
		<div class="conteudo">
			<h2 class="wow animate fadeInUp"><?= $fields['opcao-novidades-titulo']; ?></h2>
			<span class="wow animate fadeInUp"><?= $fields['opcao-novidades-conteudo']; ?></span>
			<input type="email" name="email" placeholder="Digite seu e-mail" class="wow animate fadeInLeft">
			<input type="submit" name="submit" value="ENVIAR" class="wow animate fadeInRight">
		</div>
	</div>
	<a href="<?= $fields['opcao-simule-link']; ?>" title="<?php _e('Simule', 'grancorp'); ?>">
		<div class="col-md-6 simule" style="background: url('<?= $fields['opcao-simule-background']; ?>') top center no-repeat;">
			<span class="wow animate fadeInUp"><?= $fields['opcao-simule-titulo']; ?></span>
			<img src="<?= $fields['opcao-simule-imagem']; ?>" class="wow animate fadeInUp" alt="<?php _e('Simule'. 'grancorp'); ?>">
		</div>
	</a>
	<div class="clear"></div>
</section>