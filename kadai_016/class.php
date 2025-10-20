<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHPクラス課題</title>
</head>

<body>
  <p>
        <?php
        class Food {                        
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function set_price(int $price) {
            $this->price = $price;
    }

            public function show_price() {
            echo $this->price . '<br>';
    }
            
        }

        $potato = new Food('potato',250);


        ?>
    </p>
    <p>
        <?php
        class Animal {                        
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function set_height(int $height) {
        $this->height = $height;
    }

        public function show_height() {
           echo $this->height. '<br>';
    }

        }

        $dog = new Animal('dog',60,5000);
        ?>
    </p>
    <p>
        <?php
        print_r($potato);
        echo '<br>';
        print_r($dog);
        ?>
    </p>
    <p>
        <?php
        $potato->show_price();
        echo'<br>';
        $dog->show_height();
        ?>
    </p>


   

