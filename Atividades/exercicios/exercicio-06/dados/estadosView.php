<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="estados.css">

  <title>Estados</title>
</head>

<body>

  <h1> Estados </h1>
  <div id="linha"> </div>

  <table class="table table-bordered">

    <tr>
      <th>Estados</th>
      <th>Sigla</th>
    </tr>
    <?php
    while ($e = $estados->fetch()) {
      echo "<tr>";
      echo "<td> $e[nome] </td>";
      echo "<td> $e[sigla] </td>";
      echo "</tr>";
    }
    ?>
  </table>

</body>

</html>