<?php

    require_once('classe_db.php');

    $usuario = $_POST['Nome_input'];
    $email = $_POST['E-mail_input'];
    $senha = $_POST['password_input'];

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $sql = "insert  into  usuario(usuario, email, senha) values ('$usuario','$email','$senha')";
    if(mysqli_query($link,$sql)){
        header('Location: cadastro.php?var=1');
    }else{
        echo 'erro ao registrar o usuário';
    }


?>