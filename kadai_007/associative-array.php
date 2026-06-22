<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>PHP基礎編</title>
        <meta charset = "UTF-8">
    </head>

    <body>
        <p>
            <?php
            // 連想配列
            $food_menu = ['name' => 'onion' , 'price' => '200' , 'weight' => '160' ];

            // 連想配列を出力する
            print_r($food_menu);
            ?>
        </p>
</body>
</html>
