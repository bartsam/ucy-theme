import './app.css';

document.querySelector('#js-test').textContent =
  '✅ Le JS et Vite fonctionnent !';
document
  .querySelector('#js-test')
  .classList.replace('text-red-500', 'text-green-500');
