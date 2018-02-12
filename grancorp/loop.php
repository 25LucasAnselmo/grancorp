<ul class="posts">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<li class="wow animated fadeInUp">
			<div class="left">
				<div class="img">
					<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
						<img src="<?php the_field('blog-imagem_destacada'); ?>" alt="<?php echo get_the_title(); ?>">
					</a>
				</div>
			</div>
			<div class="right">
				
				<span class="date"><?php the_time('j \d\e F \d\e Y'); ?></span>
				<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>

				<span class="excerpt"><?php the_excerpt(); ?></span>

				<a href="<?php the_permalink(); ?>" class="leia" title="<?php echo get_the_title(); ?>"><?php the_field('blog-texto_button'); ?> <i class="fa fa-angle-right"></i></a>
			</div>
		</li>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Nenhum resultado encontrado', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>
</ul>