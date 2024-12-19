<?php 
require_once('conexao.php');
if(isset($_POST['cadastrar'])){
    
    $nome = $_POST["Nprof"];
    $idade = $_POST["pidade"];
    $endereco = $_POST["pendereco"];
    $nascimento = $_POST['pnascimento'];
    $email = $_POST["pemail"];
    $disciplina = $_POST["pdisciplina"];

$sql = "INSERT INTO professor(nome,idade,endereco,nascimento,email,disciplina) 
               VALUES('$nome',$idade,'$endereco','$nascimento','$email','$disciplina')";

        
        $sqlcombanco = $conexao->prepare($sql);

        
        $sqlcombanco->execute();

}      
if(isset($_POST['update'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $disciplina = $_POST['disciplina'];
    $id = $_POST['id'];

    $sql = "UPDATE professor SET nome = :nome, idade = :idade, endereco = :endereco, nascimento = :nascimento, email = :email, disciplina = :disciplina WHERE id = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome,PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade,PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco,PDO::PARAM_STR);
    $stmt->bindParam(':nascimento',$nascimento,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':disciplina',$disciplina,PDO::PARAM_STR);
    $stmt->execute();


}
if(isset($_GET['deletar'])){
  
    $id = $_GET['id'];

    $sql = "DELETE FROM professor WHERE id = :id";
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam('id',$id,PDO::PARAM_INT);
    $stmt->execute();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> cadastro concluido </h1>
    <button><a href= "index-prof.php">retorne ao inicio </a></button>
</body>
</html>
