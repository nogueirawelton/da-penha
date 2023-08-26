<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preload" href="<?= get_template_directory_uri() ?>/public/img/logo.png" as="image">

  <title>
    <?php
        if(is_front_page()) {
            echo wp_title('');
        } elseif (is_page()) {
            echo wp_title(''); echo ' - ';
        } elseif (is_search()) {
            echo 'Busca - ';
        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';
        } elseif (is_404()) {
            echo 'Página não encontrada - ';
        } bloginfo('name');
      ?>
  </title>
  
  <?php wp_head(); ?>
</head>
<body>
  <header data-scrolled="false">
    <div class="container">
      <img src="<?= get_template_directory_uri() ?>/public/img/logo.png" alt="Da Penha Salgados">

      <button data-menu="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffdcb5" viewBox="0 0 256 256"><path d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64ZM216,96H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
      </button>

      <nav>
        <ul>
          <li>
            <a data-current="true" href="#inicio">Início</a>
          </li>
          <li>
            <a data-current="false" href="#historia">História</a>
          </li>
          <li>
            <a data-current="false" href="#produtos">Produtos</a>
          </li>
          <li>
            <a data-current="false" href="#lojinha">Lojinha</a>
          </li>
          <li>
            <a data-current="false" href="#revenda">Revenda</a>
          </li>
          <li>
            <a data-current="false" href="#contato">Contato</a>
          </li>
        </ul>
      </nav>

    </div>
  </header>
  
