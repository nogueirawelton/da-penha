<?php
  $timeline_items = [];

  while(have_rows("events")) {
    the_row();

    $timeline_item = (object)[
      "id" => $id,
      "year" => get_sub_field("year"),
      "content" => get_sub_field("content")
    ];
    $timeline_items[] = $timeline_item;
  }
  wp_reset_postdata();
  $last_item = array_pop($timeline_items);
?>

<section id="historia" data-nav>
  <div class="banner"></div>

  <div class="title <?= wp_is_mobile() ? "mobile" : "" ?>">
    <?php if(!wp_is_mobile()): ?>
        <div class="start">
          <p>Uma jornada que atravessa décadas, repleta de momentos que aquecem o coração. Vamos voltar no tempo e mergulhar na emocionante história da nossa empresa, uma história que começou a ser escrita lá atrás, no coração de uma família unida.</p>
        </div>
      <?php endif; ?>

    <div class="filled">
      <p>Senta que lá vem</p>
      <h2>História</h2>
      <img class="cartoon big"src="<?= get_template_directory_uri() ?>/public/img/webp/respect-cartoon.webp" alt="">

      <?php if(wp_is_mobile()): ?>
        <button class="start-slide">Começar</button>
      <?php endif; ?>

    </div>
  </div>

  <?php if(!wp_is_mobile()): ?>
    <div class="timeline">

      <strong>Início</strong>

      <div class="container">
          <?php foreach($timeline_items as $key => $value): ?>
            <div id="<?= $value->id ?>" class="timeline-item" data-animate>
              <div class="timeline-item-container">
                <div class="header">
                  <div class="indicator"></div>
                  <strong class="date"><?= $value->year ?></strong>
                </div>
                <div class="content">
                  <?= $value->content ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>

      <div class="end">

        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="last-arrow" data-animate>
          <div class="year">
            <strong class="date"><?= $last_item->year ?></strong>
          </div>
          <img src="<?= get_template_directory_uri() ?>/public/img/svg/big-arrow.svg" alt="Últimas atualizações">
        </div>

      </div>

      <div class="last-item">

        <div>
          <div id="<?= $last_item->id ?>" class="timeline-item" data-animate>
            <div class="timeline-item-container">
              <div class="header">
              </div>
              <div class="content">
                <?= $last_item->content ?>
              </div>
            </div>
          </div>
        </div>

        <div class="next-chapter">
          <p>Acompanhe as cenas<br /> dos próximos capítulos:</p>

          <div class="social">
            <a href="" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#9d1824" viewBox="0 0 256 256"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg>
            </a>
            <a href="" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#9d1824" viewBox="0 0 256 256"><path d="M232,128a104.16,104.16,0,0,1-91.55,103.26,4,4,0,0,1-4.45-4V152h24a8,8,0,0,0,8-8.53,8.17,8.17,0,0,0-8.25-7.47H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.53A8.17,8.17,0,0,0,167.73,80H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.53A8.17,8.17,0,0,0,96.27,152H120v75.28a4,4,0,0,1-4.44,4A104.15,104.15,0,0,1,24.07,124.09c2-54,45.74-97.9,99.78-100A104.12,104.12,0,0,1,232,128Z"></path></svg>
            </a>
            <img src="<?= get_template_directory_uri() ?>/public/img/svg/next-chapter-cartoon.svg" alt="Acompanhe os próximos capítulos">
          </div>
          
        </div>

      </div>

    </div>
  <?php endif; ?>
</section>

