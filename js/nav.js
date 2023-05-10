function changeBG(){
 var scrollValue = window.scrollY;
 var navbar =document.getElementById('myNav');
  if(scrollValue < 150){
    //if wala ni scroll down walay bg
    navbar.classList.remove('bgColor');
  }else{
    //kung mo lapas sa 150 iyang pag scroll add backgroung kanang bgColor ge initialize na gikan sa css
    navbar.classList.add('bgColor');
  }
}
//ge call ang function
window.addEventListener('scroll', changeBG);

var exploreLink = document.querySelector('.nav-links li:nth-child(3) > a');//ge kuha ang explore nga li a sa nav bar ika 3 nga anak
var navbar = document.getElementById('myNav');//ge kuha ang id sa nav bar
var megaBox = document.querySelector('.mega-box');//ge kuha ang drop down menu


exploreLink.addEventListener('mouseover', function() {//kung naka hover ang mouse
  navbar.style.backgroundColor = 'white'//mo add sya ug background na white sa navbar
  navbar.querySelectorAll('.main-link').forEach(function(link) {
    link.style.color = 'black';//ge change dayun each main link or kadtong 4 ka links sa navbar text color to black
  });
});

exploreLink.addEventListener('mouseout', function() {
  if (!megaBox.matches(':hover')) {//if wala na sa mega box ang mouse walaon niya utro ang background
    navbar.style.backgroundColor = '';
    navbar.querySelectorAll('.main-link').forEach(function(link) {
      link.style.color = '';
    });
  }
});

megaBox.addEventListener('mouseover', function() {
  navbar.style.backgroundColor = 'white';
  navbar.querySelectorAll('.main-link').forEach(function(link) {
    link.style.color = 'black';
  });
});

megaBox.addEventListener('mouseout', function() {
  if (!exploreLink.matches(':hover')) {
    navbar.style.backgroundColor = '';
    navbar.querySelectorAll('.main-link').forEach(function(link) {
      link.style.color = '';
    });
  }
});

