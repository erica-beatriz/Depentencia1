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

    $sql = "SELECT * FROM  professor where id= :id";

    $retorno = $conexao->prepare($sql);

    $retorno->bindParam(":id",$id, PDO::PARAM_INT);

    $retorno->execute();

    $array_retorno=$retorno->fetch();

    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $endereco = $array_retorno['endereco'];
    $nascimento = $array_retorno['nascimento'];
    $email = $array_retorno['email'];
    $disciplina = $array_retorno['disciplina'];

    ?>
    <form method="POST" action="crudprof.php">

        <label for="nome">nome do professor</label>
        <input type="text" name="nome" value="<?php echo $nome ?>">

        <label for="idade">idade do professor</label>
        <input type="number" name="idade" value="<?php echo $idade ?>">

        <label for="endereco">endereco do professor</label>
        <input type="text" name="endereco" value="<?php echo $endereco ?>">

        <label for="nascimento">nascimento do professor</label>
        <input type="nascimento" name="nascimento" value="<?php echo $nascimento ?>">

        <label for="email">email do professor</label>
        <input type="email" name="email" value="<?php echo $email ?>">

        <label for="disciplina">disciplina ministrada</label>
        <input type="text" name="disciplina" value="<?php echo $disciplina ?>">

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <button type="submit" name="update" value="update">Alterar</button>
    </form>


</body>
</html>