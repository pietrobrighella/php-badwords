<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
    <h1 class="pb-4">PHP Badwords</h1>
        <form action="./result.php" method="get" class="w-100">
            <div class="mb-3">
                <label for="textarea" class="form-label">Inserisci un testo</label>
                <textarea class="form-control" id="textarea" rows="5" name="text"></textarea>
            </div>
            <div class="mb-3">
                <label for="word" class="form-label">Parola da censurare</label>
                <input type="text" class="form-control" id="word" name="word">
            </div>
            <div>
                <button type="submit" class="btn btn-primary mb-3 w-100">Elabora testo</button>
            </div>
        </form>
    </div>
</body>
</html>