<!DOCTYPE html>
<html lang="pt-BR">
<!--HEAD-->
<head>
  <!--META TAGS-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--TITLE-->
  <title>Plena Forma</title>
  <!--GOOGLE FONTS-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <!--FAV ICON-->
  <link rel="icon" href="img/icon.png" />
  <!--CSS-->
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/elements.css">
  <link rel="stylesheet" href="css/classes.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<!--BODY-->
<body>
  <!--MENU-->  
  <input id="close-menu" class="close-menu" type="checkbox" aria-label="Close menu" role="button">
  <label class="close-menu-label" for="close-menu" title="close menu"></label>
  <aside class="menu white-bg">
    <div class="main-content menu-content">
      <h1 onclick="getElementById('close-menu').checked = false;">
        <a href="#home"><img src="img/logo.png" style="width: 220px; margin-top: 5px;"></a>
      </h1>
      <!--MAIN NAVBAR-->
      <nav>
        <ul onclick="getElementById('close-menu').checked = false;">
          <li><a href="#intro">Quem somos</a></li>
          <li><a href="#grid-one">Porque nós</a></li>
          <li><a href="#gallery">Galeria</a></li>
          <li><a href="#grid-two">Mais</a></li>
          <li><a href="#pricing">Preços</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="menu-spacing"></div>
  <!--HOME SECTION-->
  <section id="home" class="intro main-bg section">
    <div class="main-content intro-content">
      <div class="intro-text-content">
        <h2>A Melhor Infraestrutura da Região</h2>
        <p>Possuimos os melhores aparelhos e a mais completa infraestrutura, além de contarmos com os melhores profissionais para melhor lhe atender, sempre de uma forma especial. Vem com a gente, aqui você fica em Plena Forma!</p>
      </div>
      <div class="intro-img">
        <img src="img/art.svg" alt="Art">
      </div>
    </div>
  </section>
  <!--INTRO SECTION-->
  <section id="intro" class="white-bg section">
    <div class="main-content top3-content">
      <h2>Treinamento Funcional, Pilates e muito mais...</h2>
      <p>Não somos só mais uma academia, somos um centro de saúde completo e pronto para atender as suas necessidades.
        Seja para perda de peso, ganho de massa muscular ou até mesmo para aliviar o estresse do dia a dia,
        o Centro Plena Forma é o lugar certo para você, junte-se a nós!!! 
      </p>      
    </div>
  </section>
  <!--GRIDS SECTION-->  
  <section id="grid-one" class="grid-one main-bg section">
    <div class="main-content grid-one-content">
      <h2 class="grid-main-heading">O lugar certo...</h2>
      <p class="grid-description">Razões para escolher o Centro Plena Forma:</p>
      <!--GRID-->
      <div class="grid">
        <!--GRID 1-->
        <article>
          <h3>Infraestrutura</h3>
          <p>Possuímos academia completa para musculação, equipamentos para pilates e yoga,
            piscina aquecida, área de lazer para eventos e comemorações, espaço kids e muito mais...</p>
        </article>
        <!--GRID 2-->
        <article>
          <h3>Profissionais</h3>
          <p>Possuímos profissionais formados e treinados para te ajudar a alcançar todos os seus objetivos.
            Contamos com médicos, fisioterapeutas, instrutores de pilates, yoga e personal para acadêmia.
          </p>
        </article>
        <!--GRID 3-->
        <article>
          <h3>Custo Benefício</h3>
          <p>Aqui no Centro Plena Forma o preço cabe no seu bolso, apesar da excelente infraestrutura e da alta 
            qualidade dos nossos profissionais, os nossos preços são considerados os mais baixos da região, venha conferir!
          </p>
        </article>
      </div>
    </div>
  </section>
  <!--GALLERY SECTION-->
  <section id="gallery" class="grid-one white-bg section">
    <div class="main-content grid-one-content">
      <h2 class="grid-main-heading">Galeria</h2>
      <p class="grid-description">Dê uma olhada no ambiente que espera por você...</p>
      <!--GRID - PICTURES-->
      <div class="grid">
        <div class="gallery-img">
          <img src="img/pic_01.jpg" alt="random image from unsplash" />
        </div>
        <div class="gallery-img">
          <img src="img/pic_02.jpg" alt="random image from unsplash" />
        </div>
        <div class="gallery-img">
          <img src="img/pic_03.jpg" alt="random image from unsplash" />
        </div>
        <div class="gallery-img">
          <img src="img/pic_04.jpg" alt="random image from unsplash" />
        </div>
        <div class="gallery-img">
          <img src="img/pic_05.jpg" alt="random image from unsplash" />
        </div>
        <div class="gallery-img">
          <img src="img/pic_06.jpg" alt="random image from unsplash" />
        </div>
      </div>
    </div>
  </section>
  <!--GRIDS 2 SECTION-->
  <section id="grid-two" class="grid-one main-bg section">
    <div class="main-content grid-one-content">
      <h2 class="grid-main-heading">Mais do que um lugar ideal...</h2>
      <p class="grid-description">Mais razoẽs para nos escolher:</p>
      <!--GRID 4-->
      <div class="grid">
        <article>
          <h3>Localização</h3>
          <p>Nosso centro fica localizado na região central da cidade ao lado do terminal rodoviário central. 
           Um lugar de fácil acesso para todos, além de ser um local tranquilo e super seguro.</p>
        </article>
        <!--GRID 5-->
        <article>
          <h3>Parcerias</h3>
          <p>Possuímos diversas parcerias com diversos comércios, ao se matricular no nosso centro, você ganha o cartão
             Plena Forma, que te proporcionará diversos benefícios.
          </p>
        </article>
        <!--GRID 6-->
        <article>
          <h3>Brindes</h3>
          <p>O Centro Plena Forma realiza vários sorteios a cada trimestre, os sortudos ganham kit com roupa
            de academia plena forma, garrafinhas, acessórios personalizados e muito mais...
          </p>
        </article>
      </div>
    </div>
  </section>
  <!--PRICING SECTION-->
  <section id="pricing" class="white-bg section">
    <div class="main-content top3-content">
      <h2>Preços</h2>      
      <p>Confira nossos preços mensais promocionais, lembrando que só este mês você poderá se matricular gratuitamente,
        sem taxas adicionais.</p>
      <!--TABLE-->
      <div class="responsive-table">
        <table>
          <!--THEAD-->
          <thead>
            <tr>
              <th>Academia</th>
              <th>Pilates</th>
              <th>Yoga</th>
              <th>Natação</th>
              <th>Crossfit</th>
            </tr>
          </thead>
          <!--TBODY-->
          <tbody>
            <tr>
              <td>Seg á Sex</td>
              <td>Ter e Qui</td>
              <td>Ter e Qui</td>
              <td>Sex e Sáb</td>
              <td>Seg á Sex</td>
            </tr>            
          </tbody>
          <!--TFOOT-->
          <tfoot>
            <tr>
              <td>R$ 95,00</td>
              <td>R$ 120,00</td>
              <td>R$ 130,00</td>
              <td>R$ 105,00</td>
              <td>R$ 100,00</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </section>
  <!--CONTACT SECTION-->
  <section id="contact" class="intro main-bg section">
    <div class="main-content intro-content">
      <div class="intro-text-content">
        <h2>Contato</h2>
        <p>Centro Plena Forma LTDA<br>
        CNPJ 11.225.326/0001-99<br>
        Av. Estados Unidos n° 1050 Centro Londrina-PR CEP 25254-859<br>
        Tel.: (41) 3333-3333
        </p>
      </div>
      <!--ART - PICTURE-->
      <div class="intro-img">
        <img src="img/art.svg" alt="Art">
      </div>
      <!--FORM-->
      <div class="contact-form">
        <form method="post" action="email.php">
        <fieldset class="form-grid">
          <legend>Nos envie uma mensagem</legend>
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="surname">Sobrenome</label>
            <input type="text" name="surname" id="surname" placeholder="Sobrenome">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="exemplo@email.com">
          </div>
          <div class="form-group full-width">
            <label for="message">Mensagem</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem..."></textarea>
          </div>
          <div class="form-group full-width">
            <button type="submit">Enviar</button>
          </div>
        </fieldset>
        </form>
      </div>  
    </div>
  </section>
  <!--FOOTER SECTION-->
  <footer id="footer" class="footer white-bg">
    <p>Centro Plena Forma 2021 © Todos os direitos reservados.</p>
  </footer>
  <!--BACK-TO-TOP BUTTON-->
  <a class="back-to-top" href="#">➤</a>
  <!--ALERT SECTION-->
  <!--SUCCESS MESSAGE-->
  <?php if(isset($_GET['status']) && $_GET['status'] == 'success'){ ?>
    <script>
      alert('Mensagem enviada com sucesso!')
    </script>
  <?php } ?>
  <!--ERROR MESSAGE-->
  <?php if(isset($_GET['status']) && $_GET['status'] == 'error'){ ?>
    <script>
      alert('Erro ao enviar mensagem,por favor tente novamente.')
    </script>
  <?php } ?>
</body>

</html>
