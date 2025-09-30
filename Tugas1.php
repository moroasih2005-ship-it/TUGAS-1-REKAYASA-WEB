<?php
$kendaraan = [
    "jenis" => "Motor",
    "merk" => "Yamaha",
    "model" => "R15",
    "tahun" => 2024
];

$jsonKendaraan = json_encode($kendaraan);

echo "<h2>Array ke JSON</h2>";
echo "Array Kendaraan:<br>";
print_r($kendaraan);

echo "<br><br>Hasil JSON:<br>";
echo $jsonKendaraan;
?>
