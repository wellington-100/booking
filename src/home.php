<?php
include 'tours-data/tours.php';
?>

<div class="container">
    <h1 class="mb-5 mt-5">Romania Tours & Holidays</h1>
    <div class="container row">
        <div class="col p-1">
            <div class="card" style="width: 18rem; min-height: 400px;">
                <img src="<?= $tour1['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour1['name']?></h5>
                    <p class="card-text"><?= $tour1['slogan'] ?></p>
                    <a href="tours-data/explorer.php?tourID=tour1" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem; min-height: 400px;">
                <img src="<?= $tour2['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour2['name']?></h5>
                    <p class="card-text"><?= $tour2['slogan'] ?></p>
                    <a href="tours-data/explorer.php?tourID=tour2" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem; min-height: 400px;">
                <img src="<?= $tour3['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour3['name']?></h5>
                    <p class="card-text"><?= $tour3['slogan'] ?></p>
                    <a href="tours-data/explorer.php?tourID=tour3" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container row mt-5">
        <div class="col p-1">
            <div class="card" style="width: 18rem; min-height: 400px;">
                <img src="<?= $tour4['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour4['name']?></h5>
                    <p class="card-text"><?= $tour4['slogan'] ?></p>
                    <a href="tours-data/explorer.php?tourID=tour4" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem; min-height: 400px;">
                <img src="<?= $tour5['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour5['name']?></h5>
                    <p class="card-text"><?= $tour5['slogan'] ?></p>
                    <a href="tours-data/explorer.php?tourID=tour5" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem; min-height: 400px;">
                <img src="<?= $tour6['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour6['name']?></h5>
                    <p class="card-text"><?= $tour6['slogan'] ?></p>
                    <a href="tours-data/explorer.php?tourID=tour6" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>