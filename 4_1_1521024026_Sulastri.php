<!DOCTYPE html>
<html>
<head>
  <title>SK 4_1 Dewi Citra Kurnia</title>
</head>
<body>
  <?php
    $t = 87;
	echo "<p style=font-size:20px>Nilai</p>";
    if ($t >= "0" && $t <= "59") {
	  echo $t . "<br><p style=font-size:50px;>Ket :<br>Cukup</p>";
    } elseif ($t > "59" && $t < "85") {
      echo $t . "<br><p style=font-size:50px;>Ket :<br>Baik</p>";
	} elseif ($t >= "85" && $t <= "100") {
	  echo $t . "<br><p style=font-size:50px>Ket :<br>Baik Sekali</p>";
    } else {
	  echo $t . "<br><p style=font-size:50px;>Ket :<br>Input Salah</p>";
    }
  ?>
</body>
</html>
