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
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="bg-success w-100 d-flex flex-column align-items-center justify-content-center p-5 rounded-4">
            <div class="d-flex text-center justify-content-center align-items-center">
                <h1 class="text-white fs-2 text-center m-5">BaaaaaaadWordssssss </h1> 
                <img class="w-25" src="./img/th.jpeg" alt="ssh">
            </div>
            <form action="bad.php" method="POST" class="d-flex flex-column w-50">
                <div class="d-flex flex-column mb-4">
                    <label class="text-white fs-2 text-center" for="badText">Inserisci il testo</label>
                    <input type="text" name="badText" id="badText">
                </div>
                <div class="d-flex flex-column">
                    <label class="text-white fs-2 text-center" for="badWord" class="mt-4">Inserisci la parola da censurare</label>
                    <input type="text" name="badWord" id="badWord" class="mb-4">
                </div>
                <input type="submit" value="Invia" class="btn btn-primary align-self-center">
        </form>
        </div>
</body>
</html>