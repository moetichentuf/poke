<?php
$contents = file_get_contents('https://pokeapi.co/api/v2/pokemon/ditto/');
$contents = utf8_encode($contents);
$results = json_decode($contents);

echo "<pre>";
var_dump($results);
echo "</pre>";

