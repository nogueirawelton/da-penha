import FloatHeader from './modules/FloatHeader.js';
import Mask from './modules/Mask.js';
import MobileMenu from './modules/MobileMenu.js';
import NavScroll from './modules/NavScroll.js';
import ProductsSwipers from './modules/ProductsSwipers.js';
import TimelineAnimation from './modules/TimelineAnimation.js';
import { TimelineMobile } from './modules/TimelineMobile.js';
import WhatsappButton from './modules/WhatsappButton.js';
import popup from './utils/popup.js';
import wpf7 from './utils/wpf7.js';

window.onload = () => {
  FloatHeader.initialize({ element: 'header' });

  NavScroll.initialize({
    desktopLinks: 'header nav a',
    mobileLinks: '.mobile-menu nav a',
    footerLinks: 'footer .products a',
  });

  TimelineAnimation.initialize({ element: '[data-animate]' });

  TimelineMobile.initialize({ element: 'timeline' });

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

  Mask.initialize({
    maskOptions: [
      {
        input: 'input[type="tel"]',
        type: 'phone',
      },
    ],
  });

  wpf7();
};
