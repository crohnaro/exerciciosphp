<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão4</title>
</head>
<body>
    <form action= "questão4.php" method="get">
        <div class="form-group">
            <h3>Questão 4</h3>
            Digite a base maior: <input type="text" name ="basemaior"> 
            Digite a base menor: <input type="text" name ="basemenor">
            Digite a altura <input type="text" name ="altura">
                   
        </div>
        <button type="submit" class="btn"> Verificar área</button>
    </form>

    <?php 
        $basemaior = $_REQUEST ["basemaior"];
        $basemenor = $_REQUEST ["basemenor"];
        $altura = $_REQUEST ["altura"];
        $area = $basemaior + $basemenor * $altura / 2;
        



        echo 'A area do trapézio é de: ' . $area;
        
    ?>
</body>
</html>