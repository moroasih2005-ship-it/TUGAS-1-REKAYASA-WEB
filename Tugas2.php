<?php
$jsonText = '{"jenis":"Mobil","merk":"Suzuki","model":"Ertiga","tahun":2023}';

// Decode ke Object
$mobilObj = json_decode($jsonText);

// Decode ke Array
$mobilArr = json_decode($jsonText, true);

echo "<h2>JSON ke Object</h2>";
echo "Jenis: $mobilObj->jenis <br>";
echo "Merk: $mobilObj->merk <br>";
echo "Model: $mobilObj->model <br>";
echo "Tahun: $mobilObj->tahun <br>";

echo "<h2>JSON ke Array</h2>";
echo "Jenis: ".$mobilArr["jenis"]."<br>";
echo "Merk: ".$mobilArr["merk"]."<br>";
echo "Model: ".$mobilArr["model"]."<br>";
echo "Tahun: ".$mobilArr["tahun"]."<br>";
?>