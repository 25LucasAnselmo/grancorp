<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('searchform'); ?>
	<div class="row"></div>

	<div class="sidebar-widget">
		<div class="categorias">
			<h2>Categorias</h2>
			<?php dynamic_sidebar('sidebar-1') ?>
		</div>
		
		<div class="tags">
			<!-- <h2>Filtrar por</h2>
			<ul>
				<li>Casas</li>
				<li>apartamentos</li>
				<li class="current">dicas</li>
				<li>Crédito</li>
				<li>Lorem ipsum</li>
			</ul> -->
		</div>
	</div>

</aside>