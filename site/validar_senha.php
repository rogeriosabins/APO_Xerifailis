<?php

    session_start();

    require_once('classe_db.php');


    $usuario = $_POST['Nome_input'];
    $senha  =  $_POST['senha_input'];


    $sql =" SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ";

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){
            $_SESSION['usuario'] =$dados_usuario['usuario'];
            $_SESSION['email'] =$dados_usuario['email'];
            header('Location: user_secao.php');
        }else{
            header('Location: login.php?erro=1');
        }

    }else{
        echo 'erro na consulta ao banco de dado, entrar em contato com o admin do site';
    }

?>