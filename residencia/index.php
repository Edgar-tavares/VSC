<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe</title>
    <link rel="stylesheet" href="styles/styles.css">
    
<
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $name = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    echo "<div class='tm-form-success'>
            <p>Obrigado, <strong>$name</strong>! Sua Mensagem Foi Enviada.</p>
          </div>";
}
?>
  <div class="tm-container">
    <div class="tm-row">
      <!-- header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">Wave Cafe</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-mug-hot tm-page-link-icon"></i>
                  <span>Drink Menu</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>Sobre nós</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Itens Especiais</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Contato</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>        
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#drink" class="tm-tab-link active" data-id="cold">Café Gelado</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Café Quente</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Suco de fruta</a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/iced-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Café Gelado<span class="tm-list-item-price">R$10.25</span></h3>
                    <p class="tm-list-item-description">Café geladinho para alegrar sua vida.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Capuccino Gelado<span class="tm-list-item-price">R$12.50</span></h3>
                    <p class="tm-list-item-description">Capuccinho gelado, uma mistura para adoçar sua vida.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Expresso Gelado<span class="tm-list-item-price">R$14.25</span></h3>
                    <p class="tm-list-item-description">Aquele Expresso Bem Geladinho para você se deliciar.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Café com Leite Gelado<span class="tm-list-item-price">R$11.50</span></h3>
                    <p class="tm-list-item-description">Café com leite gelado. </p>
                  </div>
                </div> 
                                       
              </div>
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                  <img src="img/hot-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Americano Quente<span class="tm-list-item-price">R$8.50</span></h3>
                    <p class="tm-list-item-description">Café Americano quentinho.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Cappuccino Tradicional<span class="tm-list-item-price">R$9.50</span></h3>
                    <p class="tm-list-item-description">Caapuccino tradicional.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Expresso Quente<span class="tm-list-item-price">R$7.50</span></h3>
                    <p class="tm-list-item-description">Café Expresso quente.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Café Com Leite<span class="tm-list-item-price">R$6.50</span></h3>
                    <p class="tm-list-item-description">Cafezinho com leite na medida.</p>              
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/smoothie-1.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Suco de Morango Especial<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Uma opção para você que quer sair do tradicional.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-2.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Suco de Maçã Especial<span class="tm-list-item-price">$10.50</span></h3>
                    <p class="tm-list-item-description">Suco de maçã Gaseificado com frutas citricas e rusticas da malazia e da angola.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-3.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Mix de Frutas <span class="tm-list-item-price">R$9.50</span></h3>
                    <p class="tm-list-item-description">Um Mix de frutas onde prevalece a laranja.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-4.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Mix de Limão e laranja<span class="tm-list-item-price">R$8.50</span></h3>
                    <p class="tm-list-item-description">PMix de limão e laranja e um toque do segredo da casa.</p>              
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-mb-20 tm-about-box">
              <h2 class="tm-text-primary tm-about-header">Qualidade é Prioridade</h2>
              <div class="tm-list-item tm-list-item-2">
                <img src="img/about-1.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p class="tm-mb-20">Nosso café preza sempre pela melhor qualidade em produtos e no atendimento.</p>
                  <p class="tm-mb-20">Somos um café com vários diferenciais e atrativos para você.</p>
                  <p class="tm-mb-0">Venha descobrir mais sobre nós, compareça na unidade mais proxima à você.</p>
                </div>
              </div>
            </div>

            <div class="tm-black-bg tm-mb-20 tm-about-box">
              <h2 class="tm-text-primary tm-about-header">Café da manhã</h2>
              <div class="tm-list-item tm-list-item-2">
                <img src="img/about-2.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p class="tm-mb-20">Possuimos também cafés da manhã especias, preparados especificamente para você.</p>
                  <p class="tm-mb-0">Venha conhecer mais.</p>
                </div>
              </div>
            </div>
          </div>

      

          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-box">
              <h2 class="tm-contact-header">Olá, informe aqui seu feedback!</h2>
              <div class="tm-contact-form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="tm-contact-form">
                  <div class="form-group">
                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Nome" required>
                  </div>
                  <div class="form-group">
                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <textarea id="contact_message" name="message" class="form-control" rows="5" placeholder="Mensagem" required></textarea>
                  </div>
                  <button type="submit" class="btn tm-btn-submit">Enviar</button>
                </form>
              </div>              
            </div>        
          </div>
        </main>
      </div>
    </div>
  </div>

  <div id="tm-video-container">
    <video autoplay muted loop id="tm-video">
      <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
    </video>
  </div>

  <script src="js/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      // Tabs
      $('.tm-tab-link').click(function(e){
        e.preventDefault();

        var tab = $(this).data('id');

        $('.tm-tab-link').removeClass('active');
        $(this).addClass('active');

        $('.tm-tab-content').removeClass('active');
        $('#'+tab).addClass('active');
      });
    });
  </script>
</body>
</html>
