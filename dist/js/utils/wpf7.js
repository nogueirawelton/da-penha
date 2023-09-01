import popup from './popup.js';

const { popupLead } = popup('.popup');

export default function wpf7() {
  function setIsLoading(input) {
    input.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffdcb5" viewBox="0 0 256 256"><path d="M232,128a104,104,0,0,1-208,0c0-41,23.81-78.36,60.66-95.27a8,8,0,0,1,6.68,14.54C60.15,61.59,40,93.27,40,128a88,88,0,0,0,176,0c0-34.73-20.15-66.41-51.34-80.73a8,8,0,0,1,6.68-14.54C208.19,49.64,232,87,232,128Z"></path></svg>';
    input.setAttribute('disabled', '');
  }

  function removeIsLoading(input) {
    input.innerHTML = 'Enviar';
    input.removeAttribute('disabled');
  }

  document.querySelectorAll('form').forEach((form) => {
    form.addEventListener('submit', (event) => {
      const input = event.target.querySelector("[type='submit']");
      setIsLoading(input);
    });
  });

  document.addEventListener('wpcf7mailsent', (event) => {
    const input = event.target.querySelector("[type='submit']");
    removeIsLoading(input);

    popupLead();
    window.open('/contato-realizado', '_blank');
  });

  document.addEventListener('wpcf7invalid', (event) => {
    const input = event.target.querySelector("[type='submit']");
    removeIsLoading(input);

    Swal.fire({
      title: 'Erro ao enviar!',
      text: 'Verifique os campos e tente novamente',
      icon: 'error',
      confirmButtonText: 'Fechar',
    });
  });
}
