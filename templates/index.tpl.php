<?php

declare(strict_types = 1);

function drawMain() { ?>
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
                    <span>Location</span>
                    <input type="search" name="location" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="pick-up-date">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="return-date">
                </div>
                <input type="submit" value="Submit" name="" class="btn-submit-form">
            </form>
           
        </div>
    </section>
    
<?php }

function drawVehicles(array $vehicles) { ?>

    <section id="vehicles">
    <div class="vehicles-info">
            <table class="vehicles-table" id="vehicles-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Model</th>
                        <th>Mark</th>
                        <th>Year</th>
                        <th>Transmission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vehicles as $vehicle) {
                         $vehicle_id = $vehicle->id;
                         $name = $vehicle->name;
                         $picture = $vehicle->picture;
                         $model = $vehicle->model;
                         $mark = $vehicle->mark;
                         $year = $vehicle->year;
                         $transmission = $vehicle->transmission;
                        ?>
                        <tr>
                            <td><?= $name ?></td>
                            <td><img src="<?= $picture ?>" alt="Vehicle Picture"></td>
                            <td><?= $model ?></td>
                            <td><?= $mark ?></td>
                            <td><?= $year ?></td>
                            <td><?= $transmission ?></td>
                            <td>
                            <form class="view-vehicle-form" method="get">
                                <input type="hidden" name="id" value="<?= $vehicle_id ?>">
                                <button type="submit">View vehicle</button>
                                <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                            </form>
                            </td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
        </div>
    </section>

<?php }


