<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-top mr-2">
                
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produtos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Categoria 1</a>
                                <a class="dropdown-item" href="#">Categoria 2</a>
                                <a class="dropdown-item" href="#">Categoria 3</a>
                                <a class="dropdown-item" href="#">Categoria 4</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!-- Carrossel para os Banner da loja Seven Gardens -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagens/carrossel1.jpg" class="d-block w-100" alt="...">
              
            </div>
            <div class="carousel-item">
                <img src="imagens/carrossel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/carrossel3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <main class="py-5">
        <div class="container">
            <div class="row">
                <?php
                // Loop para exibir 16 fotos de plantas
                for ($i = 1; $i <= 16; $i++) {
                    echo '<div class="col-md-3 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="imagens/plant' . $i . '.png" class="card-img-top" alt="Planta ' . $i . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Planta ' . $i . '</h5>';
                    echo '<p class="card-text">Preço: $10.00</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </main>
  <!-- Este é um link para acessibilidade de libras -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <!-- FOOTER -->
    <footer class="text-light py-3 custom-footer">
        <div class="container text-center">
            <p>&copy; 2024 Venda de Plantas. Todos os direitos reservados.</p>
          <div>
            <div>
                <a href="https://www.instagram.com/seu_perfil_instagram" class="text-light mr-3" target="_blank"><i class="fab fa-instagram fa-2x" style="color: pink;"></i></a>
                <a href="https://api.whatsapp.com/send?phone=seu_numero_whatsapp" class="text-light mr-3" target="_blank"><i class="fab fa-whatsapp fa-2x" style="color: pink;"></i></a>
                <a href="https://www.facebook.com/seu_perfil_facebook" class="text-light" target="_blank"><i class="fab fa-facebook fa-2x" style="color: pink;"></i></a>
            </div>
          </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
