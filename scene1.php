<?php
echo "Scene 1: <br>";
echo "Wake up go take a shower <br>";
?>

<form action=# method="post">
  <input type="text" name="player" value="<?php echo $_POST['player'];?>" hidden>
  <input type="radio" name="choice" value="sleep">Stay in bed until 10am<br>
  <input type="radio" name="choice" value="jog">Wake up and go for jogging
  <input type="submit" value="Submit"><br>
</form>
