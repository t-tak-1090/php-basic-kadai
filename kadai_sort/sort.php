<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php

        function sort_2way($array, $order) {
            if($order === "asc") {
                echo "昇順にソートします。<br>";
                sort($array);
            } else if ($order === "desc") {
                echo "降順にソートします。<br>";
                rsort($array);
            }
            foreach ($array as $num) {
                echo $num."<br>";
            }
        }

        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, "asc");
        sort_2way($nums, "desc");

        ?>
    </p>
</body>
</html>


