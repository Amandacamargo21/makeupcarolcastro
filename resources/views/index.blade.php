<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- owl carrossel --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <script src="https://kit.fontawesome.com/aba2c4b3e3.js" crossorigin="anonymous"></script>

    <title>Caroline Castro | Maquiadora em Curitiba</title>
</head>

<body>
    <div class="traco-redes-sociais-fixo"></div>
    <div class="redes-sociais-fixo">
        <a href="https://bit.ly/agendacarolmakeup" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/makeup_carolcastro/" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100000456974259" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>

    </div>

    <div class="container_logo">
        <div class="header">
            <nav class="menu-items">
                <a href="{{ url('blog') }}">Blog</a>
                <a href="{{ url('portfolio') }}">Portfólio</a>
                <a href="{{ url('services') }}">Serviços</a>
            </nav>
            <div class="name animated-text">
                <h2 class="main_logo ">Caroline Castro</h2>
                <span class="main_description">makeup artist</span>
            </div>
            <nav class="menu-items">
                <a href="{{ url('brides') }}">Noivas</a>
                <a href="{{ url('contact') }}">Contato</a>
                <a href="{{ url('address') }}">Endereço</a>
            </nav>
        </div>
    </div>

    {{-- <div class="divisor"></div> --}}
    <main>
        <div class="container">
            <div class="apresentacao">
                <div class="card-title">
                    <p class="title">Mais que maquiagem, uma paixão</p>
                    <p class="subtitle">Quem sou eu</p>

                    <div class="card-body">
                        Sou uma artista da beleza, apaixonada por transformar rostos em obras de arte. Desde a infância,
                        sempre me interessei por cores e texturas, e encontrei na maquiagem a forma perfeita de
                        expressar minha criatividade e paixão pela beleza.
                        <br><br>
                        Acredito que a beleza reside nos detalhes. Me dedico a realçar a beleza natural de cada cliente,
                        criando looks personalizados que expressam a individualidade e estilo de cada pessoa.
                        <br><br>
                        Para mim, a maquiagem é mais que um serviço, é uma forma de arte e expressão. Me conecto com
                        cada cliente, entendendo seus desejos e necessidades para criar um look que seja perfeito para a
                        ocasião.
                    </div>
                </div>
                <img src="assets/images/Captura de tela 2024-02-19 194940.png" class="card-img-top" alt="...">
            </div>
        </div>

        <div class="container-services">
            <p class="title">Realçando sua beleza natural</p>
            <p class="subtitle">Conheça meus serviços personalizados</p>
            

            {{-- <div class="services owl-carousel"> --}}
            <div class="services">
                <div class="container2">
                    <div class="image-container">
                        <img src="assets/images/make.jpeg" alt="Serviço 1" data-background-image="assets/images/make.jpg">
                   
                        <div class="overlay">
                            <div class="texto-container">
                                <span class="texto-animado">Maquiagem</span>
                                <div class="underline"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="image-container">
                        <img src="assets/images/lashes.jpg" alt="Serviço 2" data-background-image="assets/images/lashes.jpg">
                        <div class="overlay">
                            <div class="texto-container">
                                <span class="texto-animado">Extensão de cílios</span>
                                <div class="underline"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="image-container">
                        <img src="assets/images/sobran.jpg" alt="Serviço 2" data-background-image="assets/images/sobran.jpg">
                        <div class="overlay">
                            <div class="texto-container">
                                <span class="texto-animado">Design de sobrancelha</span>
                                <div class="underline"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="image-container">
                        <img src="assets/images/penteado.jpg" alt="Serviço 2"  data-background-image="assets/images/penteado.jpg">
                        <div class="overlay">
                            <div class="texto-container">
                                <span class="texto-animado">Penteados</span>
                                <div class="underline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-portfolio">
            <p class="title">Inspirando sua beleza</p>
            <p class="subtitle">Cada projeto, uma história única de beleza e empoderamento</p>
            <div class="secao-servicos">
                <div class="card-servico">
                    {{-- <img src="assets/images/make.jpg" alt="Serviço 1"> --}}
                    <p>Maquiagem</p>
                </div>
                <div class="card-servico">
                    {{-- <img src="assets/images/lashes.jpg" alt="Serviço 2"> --}}
                    <p>Extensão de cílios</p>
                </div>
                <div class="card-servico">
                    {{-- <img src="assets/images/sobran.jpg" alt="Serviço 2"> --}}
                    <p>Design de sobrancelhas</p>
                </div>
                <div class="card-servico">
                    {{-- <img src="assets/images/penteado.jpg" alt="Serviço 2"> --}}
                    <p>Penteados</p>
                </div>
            </div>
        </div>
        <div class="container-noiva">
            <p class="title">A beleza radiante da noiva</p>
            <p class="subtitle"> Crie a maquiagem dos seus sonhos para o grande dia</p>
            <section class="noiva" style="    flex-direction: column;">
                <div class="containerPrimeiro"
                    style="display: flex;
                flex-direction: row;     margin-bottom: -5px;">
                    <div class="imagem">
                        <img src="assets/images/noiva.jpg" alt="Noiva radiante" id="img1">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>
                                No dia do seu casamento, você merece se sentir radiante, confiante e a mulher mais linda
                                do mundo</strong>. Minha missão é te ajudar a criar uma maquiagem impecável e
                            personalizada, que combine com seu estilo único e realce sua beleza natural.
                            <br />
                            <br />
                            <strong>Acredito que a maquiagem de noiva deve ser uma experiência única e
                                memorável</strong>. Por isso, ofereço um pacote completo de serviços que pode ser
                            adaptado às suas necessidades e desejos.
                        </p>
                    </div>
                </div>
                <div class="containerSegundo" style="display: flex;
                flex-direction: row-reverse;">
                    <div class="imagem">
                        <img src="assets/images/noivA2.jpg" alt="Noiva radiante" id="img1">
                    </div>
                    <div class="texto">
                        <h4>Todos os nossos pacotes incluem:</h4>
                        <ul>
                            <li><strong>Consulta personalizada</strong>: um bate-papo para entender seus sonhos e desejos.</li>
                            <li><strong>Teste de maquiagem</strong>: experimentamos diferentes looks e técnicas para encontrar seu look ideal.</li>
                            <li><strong>Maquiagem profissional no dia do casamento:</strong>relaxe e desfrute desse momento especial enquanto cuido de cada detalhe.</li>
                            <li> <strong>Aplicação de cílios postiços</strong>: para um olhar ainda mais marcante e inesquecível.</li>
                            <li><strong>Deslocamento e acompanhamento durante o evento</strong> (opcional): para sua total tranquilidade.</li>
                        </ul>
                     </div>
                </div>
            </section>
            <div class="wrapper">
                <h3>Descubra o pacote ideal para você</h3>
                <button>
                    <a href="#">Agende sua consulta gratuita</a>
                </button>
            </div>
        </div>
        <div class="container-endereco">
            <p class="title">Venha conhecer nosso espaço</p>
            <p class="subtitle">reserve um tempo para cuidar de si mesma em nosso ambiente relaxante e revitalizante
            </p>
            <div class="endereco">
                <div class="localizacaoMapa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.829320639755!2d-49.256066324948726!3d-25.410523232120763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce5ef90a7f33d%3A0x4f0a2602837c16e9!2sTorriton%20Beauty%20%26%20Hair%20(Cabral)!5e0!3m2!1spt-BR!2sbr!4v1709167530193!5m2!1spt-BR!2sbr"
                        width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>
    <footer>

        <div class="devinfo">
            <nav class="footer_nav">
                <p class="footer_p">&copy; 2023 Todos os direitos reservados.</p>
                <p class="footer_p">Desenvolvido por: <a href="https://www.linkedin.com/in/amandacamargo21/"
                        target="_blank"><strong>Amanda Camargo - Consultoria e Criação de Sites</strong></a></p>
    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
    <script src="jquery.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            autoplay: false,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
