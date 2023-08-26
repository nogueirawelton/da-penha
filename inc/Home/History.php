<?php
  $timeline_items = [];

  $id = 0;

  while(have_rows("events")) {
    the_row();

    $timeline_item = (object)[
      "id" => $id,
      "year" => get_sub_field("year"),
      "content" => get_sub_field("content")
    ];

    $timeline_items[] = $timeline_item;
    $id++;
  }

  $last_item = array_pop($timeline_items);
?>

<section id="historia">
  <div class="background"></div>

  <div class="title <?= wp_is_mobile() ? "mobile" : "" ?>">
    <?php if(!wp_is_mobile()): ?>
        <div class="start">
          <p>Uma jornada que atravessa décadas, repleta de momentos que aquecem o coração. Vamos voltar no tempo e mergulhar na emocionante história da nossa empresa, uma história que começou a ser escrita lá atrás, no coração de uma família unida.</p>
        </div>
      <?php endif; ?>
    <div class="filled">
      <p>Senta que lá vem</p>
      <strong>História</strong>
      <!-- <img class="cartoon small"src="<?= get_template_directory_uri() ?>/public/img/cartoon-1.svg" alt=""> -->
      <img class="cartoon big"src="<?= get_template_directory_uri() ?>/public/img/cartoon-2.svg" alt="">
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
            <img src="<?= get_template_directory_uri() ?>/public/img/big-arrow.svg" alt="">
          </div>
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
        <div>

        </div>
      </div>

    </div>
  <?php endif; ?>
</section>

