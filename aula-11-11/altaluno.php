<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    require_once('./conexao.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM aluno where id= :id";

    $retorno = $conexao->prepare($sql);

    $retorno->bindparam(':id',$id, PDO::PARAM_INT);

    $retorno->execute();

    $array_retorno=$retorno->fetch();

    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $endereco = $array_retorno['endereco'];
    $email = $array_retorno['email'];
    $nascimento = $array_retorno['nascimento'];
    $turma = $array_retorno['turma'];

    ?>
    <form method="POST" action="crudaluno.php">

    <label for="nome"> nome do aluno</label>
    <input type= "text" name="nome" value="<?php echo $nome ?>">

    <label for="idade"> idade do aluno</label>
    <input type= "number" name="idade" value="<?php echo $idade ?>">

    <label for="endereco"> endereco</label>
    <input type= "text" name="endereco" value="<?php echo $endereco ?>">

    <label for="email"> email</label>
    <input type= "email" name="email" value="<?php echo $email ?>">

    <label for="nascimento"> nascimento</label>
    <input type= "nascimento" name="nascimento" value="<?php echo $nascimento ?>">

    <label for="turma"> turma</label>
    <input type= "text" name="turma" value="<?php echo $turma ?>">

    <input type= "hidden" name="id" value="<?php echo $id ?>">

    <button  type="submit" name= "update" value="update">Alterar</button>

</form>

</body>
</html>

