<!DOCTYPE html>
<html>
<head>
  <title>Web Jungle</title>
</head>
<body>
  <form action=# method="post">
    <?php
      if(isset($_POST['player'])) {
        if(isset($_POST['choice'])) {
          if($_POST['choice'] == "sleep") {
            echo "Go to sleep";
          }
          if($_POST['choice'] == "jog") {
            echo "Going for a jog";
          }
        }
        else {
          include('scene1.php');
        }
      }
      else {
        echo '<input type="text" name="player">';
        echo '<input type="submit" name="Submit">';
      }
      print_r($_POST);
    ?>
  </form>
</body>
</html>
