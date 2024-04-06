<?
$file = fopen("./format_data/client.json", "r");
$client = json_decode(fread($file, 1000), true);
fclose($file);
$client['age'] = (int)($client['age']);
$client['active'] = (bool) ($client['active']);
// print_r($client);
var_dump($client);

?>