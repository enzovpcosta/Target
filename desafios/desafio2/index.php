<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<form method="post">
<div class="mb-3">
  <label for="" class="form-label">Digite um número:</label>
  <input type="number" class="form-control" name="numero" id="numero" placeholder="Digite um número" min="0" required>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php

if(isset($_POST['numero'])){
    $requestNumero = $_POST['numero'];
    $n1 = 0;
    $n2 = 1;
    $pertence = 0;

    while($n2<=$requestNumero && $pertence == 0){
        $res = $n1+$n2;
        if($requestNumero == $res){
            $pertence = 1;
        } else {
            $pertence = 0;
        }
        $n1 = $n2;
        $n2 = $res;
    }

    if($pertence == 1){
        echo '<p>O número pertence a sequência</p>';
    } else {
        echo '<p>O número não pertence a sequência</p>';
    }
   
}

?>