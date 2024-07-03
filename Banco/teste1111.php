<?php
//require_once("dadosusuario.php")
require_once("../Controller/conexao.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teu pai</title>

    <style>
span {
    font-weight: bold;
}

.borda {
    border: 2px solid red;
  padding: 10px;
  border-radius: 50px 20px;
}
</style>

</head>

<body>
    <tbody>
        <?php $sql = $conn->query("SELECT * FROM vw_dados_usuario"); ?>
        <?php while ($dado = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="borda">
            <tr>
                <td><span>Nome Completo: </span><?php echo $dado['Nome']; ?></td><br>
                <td><span>Email: </span><?php echo $dado['Email']; ?></td><br>
                <td><span>Senha: </span><?php echo $dado['Senha']; ?></td><br>
                <td><span>Data de nascimento: </span><?php echo $dado['Nascimento']; ?></td><br>
                <td><span>Foto: </span><?php echo $dado['Foto']; ?></td><br>
                <td><span>Tipo de usuario: </span><?php echo $dado['tipo']; ?></td><br>
                <td><span>Gênero: </span><?php echo $dado['Genero']; ?></td><br>
                <td><span>Situação: </span><?php echo $dado['situacao']; ?></td><br>
                <hr>
            </tr>
            </div>
        <?php } ?>
    </tbody>

    <div class="borda">
        <p>teste</p>
    </div>
</body>

</html>