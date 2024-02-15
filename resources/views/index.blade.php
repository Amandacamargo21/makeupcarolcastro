<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
    <script src="https://kit.fontawesome.com/aba2c4b3e3.js" crossorigin="anonymous"></script>
    
    <title>Caroline Castro | Maquiadora em Curitiba</title>
</head>
<body>
  
    <div class="parallax">
      <div class="contact_header">
        <div class="social-icons">
          <a href="https://bit.ly/agendacarolmakeup" target="_blank"><i class="fa fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/makeup_carolcastro/" target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100000456974259" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <header class="header-wrapper">
        <div class="header">
          <div class="checkbox-container">
            <div class="checkbox-wrapper">
              <input type="checkbox" id="toggle">
              <label class="checkbox" for="toggle">
                <div class="trace"></div>
                <div class="trace"></div>
                <div class="trace"></div>
              </label>
                  <div class="menu"></div>
                  <nav class="menu-items">
                    <ul>
                      <li>
                        <a href="{{ url('index') }}">Home</a>
                      </li>
                      <li>
                        <a href="{{ url('blog') }}">Blog</a>
                      </li>
                      <li>
                        <a href="{{ url('portfolio') }}">Portf�lio</a>
                      </li>
                      <li>
                        <a href="{{ url('services') }}">Servi�os</a>
                      </li> 
                      <li>
                        <a href="{{ url('brides') }}">Noivas</a>
                      </li> 
                      <li>
                        <a href="{{ url('contact') }}">Contato</a>
                      </li>
                      <li>
                        <a href="{{ url('address') }}">Endere�o</a>
                      </li>
                    </ul>
                  </nav>
                </div>
            </div>
        </div>
        </header>
        <div class="container_logo">
          <div class="name animated-text">
            <h2 class="main_logo ">CAROLINE CASTRO</h2>
            <span class="main_description">MAQUIADORA E ESTETICISTA</span>
          </div>
      </div>
    </div>
    <!-- Restante do seu conte�do HTML aqui -->
    <main>
      <div class="container_">
          <div class="sobre_mim">
                <div class="photo">
                  
                </div>
            <div class="description">
              <h2 class="sub_titulo_name">SOBRE MIM</h2>
              <div class="desciption_text">
                <span>Meu nome é Carol, e sou uma maquiadora que acredita que a beleza vem de dentro para fora. Minha filosofia de trabalho é realçar a beleza natural de cada cliente, despertando o que há de melhor em você. Amo trabalhar com cores, texturas e estilos diferentes, mas sempre com o objetivo de destacar os traços mais bonitos de cada pessoa. Meu trabalho é meu hobby e minha paixão, e gosto de sempre estar por dentro das novas técnicas e tendências.</span>
              </div>
            </div>
          </div>
      </div>
        <div class="container">
          <div class="container_center">
          <h2 class="sub_titulo">PORTIFÓLIO</h2>
            <div class="gallery">
              <div class="gallery__item gallery__item--1">
                <a href="https://www.instagram.com/p/CkpOpV7st5u/" target="_blank">
                  <img class="gallery__img img1" src="/assets/images/portifolio/314518551_805360827360179_7093560696473475514_n.jpg" alt="">
                </a>
              </div>
              <div class="gallery__item gallery__item--2">
                <a href="https://www.instagram.com/p/ClBvvaarkBx/" target="_blank">
                  <img class="gallery__img img2" src="/assets/images/portifolio/315734649_541655027326191_3177675308471945791_n.jpg" alt="">
                </a>              
              </div>
              <div class="gallery__item gallery__item--3">
                <a href="https://www.instagram.com/p/CmwJej3uDHY/" target="_blank">
                  <img class="gallery__img img3" src="/assets/images/portifolio/322748664_853475045935114_2463602974882208221_n.jpg" alt="">
                </a>              
              </div>
              <div class="gallery__item gallery__item--4">
                <a href="https://www.instagram.com/p/Cn5KMXKOeLt/" target="_blank">
                  <img class="gallery__img img4" src="/assets/images/portifolio/327271534_2384780061684201_4296868122611506003_n.jpg" alt="">
                </a>              
              </div>
              <div class="gallery__item gallery__item--5">
                <a href="https://www.instagram.com/p/Coj9fQ3OW7U/" target="_blank">
                  <img class="gallery__img img5" src="/assets/images/portifolio/330209242_1170703103807259_6133131286613415901_n.jpg" alt="">
                </a>              
              </div>
              <div class="gallery__item gallery__item--6">
                <a href="https://www.instagram.com/p/CrHTzHiMI9a/" target="_blank">
                  <img class="gallery__img img6" src="/assets/images/portifolio/341348499_3455880704684749_139611860557769341_n.jpg" alt="">
                </a>              
              </div>
              <div class="gallery__item gallery__item--7">
                <a href="https://www.instagram.com/p/CkMe72jsAOv/" target="_blank">
                  <img class="gallery__img img7" src="/assets/images/portifolio/312658661_136735705796506_8699692264206293063_n.jpg" alt="">
                </a>
              </div>
            </div>  
          </div>         
        </div>     

        <!--Serviços oferecidos-->
        <div class="container2">
          <h2 class="sub_titulo_serv">SERVIÇOS</h2>
          <div class="servicos">
            <div class="servico__item">
              <img src="/assets/images/serviços/close-up-make-up-artist-applying-eyeshadow-woman-with-brush.jpg" alt="" class="servico__item__img">
              <span>Maquiagem</span>
            </div>
            <div class="servico__item">
              <img src="/assets/images/serviços/cabelo.jpg" alt="" class="servico__item__img">
              <span>Cabelo</span>
            </div>
            <div class="servico__item">
              <img src="/assets/images/serviços/sobrancelha.jpg" alt="" class="servico__item__img">
              <span>Design de sobrancelhas</span>
            </div>
            <div class="servico__item">
              <img src="/assets/images/serviços/limpeza.jpg" alt="" class="servico__item__img">
              <span>Limpeza de pele</span>
            </div>
            <div class="servico__item">
              <img src="/assets/images/serviços/extensao.jpg" alt="" class="servico__item__img">
              <span>Extensão de cílios</span>
            </div>
          </div>
        </div>

        <!--Depoimentos de clientes-->
        <div class="container3">
          <h2 class="sub_titulo">FEEDBACKS</h2>
          <!--<i class="fa-solid fa-quote-left aspas"></i>-->
          <div class="depoimentos slider">
              <div class="slide">
                  "Atenciosa, paciente e muito profissional. Amei demais..."                
                <span>@caires_jessica</span>
              </div>
              <div class="slide">
                "...Eu cheguei em casa e a maquiagem estava intacta!!! Perfeita demais!!! 
                E olha que o evento acabou quase 1h da manhã.
                Muito obrigada pelo capricho!"
                <span>@juulhana</span>
              </div>
              <div class="slide">
                "...A maquiagem aguentou a noite toda, cheguei em casa e tava intacta.
                Recebi vários elogios!"
                <span>@karine_herke</span>
              </div>
              <div class="slide">
                "...Fiquei me sentindo poderosa. Você arrasou!"
                <span>@sineide.iurchevick</span>
              </div>
              <div class="slide">
                "...Fiquei me sentindo poderosa. Você arrasou!"
                <span>@sineide.iurchevick</span>
              </div>
              <div class="slide">
                "Carol, além de uma pessoa encantadora e incrível, és uma maker maravilhosa!"
                <span>@marilyummenviau</span>
              </div>
              <div class="slide">
                "...Cheguei em casa 3h da manhã, tinha chorado na cerimônia e suado
                horrores dançando e a make estava intacta!!! Perfeita!
                Mais uma vez, muito obrigada pelo seu atendimento, você arrasa demais! "
                <span>@karolinehey</span>
              </div>
          </div>
          <!--<i class="fa-solid fa-quote-right aspas-direita"></i>-->
        </div>

        <!--Contato-->
        <div class="container4">
          <div class="contato">
            <div class="container_msg">
              <div class="msg_final">
                <span>Está pronta para conhecer
                  a sua melhor versão?</span>
                  <div class="btn">
                    <a href="https://bit.ly/agendacarolmakeup" target="_blank">
                      <button class="whats_btn">Agende já o seu horário
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                      </button>
                    </a>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="container_footer">
        <div class="logo_footer"></div>
        <div class="row">
          <div class="col-md-4">
            <p>Atendimento a domicílio</p>
            <p>Telefone: (41) 99870-6820</p>
          </div>
            <div class="social-icons">
              <a href="https://bit.ly/agendacarolmakeup" target="_blank"><i class="fa fa-whatsapp"></i></a>
              <a href="https://www.instagram.com/makeup_carolcastro/" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100000456974259" target="_blank"><i class="fa fa-facebook"></i></a>
            </div>
          
        </div>
      </div>
      <div class="devinfo">
        <nav class="footer_nav">
          <p class="footer_p">&copy; 2023 Todos os direitos reservados.</p>
          <p class="footer_p">Desenvolvido por: <a href="https://www.linkedin.com/in/amandacamargo21/" target="_blank"><strong>Amanda Camargo - Consultoria e Criação de Sites</strong></a></p>
    
    </footer>
    
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>
