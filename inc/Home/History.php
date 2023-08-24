<section id="historia">
  <div class="background"></div>
  <div class="title">
    <div class="start">
      <strong>Início</strong>
    </div>
    <div class="filled">
      <p>Senta que lá vem</p>
      <strong>História</strong>
      <img class="cartoon"src="<?= get_template_directory_uri() ?>/src/img/cartoon-1.svg" alt="">
      <img class="cartoon"src="<?= get_template_directory_uri() ?>/src/img/cartoon-2.svg" alt="">
    </div>
  </div>

  <?php if(wp_is_mobile()): ?>
  <?php else: ?>
    <div class="timeline">
      <div class="container">
        <div class="timeline-item">
          <div class="timeline-item-container">
            <div class="header">
              <div class="indicator"></div>
              <strong class="date">91/94</strong>
            </div>
            <div class="content">
              <p>Nascem os filhos, 2 Gêmeas, e 1
                Caçula, e com 3 filhos poderosos as
                responsabilidades vêm em dose
                tripla !</p>
              <p>Com o sucesso dos seus Salgadinhos
                nos aniversários das crianças,
                Penha decide empreender, para
                ajudar com a renda da família !</p>
            </div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-item-container">
            <div class="header">
              <div class="indicator"></div>
              <strong class="date">91/94</strong>
            </div>
            <div class="content">
              <p>Nascem os filhos, 2 Gêmeas, e 1
                Caçula, e com 3 filhos poderosos as
                responsabilidades vêm em dose
                tripla </p>
              <p>Com o sucesso dos seus Salgadinhos
                nos aniversários das crianças,
                Penha decide empreender, para
                ajudar com a renda da família !</p>
            </div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-item-container">
            <div class="header">
              <div class="indicator"></div>
              <strong class="date">91/94</strong>
            </div>
            <div class="content">
              <img src="<?= get_template_directory_uri() ?>/src/img/2005.webp" alt="Helton Sérgio e Penha">
              <p>Helton, decide deixar o emprego de Gerente
                comercial de uma grande empresa de planos
                de saúde, e convida seu irmão Sérgio para se
                juntar à ele e a Penha e fundar a "Delícias da Penha".</p>
              <p>O espaço inicial da fabricação, cerca de 15m²
                é a atual lavanderia da casa da Penha e Helton,
                e começaram a comercializar as Delícias para
                Casas de Festas, Buffet's, Bares e Restaurantes.
                </p>
              <p>A demanda foi crescendo até que se mudaram
                para um espaço maior.</p>
            </div>
          </div>
        </div>
          <div class="timeline-item">
            <div class="timeline-item-container">
              <div class="header">
                <div class="indicator"></div>
                <strong class="date">91/94</strong>
              </div>
              <div class="content">
                <p>Nascem os filhos, 2 Gêmeas, e 1
                  Caçula, e com 3 filhos poderosos as
                  responsabilidades vêm em dose
                  tripla </p>
                <p>Com o sucesso dos seus Salgadinhos
                  nos aniversários das crianças,
                  Penha decide empreender, para
                  ajudar com a renda da família !</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  <?php endif; ?>
</section>