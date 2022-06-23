<?php
    $nursery_rhyme = "Apelle, figlio di Apollo
    fece una palla di pelle di pollo.
    
    Tutti i pesci
    vennero a galla,
    per vedere la palla
    di pelle di pollo
    fatta da Apelle,
    figlio di Apollo.";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <h1>Apelle, figlio di Apollo</h1>
        <p><?php echo $nursery_rhyme; ?></p>
        <h4>Lunghezza: <?php echo mb_strlen($nursery_rhyme); ?></h4>
        
    </body>
</html>