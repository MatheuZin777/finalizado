<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <title>Compra Concluída</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            overflow: hidden;
        }
        #check {
            display: flex;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        img {
            width: 200px;
            height: auto;
        }


        a {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #15b800;
            width: 150px;
            height: 30px;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
        }

        a:hover {
            background-color: darkgreen;
        }

        .card {
            border-radius: 5px;
            background-color: #d7cece73;
            width: 307px;
            height: 70px;
            display: flex;
            box-shadow: rgba(9, 30, 66, 0.25) 0px 0px 9px 5px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
            border: 1px solid black;
        }

        .card img {
            width: 80px;
            height: 85px;
            border-radius: 5px;
            margin-right: 10px;
            margin-left: 2px;
        }

        h5 {
            margin: 0;
            padding: 5px 2px;
        }

        p {
            margin-top: 3px;
            padding: 0;
        }

        .sobre {
            border-left: 1px solid black;
        }

        #resumo{
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            #check {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div id="check">
        <img src="../check.gif" alt="">
        <h1>Compra realizada com sucesso!!</h1>
        <a href="../index.php">voltar</a>

        <div class="produto">
            <!-- <p id="resumo">Resumo Do Pedido:</p> -->
            <!-- <div class="card">
                <img src="mzun.png" alt="">
                <div class="sobre">
                    <h5>MIZUNO WAVE PROPHECY 12-S <br>
                        "PRETO" *1 &nbsp;<p>R$1.299,00</p>
                    </h5>
                </div>
            </div> -->
            <p>Numero do pedido: #281</p>
        </div>



        <?php
        // Conexão com o banco de dados
        $conexao = mysqli_connect('localhost', 'root', '', 'pagamento');

        if (!$conexao) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        // Coleta e sanitiza dados do formulário
        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $endereco = ($_POST['endereco']);
        $cidade = ($_POST['cidade']);
        $estado = ($_POST['estado']);
        $cep = ($_POST['cep']);
        $tamanho = ($_POST['size']);
        $card_number = ($_POST['card-number']);
        $expiry_date = ($_POST['expiry']);
        $cvc = ($_POST['cvc']);

        // Consulta SQL
        $sql = "INSERT INTO dados (Nome, Email, Endereco, Cidade, Estado, CEP, Numeracao, Numero_cartao, Data_expiracao, CVC)
            VALUES ('$nome', '$email', '$endereco','$cidade','$estado','$cep','$tamanho', '$card_number', '$expiry_date', '$cvc')";

        // Executa a consulta
        $retorno = mysqli_query($conexao, $sql);

        // Verifica o sucesso da consulta
        if ($retorno) {
            // echo "<p style= 'color:green'>Compra realizada com sucesso</p>";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }
        // Fecha a conexão
        mysqli_close($conexao);
        ?>




</body>

</html>