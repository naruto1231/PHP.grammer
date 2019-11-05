<table border="1">
<th><tr>アイテム一覧</th></tr>
<?php
$items = array(
  "棍棒","銅の短剣","炎の剣",
  "聖なる盾","破邪の兜","勇者の鎧"
);
for($i = 0; $i < count($items);$i++){
  echo"<tr><td>{$items[$i]}</td></tr>";
}
 ?>
</table>
