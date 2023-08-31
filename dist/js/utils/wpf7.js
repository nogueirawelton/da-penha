import popup from './popup.js';

const { popupLead } = popup('.popup');

export default function wpf7() {
  document.addEventListener('wpcf7mailsent', (event) => {
    if (event.target.parentElement.parentElement.classList.contains('image')) {
      Swal.fire({
        title: 'Cadastro realizado!',
        text: 'Aguardamos a sua presença!',
        icon: 'success',
        confirmButtonText: 'Fechar',
        willClose: popupLead,
      });
    } else {
      Swal.fire({
        title: 'Contato realizado!',
        text: 'Em breve um de nossos representantes entrará em contato',
        icon: 'success',
        confirmButtonText: 'Fechar',
      });
    }
  });

  document.addEventListener('wpcf7mailfailed', () => {
    Swal.fire({
      title: 'Erro ao enviar!',
      text: 'Verifique os campos e tente novamente',
      icon: 'error',
      confirmButtonText: 'Fechar',
    });
  });
}
