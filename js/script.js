window.onload = function() {
    showVehicleDetails('BMW M4', '../assets/m4_reserva.png', 'M4', 'BMW', '2020', 'Automatic');
    selectTd(document.querySelector('.vehicle-name-table tr:first-child td'));
  }
  
  function showVehicleDetails(name, picture, model, mark, year, transmission) {
    showDetails(name, model, mark, year, transmission);
    showPicture(picture);
  }
  
  function showDetails(name, model, mark, year, transmission) {
    document.getElementById('vehicle-model').textContent = model;
    document.getElementById('vehicle-mark').textContent = mark;
    document.getElementById('vehicle-year').textContent = year;
    document.getElementById('vehicle-transmission').textContent = transmission;
  }
  
  function showPicture(picturePath) {
    var pictureContainer = document.querySelector('.vehicle-picture'); // Updated selector
    var pictureElement = document.createElement('img');
    pictureElement.src = picturePath;
    pictureElement.alt = 'Vehicle Picture';
    pictureContainer.innerHTML = '';
    pictureContainer.appendChild(pictureElement);
  }
  
  function selectTd(td) {
    if (selectedTd) {
      selectedTd.classList.remove('selected');
    }
  
    selectedTd = td;
    selectedTd.classList.add('selected');
  
    var link = td.querySelector('a');
    if (link) {
      link.click();
    }
  }
  
  let selectedTd = null;
  

  function redirectToPage(id) {
    window.location.href = "../pages/book_vehicle.php?id=" + id;
}