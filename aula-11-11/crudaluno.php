<?php 
require_once('conexao.php');
if(isset($_POST['cadastrar'])){
    
    $nome = $_POST["Naluno"];
    $idade = $_POST["Nidade"];
    $endereco = $_POST["Nendereco"];
    $nascimento = $_POST["Nnascimento"];
    $email = $_POST["Nemail"];
    $turma = $_POST["Nturma"];
   

$sql = "INSERT INTO aluno(nome,idade,endereco,nascimento,email, turma) 
               VALUES('$nome',$idade,'$endereco','$nascimento','$email', '$turma')";

        
        $sqlcombanco = $conexao->prepare($sql);

        
        $sqlcombanco->execute();
     }
if(isset($_POST['update'])){
    

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $endereco = $_POST["endereco"];
        $nascimento = $_POST["nascimento"];
        $email = $_POST["email"];
        $turma = $_POST["turma"];
        $id = $_POST["id"];

        $sql = "UPDATE aluno SET nome = :nome, idade= :idade, endereco = :endereco, nascimento = :nascimento, email = :email, turma = :turma WHERE id= :id ";
       
       
        $stmt = $conexao->prepare($sql);
    
        $stmt->bindparam(':id', $id, PDO::PARAM_INT);
        $stmt->bindparam(':nome', $nome, PDO:: PARAM_STR);
        $stmt->bindparam(':idade', $idade, PDO:: PARAM_INT);
        $stmt->bindparam(':endereco', $endereco, PDO:: PARAM_STR);
        $stmt->bindparam(':nascimento', $nascimento, PDO:: PARAM_STR);
        $stmt->bindparam(':email', $email, PDO:: PARAM_STR); 
        $stmt->bindparam(':turma', $turma, PDO:: PARAM_STR);
        $stmt->execute();


     }
 if(isset($_GET['deletar'])){
  
        $id = $_GET['id'];
    
        $sql = "DELETE FROM aluno WHERE id = :id";
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
    <h1>cadastro concluido </h1>
    <button><a href="home.php">retorme ao inicio </a></button>
</body>
</html>
   
