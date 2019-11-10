<?php
function hn($str,$level){
$html = "<h$level>$str</h$level>";
return $html;
}
echo hn("見出し1",1);
echo hn("見出し2",2);
echo hn("見出し3",3);
?>
