<?php
for ($i=1; $i <= 10 ; $i++) { 
    for ($j=1; $j <=10; $j++){
        echo "$i x $j <br>";
        
if ($i % 2 == 0){
    echo "$i bilangan genap <br>";
}else{
    echo "$j bilangan ganjil <br>";
}
}
}
?>