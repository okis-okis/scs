
const mapEl = document.querySelector('.find-us__map');





function handleScroll() {
  console.log('show map el')
  mapEl.style.display = 'block';

  window.removeEventListener('scroll', handleScroll);
}


window.addEventListener('scroll', handleScroll);
