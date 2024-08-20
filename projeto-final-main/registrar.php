<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="background.css"> <!-- Certifique-se de que o caminho para o CSS está correto -->
</head>

<body>
    <h1>Registrar</h1>

    <?php if (isset($_SESSION['msg'])): ?>
        <p><?php echo $_SESSION['msg'];
        unset($_SESSION['msg']); ?></p>
    <?php endif; ?>

    <form action="processa_registro.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <label for="e-mail">E-mail:</label>
        <input type="email" name="e-mail" id="e-mail">

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento">

        <a href="index.php">
            <input type="submit" value="Registrar">
        </a>
    </form>

    <div class="link-container">
        <a href="logar.php">Já tem uma conta? Faça o login</a>
    </div>
</body>

</html>