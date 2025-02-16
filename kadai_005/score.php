<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        $total_score = $score01 + $score02 + $score03 + $score04 + $score05 + $score06 + $score07 + $score08 + $score09 + $score10;
        echo $total_score;

        echo '<br>';

        $average_score = $total_score / 10;
        echo $average_score;
        ?>
    </p>
</body>
</html>