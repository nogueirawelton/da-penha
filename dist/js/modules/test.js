const buttons = querySelectorAll('button');

buttons.forEach((item) => {
  item.addEventListener('click', (e) => {
    e.target.closest('tr').dataset.id;
  });
});
