<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">
  <meta name="viewport" content="width=device-width">
  
</head>

  <body>
 <?php include("cabecalho.php"); ?>

    <div class="container destaque">
      <section class="busca">
        <h2>Busca</h2>

        <form>
          <input type="search">
          <input type="image" src="img/busca.png">
        </form>
      </section>
      <!--Fim busca -->

      <section class="menu-departamentos">
        <h2>Departamentos</h2>
        <nav>
          <ul>
            <li>
              <a href="#">Blusas e Camisas</a>
              <ul>
                <li><a href="">Manga curta</a></li>
                <li><a href="">Manga longa</a></li>
                <li><a href="">Camisa social</a></li>
                <li><a href="">Camisa casual</a></li>
              </ul>

            </li>
            <li><a href="#">Calças</a></li>
            <li><a href="#">Saias</a></li>
            <li><a href="#">Vestidos</a></li>
            <li><a href="#">Sapatos</a></li>
            <li><a href="#">Bolsas e Carteiras</a></li>
            <li><a href="#">Acessórios</a></li>
          </ul>
        </nav>
      </section>
      <!--Fim .menu-departamentos -->
      <img src="img/destaque-home.png" alt="Promoção: BIg City Night">
    </div>
    <!--Fim container destaque -->


    <div class="container paineis">
      <section class="painel novidades">
        <h2>Novidades</h2>
        <ol>

          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz CArdigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura2.png">
                <figcaption>Fuzz CArdigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura3.png">
                <figcaption>Fuzz CArdigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura4.png">
                <figcaption>Fuzz CArdigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura5.png">
                <figcaption>Fuzz CArdigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura6.png">
                <figcaption>Fuzz CArdigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

        </ol>
      </section>

      <section class="painel mais-vendidos">
        <h2>Mais vendidos</h2>

        <ol>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura7.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura8.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura9.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura10.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura11.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura12.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>

        </ol>
      </section>
    </div>


      <?php include("rodape.php"); ?>
  </body>

</html>