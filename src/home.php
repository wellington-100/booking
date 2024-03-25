<?php
include 'data/data.php'; // Include fișierul data.php care conține variabila $tour1

// Acum poți folosi $tour1 în home.php
if (isset ($tour1['name'])) {
    $tour1['name']; // Afișează numele turului dacă este setat
} else {
    print 'Numele turului nu este disponibil.'; // Mesaj de rezervă
}
?>

<div class="container">
    <h1 class="mb-5 mt-5">Romania Tours & Holidays</h1>
    <div class="container row">
        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="<?= $tour1['images'][0]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour1['name']?></h5>
                    <p class="card-text"><?= $tour1['slogan'] ?></p>
                    <a href="data/explorer.php?tourID=tour1" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="<?= $tour2['images'][1]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour2['name']?></h5>
                    <p class="card-text"><?= $tour2['slogan'] ?></p>
                    <a href="data/explorer.php?tourID=tour2" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="<?= $tour3['images'][2]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour3['name']?></h5>
                    <p class="card-text"><?= $tour3['slogan'] ?></p>
                    <a href="data/explorer.php?tourID=tour3" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container row mt-5">
        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="<?= $tour4['images'][3]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour4['name']?></h5>
                    <p class="card-text"><?= $tour4['slogan'] ?></p>
                    <a href="data/explorer.php?tourID=tour4" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="<?= $tour5['images'][4]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour5['name']?></h5>
                    <p class="card-text"><?= $tour5['slogan'] ?></p>
                    <a href="data/explorer.php?tourID=tour5" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col p-1">
            <div class="card" style="width: 18rem;">
                <img src="<?= $tour6['images'][5]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $tour6['name']?></h5>
                    <p class="card-text"><?= $tour6['slogan'] ?></p>
                    <a href="data/explorer.php?tourID=tour6" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>