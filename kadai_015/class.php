<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function set_price(string $price){
        $this->price = $price;
      }
  

      public function show_name(){
        echo $this->price. '<br>';
      }
      


      public function __construct(string $name, int $price) {
        $this ->name = $name;
        $this ->price=$price;
      
      }
      public function show_price(){
        echo "Food({$this->name}) price: {$this->price} <br>";
       
      }

      }
  
  
      class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight){
          
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;

      }

      public function show_height(){
      echo "Animal: {$this->name} - height: {$this->height}<br>";
      }
    }
    

      $food = new Food("potato",250);
      print_r($food);
      echo "<br>";
     $food->show_price();

       $animal = new Animal("dog",60,5000);
       print_r($animal);
       echo"<br>";
       $animal->show_height();
       
       
      ?>
    </p>


    </body>
    </html>