<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cars</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 6px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php

$cars = array(
    array("Make"=>"Toyota","Model"=>"Corolla","Color"=>"White","Mileage"=>24000,"Status"=>"Sold"),
    array("Make"=>"Toyota","Model"=>"Camry","Color"=>"Black","Mileage"=>56000,"Status"=>"Available"),
    array("Make"=>"Honda","Model"=>"Accord","Color"=>"White","Mileage"=>15000,"Status"=>"Sold")
);

echo "<table>";

echo "<tr>
        <th>Make</th>
        <th>Model</th>
        <th>Color</th>
        <th>Mileage</th>
        <th>Status</th>
      </tr>";

foreach ($cars as $car) {
    echo "<tr>";
    echo "<td>".$car["Make"]."</td>";
    echo "<td>".$car["Model"]."</td>";
    echo "<td>".$car["Color"]."</td>";
    echo "<td>".$car["Mileage"]."</td>";
    echo "<td>".$car["Status"]."</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>