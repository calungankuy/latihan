<?php
//array numerik
$a = array('kimi',21,true,14,45);
echo $a[1];

for ($i=4; $i >= 0 ; $i--) { 
    echo $a[$i]. "<br>";

}

//array key asosiatif
$aso = ['nama' => 'Kimi', 'unur' => 21 , 'alamat' => 'bandung'];

foreach ($aso as $index){
    echo $index . " ";
}
?>