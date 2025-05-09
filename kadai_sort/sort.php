<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題_sort</title>
</head>
<body>
    <p>
        <?php
        $array = [15, 4, 18, 23, 10 ];
        
        function sort_2way ($array, $order){
            if ($order){
                echo "昇順にソートします。";
                echo '<br>';
                sort($array);
                foreach ($array as $index => $value) {
                    echo "{$value}<br>";
                }
            } else {
                echo "降順にソートします。";
                echo '<br>';
                rsort($array);
                foreach ($array as $index => $value) {
                    echo "{$value}<br>";
                }
            }
        }
        
        sort_2way($array, true);
        sort_2way($array, false);
        ?>
    </p>
</body>
</html>
