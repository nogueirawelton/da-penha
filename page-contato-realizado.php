<?php
  /*
  Template Name: Contato Realizado
  */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Realizado | Da penha Salgaderia</title>

    <link rel="manifest" href="<?= get_template_directory_uri() ?>/public/site.webmanifest" />
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/public/apple-touch-icon.png"  type="image/png"/>
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/public/favicon.ico" type="image/x-icon">

    <style>

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

       @font-face {
          font-family: Gooper;
          font-weight: 700;
          src: url('<?= get_template_directory_uri() ?>/dist/fonts/GooperBold.woff2') format('woff2');
          font-display: swap; 
        }

        @font-face {
          font-family: Gooper;
          font-weight: 400;
          src: url('<?= get_template_directory_uri() ?>/dist/fonts/GooperRegular.woff2') format('woff2');
          font-display: swap; 
        }

      .container {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        gap: 2rem;
        min-height: 100vh;
        padding-block: 1rem;
        background: #ffdcb5;
        padding-inline: 1rem;
      }

      .container img {
        max-width: 150px;
      }

      .container p {
        color: #222222;
        font-family: Gooper;
        max-width: 600px;
        text-align: center;
      }

      @media (min-width: 768px) {
        .container img {
          max-width: 200px;
        }
      }

      .container > strong {
        font-family: Gooper;
        color: #9d1824;
        font-size: 2rem;
        text-align: center;
        display: block;
      }

      .container div {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .container .or {
        opacity: .6;
        position: relative;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        gap: .25rem;
        justify-content: center;
      }

      .container .or::before {
          content: '';
          display: block;
          width: 12px;
          height: 3px;
          background: #222222;
          opacity: .6;
        } 

        .container .or::after {
          content: '';
          display: block;
          width: 12px;
          height: 3px;
          background: #222222;
          opacity: .6;
        }

      .container a {
        display: block;
        padding: 1rem 2rem;
        font-family: Gooper;
        background:  #f0b215;
        color: #9d1824;
        font-size: 1.5rem;
        clip-path: polygon(0 0, 100% 12%, 95% 95%, 0% 100%);
        text-decoration: none;
      }
    </style>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EVFLNGW6H5%22%3E"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EVFLNGW6H5');
  </script>
  
  <script>
    gtag('event', 'conversion', {'send_to': 'AW-863435822/nParCO__tNsYEK7425sD'});
  </script>
</head>
<body>
    <?php
      $formOrigin = $_GET["f"];
    ?>
    <main>
      <div class="container">
        <img src="<?= get_template_directory_uri() ?>/public/img/svg/next-chapter-cartoon.svg" alt="Contato realizado">
        <strong><?= $formOrigin == "reinauguracao" ? "Cadastro" : "Contato" ?> realizado com sucesso!</strong>
        <?php if($formOrigin == "reinauguracao"): ?>
          <div>
            <p>Ao fazer um pedido em nosso Cardápio Digital utilize o código: <strong>NOVADAPENHA</strong> e receba seu desconto !</p>
            <p class="or">ou</p>
            <p>Ao comprar presencialmente em nossa loja, nos comunique seu <strong>E-mail</strong> ou <strong>Número do Celular</strong> e ganhe o desconto !</p>
          </div>
        <?php endif; ?>
        <a href="<?= get_site_url() ?>">Voltar para o site</a>
      </div>
    </main>

</body>
</html>
