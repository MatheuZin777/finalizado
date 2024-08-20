<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <title>Página de Pagamento</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="/StyleCourt__1_-removebg-preview.png" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="#sobrealoja">Sobre</a></li>
            </ul>
        </nav>
        <div class="search-bar" hidden> <!-- escondido-->
            <input type="text" placeholder="Buscar">
            <button type="submit">pesq!</button>
        </div>
        <div class="cart-icon">

            <a href="#"><img src="/carrinho.png" alt="Carrinho"></a>

            <a href="#"><img src="/user.png" alt="Carrinho" id="user"></a>
        </div>
    </header>
    </header>

    <div class="container">
        <div class="form-section">
            <h1>Pagamento</h1>
            <form action="pagar.php" method="POST">
                <!-- Informações de Cobrança -->
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Endereço</label>
                    <input type="text" id="address" name="endereco" required>
                </div>
                <div class="form-group inline">
                    <div>
                        <label for="city">Cidade</label>
                        <input type="text" id="city" name="cidade" required>
                    </div>
                    <div>
                        <label for="state">Estado</label>
                        <input type="text" id="state" name="estado" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>CEP</label>
                    <input type="ext" id="zip" name="cep" class="cep" required>
                </div>
                <!-- Seleção de Numeração do Tênis -->
                <div class="form-group">
                    <label for="size">Numeração do Tênis</label>
                    <select id="size" name="size" required>
                        <option value="" disabled selected>Selecione o tamanho</option>
                        <option value="37" disabled>37 - indisponivel</option>
                        <option value="38" disabled>38 - indisponivel</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42" disabled>42 - indisponivel</option>
                        <option value="43" disabled>43 - indisponivel</option>
                        <option value="44">44</option>
                    </select>
                </div>
                <!-- Informações do Cartão de Crédito -->
                <div class="form-group inline">
                    <div>
                        <label for="card-number">Número do Cartão</label>
                        <input type="text" id="card-number" name="card-number" maxlength="16"
                            placeholder="1234 5678 1234 5678" required>
                    </div>
                    <div>
                        <label for="card-expiry">Data de Expiração</label>
                        <input type="text" id="card-expiry" name="expiry" pattern="\d{2}/\d{2}" placeholder="MM/AA"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="card-cvc">Código de Segurança (CVC)</label>
                    <input type="text" id="card-cvc" name="cvc" pattern="\d{3}" maxlength="3" placeholder="123"
                        required>
                </div>
                <div class="form-group">
                    <p class="total-price">Total:R$ <span id="total-price">1299,9</span></p>
                    <p class="payment-method">Pagamento via Cartão de Crédito</p>
                </div>
                <div class="termos">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Li e aceito os termos e condições de uso</label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Pagar">
                </div>
            </form>
            <p class="note">Os detalhes do cartão de crédito são enviados de forma segura e não são armazenados no nosso
                servidor.</p>
        </div>
        <div class="image-section">
            <div class="carousel">
                <div class="carousel-images" id="carousel-images">
                    <img src="https://imgnike-a.akamaihd.net/768x768/02990451A2.jpg" alt="Imagem 1">
                    <img src="https://imgnike-a.akamaihd.net/768x768/02990451A6.jpg" alt="Imagem 1">
                    <img src="https://imgnike-a.akamaihd.net/768x768/02990451A4.jpg" alt="Imagem 1">
                    <img src="https://imgnike-a.akamaihd.net/768x768/02990451A7.jpg" alt="Imagem 1">
                    <img src="https://imgnike-a.akamaihd.net/768x768/02990451A3.jpg" alt="Imagem 1">
                </div>
                <div class="carousel-buttons">
                    <button class="carousel-button" onclick="prevSlide()">❮</button>
                    <button class="carousel-button" onclick="nextSlide()">❯</button>
                </div>
            </div>
            <div class="product-description">
                <h1>Air Max DN U.S.A</h1>
                <h2>Detalhes do produto</h2>
                <p>
                    Diga olá à próxima geração de tecnologia Air. O Air Max Dn apresenta nosso sistema de unidade
                    Dynamic Air de tubos de dupla pressão, criando uma sensação reativa a cada passo. Isso resulta em um
                    design futurista que é confortável o suficiente para ser usado do dia à noite. Vá em frente – sinta
                    o irreal.
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="payment-methods">
            <h2>Formas de Pagamento</h2>
            <img src="/visa.jpg" alt="Visa">
            <img src="/mastercard.jpg" alt="MasterCard">
            <img src="/american.jpg" alt="American Express">
            <img src="/paypal.png" alt="PayPal">
            <!-- Adicione mais ícones de pagamento conforme necessário -->
        </div>
        <div class="footer-section">
            <h2 id="sobrealoja">Sobre a Loja</h2>
            <p>Descubra mais sobre nossa loja e o que fazemos. Nossa missão é oferecer produtos de alta qualidade e um
                excelente atendimento ao cliente.</p>
            <a href="#">Saiba mais sobre nós</a>
        </div>
        <div class="footer-section">
            <h2>Ajuda</h2>
            <p>Tem dúvidas? Estamos aqui para ajudar!</p>
            <a href="#">Centro de Ajuda</a> | <a href="#">Contato</a>
        </div>
        <p>&copy; 2024 MinhaMarca. Todos os direitos reservados.</p>
        <p><a href="#">Política de Privacidade</a> | <a href="#">Termos de Serviço</a></p>
    </footer>

    <script>
        $(document).ready(function () {
            $(".cep").mask("00000-000");
            $('#card-number').mask('0000-0000-0000-0000');
            $('#card-expiry').mask('00/00');

            let currentSlide = 0;

            function showSlide(index) {
                const slides = document.querySelectorAll('#carousel-images img');
                if (index >= slides.length) currentSlide = 0;
                if (index < 0) currentSlide = slides.length - 1;
                slides.forEach((slide, i) => {
                    slide.style.transform = `translateX(-${currentSlide * 100}%)`;
                });
            }

            function nextSlide() {
                currentSlide++;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide--;
                showSlide(currentSlide);
            }

            // Initialize carousel
            showSlide(currentSlide);

            // Add event listeners for carousel buttons
            document.querySelector('.carousel-button:nth-of-type(1)').addEventListener('click', prevSlide);
            document.querySelector('.carousel-button:nth-of-type(2)').addEventListener('click', nextSlide);
        });
    </script>
</body>

</html>