import debounce from '../utils/debounce.js';

export default class NavScroll {
  #desktopLinks;
  #mobileLinks;
  #footerLinks;

  constructor({ desktopLinks, mobileLinks, footerLinks }) {
    this.#desktopLinks = document.querySelectorAll(desktopLinks);
    this.#mobileLinks = document.querySelectorAll(mobileLinks);
    this.#footerLinks = document.querySelectorAll(footerLinks);
  }

  #handleScroll() {
    const refSections = document.querySelectorAll('section[data-nav]');

    refSections.forEach((section, index) => {
      const sectionTop =
        section.offsetTop - document.querySelector('header').scrollHeight;

      if (window.scrollY >= sectionTop) {
        this.#desktopLinks.forEach((item) => (item.dataset.current = 'false'));
        this.#mobileLinks.forEach((item) => (item.dataset.current = 'false'));

        this.#desktopLinks[index].dataset.current = 'true';
        this.#mobileLinks[index].dataset.current = 'true';
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

    window.scrollTo(
      0,
      section.offsetTop - document.querySelector('header').scrollHeight
    );
  }

  init() {
    const initialHash = location.hash;

    if (initialHash) {
      this.#scrollToHashSection(initialHash);
      this.#handleScroll();
    }

    if (!!this.#desktopLinks.length) {
      this.#desktopLinks.forEach((link) => {
        link.addEventListener('click', this.#handleClick.bind(this));
      });

      this.#mobileLinks.forEach((link) => {
        link.addEventListener('click', this.#handleClick.bind(this));
      });

      this.#footerLinks.forEach((link) => {
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
