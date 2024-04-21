<?


$client_full_name = $_POST['full_name'];
$client_email= $_POST['email'];
$client_phone_number = $_POST['phone_number'];

$order_ticket_quantity = (int)$_POST['quantity'];
$order_tour_id = $_GET['id'];

$tours = load('tours');
foreach ($tours as $tour) {
    if ($tour['id'] == $order_tour_id) {
        $tourToBook = $tour;
        break;
    }
}

$order = [
    "client"=>[
        "full_name"=> $client_full_name,
        "email"=> $client_email,
        "phone_number"=> $client_phone_number,
    ],
    "ticket_quantity"=> $order_ticket_quantity,
    "tour_id"=> $order_tour_id
];

save($order, "order");

?>

<!-- HW: show a success message to the client_email
    and print the total cost in this format:
        "tour-name": xtickets -->

<div class="card text-center">
  <div class="card-header">
    Information about your order
  </div>
  <div class="card-body">
    <h5 class="card-title">Success!</h5>
    <p class="card-text">You have booked the tour '<? print (htmlspecialchars($tourToBook['name'])) ?>'</p>
    <p class="card-text">Number of tickets: <?= $order_ticket_quantity?></p>
    <p class="card-text">Total cost: <? print (htmlspecialchars($tourToBook['price']['amount'] * $order_ticket_quantity.' '. $tourToBook['price']['currency'])) ?>'</p>

  </div>
  <div class="card-footer text-body-secondary">
    This order has also been sent to your email
  </div>
</div>