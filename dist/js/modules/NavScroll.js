import debounce from './debounce.js';

export default class NavScroll {
  #navLinks;

  constructor({ element }) {
    this.#navLinks = document.querySelectorAll(element);
  }

  #handleScroll() {
    const refSections = document.querySelectorAll('section');

    refSections.forEach((section, index) => {
      const sectionTop = section.offsetTop - 8 * 16;

      if (window.scrollY >= sectionTop) {
        this.#navLinks.forEach((item) => (item.dataset.current = 'false'));
        this.#navLinks[index].dataset.current = 'true';
        return;
      }
    });
  }

  #handleClick(e) {
    e.preventDefault();

    const hash = e.target.getAttribute('href');
    history.replaceState(null, '', hash);

    this.#scrollToHashSection(hash);
  }

  #scrollToHashSection(hash) {
    const section = document.querySelector(hash);

    window.scrollTo(0, section.offsetTop - 8 * 16);
  }

  init() {
    const initialHash = location.hash;

    if (initialHash) {
      this.#scrollToHashSection(initialHash);
      this.#handleScroll();
    }

    if (!!this.#navLinks.length) {
      this.#navLinks.forEach((link) => {
        link.addEventListener('click', this.#handleClick.bind(this));
      });

      window.addEventListener(
        'scroll',
        debounce(this.#handleScroll.bind(this), 200)
      );
    }

    return this;
  }

  static initialize(deps) {
    return new NavScroll(deps).init();
  }
}
