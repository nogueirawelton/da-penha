import FloatHeader from './modules/FloatHeader.js';
import NavScroll from './modules/NavScroll.js';
import { TimelineAnimation } from './modules/TimelineAnimation.js';

window.onload = () => {
  FloatHeader.initialize({ element: 'header' });
  NavScroll.initialize({ element: 'header nav a' });
  TimelineAnimation.initialize({ element: '.timeline-item' });
};
