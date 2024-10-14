<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>no1</title>
</head>

<body>

  <form action="" method="post">
    <input type="text" name="text">
    <input type="submit" name="btn">
  </form>

  <?php

  if (isset($_POST['btn'])) {
    $text = $_POST['text'];

    if (preg_match('/[^,\d]/', $text)) {
      preg_match_all('/[^,\d]/', $text, $hasil);
      // var_dump($hasil);
      echo "Teks mengandung angka : " . implode(',', $hasil[0]);
    } else {
      echo "Tidak mengandung angka";
    }
  }

  ?>  

</body>

</html>