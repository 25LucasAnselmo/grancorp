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
							<a href="<?php echo home_url(); ?>">
								<img src="<?= $fields['opcoes-rodape-logo']; ?>">
							</a>
						</div>
						<ul class="social wow animate fadeInUp">
							<?php if ($fields['opcoes-rodape-facebook']) { ?>
								<li><a href="<?= $fields['opcoes-rodape-facebook']; ?>" target="_blank" class="facebook-share"><i class="fa fa-facebook"></i></a></li>
							<?php } else {} ?>
							<?php if ($fields['opcoes-rodape-twitter']) { ?>
								<li><a href="<?= $fields['opcoes-rodape-twitter']; ?>" target="_blank" class="twitter-share"><i class="fa fa-twitter"></i></a></li>
							<?php } else {} ?>
							<?php if ($fields['opcoes-rodape-linkedin']) { ?>
								<li><a href="<?= $fields['opcoes-rodape-linkedin']; ?>" target="_blank" class="linkedin-share"><i class="fa fa-linkedin"></i></a></li>
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
											
											<li><a href="<?= $item['opcoes-rodape-coluna-dois-link']; ?>"><strong><strong><?= $item['opcoes-rodape-coluna-dois-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp mobile">
									<?php if ($fields['opcoes-rodape-coluna-tres']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-tres'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-tres-link']; ?>"><strong><strong><?= $item['opcoes-rodape-coluna-tres-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp mobile">
									<?php if ($fields['opcoes-rodape-coluna-quatro']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-quatro'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-quatro-link']; ?>"><strong><strong><?= $item['opcoes-rodape-coluna-quatro-texto']; ?></strong></a></li>

										<?php endforeach; ?>
									<?php } else{} ?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="rodape wow animate fadeInUp mobile">
									<?php if ($fields['opcoes-rodape-coluna-cinco']) { ?>
										<?php foreach ($fields['opcoes-rodape-coluna-cinco'] as $item): ?>
											
											<li><a href="<?= $item['opcoes-rodape-coluna-cinco-link']; ?>"><strong><strong><?= $item['opcoes-rodape-coluna-cinco-texto']; ?></strong></a></li>

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
									<a href="http://trezentos.com.br">
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo-trezentos.png" alt="trezentos">
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