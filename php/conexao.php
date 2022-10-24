<?php 
    $servidor = "localhost";
    $user = "root";
    $passw = "";
    $isearchy = "isearch";

    $conexao = mysqli_connect($servidor, $user, $passw, $isearch);
    if(!$conexao) {
        die("Houve um erro ao conectar: ".mysqli_connect_errno());
    }