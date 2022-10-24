<?php 
    include_once("conexao.php");

    $nomecadastro=$_POST['nomecadastro'];
    $emailcadastro=$_POST['emailcadastro'];
    $cpfcadastro=$_POST['cpfcadastro'];
    $usuariocadastro=$_POST['usuariocadastro'];
    $senhacadastro=$_POST['senhacadastro'];
    
    $sql="INSERT INTO cadastro (nomecadastro,emailcadastro,cpfcadastro,usuariocadastro,senhacadastro) VALUES ('$nomecadastro', '$emailcadastro''$cpfcadastro','$usuariocadastro','$senhacadastro')";

    if (mysqli_query($conexao, $sql)) {
        echo "Login efetuado com sucesso";
    } 
    
    else {
        echo "Erro " . mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>