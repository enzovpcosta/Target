<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<form method="POST">
    <div class="mb-3">
      <label for="str" class="form-label">String: </label>
      <input type="text" class="form-control" id="str" name="str" placeholder="Digite uma string" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

$i = 0;

if(isset($_POST['str'])){

    $str = $_POST['str'];
    $total = strlen($str);
    $strB = '';

    for($i = $total-1; $i >= 0; $i--){
        $strB .= $str[$i];
    }

    echo '<p> String invertida: '.$strB.'</p>';
}


?>
</body>
</html>