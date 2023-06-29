window.onload= function(){

    showVehicleDetails('BMW M4','../assets/m4_reserva.png', 'M4', 'BMW', '2020', 'Automatic');
    
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

let selectedTd = null;

function selectTd(td) {
  if (selectedTd) {
    selectedTd.classList.remove('selected');
  }

  selectedTd = td;
  selectedTd.classList.add('selected');
}