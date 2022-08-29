<?php 
$paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi architecto, harum, debitis aliquid unde laudantium quia molestias quo tempora molestiae similique dignissimos ipsum rerum adipisci hic nisi omnis aut rem.';
$lenght_paragraph = strlen($paragraph);

$bad_words = $_GET['badwords'];

$replace_paragraph = str_replace($bad_words, '***', $paragraph);
$lenght_replace_paragraph = strlen($replace_paragraph);
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
    <p> <?= $paragraph?> </p>
    <p> <?= $lenght_paragraph?> </p>

    <p> <?= $replace_paragraph?> </p>
    <p> <?= $lenght_replace_paragraph?> </p>

</body>
</html>