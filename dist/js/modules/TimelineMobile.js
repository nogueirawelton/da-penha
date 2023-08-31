export class TimelineMobile {
  #open;
  #close;
  #dialog;

  constructor({ element }) {
    this.#open = document.querySelector(`[data-${element}='open']`);
    this.#close = document.querySelector(`[data-${element}='close']`);
    this.#dialog = document.querySelector(`[data-${element}='dialog']`);
  }

  #handleOpen() {
    this.#dialog.dataset.open = 'true';
    document.documentElement.style.overflow = 'hidden';
  }

  #handleClose() {
    this.#dialog.dataset.open = 'false';
    document.documentElement.removeAttribute('style');
  }

  init() {
    if (this.#open && this.#close && this.#dialog) {
      this.#open.addEventListener('click', this.#handleOpen.bind(this));
      this.#close.addEventListener('click', this.#handleClose.bind(this));

      const swiper = new Swiper(this.#dialog.querySelector('.swiper'), {
        navigation: {
          prevEl: "[data-prev='timeline']",
          nextEl: "[data-next='timeline']",
        },
      });
    }
    return this;
  }

  static initialize(deps) {
    return new TimelineMobile(deps).init();
  }
}
