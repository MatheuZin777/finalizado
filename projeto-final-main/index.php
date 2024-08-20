<!doctype html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./tenis/segundo.html">
  <title>Stylref</title>
</head>

<body style="background-color:#757171;">
  <!-- header(cabeçario)/ adicionas os link -->
  <header>
        <div class="logo">
            <img src="StyleCourt__1_-removebg-preview.png" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="index.php" hidden>Home</a></li>
                <li><a href="#sobrealoja" hidden>Sobre</a></li>
                <li><a href="#sobrealoja" hidden>Contato</a></li>
            </ul>
        </nav>
        <div class="search-bar" id="pesquisa">
            <input type="text" placeholder="Buscar" id="searchbar" onkeyup="search()">
        </div>
        <div class="cart-icon">

            <a href=""><img src="carrinho.png" alt="Carrinho"></a>

            <a href="registrar.php"><img src="user.png" alt="Carrinho" id="user"></a>
        </div>
    </header>
    </header>
  <!-- fim do header(cabeçario) -->

  <!-- comeco dos slides/ colocar as imagens-->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://static.netshoes.com.br/bnn/l_netshoes/2024-07-26/8206_f1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://static.netshoes.com.br/bnn/l_netshoes/2024-07-25/185_f2.png" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://static.netshoes.com.br/bnn/l_netshoes/2024-07-30/3793_1920x504_Oli_nova.gif"
          class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- fim dos slides -->
  
  <!-- Começo dos cards -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 50px; background-color:#757171">
    <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;  " onclick="redirectTo('./tenis/pagamento.php')">
      <img id="card1" src="mzun.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">MIZUNO WAVE PROPHECY 12-S</h4>
        <h6>R$ 1299,99 No Pix</h6>
        <p style="font-size: x-medium;">ou R$ 1399,99 em até 9x sem juros</p>
      </div>  
    </div>
    <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/segundo.php')"> <!--Site para ser redirecionado-->
      <img id="card2" src="https://imgnike-a.akamaihd.net/768x768/02825551A8.jpg" class="card-img-top">
      <div class="card-body">
        <h4 class="card-title">Air Max Plus III</h4>
        <h6>R$ 1499,99</h6>
        <p style="font-size: x-medium;">ou R$ 1599,99 em até 7x sem juros</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/terceiro.php')"> <!--Site para ser redirecionado-->
      <img id="card3" src="https://imgnike-a.akamaihd.net/768x768/026709N2A8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Tênis Nike Infinity Run 4 Feminino</h4>
        <h6>R$ 759,99 no Pix 19% off</h6>
        <p style="font-size: x-medium;">ou R$ 799,99 em até 7x sem juros</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/quarto.php')"> <!--Site para ser redirecionado-->
      <img id="card4" src="https://imgnike-a.akamaihd.net/768x768/02990451A2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Air Max DN U.S.A</h4>
        <h6>R$ 1299,99 </h6>
        <p style="font-size: x-medium;">ou R$ 1399,99 em até 6x sem juros</p>
      </div>
    </div>
  </div>
  
  <div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 10px; background-color:#757171; margin-bottom:35px;">
    <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/pagamento5.php')"> <!--Site para ser redirecionado-->
      <img id="card5" src="https://imgnike-a.akamaihd.net/768x768/029054NXA1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Camiseta Nike Liverpool Dri-FIT Academy Pro Masculina</h5>
        <h6>R$ 332,49 no Pix 5% off</h6>
        <p style="font-size: x-medium;">ou R$ 349,99 em até 3x sem juros</p>
      </div>
    </div>
    <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/pagamento6.php')"> <!--Site para ser redirecionado-->
      <img id="card6" src="https://imgnike-a.akamaihd.net/768x768/02654551A8.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Blusão Nike Barcelona FC Club Fleece Masculino</h5>
        <h6>R$ 436,99 no Pix 27% off</h6>
        <p style="font-size: x-medium;">ou R$ 459,99 em até 4x sem juros 23% off</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/pagamento7.php')"> <!--Site para ser redirecionado-->
      <img id="card7" src="https://imgnike-a.akamaihd.net/360x360/02872151.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Camisa Nike Corinthians I 2024/25 Torcedor Pro Masculina</h5>
        <h6>R$ 332,49 no Pix 5% off</h6>
        <p style="font-size: x-medium;">ou R$ 349,99 em até 3x sem juros</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px;" onclick="redirectTo('./tenis/pagamento8.php')"> <!--Site para ser redirecionado-->
      <img id="card8" src="https://imgnike-a.akamaihd.net/360x360/0285640L.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Camisa Nike Brasil I 2024/25 Torcedor Pro Masculina</h5>
        <h6>R$ 332,49 no Pix 5% off</h6>
        <p style="font-size: x-medium;">ou R$ 349,99 em até 3x sem juros</p>
      </div>
    </div>
  </div>
  <!-- fim do card -->
  
  <!-- inicio do acordeao -->
  <div style="background-color:rgb(12, 12, 12)">
  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
  <script>
    var card1 = document.getElementById("card1");
    card1.addEventListener("mouseenter", cad1);
    card1.addEventListener("mouseleave", cad1sair);
    var card2 = document.getElementById("card2");
    card2.addEventListener("mouseenter", cad2);
    card2.addEventListener("mouseout", cad2sair);
    var card3 = document.getElementById("card3");
    card3.addEventListener("mouseenter", cad3);
    card3.addEventListener("mouseleave", cad3sair);
    var card4 = document.getElementById("card4");
    card4.addEventListener("mouseenter", cad4);
    card4.addEventListener("mouseleave", cad4sair);
    var card5 = document.getElementById("card5");
    card5.addEventListener("mouseenter", cad5);
    card5.addEventListener("mouseleave", cad5sair);
    var card6 = document.getElementById("card6");
    card6.addEventListener("mouseenter", cad6);
    card6.addEventListener("mouseleave", cad6sair);
    var card7 = document.getElementById("card7");
    card7.addEventListener("mouseenter", cad7);
    card7.addEventListener("mouseleave", cad7sair);
    var cd8 = document.getElementById("card8");
    cd8.addEventListener("mouseenter", cad8);
    cd8.addEventListener("mouseleave", cad8sair);

    function cad1() {
        card1.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad1sair() {
        card1.style.boxShadow = "";
    }

    function cad2() {
        card2.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad2sair() {
        card2.style.boxShadow = "";
    }
    function cad3() {
        card3.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad3sair() {
        card3.style.boxShadow = "";
    }

    function cad4() {
        card4.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad4sair() {
        card4.style.boxShadow = "";
    }
    function cad5() {
        card5.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad5sair() {
        card5.style.boxShadow = "";
    }
    function cad6() {
        card6.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad6sair() {
        card6.style.boxShadow = "";
    }
    function cad7() {
        card7.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad7sair() {
        card7.style.boxShadow = "";
    }
    function cad8() {
        cd8.style.boxShadow = "2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
    }
    function cad8sair() {
        cd8.style.boxShadow = "";
    }

    function redirectTo(url) {
        window.location.href = url;
    }

    function search() {
        let input = document.getElementById("searchbar").value.toLowerCase();
        let cards = document.getElementsByClassName("card");

        for (let i = 0; i < cards.length; i++) {
            if (cards[i].innerHTML.toLowerCase().includes(input)) {
                cards[i].style.display = "block";
            } else {
                cards[i].style.display = "none";
            }
        }
    }
    
  </script>
</body>
</html>
