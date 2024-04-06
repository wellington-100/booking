<?
$path = "./format_data/client.xml";
$xmlFile = simplexml_load_file($path); // returns SimpleXMLElement data
$client = [
    'name' => (string) $xmlFile->name,
    'email' => (string) $xmlFile->email,
    'age' => (int) $xmlFile->age,
    'active' => (bool) $xmlFile->active
];
var_dump($client);
?>