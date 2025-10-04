<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charaset="UTF-8">
  <title>PHP四則演算課題</title>
</head>

<body>
  <p>
    <?php
    
    $score01 = 80;

    $score02 = 60;

    $score03 = 55;

    $score04 = 40;

    $score05 = 100;

    $score06 = 25;

    $score07 = 80;

    $score08 = 95;

    $score09 = 30;

    $score10 = 60;

    $sum = $score01+$score02+$score03+$score04+$score05+$score06+$score07+$score08+$score09+$score10;
    
    $average = $sum / 10;

    echo $average;