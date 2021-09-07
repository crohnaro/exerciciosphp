<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão1</title>
</head>
<body>
    <form action= "questão1.php" method="get">
        <div class="form-group">
            <h3>Questão 1</h3>
            Digite o numero: <input type="text" name ="numero"> 
        </div>
        <button type="submit" class="btn"> Checar positivo/negativo</button>
    </form>

    <?php 
        $numero = $_REQUEST["numero"];
        if ($numero > 0) {
            echo 'O numero é positivo';
        }
        else {
            echo 'O numero é negativo';
        }
        
    ?>
</body>
</html>