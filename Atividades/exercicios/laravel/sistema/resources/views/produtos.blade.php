<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/produtos.css">
</head>

<body>

  <h1 style="text-align: center;">Produtos</h1>

  <div id="cont" style="text-align: center; ">
    <?php
    for ($i = 0; $i < count($dados); $i++) {
      echo "<strong>Nome: </strong>" . $dados[$i]->nome . " ---- " . "<strong>Unidade: </strong>" . $dados[$i]->um . "<br> </br>";
    }

    ?>
  </div>



</body>

</html>

<title>Produtos</title>
</head>

<body>

</body>

</html>