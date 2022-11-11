<?php

$arr= array('1 Janeiro',' 2 ',' 3 Ricardo','4 Mario',' 5 Leandro',' 6 Fernando',' 7 Guilherme','Roberto');
/*
foreach($arr as $key => $value){
    echo $key;
    echo '=>';
    echo $value;
    echo '<hr>';
}
*/

$total = count($arr);

for($i = 9; $i < $total; $i++){
    echo $arr[$i];
    echo '<hr>';

}
if( $i > $total) {
    echo "Não existe";
}

?>