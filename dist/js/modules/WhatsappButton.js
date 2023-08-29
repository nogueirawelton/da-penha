export default class WhatsappButton {
  #button;
  constructor({ element }) {
    this.#button = document.querySelector(element);
  }

  #handleScroll() {
    if (
      window.scrollY >
      window.innerHeight - document.querySelector('header').scrollHeight - 1
    ) {
      this.#button.dataset.show = 'true';
      return;
    }

    this.#button.dataset.show = 'false';
  }

  init() {
    if (this.#button) {
      window.addEventListener('scroll', this.#handleScroll.bind(this), 100);
    }

    return this;
  }

  static initialize(deps) {
    return new WhatsappButton(deps).init();
  }
}
