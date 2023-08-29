  
  <footer>

  </footer>

  <!-- <div data-timeline="dialog" class="timeline-mobile">
    <button data-timeline="close"></button>
    <div class="slide"></div>
    <div class="controls"></div>
  </div> -->

    <div class="mobile-menu">
      <div class="header">
      <button data-menu="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffdcb5" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
      </button>
      </div>
      <?php require get_template_directory() . "/inc/Menu.php" ?>
    </div>

    <a href="" target="_blank" class="whatsapp-button" title="Whatsapp">
      <img src="<?= get_template_directory_uri() ?>/public/img/webp/whatsapp-icon.webp" alt="Entre em contato por whatsapp!">
    </a>

    <script type="module" src="<?= get_template_directory_uri() ?>/dist/js/script.js"></script>
    <?php wp_footer() ?>
  </body>
</html>
