<?php

$current_weight = 75;//106.5;
$current_height = 172;//181;
$heightInMs = $current_height/100;
  $bmi = $current_weight/($heightInMs*$heightInMs);
  $bmi = number_format((float)$bmi, 1, '.', '');
  //$bmi = round($bmi, 2);
  echo "Your BMI value is "+$bmi;