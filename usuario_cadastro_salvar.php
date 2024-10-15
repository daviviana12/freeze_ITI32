<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "referencias.php" ?>
</head>

<body>
    <!---Incluindo o cabeçalho da página-->
<?php include "header_admin.php" ?>
<?php

include "conexao_bd.php";

$login_usuario = $_POST["txtLoginUsuario"];
$senha_usuario = $_POST["txtSenhaUsuario"];

$hash = password_hash($senha_usuario,1);

$sql = "INSERT INTO usuario(login_usuario,senha_usuario) ";
$sql .= " VALUES('$login_usuario','$hash')";

if (executarComando($sql))
{
    echo "<h1>Usuário adicionado!</h1>";

}
else
{
    echo "<h1>Usuário não adicionado!</h1>";
}
?>
<!---Incluindo o rodapé da página-->
<?php include "footer_admin.php" ?>
</body>
</html>