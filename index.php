<?php
    $paragraph = 'Con il riso mi piace la ciccia ciccia ciccia';

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
            echo $paragraph;
        ?>
    </h3>
    <h3>
        La frase è lunga <?php echo strlen($paragraph); ?> caratteri
    </h3>
    <h3>
        La frase senza la parola proibita è :
        <?php
            // Creiamo una nuova variabile per la nuova frase, in cui la parola presa dall'url con GET verrà sostituita con ***
           $new_paragraph = str_replace($_GET['bad_word'],'***', $paragraph);
           echo $new_paragraph;
        ?> 
    </h3>
</body>
</html>