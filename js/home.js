const categoryButtons = document.querySelectorAll('.category-button');
const foodCards = document.querySelectorAll('.food-card');
const searchBtn = document.getElementById('search-btn');
const searchInput = document.getElementById('search-input');

function filterFoodCards(category) {
  foodCards.forEach(card => {
    if (category === 'all' || card.dataset.category === category) {
      card.style.opacity = '1';
      card.style.pointerEvents = 'auto';
      card.style.display = 'block';
    } else {
      card.style.opacity = '0';
      card.style.display= 'none';
    }
  });
}

categoryButtons.forEach(button => {
  button.addEventListener('click', () => {
    // remove active class from all buttons except for the one that was clicked
    categoryButtons.forEach(b => b.classList.remove('active'));
    button.classList.add('active');

    filterFoodCards(button.dataset.category);
  });
});

// Add an event listener for the 'Enter' key
searchInput.addEventListener('keypress', function (e) {
  if (e.key === 'Enter') {
    search();
  }
});

// Add an event listener for the search button click
searchBtn.addEventListener('click', search);

function search() {
  const searchTerm = searchInput.value.toLowerCase();

  foodCards.forEach(card => {
    const title = card.querySelector('h3').textContent.toLowerCase();

    if (title.includes(searchTerm)) {
      card.style.opacity = '1';
      card.style.pointerEvents = 'auto';
      card.style.display = 'block';
    } else {
      card.style.opacity = '0';
      card.style.display = 'none';
    }
  });
}



//scroll effect
// const observer = new IntersectionObserver((entries, observer) => {
//   //ge loop each entries constant
//    entries.forEach(entry => {
//     console.log(entry)
//     //if ang user makita ma view ang screen ana nga part
//      if (entry.isIntersecting) {
//       //ge initialize ang css na show nga mo opacity 1
//       entry.target.classList.add('show');
//        observer.unobserve(entry.target);
//     }else{
//       entry.target.classList.remove('show')
//     }
//    });
//   });
//   const hiddenElements = document.querySelectorAll('.hidden');
//   hiddenElements.forEach((el) => observer.observe(el));
  
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    } else {
      entry.target.classList.remove('show')
    }
  });
});

const hiddenElementsLeft = document.querySelectorAll('.hidden-left');
const hiddenElementsRight = document.querySelectorAll('.hidden-right');

hiddenElementsLeft.forEach((el) => observer.observe(el));
hiddenElementsRight.forEach((el) => observer.observe(el));