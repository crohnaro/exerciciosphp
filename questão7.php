<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão7</title>
</head>
<body>
    <form action= "questão7.php" method="post">
        <div class="form-group">
            <h3>Questão 7</h3>
            Digite o nome: <input type="text" name ="nome"> 
            Digite o segundo nome: <input type="text" name ="nome2">
            Digite o terceiro nome: <input type="text" name ="nome3">
            Digite o quarto nome: <input type="text" name ="nome4">
            Digite o quinto nome: <input type="text" name ="nome5">
                   
        </div>
        <button type="submit" class="btn"> Verificar nomes</button>
    </form>

<?php 
    criaArquivo();
    insereNomes();

    function criaArquivo() {
        if (!is_file("nomes.txt")) {
            $arquivo = fopen("nomes.txt", 'w');
            fclose($arquivo);
        }
    }




    function insereNomes(){
        $nome1 = $_POST ['nome1'];
        $nome2 = $_POST ['nome2'];
        $nome3 = $_POST ['nome3'];
        $nome4 = $_POST ['nome4'];
        $nome5 = $_POST ['nome5'];

        $arquivo = fopen("nomes.txt", 'a');
        $texto = $nome1 . "\n" . $nome2 . "\n" . $nome3 . "\n" . $nome4 . "\n" . $nome5 ;
        fwrite($arquivo, $texto);
        fclose($arquivo); 
        
}


?>
