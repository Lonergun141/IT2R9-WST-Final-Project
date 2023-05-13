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

  
const observer = new IntersectionObserver((entries) => {

  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show')
    }
  });
});

const hiddenElementsLeft = document.querySelectorAll('.hidden-left');
const hiddenElementsRight = document.querySelectorAll('.hidden-right');

hiddenElementsLeft.forEach((el) => observer.observe(el));
hiddenElementsRight.forEach((el) => observer.observe(el));

const observerAbout = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show-about");
    } else {
      entry.target.classList.remove("show-about");
    }
  });
});

const heal = document.querySelectorAll(".reveal-hidden-left");
const hear = document.querySelectorAll(".reveal-hidden-right");

hiddenElementsLeft.forEach((el) => observer.observe(el));
hiddenElementsRight.forEach((el) => observer.observe(el));
