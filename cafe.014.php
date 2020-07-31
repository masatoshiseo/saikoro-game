<form action="cafe.013.php" method="post">


<?php $okane= $_POST['okane']; ?>

<br><br>dice　<?php  $rand= rand(1,6);echo $rand;?>
<br><br><?php $bet= $_POST['bet'];?>
<?php  $rate= $_POST['rate'];?>

<?php
if($rate==1){if($rand==1 || $rand==2 || $rand==3){
echo '当たり！';
$okane= $okane+ $bet* $rate;}else{echo '残念！';$okane= $okane- $bet;}}



elseif($rate==3){if($rand==4 || $rand==5){
echo '当たり！';
$okane= $okane+ $bet* $rate;}else{echo '残念！';$okane= $okane- $bet;}}
else{if($rand==6){
echo '大当たり！';
$okane= $okane+ $bet* $rate;}else{echo '残念！';$okane= $okane- $bet;}}
?>


<br><br><br>okane<select name="okane">
<option value="<?php echo $okane; ?>"><?php echo $okane; ?></option>
</select><br><br>

bet 　<select name="bet">
<?php for($i=100;$i<=$okane;$i=$i+100){
  echo "<option value='{$i}'>{$i}</option>";
} ?>
</select><br><br>

rate　<select name="rate">
<option value="1">1,2,3</option>
<option value="3">4,5</option>
<option value="5">6</option>
</select><br><br><br>

<input type="submit" value="GO!">
</body></html>
