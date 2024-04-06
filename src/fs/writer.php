<?
// get client_name from url (method GET)
// ?name=Jhon Doe&email=jd@email.com&age=30&active=true

// HW1: copy only client_data from the $_GET array          ???
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $active = $_GET['active'];   // HW2: convert age to - int
                                 // HW3: get active (true/false) - boolean

    $client = [
        'name' => $name,
        'email' => $email,
        'age' => $age,
        'active' => $active
    ];

//generate a xml file
$xml = new SimpleXMLElement('<client/>');
foreach ($client as $key => $value) {
    $xml->addChild($key, $value);
}
// save to file
    $file = fopen("./format_data/client.xml", "w");
    fwrite($file, $xml->asXML());
    fclose($file);

// HW4: try to do the same for XML + YML
?>

