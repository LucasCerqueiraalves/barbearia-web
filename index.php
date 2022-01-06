<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Barber Shop</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Poppins:wght@300;400;600;700&display=swap"
    rel="stylesheet"/>

</head>

<body>

    <div class="container">
        <!--Area do menu lateral -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                
                        <span class=" logo"><img src="assets/icone/logo.png" alt="logo" /></span>
                        <span class="title">
                            <h2>Barber Shop</h2>
                            
                        </span>
                        <div class="toggleMenu">
                            <div class="toggle2">
                                <img onclick="toggle()" src="assets/icone/cancelar.png" alt="cancelar"/>
                            </div>
                        </div>
                        
                    </a>
                </li>
                
                <li  onclick="toggle()">
                    <a href="#home" title="Home">
                        <span class="icon" title="Home"><img src="assets/icone/home.png"  alt="homer" /></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#sobre"  title="Sobre">
                        <span class="icon"><img src="assets/icone/grupo.png" alt="sobre" /></span>
                        <span class="title">Sobre</span>
                    </a>
                </li>
                <li>
                    <a href="#servico" title="Serviços">
                        <span class="icon"><img src="assets/icone/barbearia.png"  alt="serviços" /></span>
                        <span class="title">Serviços</span>
                    </a>
                </li>
                <li>
                    <a href="#galeria" title="Galeria">
                        <span class="icon"><img src="assets/icone/galeria-de-imagens.png"  alt="galeria" /></span>
                        <span class="title">Galeria</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <span class="icon"><img src="assets/icone/calendario-semanal.png"  alt="agendamento" /></span>
                        <span class="title">Agendamento</span>
                    </a>
                </li>
                <li>
                    <a href="#footer" title="Contatos">
                        <span class="icon"><img src="assets/icone/contato-telefonico.png"  alt="contatos" /></span>
                        <span class="title">Contatos</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main" id="home">
            <!--Area do slide show-->
            <div class="topbar">
                <div class="toggle" onclick="toggle()"><img src="assets/icone/menu.png" /></div>
                <p>Barbearia Hermanos</p>
                <div class="nome">
                    <h2>
                        <span>B</span>
                        <span>a</span>
                        <span>r</span>
                        <span>b</span>
                        <span>e</span>
                        <span>a</span>
                        <span>r</span>
                        <span>i</span>
                        <span>a&nbsp&nbsp</span>
                        <span>H</span>
                        <span>e</span>
                        <span>r</span>
                        <span>m</span>
                        <span>a</span>
                        <span>n</span>
                        <span>o</span>
                        <span>s</span>
                    </h2>
                </div>

            </div>

            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="../barber/assets/image/image 1.png" /></div>
                    <div class="swiper-slide"><img src="assets/image/banner1.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/image/banner2.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/image/banner4.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/image/banner5.jpg" /></div>
                    
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <!--Area de sobre o estabelecimento-->
            <div class="container-sobre" id="sobre">
                <div class="titulo">
                    <p>Sobre nosso estabelecimento</p>
                </div>
                <div class="areaSobre">
                    <div class="SobreLeft">
                        <div class="textoSobre">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et imperdiet nulla, et accumsan dolor. Aliquam erat volutpat. Pellentesque porta magna ut ipsum semper scelerisque sit amet vel leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In rhoncus risus sit amet sem posuere, a consequat massa interdum. Nulla dolor orci, faucibus ac eros vel, dignissim porta neque. In ac rutrum dui, nec tristique lorem. Maecenas vel enim ante. Nunc in maximus leo, ac finibus dui. Suspendisse non erat ut mauris hendrerit rhoncus. Aenean eu leo sapien.

                                Etiam mattis, lectus sed fringilla gravida, purus orci commodo metus, at sollicitudin quam sem et enim. Morbi rhoncus interdum justo et posuere. Duis leo nunc, mollis vitae porta quis, congue id urna. Sed vel libero volutpat ligula varius vehicula. Quisque scelerisque dui sit amet finibus viverra. Praesent accumsan, felis in laoreet posuere, urna eros semper est, eget dapibus mi diam quis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

                            </p>
                        </div>
                    </div>
                    <div class="sobreRight">
                    <div class="areaVideo">
                        <div class="video">
                            <video controls>
                                <source src="assets/videos/Barbearia Ribeiro (Apresentação).mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="btn">
                    <a href="login.php">Agende seu horario</a>
                </div>
            </div>
            <!--Area de serviços-->
            <div class="container-services" id="servico">
                <div class="area-services">
                    <div class="titulo-service">
                        <p>Nossos Serviços</p>
                    </div>

                    <div class="servicos">
                        <div class="servico1">
                            <div class="image">
                                <img src="assets/icone/tesoura.png" alt="Corte simples"/>   
                            </div>
                            <div class="nomeServico">
                                <p>Corte Simples</p>
                            </div>
                            <div class="valorServico valor2">
                                <p><span>R$: </span>30</p>
                            </div>
                        </div>
                        <div class="servico1">
                            <div class="image">
                                <img src="assets/icone/navalha - Copia.png" alt="Barba"/>   
                            </div>
                            <div class="nomeServico">
                                <p>Barba</p>
                            </div>
                            <div class="valorServico valor2">
                                <p><span>R$: </span>20</p>
                            </div>
                        </div>
                        <div class="servico1">
                            <div class="image">
                                <img src="assets/icone/cabelo - Copia.png" alt="combo"/>   
                            </div>
                            <div class="nomeServico">
                                <p>Combo</p>
                                <p>Barba + Cabelo</p>
                            </div>
                            <div class="valorServico ">
                                <p><span>R$: </span>50</p>
                            </div>
                        </div>
                        <div class="servico1">
                            <div class="image">
                                <img src="assets/icone/criança - Copia.png" alt="Corte infantil"/>   
                            </div>
                            <div class="nomeServico">
                                <p>Corte infantil</p>
                            </div>
                            <div class="valorServico valor2">
                                <p><span>R$: </span>25</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="outrosServicos">
                        <div class="titleOutros">
                            <p>Outros Serviços</p>
                        </div>
                        <div class="tablePreco">
                            <div class="areaPreco">
                                <div class="precoLeft">
                                    <p>Corte  degrade</p><br>
                                    <p>Corte  degrade</p><br>
                                    <p>Corte  degrade</p><br>
                                    <p>Corte  degrade</p><br>
                                    <p>Corte  degrade</p><br>
                                </div>
                                <div class="precoRight">
                                    <p><span>R$:  </span> 80</p><br>
                                    <p><span>R$:  </span> 80</p><br>
                                    <p><span>R$:  </span> 80</p><br>
                                    <p><span>R$:  </span> 80</p><br>
                                    <p><span>R$:  </span> 80</p><br>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="btn">
                        <a href="login.php">Agende seu horario</a>
                    </div>
                    
                </div>
            </div>

            <!--area de galeria de fotos-->
            <div class="containerGaleria" id="galeria">
                <div class="areaGaleria">
                    <div class="titleGaleria">
                        <p>Alguns dos nossos trabalhos</p>
                    </div>

                    <div class="cortes">
                        <p>Cortes de Cabelos</p>
                    </div>

                    <div class="areaFotos">
                        <div id="myCarousel" class="carousel">
                            
                            <div class="carousel__slide"><img src="assets/image/foto-cabelo.jpg"/></div>
                            <div class="carousel__slide"><img src="assets/image/foto-cabelo.jpg"/></div>
                            <div class="carousel__slide"><img src="assets/image/foto-cabelo.jpg"/></div>
                        </div>

                        <div class="cortes">
                            <p>Barbas Feitas</p>
                        </div>
                        <div id="myyCarousel" class="carousel">
                            <div class="carousel__slide"><img src="assets/image/barba1.jpg"/></div>
                            <div class="carousel__slide"><img src="assets/image/barba1.jpg"/></div>
                            <div class="carousel__slide"><img src="assets/image/barba1.jpg"/></div>
                        </div>
                        <div class="btn">
                            <a href="login.php">Agende seu horario</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Area do rodape-->
            <footer id="footer">
                <div class="container-footer">
                    <div class="areaFooter">
                        <div class="titleFooter">
                            <p>Contato</p>
                        </div>

                        <div class="areaInfo">
                            <div class="leftInfo">
                                <h4>Endereço</h4>
                                <p>Rua Olga, N°: 1004.</p>
                                <p>Parque dos Camargos.</p>
                                <p>Barueri - São Paulo.</p>
                                <p>Telefone: (11)98524-2687</p>
                                <p>Email: <span>Lucascerqueiraalves0@gmail.com</span></p>

                                <div class="redeSocila">
                                    <p>Redes Social</p>
                                    <div class="rede">
                                        <div class="face">
                                          <a href="#">  <img src="assets/icone/facebook.png" alt=""/></a>
                                        </div>
                                        <div class="insta">
                                          <a href="#" > <img src="assets/icone/instagram.png" alt=""/> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rightInfo">
                                <h4>Horario de Funcionamento</h4>
                                <div class="horarioFun">
                                    <div class="horarioLeft">
                                        <p class="red">Segunda - feira</p>
                                        <p>Terça - feira</p>
                                        <p>Quarta - feira</p>
                                        <p>Quinta - feira</p>
                                        <p>Sexta - feira</p>
                                        <p>Sabado - feira</p>
                                        <p>Domingo - feira</p>
                                    </div>
                                    <div class="diaRight">
                                        <p class="red">Fechado</p>
                                        <p>10:00 á 19:00</p>
                                        <p>10:00 á 19:00</p>
                                        <p>10:00 á 19:00</p>
                                        <p>09:00 á 19:30</p>
                                        <p>09:00 á 19:30</p>
                                        <p>09:00 á 19:30</p>
                                    </div>
                                </div>
                            

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="direirosAltoral">
                        <div class="direito">
                            <p>copyright@ Lucas Cerqueira Alves 2021</p>
                        </div>

                    </div>

                    <!--whastapp-->
                    <a href="https://api.whatsapp.com/send?phone=985242687&text=Olá Bem vindo a barbearia Hermanos oque posso te ajudar?"
                        target="_blank"
                        style="position:fixed;bottom:20px;right:30px;">
                        <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
                    </a>
                </div>
            </footer>

        </div>
    </div>



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>