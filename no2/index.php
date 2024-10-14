<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>no2</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="jam">
    <button type="submit">Submit</button>
  </form>

  <?php

  if (isset($_POST['jam'])) {
    $jam = $_POST['jam'];
    $kompensasi = 0;
    if ($jam > 8) {
      $kompensasi = (($jam - 8) * 25000) + 25000;
      echo "Kompensasi sebesar Rp $kompensasi";
    } else {
      echo "Tepat waktu broo";
    }
  }
  ?>
</body>

</html>