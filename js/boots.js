function selectShoe(imageSrc, shoeText) {
    var selectedShoeImage = document.getElementById('shoe-image');
    var selectedShoeText = document.getElementById('shoe-text');

    selectedShoeImage.src = imageSrc;
    selectedShoeText.textContent = shoeText;
}