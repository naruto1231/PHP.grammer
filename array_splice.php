<?php
$mens = array('うどん','そば','ラーメン','パスタ');
array_splice($mens,1,2,'そうめん');
print_r($mens);echo"<br>";
array_splice($mens,2,0,'フォー');
print_r($mens);echo"<br>";
array_splice($mens,1,2);
print_r($mens);echo"<br>";
?>
