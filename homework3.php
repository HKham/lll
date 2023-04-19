<!DOCTYPE html>
<html>
<body>

<h2>피보나치 수열</h2>

<form method="post" action="">
        <label for="num1">3 이상의 정수 n의 값</label>
        <input type="number" name="num1" id="num1" required>
        <input type="submit" value="계산">
    </form>

<?php

function fibonacci($n) {
  if ($n == 0) {
    return 0;
  } elseif ($n == 1) {
    return 1;
  } else {
    return fibonacci($n-1) + fibonacci($n-2);
  }
}

if(isset($_POST['num1'])) {

  $num1 = ($_POST['num1']);

  for ($i = 2; $i < $num1; $i++) {
    $f1 = fibonacci($i);
    $f2 = fibonacci($i-1);
    $result = $f1/$f2;
    echo $f1 . " " . $f2 . " " . $result . "<br>";
  }

}

?>

</body>
</html>