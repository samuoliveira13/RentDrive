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


