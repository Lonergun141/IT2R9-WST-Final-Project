function changeBG(){

   if (window.innerWidth < 799) {
     return; // Do not execute the code if the screen size is below 799
  }

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
 if (window.innerWidth >= 799) {
   window.addEventListener('scroll', changeBG);
 }

// //ge call ang function
 window.addEventListener('scroll', changeBG);



// window.addEventListener('scroll', function() {
//   var label = document.getElementById('scroll-label');
//   var scrollPosition = window.scrollY;

//   if (scrollPosition > 0) {
//     label.classList.add('scroll-black');
//   } else {
//     label.classList.remove('scroll-black');
//   }
// });


