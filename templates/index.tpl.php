<?php

declare(strict_types = 1);

function drawMain(PDO $db) { ?>
    <section id="main">
        <div class="main-upper">
            <div class="main-upper-left">
                <h1>Find Your Perfect Ride At The Best Rates</h1>
                <button class="main-button" type="button"><a href="">Book Now</a></button>
            </div>
            <img class="main-image" src="../assets/m4.png" alt="Background-Carro">
        </div>
        <div class="main-form">
            <form action="">
                <div class="input-box">
                    <label for="location">Location:</label>
                    <select name="location" id="location-select">
                        <option value="" disabled selected>Choose Location</option>
                        <?php
                        $locations = Location::getLocations($db);
                        foreach ($locations as $location) {
                        $id = $location->id;
                        $country = $location->country;
                        ?>
                        <option value="<?= $id ?>"><?= $country ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="pick-up-date">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="return-date">
                </div>
                <input type="submit" value="Search" name="" class="btn-submit-form">
            </form>
           
        </div>
    </section>
    
<?php }

function drawVehicles(PDO $db, array $vehicles) {?>

    <section id="vehicles">
        <div class="vehicles-header">
            <h3>Vehicle Models</h3>
            <h2>Our rental fleet</h2>
            <h4>Choose from a variety of our high-end sports cars for your next adventure</h4>
        </div>
            <div class="vehicles-left">
                <table class="vehicle-name-table">
                    <?php foreach ($vehicles as $vehicle) {
                        $name = $vehicle->name;
                        $picture = $vehicle->picture;
                        $model = $vehicle->model;
                        $mark = $vehicle->mark;
                        $year = $vehicle->year;
                        $transmission = $vehicle->transmission;
                        $location_id = $vehicle->location_id;
                    ?>
                    <tr <?php if ($firstVehicle) { echo 'class="selected"'; $firstVehicle = false; } ?> onclick="selectTd(this)">
                        <td >
                            <a href="javascript:void(0);" onclick="showVehicleDetails('<?= $name ?>', '<?= $picture ?>', '<?= $model ?>', '<?= $mark ?>', '<?= $year ?>', '<?= $transmission ?>', '<?= $location_id ?>')">
                                <?= $name ?>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="vehicle-picture">
            </div>

            <div class="vehicle-details">      
                <table class="vehicle-details-table">
                    <tr>
                        <th>Model:</th>
                        <td id="vehicle-model"><?= $vehicles[0]->model ?></td>
                    </tr>
                    <tr>
                        <th>Mark:</th>
                        <td id="vehicle-mark"><?= $vehicles[0]->mark ?></td>
                    </tr>
                    <tr>
                        <th>Year:</th>
                        <td id="vehicle-year"><?= $vehicles[0]->year ?></td>
                    </tr>
                    <tr>
                        <th>Transmission:</th>
                        <td id="vehicle-transmission"><?= $vehicles[0]->transmission ?></td>
                    </tr>
                </table>

                <div class="button-container" onclick="redirectToPage(<?= $vehicles[0]->id ?>)">
                    <a href="../pages/book_vehicle.php?id=<?= $vehicles[0]->id ?>" class="button">Book Now</a>
                </div>
            </div>

    </section>
    
    <?php }
    
function drawLocations(PDO $db) { 
    $locations = Location::getLocations($db);
    ?>
    
    <div class="locations-header">
        <h2>Our Locations</h2>
        <h4>We are based in multiple countries around the world</h4>
    </div>

    <div class="locations-details">
        <?php foreach ($locations as $location) { ?>
            <div class="location-item" data-coordinates="<?= $location->coordinates ?>">
                <p><?= $location->street ?><br><?= $location->city ?>, <?= $location->country ?></p>
            </div>
        <?php } ?>
    </div>
    <div id="location-map"></div>

<?php }

function drawFooter() { ?>
    <script>
        function initMap() {
            var coordinates = '41.149307, -8.610898';
            var [latitude, longitude] = coordinates.split(', ');
            var options = {
                zoom:15,
                center: { lat: parseFloat(latitude), lng: parseFloat(longitude) }
            }

            var map = new google.maps.Map(document.getElementById('location-map'), options);

            var marker = new google.maps.Marker({
                position:{lat: parseFloat(latitude), lng: parseFloat(longitude)},
                map: map,
                icon: {
                    url: '../assets/marker.svg',
                    scaledSize: new google.maps.Size(60,48)
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARSxj6TefLNmauzYyZ8FsdAudEQpDK6bw&callback=initMap" async defer></script>
    </body>
<?php }
