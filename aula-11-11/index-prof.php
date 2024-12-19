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
                    <a href="index.php">CADASTRO ALUNO</a>
                </li>
                <li>
                    <a href="listaaluno.php">LISTAㅤALUNO</a>
                </li>
                <li>
                    <div class="active"><a href="index-prof.php">CADASTRO PROFESSOR</a></div>
                </li>
                <li>
                    <a href="listaprof.php">LISTAㅤPROFESSOR</a>
                </li>
            </ul>
        </nav>
        <h1>sitema estudantil</h1>
    </div>
</div>
<div class="boder">

   <h2>CADASTRO DE PROFESSORㅤ</h2>
    <form action="crudprof.php" method="post">

   <div class="form">
        <label for="Nprof">Nome do Professorㅤㅤㅤ</label>
        <input type="text" name="Nprof" id="Nprof" required placeholder="digite o nome">
    </div>
        <div class="form">
        <label for="pidade">Idade do Professorㅤㅤㅤ</label>
        <input type="number" name="pidade" id="pidade"required placeholder="digite a idade">
     </div>
     <div class="form">
        <label for="pendereco">Endereço  do Professorㅤㅤ</label>
        <input type="text" name="pendereco" id="pendereco"required placeholder="digite o endereço">
    </div>
    <div class="form">
        <label for="pnascimento">Data de Nascimento do Professorㅤ</label>
        <input type="date" name="pnascimento" id="pnascimento"required placeholder="digite a data de nascimento">
    </div>
    <div class="form">
        <label for="pemail">Email do Professorㅤㅤㅤㅤ</label>
        <input type="email" name="pemail" id="pemail"required placeholder="digite o email">
    </div> 
    <div class="form" >
        <label for="pdisciplina">Disciplina Ministradaㅤㅤㅤㅤ</label>
        <input type="text" name="pdisciplina" id="pdisciplina"required placeholder="digite a disciplina">
    </div>
<div class="form">
        <input type="submit" name= "cadastrar" value="cadastrar">

   </div>
</div>
 
    </form>
</div>
</div>
</body>
</html>