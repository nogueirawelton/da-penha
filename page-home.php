<?php
  /*
  Template Name: Home
  */
?>

<?php get_header() ?>

<main>
  <?php require_once get_template_directory() . "/inc/Home/Banner.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/History.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Benefits.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Products.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Shop.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Contato.php" ?>
</main>

<?php get_footer() ?>