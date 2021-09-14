<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão8</title>
</head>
<body>
    <form action= "questão8.php" method="get">
        <div class="form-group">
            <h3>Questão 8</h3>
            Digite o valor do investimento: <input type="text" name ="valor"> 
            <select name ="tipo" >
                <option value="1">Poupança
                <option value="2">Fundos RDF
            </select>        
        </div>
        <button type="submit" class="btn"> Checar reajuste</button>
    </form>

    <?php 
        $valor = $_REQUEST["valor"];
        $tipo[1] = "Poupança";
        $tipo[2] = "Fundos RDF";

        
        
        
        
        
        if ($tipo = 1) {
            $valorC = $valor * 0.03;
            $valorR = $valorC + $valor;
            echo 'O valor corrigido é de' . $valorR;
        }
        else {
            $valorC = $valor * 0.04;
            $valorR = $valorC + $valor;
            echo 'O valor corrigido é de' . $valorR;
        }
        
    ?>
</body>
</html>