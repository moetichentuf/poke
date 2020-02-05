
<?php
// variable with Poke API and value from input
$url = 'https://pokeapi.co/api/v2/pokemon/' . $_GET['value']; // Pokemon API url + search
$poke_json = file_get_contents($url); // to get data from API
$result_array = json_decode($poke_json , true); // 'true' converts objects into associative arrays


// Pokemon variable
$name = $result_array['name'];

// Display
var_dump($name);

?>







<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<img src=" <?php echo $result_array['sprites']['front_default'];?>" />
<form name="form" action="" method="get"   >
    <input type="text" name="value">
    <button type="submit" ></button
    <tr>
        <td><?php echo $result_array['moves']['0']['move']['name']; ?></td>

    <tr>
</form>
</body>
</html>