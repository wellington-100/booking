<?
    include 'tours-data/tours.php';
    $page = 'home';

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if (!file_exists("{$page}.php")) {
        $page = '404';
        http_response_code(404);
    }


    $tours = [
        'tour1' => $tour1,
        'tour2' => $tour2,
        'tour3' => $tour3,
        'tour4' => $tour4,
        'tour5' => $tour5,
        'tour6' => $tour6,
    ];

    $tourID = $_GET['tourID'] ?? 'tour1';

    if (!isset ($tours[$tourID])) {
        http_response_code(404);
        include '404.php';
        exit;
    }

    $tour = $tours[$tourID];

?>