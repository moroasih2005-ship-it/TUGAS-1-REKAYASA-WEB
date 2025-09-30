<?php
$produk = array(
    "merk" => "Samsung",
    "model" => "Galaxy S25",
    "ram" => "12GB",
    "storage" => "256GB"
);

$jsonData = json_encode($produk);
echo "JSON dari Array Smartphone:<br>";
echo $jsonData;
echo "<hr>";

$jsonString = '{"merk":"Samsung","model":"Galaxy S25","ram":"12GB","storage":"256GB"}';

$object = json_decode($jsonString);
echo "Merk: " . $object->merk . "<br>";
echo "Model: " . $object->model . "<br>";
echo "RAM: " . $object->ram . "<br>";
echo "Storage: " . $object->storage . "<br>";
echo "<hr>";

$array = json_decode($jsonString, true);
echo "Merk: " . $array["merk"] . "<br>";
echo "Model: " . $array["model"] . "<br>";
echo "RAM: " . $array["ram"] . "<br>";
echo "Storage: " . $array["storage"] . "<br>";
?>
