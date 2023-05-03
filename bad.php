<?php 
$badText = $_POST['badText'];
$badWord = $_POST['badWord'];
$badTextLength = strlen($badText);
$badTextCensored = str_replace($badWord , "***", $badText);
$badTextCensoredLength = strlen($badTextCensored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>BadWords</title>
</head>
<body>
<div class="container vh-100 d-flex flex-column align-items-center justify-content-center text-white text-center">
    <div class="bg-black w-100 d-flex flex-column align-items-center justify-content-center p-5 rounded-4">
        <h1 class=" mb-2">
            <?php echo "Il testo inserito è: $badText"?>
        </h1>
        <h2 class="text-center my-5 text-danger mb-4"> 
            <?php echo "La parola da censurare è: $badWord"?>
        </h2>
        <h2 class="text-success mb-4">
            <?php echo "La lunghezza del testo iniziale è: $badTextLength"?>
        </h2>
        <h3 class=" mb-4">
            <?php echo "Il testo censurato è: $badTextCensored"?>
        </h3>
        <h3 class="text-success mb-4">
            <?php echo "La lunghezza del testo censurato è: $badTextCensoredLength"?>
        </h3>
    </div>
</div>
</body>
</html>