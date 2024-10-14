<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>no7</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="nama1">
    <input type="text" name="nama2">
    <button type="submit" name="submit">
      Submit
    </button>
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];

    $length1 = strlen($nama1);
    $length2 = strlen($nama2);

    $diff = $length1 - $length2;

    if ($length1 > $length2) {
      echo "$nama1 lebih banyak dari $nama2 : $diff karakter";
    } elseif ($length2 > $length1) {
      echo "$nama2 lebih banyak dari $nama1 : $diff karakter";
    } else {
      echo "sama woy";
    }
  }

  ?>
</body>

</html>