export default class Mask {
  #maskOptions;

  constructor({ maskOptions }) {
    this.#maskOptions = maskOptions;
  }

  #mask(input, type) {
    switch (type) {
      case 'phone': {
        const inputRef = document.querySelectorAll(input);

        inputRef.forEach((item) => {
          item.setAttribute('maxlength', 15);

          item.addEventListener('input', ({ target }) => {
            if (!target.value) return;

            target.value = target.value.replace(/\D/g, '');
            target.value = target.value.replace(/(\d{2})(\d)/, '($1) $2');
            target.value = target.value.replace(/(\d)(\d{4})$/, '$1-$2');
          });
        });
      }
    }
  }

  init() {
    if (this.#maskOptions.length) {
      this.#maskOptions.forEach((item) => {
        this.#mask(item.input, item.type);
      });
    }

    return this;
  }

  static initialize(deps) {
    return new Mask(deps).init();
  }
}
