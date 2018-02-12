<?php
	$page_id 	= '75';
	$fields 	= get_fields($page_id);
?>
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="wow animate fadeInUp"><?= $fields['blog-headline']; ?></h2>
				<ul>
					<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<li class="wow animate fadeInUp">
							<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<img src="<?php the_field('blog-imagem_destacada'); ?>" alt="<?php echo get_the_title(); ?>">
							</a>
							<hgroup>
								<span class="data"><?php the_time('j \d\e F \d\e Y'); ?></span>
								<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
									<span class="titulo"><?php the_title(); ?></span>
								</a>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="leia"><?php the_field('blog-texto_button'); ?> <i class="fa fa-angle-right"></i></a>
							</hgroup>
						</li>

					<?php endwhile; wp_reset_query(); ?>
				</ul>
				<a href="<?php echo home_url(); ?>/blog" class="postagens wow animate fadeInUp" title="<?php _e('Blog', 'grancorp'); ?>"><?= $fields['blog-todas']; ?></a>
			</div>
		</div>
	</div>
</section>