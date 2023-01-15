<?php

include_once "Menu_exemplo_adm.html";

    $conexao = mysqli_connect("localhost","root","","estacionamento");

    if (mysqli_connect_errno()) {
        echo "Erro".mysqli_connect_errno();
    }
    else{
        $sql = "SELECT Acesso.DataAcesso, Acesso.EntradaAcesso, Acesso.SaidaAcesso, Funcionario.Nome, Funcionario.IdFuncionario
        from Acesso inner join Funcionario 
        on Acesso.IdFuncionario = Funcionario.IdFuncionario";
        $resultado = mysqli_query($conexao, $sql);

        while($funcionario = mysqli_fetch_array($resultado)){
            echo "<div class='form'>".
                "<br/>Acesso:".
                "<br/>Data do acesso: ".$funcionario['DataAcesso'].
                "<br/>Harário de entrada: ".$funcionario['EntradaAcesso'].
                "<br/>Horário de saída: ".$funcionario['SaidaAcesso'].
                "<br/><br/>Funcionário:".
                "<br/>Nome do funcionário: ".$funcionario['Nome'].
                "<br/>Código: ".$funcionario['IdFuncionario'].
                "</div><br>";
        }
    }
    mysqli_close($conexao)
?>