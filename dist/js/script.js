import FloatHeader from './modules/FloatHeader.js';
import MobileMenu from './modules/MobileMenu.js';
import NavScroll from './modules/NavScroll.js';
import ProductsSwipers from './modules/ProductsSwipers.js';
import TimelineAnimation from './modules/TimelineAnimation.js';
import WhatsappButton from './modules/WhatsappButton.js';

window.onload = () => {
  FloatHeader.initialize({ element: 'header' });

  NavScroll.initialize({
    desktopLinks: 'header nav a',
    mobileLinks: '.mobile-menu nav a',
  });

  TimelineAnimation.initialize({ element: '[data-animate]' });

  MobileMenu.initialize({
    openHandler: '[data-menu="open"]',
    closeHandler: '[data-menu="close"]',
    menu: '.mobile-menu',
  });

  WhatsappButton.initialize({
    element: '.whatsapp-button',
  });

  ProductsSwipers.initialize({
    elements: ['frying', 'pre_baked', 'baked_or_fried', 'bar_and_restaurant'],
  });
};
