
<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <title>cafe.012.php</title>
</head><body><br><br><br><br><br><br><br>
<form action="cafe.013.php" method="post">

okane<?php  $okane=1000; ?>
<select name="okane">
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

</form>
</body></html>
