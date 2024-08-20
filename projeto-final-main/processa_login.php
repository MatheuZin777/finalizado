<?php
session_start();
include_once('conexao_login.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if (empty($usuario) || empty($senha)) {
        $_SESSION['msg'] = 'Por favor, preencha todos os campos!';
        header('Location: logar.php');
        exit();
    }

    try {
        $stmt = $pdo->prepare("SELECT senha FROM usuarios WHERE usuario = ?");
        $stmt->execute([$usuario]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($senha, $result['senha'])) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['msg'] = 'Usuário ou senha inválidos!';
            header('Location: logar.php');
            exit();
        }
    } catch (PDOException $e) {
        file_put_contents('pdo_errors.log', $e->getMessage(), FILE_APPEND);
        $_SESSION['msg'] = 'Erro ao conectar ao banco de dados!';
        header('Location: logar.php');
        exit();
    }
}
?>
