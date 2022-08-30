<?php
// membuat fungsi perhitungan volume kubus
function volumeKubus ($sisi1, $sisi2, $sisi3){
    $volumeKubus = $sisi1 * $sisi2 * $sisi3;

    echo "Hitung Volume Kubus Dengan "." <br>";
    echo "Sisi1 : ".$sisi1." <br>";
    echo "Sisi2 : ".$sisi2." <br>";
    echo "Sisi3 : ".$sisi3." <br>";
    echo "Rumus Volume Kubus : sisi1 x sisi2 x sisi3 <br>";
    echo "Volume Kubus : ".$sisi1." x ".$sisi2." x".$sisi3."<br>";
    echo "Volume Kubus : ".$volumeKubus." m<sup>3</sup> <br><br><br>";

    return $volumeKubus;
}

// memamggil fungsi
$kubus1 = volumeKubus(4, 4, 4);
$kubus2 = volumeKubus(15, 15, 15);
$kubus3 = volumeKubus(32, 32, 32);

?>