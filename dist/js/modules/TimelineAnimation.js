export default class TimelineAnimation {
  #timelineItems;

  constructor({ element }) {
    this.#timelineItems = document.querySelectorAll(element);
  }

  #observe() {
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.dataset.show = 'true';
          }
        });
      },
      {
        rootMargin: '0px 0px -300px 0px',
      }
    );

    this.#timelineItems.forEach((item) => {
      observer.observe(item);
    });
  }

  init() {
    if (!!this.#timelineItems.length && window.innerWidth > 1024) {
      this.#observe();
    }
    return this;
  }

  static initialize(deps) {
    return new TimelineAnimation(deps).init();
  }
}
