<?php 

function total_gaji(){
    $total1 = $_POST['golongan'] + $_POST['tunjangan'];
    $totalakhir = $total1 - $_POST['potongan'];
    echo $totalakhir;
}

?>