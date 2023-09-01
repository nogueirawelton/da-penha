<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preload" href="<?= get_template_directory_uri() ?>/public/img/svg/logo.svg" as="image">

  <link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/public/apple-touch-icon.png"  type="image/png"/>
  <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/public/favicon.ico" type="image/x-icon">

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
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EVFLNGW6H5%22%3E"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EVFLNGW6H5');
  </script>

  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '6517580101662621');
    fbq('track', 'PageView');
  </script>
  <!-- End Meta Pixel Code -->

  <?php wp_head(); ?>

</head>
<body>
  <header data-scrolled="false">
    <div class="container">
      <img src="<?= get_template_directory_uri() ?>/public/img/svg/logo.svg" alt="Da Penha Salgaderia">

      <button data-menu="open" aria-label="Abrir Menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffdcb5" viewBox="0 0 256 256"><path d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64ZM216,96H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
      </button>

        <?php require get_template_directory() . "/inc/Menu.php" ?>

    </div>
  </header>
  
