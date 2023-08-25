export class TimelineMobile {
  #open;
  #close;
  #dialog;

  constructor({ element }) {
    this.#open = document.querySelector(`[${element}='open']`);
    this.#close = document.querySelector(`[${element}='close']`);
    this.#dialog = document.querySelector(`[${element}='dialog']`);
  }

  #handleOpen() {
    this.#dialog.dataset.open = 'true';
  }

  #handleClose() {
    this.#dialog.dataset.open = 'false';
  }

  init() {
    this.#open.addEventListener('click', this.#handleOpen.bind(this));
    this.#close.addEventListener('click', this.#handleClose.bind(this));

    return this;
  }

  static initialize(deps) {
    return new TimelineMobile(deps).init();
  }
}
