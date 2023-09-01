export default function popup(element) {
  const popup = document.querySelector(element);
  const close = popup?.querySelector('button');

  function closePopup() {
    popup.dataset.show = 'false';
  }

  function popupLead() {
    localStorage.setItem('popupFormFilled', true);
    closePopup();
  }

  function openPopup() {
    if (popup) {
      popup.dataset.show = 'true';

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
