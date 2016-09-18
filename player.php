<?php
$player = array('name' => "", 'health' => 0);
$player;
if(isset($_POST['player'])) {
  $player['name'] = $_POST['player'];
}
if(isset($_POST['health'])) {
  $player['health'] = $_POST['health'];
}
else{
  $player['health'] = 3;
}