<?php
    $prova = 'Con il riso mi piace la ciccia ciccia ciccia';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
       Primo esercizio PHP
    </h1>
    <h3>
        <?php
            echo $prova;
        ?>
    </h3>
    <h3>
        La frase è lunga <?php echo strlen($prova); ?> caratteri
    </h3>
</body>
</html>