<? $tours = load('tours'); 
if (isset($_POST['search'])){
    $tours = array_filter($tours, function ($tour){
        return 
            !(stripos($tour['name'], $_POST['search']) === false)
            ||
            $_POST['search'] == '';
    });
}

if (isset($_POST['min_price']) || isset($_POST['max_price'])) {
    $min_price = $_POST['min_price'] !== '' ? floatval($_POST['min_price']) : 0;
    $max_price = $_POST['max_price'] !== '' ? floatval($_POST['max_price']) : 100000;

    $tours = array_filter($tours, function ($tour) use ($min_price, $max_price) {
        return 
        $tour['price']['amount'] >= $min_price && $tour['price']['amount'] <= $max_price
        ||
        ($_POST['min_price'] == '' && $_POST['max_price'] == '');
        
    });
}

if (isset($_POST['sort_desc'])) {
    usort($tours, function($tour_a, $tour_b){
        return $tour_b['price']['amount'] - $tour_a['price']['amount'];
    });
}
if (isset($_POST['sort_asc'])) {
    usort($tours, function ($tour_a, $tour_b) {
        return $tour_a['price']['amount'] - $tour_b['price']['amount'];
    });
}

?>
<link rel="stylesheet" href="css/style.css">
<!-- HW1: filter by price-->
<div class="filterArea">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <form action="/?page=tours" class="d-flex" role="search" method="POST">
          <input 
            class="form-control me-2" 
            type="text" 
            placeholder="Search by name" 
            aria-label="Search" 
            name="search"
            value="<?= $_POST['search'] ?? ''?>"
            >
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        SORT BY PRICE
        <form action="/?page=tours" class="d-flex" method="POST">
            <button class="btn" name="sort_desc"><i class="bi bi-caret-down-square-fill"></i></button>
            <button class="btn" name="sort_asc"><i class="bi bi-caret-up-square-fill"></i></button>
        </form>
      </div>
    </nav>

    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <form action="/?page=tours" class="d-flex" role="search" method="POST">
            <input 
                class="form-control me-2" 
                type="text" 
                placeholder="min price" 
                aria-label="min price" 
                name="min_price"
                size="6"
                value="<?= $_POST['min_price'] ?? '' ?>"
            >
            <input 
                class="form-control me-2" 
                type="text" 
                placeholder="max price" 
                aria-label="max price" 
                name="max_price"
                size="6"
                value="<?= $_POST['max_price'] ?? '' ?>"
            >
            <button class="btn btn-outline-success" type="submit">Filter</button>
        </form>
      </div>
    </nav>
</div>

<div class="container">
    <h1 class="mb-5 mt-5">Romania Tours & Holidays</h1>
    <div class="row">
        <?php
        $count = 0;
        foreach ($tours as $tour) {
            if ($count % 3 == 0 && $count != 0) {
                print '</div><div class="row">';
            }
            ?>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 18rem; min-height: 400px; margin-bottom: 50px;">
                    <img src="<?= $tour['images'][0] ?>" class="card-img-top" alt="<?= htmlspecialchars($tour['name']) ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= htmlspecialchars($tour['name']) ?>
                        </h5>
                        <p class="card-text">
                            <?= htmlspecialchars($tour['slogan']) ?>
                        </p>
                        <p class="card-text">
                            <?= htmlspecialchars($tour['price']['amount'].' '.$tour['price']['currency']) ?>
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