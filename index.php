
<?php
$my_password='';

if (isset($_GET['lunghezza'])){
    $lungezza=$_GET['lunghezza'];
    $my_password=generatePassword($lungezza);
}

function generatePassword($lungezza){
    $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $pw='';
    for ($i=0; $i<$lungezza; $i++ ){
        $pw.=$chars[rand(0,strlen($chars)-1)];
    }
    return $pw;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  


  <title>PHP Password Generator</title>
</head>

<body>
    <main class="container">
    <h1 class="d-flex justify-content-center my-4">Password Generator</h1>
        <form action="" method="get">
            <div class="input-group my-4">
                <label for="lunghezza">Metti la lunghezza della password da generare:</label>
                <input type="number" name="lunghezza" min="5" max="20" class="form-control mx-2" id="lunghezza" placeholder="Lunghezza">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Invia</button>
            </div>
            <div><?php echo " La tua password è: $my_password" ?></div>
        </form>
    </main>
</body>


