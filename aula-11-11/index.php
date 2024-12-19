<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>aula 11/11</title>
<link rel="stylesheet" href="styles.css">
</head>
 
<body>
<style>
    body {
        background-color: rgb(55, 55, 55);}
        body{
        background-color: rgb(55, 55, 55);
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
    <div>
       
        <div class="nav">
        <nav>
            <ul>
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>  
                <div class="active"><a href="index.php">CADASTRO</a></div>
                </li>
                <li>
                    <a href="listaaluno.php">LISTA ALUNO</a>
                </li>
                <li>
                    <a href="index-prof.php">CADASTRO PROFESSOR</a>
                </li>
                <li>
                    <a href="listaprof.php">LISTA PROFESSOR</a>
                </li>
            </ul>
        </nav>
         <h1>Sitema de Aluno Erica e Italo</h1>
    </div>
    </div>
    <div class="boder">
   <h2>CADASTRO DE ALUNO</h2>
    <form action="crudaluno.php" method="post">
   <div class="form">
        <label for="Naluno">Nome do Aluno</label>
        <input type="text" name="Naluno" id="Naluno" required placeholder="digite o nome">
    </div>
     <div class="form">
        <label for="Nidade">Idade do Aluno</label>
        <input type="number" name="Nidade" id="Nidade"required placeholder="digite a idade">
     </div>  
     <div class="form">
        <label for="Nendereco">Endereço do Aluno</label>
        <input type="text" name="Nendereco" id="Nendereco"required placeholder="digite o endereço">
    </div>
    <div class="form">
        <label for="Nnascimento">Data de Nascimento do Aluno</label>
        <input type="date" name="Nnascimento" id="Nnascimento"required placeholder="digite a data de nascimento">
     <div class="form">
        <label for="Nemail">Email do Aluno</label>
        <input type="email" name="Nemail" id="Nemail"required placeholder="digite o email">
    </div>   
    <div class="form">
        <label for="Nturma">Turma do Aluno</label>
        <input type="text" name="Nturma" id="Nturma"required placeholder="digite turma">
    </div>
   <div class="form">
        <input type="submit" name="cadastrar" value="cadastrar">
</div>
 
    </form>
</div>
</div>

</body>
</html>