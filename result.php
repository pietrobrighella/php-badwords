<?php 
    $text = $_GET['text'];
    $word = $_GET['word'];

    $text_bad = str_ireplace("$word", "***" ,"$text");
    $pure_text = str_replace("*","",$text_bad);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>PHP Badwords (Result)</title>
</head>
<body>
    <div class="container d-flex justify-content-center flex-column">
        <h1 class="pb-4">PHP Badwords (Result)</h1>
        <h6 class="pb-1">Questo è il paragrafo che hai inserito e contiene <?php echo strlen("$text") ?> caratteri:</h6>
        <div class="col-6 mb-5 border p-2 w-100">
            <p class="text-primary"><?php echo "$text" ?></p>
        </div>
        <h6 class="pb-1">Questo è il paragrafo censurato e contiene <?php echo strlen("$pure_text") ?> caratteri (escluso ***):</h6>
        <div class="col-6 border p-2 w-100 mb-5">
            <p class="text-primary"><?php echo "$text_bad" ?></p>
        </div>
        <a href="./index.php"><button class="btn btn-primary mb-3 w-100">Censura un nuovo paragrafo</button></a>
    </div>
</body>
</html>