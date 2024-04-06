<?php
include 'tours-data/tours.php';
?>

<div class="container">
    <h1 class="mb-5 mt-5">Romania Tours & Holidays</h1>
    <div class="row">
        <?php
        $count = 0;
        foreach ($tours as $tourID => $tour) {
            if ($count % 3 == 0 && $count != 0) {
                '</div><div class="row">';
            }
            ?>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 18rem; min-height: 400px; margin-bottom: 50px;">
                    <img src="<?= $tour['images'][0] ?>" class="card-img-top" alt="<?= $tour['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $tour['name'] ?>
                        </h5>
                        <p class="card-text">
                            <?= $tour['slogan'] ?>
                        </p>
                        <a href="tours-data/explorer.php?tourID=<?= $tourID ?>" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <?php
            $count++;
        }
        ?>
    </div>
</div>