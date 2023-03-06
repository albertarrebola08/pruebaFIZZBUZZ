
<?php

//Ejercicio pruebas Winche

function fizzBuzz($num) {

  if($num % 3 == 0 && $num % 5 == 0){
    return "FizzBuzz";
  }elseif ($num % 3 == 0){
    return "Fizz";
  }
  elseif ($num % 5 == 0){
    return "Buzz";
  }
  else{
    return $num;
  }

  
}


$i = 1;
while($i<101){
  fizzBuzz($i);
  $i++;
  echo '<br>';
}
$res = fizzBuzz($num);
function imprimir($res){
  return $res;
}

?>
