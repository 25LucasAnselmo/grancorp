<?php
  $page_id  = '183';
  $fields   = get_fields($page_id);
  $bairros = get_terms('tax_empreendimentos');
?>
<div class="filtro">
  <div class="conteudo">
    <span class="wow animate fadeInUp"><?= $fields['empreendimentos-filtro-titulo']; ?></span>
    <h2 class="wow animate fadeInUp mobile"><?= $fields['empreendimentos-filtro-texto_mobile']; ?></h2>
    <h2 class="wow animate fadeInUp desktop"><?= $fields['empreendimentos-filtro-subtitulo']; ?></h2>
    <ul>
      <li class="desktop">
        <form method="get">
          <select class="wow animate fadeInUp" name="status">
            <option value="none">Filtrar por status da obra</option>
            <option value="lancamento">Lançamento</option>
            <option value="pre_lancamento">Pré-Lançamento</option>
            <option value="pronto_para_morar">Pronto para Morar</option>
            <option value="em_construcao">Em Construção</option>
          </select>
          <select class="wow animate fadeInUp" name="bairro">
            <option value="none">Filtrar por bairro</option>
            <?php foreach ($bairros as $bairro): ?>
              <option value="<?= $bairro->term_id; ?>"><?= $bairro->name; ?></option>
            <?php endforeach; ?>
          </select>
          <button class="wow animate fadeInUp" type="submit">FILTRAR</button>
        </form>
      </li>
      <li class="mobile">
        <form method="get">
          <select class="wow animate fadeInUp" name="status">
            <option value="none">Obra</option>
            <option value="lancamento">Lançamento</option>
            <option value="pre_lancamento">Pré-Lançamento</option>
            <option value="pronto_para_morar">Pronto para Morar</option>
            <option value="em_construcao">Em Construção</option>
          </select>
          <select class="wow animate fadeInUp" name="bairro">
            <option value="none">Bairro</option>
            <?php foreach ($bairros as $bairro): ?>
              <option value="<?= $bairro->term_id; ?>"><?= $bairro->name; ?></option>
            <?php endforeach; ?>
          </select>
          <button class="wow animate fadeInUp" type="submit">FILTRAR</button>
         </form>
      </li>
    </ul>
  </div>
</div>