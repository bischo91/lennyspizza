// Nav slide
const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.mainnav');
  //Toggle Nav
  burger.addEventListener('click', () => {
    nav.classList.toggle('mainnav-active');
  });
}
navSlide();
