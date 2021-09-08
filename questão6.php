<?php 

imprimetxt("teste.txt");

$arquivo = fopen ("teste.txt" , "w");
fwrite($arquivo, "Teste1");
fwrite($arquivo, "Teste2");
fwrite($arquivo, "Teste3");
fclose($arquivo);




function imprimetxt($arquivoleitura){
    $arquivo = fopen($arquivoleitura,"r");
    if ($arquivo){
        while(!feof($arquivo)){
            $linha = fgets($arquivo);
            echo $linha . "<br>";
        }
    fclose($arquivo);
    }else{
        echo "Erro ao abrir o arquivo";
    }
}    




?>