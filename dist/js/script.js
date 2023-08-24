import FloatHeader from './modules/FloatHeader.js';
import NavScroll from './modules/NavScroll.js';

window.onload = () => {
  FloatHeader.initialize({ element: 'header' });
  NavScroll.initialize({ element: 'header nav a' });
};
