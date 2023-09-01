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

      .container {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        gap: 2rem;
        height: 100vh;
        background: #ffdcb5;
        padding-inline: 1rem;
      }

      .container img {
        max-width: 150px;
      }

      @media (min-width: 768px) {
        .container img {
          max-width: 200px;
        }
      }

      .container strong {
        font-family: Gooper;
        color: #9d1824;
        font-size: 2rem;
        text-align: center;
        display: block;
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
</head>
<body>

    <main>
      <div class="container">
        <img src="<?= get_template_directory_uri() ?>/public/img/svg/next-chapter-cartoon.svg" alt="Contato realizado">
        <strong>Contato realizado com sucesso!</strong>
        <a href="<?= get_site_url() ?>">Voltar para o site</a>
      </div>
    </main>

</body>
</html>
