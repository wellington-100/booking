<!-- LOGIC -->
<?
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    } else {
        $page = 1;
    }
    $total_pages = 10;
    $prev_page = ($page > 1) ? $page - 1 : $page;
    $next_page = ($page < $total_pages) ? $page + 1 : $page;
?>


<!-- TEMPLATE -->
<style>
    body{ background-color: #222; color: white; text-align: center;}
    a {color: #ccc; text-decoration: none;}
    a.current{ text-decoration: underline; color: #ccc;}
</style>
<div>
    You are on page <?= $page ?>
</div>
<hr>
<div>
    <a href="?p=<?=$prev_page ?>"><?= ($page > 1) ? '&lt;': ''?></a>
    <span>
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?p=<?= $i ?>" class="<?= ($i == $page) ? 'current': '' ?>"><?= $i ?></a>
        <?php endfor?>       
    </span>
    <a href="?p=<?=$next_page ?>"><?= ($page < $total_pages) ? '&gt;': ''?></a>
</div>

<!--
    # Paginator (vs  INFINITE LOAD)

    1 2 3 4 ... 12 13

    LOGIC (server)
    |             ^
    |             |
  data            |
  print()       request
    |             |
    |             |
    v             |
    TEMPLATE (client)

HW1: other method to underline the selected page number     +
HW2: try to use for loop to print the paginator             +
HW3: add limit for preev, next                              +