  
  <footer>
    <div class="container">
      <div class="social">
        <img src="<?= get_template_directory_uri() ?>/public/img/svg/logo.svg" alt="Da Penha Salgaderia">
        <div class="links">
          <a href="" target="_blank" title="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#9d1824" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"></path></svg>
          </a>
          <a href="" target="_blank" title="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#9d1824" viewBox="0 0 256 256"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path></svg>
          </a>
            <a href="" target="_blank" title="Whatsapp">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#9d1824" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>
            </a>
        </div>
      </div>
      <div class="institutional">
        <strong>Institucional</strong>
        <ul>
          <li>
            <a href="#">Início</a>
          </li>
          <li>
            <a href="#historia">História</a>
          </li>
          <li>
            <a href="#produtos">Produtos</a>
          </li>
          <li>
            <a href="#lojinha">Lojinha</a>
          </li>
          <li>
            <a href="#revenda">Revenda</a>
          </li>
          <li>
            <a href="#contato">Contato</a>
          </li>
          </ul>
      </div>
      <div class="products">
        <strong>Produtos</strong>
        <ul>
          <li>
            <a href="#fritura">Linha Fritura</a>
          </li>
          <li>
            <a href="#pre-assados">Pré Assados</a>
          </li>
          <li>
            <a href="#assados-ou-fritos">Assados ou Fritos</a>
          </li>
          <li>
            <a href="#bar-e-restaurante">Bar e Restaurante</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="rights">
      <div class="container">
        <p><strong>Da Penha Salgaderia</strong> - Copyright ® 2023 - Todos os direitos reservados</p>
        <p>Desenvolvido com ❤ por: <a href="https://welton-nogueira.vercel.app/" target="_blank">Welton Nogueira</a></p>
      </div>
    </div>
  </footer>

  <div data-timeline="dialog" class="timeline-mobile">
    <button data-timeline="close" aria-label="Fechar linha do tempo">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#9d1824" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
    </button>
      <div class="slide">
        <div class="swiper">
          <div class="swiper-wrapper">
              <?php while(have_rows("events")): the_row(); ?>
                <div class="swiper-slide">
                  <div class="timeline-item">
                    <strong><?= the_sub_field("year") ?></strong>
                  </div>
                  <div class="content">
                    <?= the_sub_field("content") ?>
                  </div>
                </div>
              <?php endwhile; ?>
              <div class="swiper-slide end">
                <img src="<?= get_template_directory_uri() ?>/public/img/svg/next-chapter-cartoon.svg" alt="Acompanhe os próximos capítulos">
                
                <p>Acompanhe as cenas<br /> dos próximos capítulos:</p>

                <div class="social">
                  <a href="https://instagram.com/dapenhasalgaderia?igshid=MzRlODBiNWFlZA==" target="_blank" title="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#9d1824" viewBox="0 0 256 256"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg>
                  </a>
                  <a href="https://www.facebook.com/dapenhaoficial?mibextid=LQQJ4d" target="_blank" title="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#9d1824" viewBox="0 0 256 256"><path d="M232,128a104.16,104.16,0,0,1-91.55,103.26,4,4,0,0,1-4.45-4V152h24a8,8,0,0,0,8-8.53,8.17,8.17,0,0,0-8.25-7.47H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.53A8.17,8.17,0,0,0,167.73,80H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.53A8.17,8.17,0,0,0,96.27,152H120v75.28a4,4,0,0,1-4.44,4A104.15,104.15,0,0,1,24.07,124.09c2-54,45.74-97.9,99.78-100A104.12,104.12,0,0,1,232,128Z"></path></svg>
                  </a>
                </div>

              </div>
          </div>
        </div>
        <div class="controls">
          <button data-prev="timeline">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#9d1824" viewBox="0 0 256 256"><path d="M224,88v80a16,16,0,0,1-16,16H128v40a8,8,0,0,1-13.66,5.66l-96-96a8,8,0,0,1,0-11.32l96-96A8,8,0,0,1,128,32V72h80A16,16,0,0,1,224,88Z"></path></svg>
          </button>
          <button data-next="timeline">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#9d1824" viewBox="0 0 256 256"><path d="M237.66,133.66l-96,96A8,8,0,0,1,128,224V184H48a16,16,0,0,1-16-16V88A16,16,0,0,1,48,72h80V32a8,8,0,0,1,13.66-5.66l96,96A8,8,0,0,1,237.66,133.66Z"></path></svg>
          </button>
        </div>
        <img src="<?= get_template_directory_uri() ?>/public/img/webp/respect-cartoon.webp" alt="Respeita minha história">
      </div>
  </div>

    <div class="mobile-menu">
      <div class="header">
      <button data-menu="close" aria-label="Fechar Menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffdcb5" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
      </button>
      </div>
      <?php require get_template_directory() . "/inc/Menu.php" ?>
    </div>

    <div class="popup">
      <button aria-label="Fechar Popup">
        Fechar
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
      </button>
      <div class="image">
        <img src="<?= get_template_directory_uri() ?>/public/img/webp/popup.webp" alt="">
        <?= do_shortcode('[contact-form-7 id="4440791" title="Reinauguração"]') ?>
      </div>
    </div>

    <a href="https://wa.me/552136177119?text=Ol%C3%A1%21+Gostaria+de+fazer+um+pedido+%21" target="_blank" class="whatsapp-button" title="Whatsapp">
      <img src="<?= get_template_directory_uri() ?>/public/img/webp/whatsapp-icon.webp" alt="Entre em contato por whatsapp!">
    </a>

    <script type="module" src="<?= get_template_directory_uri() ?>/dist/js/script.js"></script>
    <?php wp_footer() ?>
  </body>
</html>
