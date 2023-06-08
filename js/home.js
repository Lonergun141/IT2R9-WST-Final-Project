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
      card.style.marginLeft = '0';
    } else {
      card.style.opacity = '0';
      card.style.display= 'none';
      card.style.marginLeft = '0';
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

// Add an event listener for the 'Enter' key
searchInput.addEventListener('keypress', function (e) {
  if (e.key === 'Enter') {
    search();
  }
});

searchBtn.addEventListener('click', search);































































































































