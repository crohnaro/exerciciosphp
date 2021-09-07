<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão3</title>
</head>
<body>
    <form action= "questão3.php" method="get">
        <div class="form-group">
            <h3>Questão 3</h3>
            Digite o nome: <input type="text" name ="nome"> 
            Digite o salário: <input type="text" name ="salário">
            Digite o valor total em vendas <input type="text" name ="vendas">
                   
        </div>
        <button type="submit" class="btn"> Verificar comissão</button>
    </form>

    <?php 
        $nome = $_REQUEST ["nome"];
        $salário = $_REQUEST ["salário"];
        $vendas = $_REQUEST ["vendas"];
        $comissão = $vendas * 4 * 0.01;
        $salárioF = $salário + $comissão;



        echo 'Olá, seu salário reajustado é de:' . $salárioF . 'e sua comissão foi de:' . $comissão;
        
    ?>
</body>
</html>