<section id="lojinha" data-nav>
  <div class="banner">

    <div class="title">
      <h2>Lojinha</h2>
    </div>

  </div>

  <?php if(have_rows("shops")): ?>
    <?php while(have_rows("shops")): the_row(); ?>
      <div class="container">
        <h3><?= get_sub_field("shop_title") ?></h3>
        
        <div class="grid">
          <div class="left">
            <div class="contact">

              <a href="tel:<?= preg_replace("/[()\s-]/", "", get_sub_field("shop_whatsapp")) ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f0b215" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>
                <?= get_sub_field("shop_whatsapp") ?>
              </a>

              <a href="mailto:<?= get_sub_field("shop_email") ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f0b215" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>
                <?= get_sub_field("shop_email") ?>
              </a>

              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f0b215" viewBox="0 0 256 256"><path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path></svg>
                <?= get_sub_field("shop_address") ?>
              </span>

            </div>
            <div class="shop-image">
              <?php if(get_sub_field("shop_image")): ?>
                <img src="<?= get_sub_field("shop_image") ?>" alt="teste">
              <?php else: ?>
                <div class="preview">
                  <strong>Em Breve!</strong>
                </div>
              <?php endif; ?>
            </div>
            
          </div>

          <div class="right">
            <div class="map">
              <?= get_sub_field("shop_map") ?>
            </div>

            <div class="schedules">

              <div>
                <h4>Horários</h4>
                <ul>
                  <?php while(have_rows("shop_schedules")): the_row() ?>
                    <li><?= get_sub_field("shop_schedules_item") ?></li>
                  <?php endwhile; wp_reset_postdata();?>
                </ul>
              </div>

              <div>
                <h4>Delivery</h4>

                <ul>
                <?php while(have_rows("shop_delivery")): the_row() ?>
                    <li><?= get_sub_field("shop_delivery_item") ?></li>
                  <?php endwhile; wp_reset_postdata();?>
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="wpp">
          <a href="https://wa.me/55<?= preg_replace("/[()\s-]/", "", get_sub_field("shop_whatsapp")) ?>?text=Ol%C3%A1%21+Gostaria+de+fazer+um+pedido+%21" target="_blank">Peça pelo whatsapp</a>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  <?php endif; ?>
  <div class="bike-cartoon">
    <img src="<?= get_template_directory_uri() ?>/public/img/svg/bike-cartoon.svg" alt="Peça nosso devlivery por whatsapp!">
  </div>
  
</section>