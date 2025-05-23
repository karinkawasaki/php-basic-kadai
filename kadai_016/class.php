<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題_016</title>
</head>
<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            //メソッドを定義する
            public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price(){
                echo $this->price . '<br>';
            }

            //コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }
        //インスタンス化する
        $food = new Food('potato', 250);

        //インスタンス$userの各プロパティの値を出力する
        print_r($food);
        
        echo '<br>';

        class Animal {
            private $name;
            private $height;
            private $weight;
        
            //メソッドを定義する
            public function set_height(int $height) {
                $this->height = $height;
            }
            public function show_height(){
                echo $this->height . '<br>';
            }

            //コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

        }
        //インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        //インスタンス$userの各プロパティの値を出力する
        print_r($animal);

        echo '<br>';

        $food->set_price(250);
        $food->show_price();
        
        $animal->set_height(60);
        $animal->show_height();
        ?>
    </p>
</body>
</html>