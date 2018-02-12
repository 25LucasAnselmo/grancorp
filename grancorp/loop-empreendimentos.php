<?php

$page_id  = '183';
$fields   = get_fields($page_id);

$fts = $_GET['status'];
$ftb = $_GET['bairro'];

?>
<section id="empreendimentos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <?php include 'filtro.php' ?>

        <div class="content">
          <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 160 }'>
            <?php

                    if ($fts && $fts != 'none' && $ftb && $ftb != 'none') {
                      $args = array(
                        'post_type' => 'pt_empreendimentos',
                        'posts_per_page' => 9,
                        'meta_key'      => 'empreendimentos-interna-tamanho-status',
                        'meta_value'    => $fts,
                    'tax_query'     => array(
                        array(
                            'taxonomy'  => 'tax_empreendimentos',
                            'terms'   => $ftb,
                            'field'   => 'term_id',
                        )
                    ),
                      );
                    } elseif ($fts && $fts != 'none') {
                      $args = array(
                        'post_type'     => 'pt_empreendimentos',
                        'posts_per_page'  => 9,
                        'meta_key'      => 'empreendimentos-interna-tamanho-status',
                        'meta_value'    => $fts
                      );
                    } elseif ($ftb && $ftb != 'none') {
                      $args = array(
                        'post_type'     => 'pt_empreendimentos',
                        'posts_per_page'  => 9,
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'tax_empreendimentos',
                            'terms'   => $ftb,
                            'field'   => 'term_id',
                        )
                    ),
                      );
                    } else {
                      $args = array(
                        'post_type' => 'pt_empreendimentos',
                        'posts_per_page' => 9
                      );
                    }
                    $loop = new WP_Query($args);

                    while ( $loop->have_posts() ) : $loop->the_post();

                    // Setup building info
              $page_id  = get_the_id();
              $campos   = get_fields($page_id);
              $fields_filter = array_filter($campos);
              $fields_count = count($fields_filter);
            ?>

              <?php if($campos['empreendimentos-interna-tamanho'] === 'Grid maior'){ ?>
                <div class="grid-item grid-item--width1 grid-item--height1 wow animate fadeInUp">
                  <div class="content <?= $campos['empreendimentos-interna-tamanho-cor']; ?>" style="background:url('<?php the_field('empreendimentos-interna-tamanho-imagem'); ?>') center center no-repeat; background-size:cover !important;">
                    <?php if ($campos['venda-vendido']) { ?>
                      <span class="vendido">100% vendido</span>
                    <?php } else ?>
                    <a href="<?php the_permalink(); ?>" class="full" title="<?php echo get_the_title(); ?>"></a>
                    <div class="overlay <?= 'clr-' . $campos['empreendimentos-interna-tamanho-cor']; ?>"></div>
                    <hgroup>
                      <div class="status"><?= $campos['empreendimentos-interna-tamanho-status']['label']; ?></div>
                      <h2><?php the_field('empreendimentos-interna-tamanho-titulo'); ?></h2>
                      <span><?php the_field('empreendimentos-interna-tamanho-bairro'); ?></span>
                    </hgroup>
                    <div class="clear"></div>
                    <div class="hover">
                      <h3><?php the_field('empreendimentos-interna-tamanho-descricao'); ?></h3>
                      <hr>
                      <a class="saiba" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php the_field('empreendimentos-interna-tamanho-texto_botao'); ?> <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>

              <?php } else { ?>
                
                <div class="grid-item grid-item--width1 grid-item--height2 wow animate fadeInUp">
                  <div class="content" style="background:url('<?php the_field('empreendimentos-interna-tamanho-imagem'); ?>') center center no-repeat; background-size:cover !important;">
                    <?php if ($campos['venda-vendido']) { ?>
                      <span class="vendido">100% vendido</span>
                    <?php } else ?>
                    <a href="<?php the_permalink(); ?>" class="full" title="<?php echo get_the_title(); ?>"></a>
                    <div class="overlay clr-visible <?= 'clr-' . $campos['empreendimentos-interna-tamanho-cor']; ?>"></div>
                    <hgroup>
                      <div class="status"><?= $campos['empreendimentos-interna-tamanho-status']['label']; ?></div>
                      <h2><?php the_field('empreendimentos-interna-tamanho-titulo'); ?></h2>
                      <span><?php the_field('empreendimentos-interna-tamanho-bairro'); ?></span>
                      <div class="hover">
                        <a class="saiba" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php the_field('empreendimentos-interna-tamanho-texto_botao'); ?> <i class="fa fa-angle-right"></i></a>
                      </div>
                    </hgroup>
                  </div>
                </div>

              <?php } ?>



            <?php endwhile; wp_reset_query(); ?>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
          <a href="<?php echo home_url(); ?>/empreendimentos" class="tudo wow animate fadeInUp" title="<?php _e('Empreendimentos', 'grancorp'); ?>">VER TODOS</a>
      </div>
    </div>
  </div>
</section>