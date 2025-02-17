<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
            $personal_data = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];

            foreach ($personal_data as $key => $value) {
                echo "{$key}:{$value}<br>";
            }
        ?>
    </p>
</body>
</html>