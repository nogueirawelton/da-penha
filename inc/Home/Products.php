<section id="produtos" data-nav>
  <div class="banner">
    <div class="title">
      <h2>Produtos</h2>
    </div>
  </div>

  <div class="container">

    <?php if(have_rows("frying")): ?>
      <div class="product-type" id="fritura">
        <h3 class="orange">Linha Fritura</h3>
        <div class="slide">
          <button data-prev="frying">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
          </button>
          <div class="swiper" data-swiper="frying">
            <div class="swiper-wrapper">
              <?php while(have_rows("frying")): the_row() ?>
                <div class="swiper-slide">
                  <div class="item-container">
                    <div class="image">
                      <img src="<?= get_sub_field("image") ?>" alt="<?= get_sub_field("name") ?>">
                      <?php if(get_sub_field("description")): ?>
                        <div class="overlay">
                          <div class="orange">
                            <p><?= get_sub_field("description") ?></p>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
                    <h4 class="orange"><?= get_sub_field("name") ?></h4>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata();?>
            </div>
          </div>
          <button data-next="frying">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>
          </button>
        </div>
      </div>
    <?php endif; ?>

    <?php if(have_rows("pre_baked")): ?>
      <div class="product-type" id="pre-assados">
        <h3 class="red">Pré-Assados</h3>
        <div class="slide">
          <button data-prev="pre_baked">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
          </button>
          <div class="swiper" data-swiper="pre_baked">
            <div class="swiper-wrapper">
              <?php while(have_rows("pre_baked")): the_row() ?>
                <div class="swiper-slide">
                  <div class="item-container">
                    <div class="image">
                      <img src="<?= get_sub_field("image") ?>" alt="<?= get_sub_field("name") ?>">
                      <div class="overlay">
                        <div class="red">
                          <p><?= get_sub_field("description") ?></p>
                        </div>
                      </div>
                    </div>
                    <h4 class="red"><?= get_sub_field("name") ?></h4>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata();?>
            </div>
          </div>
          <button data-next="pre_baked">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>
          </button>
        </div>
      </div>
    <?php endif; ?>

    <?php if(have_rows("baked_or_fried")): ?>
      <div class="product-type" id="assados-ou-fritos">
        <h3 class="<?= get_sub_field("type") == "fried" ? "orange" : "red" ?>">Assados <span class="black">Ou</span> <span class="orange">Fritos</span></h3>
        <div class="slide">
          <button data-prev="baked_or_fried">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
          </button>
          <div class="swiper" data-swiper="baked_or_fried">
            <div class="swiper-wrapper">
              <?php while(have_rows("baked_or_fried")): the_row() ?>
                <div class="swiper-slide">
                  <div class="item-container">
                    <div class="image">
                      <img src="<?= get_sub_field("image") ?>" alt="<?= get_sub_field("name") ?>">
                      <div class="overlay">
                        <div class="<?= get_sub_field("type") == "fried" ? "orange" : "red" ?>">
                          <p><?= get_sub_field("description") ?></p>
                        </div>
                      </div>
                    </div>
                    <h4 class="<?= get_sub_field("type") == "fried" ? "orange" : "red" ?>"><?= get_sub_field("name") ?></h4>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata();?>
            </div>
          </div>
          <button data-next="baked_or_fried">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>
          </button>
        </div>
      </div>
    <?php endif; ?>

    <?php if(have_rows("bar_and_restaurant")): ?>
      <div class="product-type" id="bar-e-restaurante">
        <h3 class="red">Bar e Restaurante</h3>
        <div class="slide">
          <button data-prev="bar_and_restaurant">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
          </button>
          <div class="swiper" data-swiper="bar_and_restaurant">
            <div class="swiper-wrapper">
              <?php while(have_rows("bar_and_restaurant")): the_row() ?>
                <div class="swiper-slide">
                  <div class="item-container">
                    <div class="image">
                      <img src="<?= get_sub_field("image") ?>" alt="<?= get_sub_field("name") ?>">
                      <div class="overlay">
                        <div class="red">
                          <p><?= get_sub_field("description") ?></p>
                        </div>
                      </div>
                    </div>
                    <h4 class="red"><?= get_sub_field("name") ?></h4>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata();?>
            </div>
          </div>
          <button data-next="bar_and_restaurant">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>
          </button>
        </div>
      </div>
    <?php endif; ?>

  </div>
  
</section>