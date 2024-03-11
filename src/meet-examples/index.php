
<!-- 
HW1: make page title and seat price - constants
   confine the naming conversation
HW2: format the total cost
   Total cost: 2 x 100.50 = 201.00 
-->



<?
    const SEAT_PRICE = 100.50;                      // float
    const PAGE_TITLE = "Booking confirmation";      // string
    $book_client_vip = true;                        // boolean
    $book_adults = 2;                               // int
    $book_cost = $book_adults * SEAT_PRICE          // float
?> 




<h1><?= PAGE_TITLE?></h1>
<p>Adults: <?= $book_adults?></p>
<p>Total cost: <?=$book_adults?> x <?= number_format(SEAT_PRICE, 2)?> = <?= number_format($book_cost, 2) ?></p>

<? if ($book_client_vip == true): ?>
    <p>VIP</p>
<? endif ?>
