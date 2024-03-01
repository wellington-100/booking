<?
    const TICKET_PRICE = 100;

    $quantity = 0;
    if(array_key_exists('quantity', $_GET) && ctype_digit($_GET['quantity'])){
        $quantity = (int) $_GET['quantity'];
        $cost = TICKET_PRICE * $quantity;

        $total = $cost;
    } else {
        $error = "You didn't specify any quantity or quantity isn't of the required type";
    }
    
?>
    <a href="/?quantity=1">Buy 1 ticket</a><br>
    <a href="/?quantity=2">Buy 2 ticket</a><br>
    <a href="/?quantity=3">Buy 3 ticket</a><br>
<hr>

<form method="GET"  action="/">
    <input type="text" name="quantity" placeholder="enter desired value...">
    <button>BUY</button>
</form>
<hr>

<? if (isset($total)) : ?>
    <div>
        <?= $quantity ?> tickets x <?= TICKET_PRICE ?> = <?= $total ?>
    </div>
<? endif ?>

<? if (isset($error)): ?>
    <div style="color: red;">
        <?= $error ?>
    </div>
<? endif ?>