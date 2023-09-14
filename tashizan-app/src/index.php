<!DOCTYPE html>

<?php
    $answer = 0;
    $left = 0;
    $right = 0;
    if(isset($_POST["button_sum"])){
        $left = $_POST["left"];
        $right = $_POST["right"];
        $answer = $left + $right;
    }
?>

<html lang="ja">
    <head>
        <title>足し算する電卓</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <form action="" method="post">
            <p>
            <input type="text" name="left" value="<?php echo $left; ?>"> +
            <input type="text" name="right" value="<?php echo $right; ?>"> =
            <span><?php echo $answer; ?></span>
            <input type="submit" name="button_sum" value="計算">
            </p>
        </form>
    </body>
</html>