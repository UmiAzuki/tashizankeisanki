<!DOCTYPE html>

<?php

    $left = $_REQUEST['left'];
    $right = $_REQUEST['right'];
    $answer = $left + $right;

?>

<html lang="ja">
    <head>
        <title>足し算する電卓</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <form action="calculate.php" method="post">
            <p>
            <input type="text" name="left" value=""> +
            <input type="text" name="right" value=""> =
            <span>答えを表示する部分</span>
            <input type="submit" name="button_sum" value="計算">
            </p>
        </form>
    </body>
</html>