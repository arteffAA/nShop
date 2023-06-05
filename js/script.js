function selectShoe(imageSrc, modelText, modelDescription, imageClass) {
  var selectedShoeImage = document.getElementById('shoe-image');
  var selectedShoeModel = document.getElementById('shoe-model');
  var selectedShoeDescription = document.getElementById('shoe-model-description');


  selectedShoeModel.classList.remove('fade-in');
  selectedShoeDescription.classList.remove('fade-in');

  selectedShoeImage.src = imageSrc;
  selectedShoeImage.className = imageClass;
  selectedShoeModel.textContent = modelText;
  selectedShoeDescription.textContent = modelDescription;

  // Добавляем класс 'fade-in' после обновления текста для применения анимации
  setTimeout(function() {
    selectedShoeModel.classList.add('fade-in');
    selectedShoeDescription.classList.add('fade-in');
  }, 0);
}