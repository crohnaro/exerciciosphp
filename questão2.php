<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão2</title>
</head>
<body>
    <form action= "questão2.php" method="get">
        <div class="form-group">
            <h3>Questão 2</h3>
            Digite o nome: <input type="text" name ="nome"> 
            Digite a primeira nota: <input type="text" name ="nota1">
            Digite a segunda nota: <input type="text" name ="nota2">       
        </div>
        <button type="submit" class="btn"> Verificar Média</button>
    </form>

    <?php 
        $nome = $_REQUEST ["nome"];
        $nota1 = $_REQUEST ["nota1"];
        $nota2 = $_REQUEST ["nota2"];
        $media = $nota1 + $nota2 / 2;

        echo 'Olá, seu nome é : ' . $nome . 'E sua média é:' . $media;
        
    ?>
</body>
</html>