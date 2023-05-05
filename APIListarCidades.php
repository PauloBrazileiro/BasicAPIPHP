<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    header('Content-type: application/json');
    require_once('conecxao.php');

    $api_token = 'dgs888dgs';

    if($api_token == 'dgs888dgs'){
        // Prepara a instrução SQL para selecionar todos os registros da tabela estado
        $stmt = $pdo->prepare("SELECT id, estadoID, nome FROM cidade");

        // Executa a instrução SQL
        $stmt->execute();

        // Obtém os resultados da consulta em um array associativo
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($resultado);

        if($stmt->rowCount() > 0){
            echo ' MAIOR >>>';
        }else{
            echo' MENOR <<<';
        }

        // Exibe os resultados
        //foreach($resultado as $linha) {
        //    echo $linha['id'] . " - " . $linha['sigla'] . " - " . $linha['nome'] . "<br>";
        //}
    }else{
        echo'CHAVE DE ACESSO INVALIDA!';
    }
}else{
    echo'ACESSO NEGADO PELO SERVIDOR!</BR></BR>
        EROR METHOD INVALID';
}
?>