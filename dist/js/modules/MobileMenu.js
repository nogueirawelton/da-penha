export default class MobileMenu {
  #menu;
  #openHandler;
  #closeHandler;

  constructor({ menu, closeHandler, openHandler }) {
    this.#menu = document.querySelector(menu);
    this.#openHandler = document.querySelector(openHandler);
    this.#closeHandler = document.querySelector(closeHandler);
  }

  #handleCloseMenu() {
    this.#menu.dataset.open = 'false';
    document.documentElement.removeAttribute("style");
  }

  #handleOpenMenu() {
    this.#menu.dataset.open = 'true';
    document.documentElement.style.overflow = 'hidden';
  }

  init() {
    if (this.#openHandler && this.#closeHandler && this.#menu) {
      this.#openHandler.addEventListener(
        'click',
        this.#handleOpenMenu.bind(this)
      );

      this.#closeHandler.addEventListener(
        'click',
        this.#handleCloseMenu.bind(this)
      );

      this.#menu
        .querySelectorAll('a')
        .forEach((link) =>
          link.addEventListener('click', this.#handleCloseMenu.bind(this))
        );
    }
    return this;
  }

  static initialize(deps) {
    return new MobileMenu(deps).init();
  }
}
