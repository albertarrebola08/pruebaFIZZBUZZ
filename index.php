
<?php
function fizzBuzz($num) {
  switch (true) {
    case ($num % 4 == 0 && $num % 5 == 0):
      echo "fizzbuzz";
      break;
    case ($num % 4 == 0):
      echo "fizz";
      break;
    case ($num % 5 == 0):
      echo "buzz";
      break;
    default:
      echo $num;
  }
}

for ($i = 1; $i <= 100; $i++) {
  fizzBuzz($i);
  echo "<br>";
}
?>
