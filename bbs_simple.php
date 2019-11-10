<form method="post" action="bbs_simple.php">
<input type="text" name="toukou"size="60">
<input type="submit" value="送信">
</form>
<hr>
<?php
$ichiran = file_get_contents('bbs_simple.txt');
if(@$_POST['toukou']){
$ichiran = htmlspecialchars($_POST['toukou'])."<hr>$ichiran";
file_put_contents('bbs_simple.txt',$ichiran);
}
echo$ichiran

?>
