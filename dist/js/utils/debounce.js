export default function debounce(func, delay) {
  let timer;
  return () => {
    clearTimeout(timer);
    timer = setTimeout(func, delay);
  };
}
