<?php 
    include_once "conexao.php";
    	
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // exit;
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
    
        $descricao = $_POST['descricao'];
        $datavale = $_POST['datavale'];
        $valor = $_POST['valor'];
        // $atualizado = $_POST['atualizado'];
        // $criado = $_POST['criado'];
     

        $conexaoComBanco = abrirBanco();
        $sql = "insert into vale (descricao, datavale, valor)
          values('$descricao', '$datavale', '$valor')";

          if ($conexaoComBanco ->query($sql) === TRUE){
            echo ":) Contato Salvo com suceso no banco de dados";
          }else{
            echo ":( Erro ao salvar n banco de dados" . $conexaoComBanco ->error;
          }

          fecharBanco($conexaoComBanco);
}

?>
