<?php
$dataFile = "data/sound.json";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = json_decode(file_get_contents("php://input"), true);
    file_put_contents($dataFile, json_encode(["last" => $input["sound"]]));
    echo "OK";
    exit;
}

echo file_get_contents($dataFile);
?>
