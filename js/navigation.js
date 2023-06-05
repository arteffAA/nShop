const burgerIcon = document.querySelector('.burger-icon');
const menuItems = document.querySelector('.menu-items');

burgerIcon.addEventListener('click', () => {
  menuItems.classList.toggle('show');
});