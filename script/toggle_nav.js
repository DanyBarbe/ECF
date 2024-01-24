const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('navbar');

function toggleNav(){
  console.log('click');
  if(!hamburger.classList.contains('active')){
    nav.classList.add('open');
    hamburger.classList.add('active');
  }else{
    nav.classList.remove('open');
    hamburger.classList.remove('active');
  }
}

hamburger.addEventListener('click', toggleNav);