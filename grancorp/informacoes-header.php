<?php
	$page_id 	= '43';
	$fields 	= get_fields($page_id);
	$fields_filter = array_filter($fields);
	$fields_count = count($fields_filter);
?>
<ul class="ul-fixa">
	<?php if ($fields['opcoes-informacoes-texto-um']) { ?>
		<li>
			<a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso"><img src="<?= get_template_directory_uri(); ?>/images/icn-1.jpg"></a>
			<a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso"><span><?= $fields['opcoes-informacoes-texto-um']; ?></span></a>
		</li>
	<?php } else {} ?>
	<?php if ($fields['opcoes-informacoes-texto-dois']) { ?>
		<li>
			<a href="<?php echo home_url(); ?>/contato"><img src="<?= get_template_directory_uri(); ?>/images/icn-2.jpg"></a>
			<a href="<?php echo home_url(); ?>/contato"><span><?= $fields['opcoes-informacoes-texto-dois']; ?></span></a>
		</li>
	<?php } else {} ?>
	<?php if ($fields['opcoes-informacoes-texto-tres']) { ?>
		<li>
			<img src="<?= get_template_directory_uri(); ?>/images/icn-3.jpg">
			<span><?= $fields['opcoes-informacoes-texto-tres']; ?></span>
		</li>
	<?php } else {} ?>
</ul>