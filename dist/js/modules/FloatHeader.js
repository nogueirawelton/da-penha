import debounce from '../utils/debounce.js';

export default class FloatHeader {
  #header;
  constructor({ element }) {
    this.#header = document.querySelector(element);
  }

  #handleScroll() {
    if (window.scrollY > 0 && this.#header.scrolled != 'true') {
      this.#header.dataset.scrolled = 'true';
      return;
    }

    this.#header.dataset.scrolled = 'false';
  }

  init() {
    this.#handleScroll();

    if (this.#header) {
      window.addEventListener(
        'scroll',
        debounce(this.#handleScroll.bind(this), 100)
      );
    }

    return this;
  }

  static initialize(deps) {
    return new FloatHeader(deps).init();
  }
}
