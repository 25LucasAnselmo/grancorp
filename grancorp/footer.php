<?php
	$page_id 	= '43';
	$fields 	= get_fields($page_id);
	$fields_filter = array_filter($fields);
	$fields_count = count($fields_filter);
?>
	<footer id="contato" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<!-- 1 linha rodape -->

						<div class="logo wow animate fadeInUp">
							<a href="<?php echo home_url(); ?>" title="<?php _e('Página inicial', 'grancorp'); ?>">
								<img src="<?= $fields['opcoes-rodape-logo']; ?>" alt="<?php _e('Grancorp'. 'grancorp'); ?>">
							</a>
						</div>
						<ul class="social wow animate fadeInUp">
							<?php if ($fields['opcoes-rodape-facebook']) { ?>
								<li><a href="<?= $fields['opcoes-rodape-facebook']; ?>" target="_blank" class="facebook-share" title="<?php _e('Facebook', 'grancorp'); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php } else {} ?>
							<?php if ($fields['opcoes-rodape-twitter']) { ?>
								<li><a href="<?= $fields['opcoes-rodape-twitter']; ?>" target="_blank" class="twitter-share" title="<?php _e('Twitter', 'grancorp'); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php } else {} ?>
							<?php if ($fields['opcoes-rodape-linkedin']) { ?>
								<li><a href="<?= $fields['opcoes-rodape-linkedin']; ?>" target="_blank" class="linkedin-share" title="<?php _e('Linkedin', 'grancorp'); ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php } else {} ?>
						</ul>

					<!-- 2 linha rodape -->

						<div class="row">
							<div class="col-md-4">
								<hgroup class="wow animate fadeInUp">
									<?php if ($fields['opcoes-rodape-coluna-um']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-um'] as $item): ?>
											
											<span class="endereco"><?= $item['opcoes-rodape-coluna-um-endereco']; ?></span>
											<?= $item['opcoes-rodape-coluna-um-email']; ?>
											<span class="telefone"><?= $item['opcoes-rodape-coluna-um-telefone']; ?></span>

										<?php endforeach; ?>
									<?php } else{} ?>	
								</hgroup>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp">
									<?php if ($fields['opcoes-rodape-coluna-dois']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-dois'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-dois-link']; ?>" title="<?php _e('Opção texto', 'grancorp'); ?>"><strong><strong><?= $item['opcoes-rodape-coluna-dois-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp mobile">
									<?php if ($fields['opcoes-rodape-coluna-tres']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-tres'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-tres-link']; ?>" title="<?php _e('Opção texto', 'grancorp'); ?>"><strong><strong><?= $item['opcoes-rodape-coluna-tres-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp mobile">
									<?php if ($fields['opcoes-rodape-coluna-quatro']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-quatro'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-quatro-link']; ?>" title="<?php _e('Opção texto', 'grancorp'); ?>"><strong><strong><?= $item['opcoes-rodape-coluna-quatro-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp mobile">
									<?php if ($fields['opcoes-rodape-coluna-cinco']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-cinco'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-cinco-link']; ?>" title="<?php _e('Opção texto', 'grancorp'); ?>"><strong><strong><?= $item['opcoes-rodape-coluna-cinco-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
						</div>

					<!-- 3 linha -->

						<ul class="assinatura">
							<li>
								<p><?= $fields['opcoes-rodape-direitos']; ?></p>
								<div class="300">
									<a href="http://trezentos.com.br" <?php echo (!is_home()) ? 'rel="nofollow"' : ''; ?> title="<?php _e('Trezentos', 'grancorp'); ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo-trezentos.png" alt="<?php _e('Trezentos'. 'grancorp'); ?>">
									</a>
								</div>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</footer>	

	<?php wp_footer(); ?>
</body>
</html>