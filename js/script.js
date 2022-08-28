let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let orderbtn = document.querySelector('.btn');
menu.onclick = function () {

  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');

}

orderbtn.onclick = function () {
  orderbtn.classList.toggle('active');
}

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if(window.scrollY > 60){
    document.querySelector('#scroll-top').classList.add('active');
  }else{
    document.querySelector('#scroll-top').classList.remove('active');
  }

}
function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}
function fadeOut(){
  setInterval(loader, 1000);
}
window.onload = fadeOut();