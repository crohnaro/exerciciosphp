<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão5</title>
</head>
<body>
    <form action= "questão5.php" method="get">
        <div class="form-group">
            <h3>Questão 3</h3>
            Digite o nome: <input type="text" name ="nome"> 
            Digite a Disciplina: <input type="text" name ="disciplina">
            Digite a primeira nota <input type="text" name ="nota1">
            Digite a segunda nota <input type="text" name ="nota2">
            Digite a terceira nota <input type="text" name ="nota3">
                   
        </div>
        <button type="submit" class="btn"> Verificar media</button>
    </form>

    <?php 
        $nome = $_REQUEST ["nome"];
        $disciplina = $_REQUEST ["disciplina"];
        $nota1 = $_REQUEST ["nota1"];
        $nota2 = $_REQUEST ["nota2"];
        $nota3 = $_REQUEST ["nota3"];
        $media = ($nota1 + $nota2 + $nota3) / 3; 

        if ($media < 7) {
            echo 'Você foi reprovado';
        }
        else {
        echo $nome . 'na discilpina : ' . $disciplina . 'obteve a media de :' . $media;
        }
        
        



        
        
    ?>
</body>
</html>