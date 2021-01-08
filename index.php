<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonte -->
    <link href="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Icon -->
    <link rel="icon" href="img/gh.svg">

    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Serviços</title>
  </head>
  <body>

    <!-- o que compõe a parte superior do site da altura da viewport -->
    <section id="vp">
      <!-- barra superior -->
      <section id="menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg">

            <div class="logo">
              <a class="navbar-brand" href="#"><img class="img-fluid" src="img/gh.svg"></a>
            </div>

            <div class="navgacao">
              <div class="externo navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="interno">
                  <i class="fas fa-bars"></i>
                </div>
              </div>
              <div class="idioma">
                <ul>
                  <li><a href="">BRA</a><span>/</span></li>
                  <li><a href="">EUA</a></li>
                </ul>
              </div>
              <div class="menu collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item"><a href="">Work</a></li>
                  <li class="nav-item"><a href="">Services</a></li>
                  <li class="nav-item"><a href="">About</a></li>
                  <li class="nav-item"><a href="">Contact</a></li>
                </ul>
              </div>
            </div>

          </nav>
        </div>
      </section>

      <!-- imagem capa -->
      <section id="imagem">
        <div class="row">
          <div class="col-xs-12">
            <img class="img-fluid" src="img/annie-spratt-FSFfEQkd1sc-unsplash.jpg">
          </div>
        </div>
      </section>

      <!-- seção de conteudo 1 -->
      <section id="um">
        <div class="container">
          <div class="row">

              <div class="offset-md-2 col-md-10 offset-lg-0 col-lg-7">
                <div class="t1">
                  <h2>Desenvolvimento <br>de Produtos Digitais</h2>
                  <p>Brands are built based on the DNA of the companies, while respecting.</p>
                </div>
              </div>
              
              <div class="card offset-md-2 col-md-8 offset-lg-0 col-lg-4">
                <form action="php/save_and_send.php" method="POST" name="formulario">
                  <h3>Entre em contato!</h3>
                  <div class="container">
                    <div class="form-group row">
                      <input type="text" placeholder="Nome" name="nome" id="nome" required>
                    </div>
                    <div class="form-group row">
                      <input type="number" placeholder="Telefone" name="telefone" id="telefone" required>
                    </div>
                    <div class="form-group row">
                      <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="form-group row justify-content-center">
                      <button type="submit" class="col-md-5 btn btn-primary" onclick="validar()">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>

          </div>
        </div>
      </section>

    <!-- seção de conteudo 2 -->
    <section id="dois">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-8">
            <div class="t2">
              <p>
                Brands are built based on the DNA of the companies, while respecting its <br> values and principles. They are built of strategic positioning and through the true identification with people both inside and outside the enterprise.<br>
                Our role is to find the purpose of your brand in this world and thus walk a relevant and consistent way by qualified execution of branding across all touch points of your brand and so occupy a place only your on the market, and especially in the people’s hearts.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- seção de conteudo 3 -->
    <section id="tres">
      <div class="container">
        <div class="offset-md-1 offset-lg-1 col-lg-11">
          <div class="t3">
            <h2>Como nós ajudamos</h2>
          </div>
          <div class="cards row">
            <?php 
            $i = 6;
            while ($i > 0 ):
            ?>
              <div class="card offset-md-2 col-lg-3">
                <h3>Lorem ipsum dolor sit<br>amet, consectetur eli</h3>
                <p>Lorem ipsum dolor sit ame tur luctt,<br>consectetur adipiscing elit. Curabitur luctus<br> lorem eget ante dignissim venenatis.</p>
                <div class="skew">
                  <div class="container"></div>
                </div>
                <div class="skew-top">
                  <div class="container"></div>
                </div>
                <div class="skew-bottom">
                  <div class="container"></div>
                </div>
              </div>
            <?php 
              $i-=1;
            endwhile;
            ?>
          </div>
          <div class="row">
            <div class="offset-sm-4 col-sm-10 offset-md-3 col-md-8 offset-lg-5 col-lg-5 offset-xl-4 col-xl-4 offset-xxl-4 col-xxl-4">
              <a href="#um">
                <button class="btn btn-primary col-sm-7 col-lg-8 col-xxl-7">
                  Entre em contato
                </button>
              </a>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <!-- seção de conteudo 4 -->
    <section id="quatro">
      <div class="container">
        <div class="row">
          <h2>Cases</h2>
        </div>
        <div class="row cards2">
          <div class="col-sm-8 col-lg-4">
            <div class="card godoc text-white">
              <img src="img/azul.png" class="card-img">
              <div class="container">
                <div class="card-img-overlay">
                  <div class="more">
                    <p>More</p>
                  </div>
                  <div class="seta">
                    <div class="reta">
                      <div class="container"></div>
                    </div>
                    <div class="skew-bottom">
                      <div class="container"></div>
                    </div>
                    <div class="skew-top">
                      <div class="container"></div>
                    </div>
                    <div class="skew-top-off">
                      <div class="container"></div>
                    </div>                  
                    <div class="skew-bottom-off">
                      <div class="container"></div>
                    </div>
                  </div>
                  <div class="texto">
                    <h3>Godoc</h3>
                    <p>Godoc is an app for scheduling of medical appointments.</p>
                    <span>
                      <p>Branding, interaction</p>
                      <div class="traco">
                        <div class="container"></div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-lg-4">
            <div class="card gerencial text-white">
              <img src="img/desafios.png" class="card-img">
              <div class="container">
                <div class="card-img-overlay">
                  <div class="more">
                    <p>More</p>
                  </div>
                  <div class="seta">
                    <div class="reta">
                      <div class="container"></div>
                    </div>
                    <div class="skew-bottom">
                      <div class="container"></div>
                    </div>
                    <div class="skew-top">
                      <div class="container"></div>
                    </div>
                    <div class="skew-top-off">
                      <div class="container"></div>
                    </div>                  
                    <div class="skew-bottom-off">
                      <div class="container"></div>
                    </div>
                  </div>
                  <div class="texto">
                    <h3>Gerencial</h3>
                    <p>Gerencial is an office auditing, accounting an consulting.</p>
                    <span>
                      <p>Branding, interaction</p>
                      <div class="traco">
                        <div class="container"></div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-lg-4">
            <div class="card vetherapy">
              <img src="img/cinza.png" class="card-img">
              <div class="container">
                <div class="card-img-overlay">
                  <div class="more">
                    <p>More</p>
                  </div>
                  <div class="seta">
                    <div class="reta">
                      <div class="container"></div>
                    </div>
                    <div class="skew-bottom">
                      <div class="container"></div>
                    </div>
                    <div class="skew-top">
                      <div class="container"></div>
                    </div>
                    <div class="skew-top-off">
                      <div class="container"></div>
                    </div>                  
                    <div class="skew-bottom-off">
                      <div class="container"></div>
                    </div>
                  </div>
                  <div class="texto">
                    <h3>Godoc</h3>
                    <p>Godoc is an app for scheduling of medical appointments.</p>
                    <span>
                      <p>Branding, interaction</p>
                      <div class="traco">
                        <div class="container"></div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="t4">
              <h2>All projects</h2>
            </div>
            <div class="seta2">
                <div class="reta2">
                  <div class="container"></div>
                </div>
                <div class="skew-bottom2">
                  <div class="container"></div>
                </div>
                <div class="skew-top2">
                  <div class="container"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- rodape -->
    <section id="rodape">
      <div class="container">
        <div class="row">
          <div class="lista">
            <ul>
              <li><a href="">design</a><span>/</span></li>
              <li><a href="">tech</a><span>/</span></li>
              <li><a href="">content</a><span>/</span></li>
              <li><a href="">strategy</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="lista2">
            <ul>
              <li><a href="">Santa Rosa . BR<br>+55 55 3512 3046</a></li>
              <li><a href="">Porto Alegre . BR<br>+55 51 3907 4275</a></li>
              <li><a href="">San Francisco . EUA<br>+1 415 818 4849</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>