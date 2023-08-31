export default function popup(element) {
  const popup = document.querySelector(element);
  const close = popup?.querySelector('button');

  function closePopup() {
    popup.dataset.show = 'false';
    document.documentElement.removeAttribute('style');
  }

  function popupLead() {
    localStorage.setItem('popupFormFilled', true);
    closePopup();
  }

  function openPopup() {
    if (popup) {
      popup.dataset.show = 'true';
      document.documentElement.style.overflow = 'hidden';

      close.addEventListener('click', closePopup);
      window.addEventListener('keyup', (e) => {
        if (e.key == 'Escape') {
          closePopup();
        }
      });
    }
  }

  if (!localStorage.getItem('popupFormFilled')) {
    openPopup();
  }

  return { popupLead };
}
