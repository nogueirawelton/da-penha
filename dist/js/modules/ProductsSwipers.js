export default class ProductsSwipers {
  #elements;

  constructor({ elements }) {
    this.#elements = elements;
  }

  init() {
    if (this.#elements.length) {
      this.#elements.forEach((element) => {
        new Swiper(`[data-swiper="${element}"]`, {
          slidesPerView: 1,
          spaceBetween: 64,
          navigation: {
            prevEl: `[data-prev="${element}"]`,
            nextEl: `[data-next="${element}"]`,
          },
          watchOverflow: true,
          breakpoints: {
            768: {
              slidesPerView: 2,
            },

            1280: {
              slidesPerView: 3,
            },
          },
        });
      });
    }
    return this;
  }

  static initialize(deps) {
    return new ProductsSwipers(deps).init();
  }
}
