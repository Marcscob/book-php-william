<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

    echo "<h2>Laço <i>for</i> sendo atualizado por multiplicação</h2>";

    for ($i=1; $i < 11; $i *= 2) 
        echo "<p> O valor da variável de ctrl é: $i";
      //dispensa o uso de chaves!

  ?>
</body>

</html>