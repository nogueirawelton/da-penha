<?php
  /*
  Template Name: Home
  */
?>

<?php get_header() ?>

<main id="home">
  <?php require_once get_template_directory() . "/inc/Home/Banner.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/History.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Benefits.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Products.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Shop.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Resale.php" ?>
  <?php require_once get_template_directory() . "/inc/Home/Contact.php" ?>
</main>

<?php get_footer() ?>