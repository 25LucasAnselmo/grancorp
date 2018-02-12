<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.jpg" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/animate.css">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,600i,700,800" rel="stylesheet">
	<script type="text/javascript">
        absoluteURL = "<?=get_bloginfo('url').'/';?>";
        templateURL = "<?=get_template_directory_uri().'/';?>";
        ajaxURL        = "<?=admin_url('admin-ajax.php');?>";
    </script>
</head>
<body <?php body_class(); ?>>
	<?php if(is_single()){ ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<?php } else {} ?>
	
	<?php
		$page_id 	= '43';
		$fields 	= get_fields($page_id);
	?>
	<?php include 'informacoes-header.php' ?>
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="flex">
						<li>

							<div class="left">
								<div class="logo">
									<a href="<?php echo home_url(); ?>" title="<?php _e('Página inicial', 'grancorp'); ?>">
										<img src="<?= $fields['opcoes-menu-logo']; ?>" alt="<?php _e('Grancorp'. 'grancorp'); ?>">
										<h1 class="hide">GranCorp</h1>
									</a>
								</div>
							</div>

							<div class="right">
								<nav class="nav">
									<ul>
										<?php foreach ($fields['opcoes-menu-conteudo'] as $item): ?>
	
											<li><a href="<?= $item['opcoes-menu-link']; ?>" title="<?php _e('Opção de conteúdo', 'grancorp'); ?>"><?= $item['opcoes-menu-titulo']; ?></a></li>

										<?php endforeach; ?>
									</ul>
								</nav>
								<button><img src="<?php echo get_template_directory_uri(); ?>/images/icn-telefone.png" alt="<?php _e('Telefone'. 'grancorp'); ?>"><span><?= $fields['opcoes-menu-vendas']; ?></span></button>
							</div>

							<div class="mobile-navigation-toggler">
								<a href="JavaScript:void(0);" title="<?php _e('Alternar menu', 'grancorp'); ?>"><i class="fa fa-bars"></i>
							</a>

							<div class="mobile-navigation">	
								<div class="wrapper">
									<ul class="s3-nav">
										<?php foreach ($fields['opcoes-menu-conteudo'] as $item): ?>
	
											<li><a href="<?= $item['opcoes-menu-link']; ?>" title="<?php _e('Opção de conteúdo', 'grancorp'); ?>"><?= $item['opcoes-menu-titulo']; ?></a></li>

										<?php endforeach; ?>
									</ul>
									<button><img src="<?php echo get_template_directory_uri(); ?>/images/icn-telefone.png" alt="<?php _e('Telefone'. 'grancorp'); ?>"><span><?= $fields['opcoes-menu-vendas']; ?></span></button>
								</div>
							</div>

						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<!-- MODAL -->

			<div id="modalLigue" class="modal fade" role="dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-body">
						<div class="border">
							<div class="formulario-interessado">
								<h2><?= $fields['opcoes-modal-titulo']; ?></h2>
								<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) ); ?>
								<div class="row"></div>
							</div>
						</div>
					</div>
				</div>

			</div>