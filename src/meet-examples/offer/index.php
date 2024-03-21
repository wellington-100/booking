<?
   // include
   // include_once
   // require
   // require_once
   include 'data.php';

   // sorting functions
   function compareByPrice ($p1, $p2) {
      return $p1['price']['amount'] - $p2['price']['amount'];
   }

   function compareByDescPrice($p1, $p2) {
         return $p2['price']['amount'] - $p1['price']['amount'];
      }
   

?>
<style>
    body{ background-color: #232; color: white;}
    a {color: #ccc; text-decoration: none;}
    a.current{ text-decoration: underline; color: #ccc;}
</style>
<?
// logic for pagination
if (isset ($_GET['p'])) {
   $page = $_GET['p'];
   } else {
      $page = 1;
   }
$total_pages = ceil(count($products) / 3);
$prev_page = ($page > 1) ? $page - 1 : $page;
$next_page = ($page < $total_pages) ? $page + 1 : $page;

//logic for sorting
if (isset ($_GET['s'])) {
   if ($_GET['s'] == 'asc') {
      usort($products, 'compareByPrice');
   } else if ($_GET['s'] == 'desc') {
      usort($products, 'compareByDescPrice');
   }
}

?>
<ul>
   <h3></h3>
   <a href="?s=asc">Sort by ascending price &uarr;</a></br>
   <a href="?s=desc">Sort by descending price &darr;</a>
</ul>

<!-- loop for displaying products -->
<ul>
   <? for($i = (($page == 1) ? 0 : 3); $i < (($page == 1) ? 3 : count($products)); $i++) { ?>
      <li>
         <h2>
            <?= ($products[$i]['name']); ?>
            <? if($products[$i]['new']) {?> <img src="<?= NEW_STIKER?>" width="50px" /> <? }?>
         </h2>
         <h3><?= ($products[$i]['category']); ?></h3>
         <img src="<?= ($products[$i]['image']); ?> " width="200">
         <div><?= ($products[$i]['price']['amount'])?><?= ($products[$i]['price']['currency']); ?></div>
         <hr>
      </li>
   <? } ?>
</ul>

<!-- pagination -->
<div>
    <a href="?p=<?= $prev_page ?>">
      <?= ($page > 1) ? '&lt;' : '' ?>
   </a>
   <span>
      <?php for ($i = 1; $i <= $total_pages; $i++): ?>
         <a href="?p=<?= $i ?>" class="<?= ($i == $page) ? 'current' : '' ?>">
            <?= $i ?>
         </a>
      <?php endfor ?>
   </span>
   <a href="?p=<?= $next_page ?>">
      <?= ($page < $total_pages) ? '&gt;' : '' ?>
   </a>
</div>

















<!--
   ## eshop / offer
        > renders catalog
        > sorts price / attributes
        > filter attributes
        > search by name

        > paginator: HW


