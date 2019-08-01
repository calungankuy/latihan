<?php

$saldoawal = 1000000;
$bunga = 0.03;
$jumlah1 = $saldoawal*$bunga;
$jumlah2 = $saldoawal*11;
$jumlah3 = $jumlah2+$jumlah1*11;

echo "Saldo Akhir : $jumlah3<br>";
//$saldoakhir = (($saldo * 11) * $bunga) + ($saldo * 11));
?>