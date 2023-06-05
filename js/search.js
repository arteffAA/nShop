const searchForm = document.getElementById('search-form');
const searchInput = document.getElementById('search-input');

searchForm.addEventListener('submit', function(event) {
  event.preventDefault(); 

  const searchTerm = searchInput.value;
  
  window.location.href = '/search?query=' + encodeURIComponent(searchTerm);
});