<?php
	$page_id 	= '43';
	$fields 	= get_fields($page_id);
	$fields_filter = array_filter($fields);
	$fields_count = count($fields_filter);
?>
<ul class="ul-fixa">
	<?php if ($fields['opcoes-informacoes-texto-um']) { ?>
		<li>
			<a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso" title="<?php _e('Simular operação', 'grancorp'); ?>"><img src="<?= get_template_directory_uri(); ?>/images/icn-1.jpg" alt="<?php _e('Informações'. 'grancorp'); ?>"></a>
			<a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso" title="<?php _e('Simular operação', 'grancorp'); ?>"><span><?= $fields['opcoes-informacoes-texto-um']; ?></span></a>
		</li>
	<?php } else {} ?>
	<?php if ($fields['opcoes-informacoes-texto-dois']) { ?>
		<li>
			<a href="<?php echo home_url(); ?>/contato" title="<?php _e('Contato', 'grancorp'); ?>"><img src="<?= get_template_directory_uri(); ?>/images/icn-2.jpg" alt="<?php _e('Contato'. 'grancorp'); ?>"></a>
			<a href="<?php echo home_url(); ?>/contato" title="<?php _e('Contato', 'grancorp'); ?>"><span><?= $fields['opcoes-informacoes-texto-dois']; ?></span></a>
		</li>
	<?php } else {} ?>
	<?php if ($fields['opcoes-informacoes-texto-tres']) { ?>
		<li>
			<img src="<?= get_template_directory_uri(); ?>/images/icn-3.jpg" alt="<?php _e('Informações'. 'grancorp'); ?>">
			<span><?= $fields['opcoes-informacoes-texto-tres']; ?></span>
		</li>
	<?php } else {} ?>
</ul>