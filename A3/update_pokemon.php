<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $type = $_POST["type"];

    $xmlFile = "data.xml";
    $xml = simplexml_load_file($xmlFile);


    $pokemon = $xml->addChild("pokemon");
    $pokemon->addChild("name", $name);
    $pokemon->addChild("type", $type);

    $xml->asXML($xmlFile);

    echo "Pokémon data updated successfully!";
} else {
    echo "Error: Invalid request method!";
}
?>
