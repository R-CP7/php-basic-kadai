<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>課題11章・foreach文</title>
</head>
<body>
  <p>
    <?php
    $vegetableprice_data= ['名前'=>'玉ねぎ', '値段'=>'200', '産地'=>'北海道'];
    foreach($vegetableprice_data as $key => $value){
      echo "{$key} = {$value} <br>";
    }
    ?>
    </p>
  </body>
  </html>

