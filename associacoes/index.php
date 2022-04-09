<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/associacoes/style.css">
    <title>Associações</title>
</head>
<body>

<header id="header">
    <div id="nav-desk-container" class="d-none d-xl-block">
        <nav id="secondary-nav">
            <div id="secondary-nav-container" class="d-flex align-items-center">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block">
                    
                </div>
                <div id="secondary-nav-items" class="d-flex">
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/explore.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                EXPLORE O CONTEÚDO
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/search.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                BUSQUE INFORMAÇÃO
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/favorites.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                MAIS ACESSADOS
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/services.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                SERVIÇOS
                            </a>
                        </div>
                        
                    </div>
            </div>
        </nav>
        <nav id="principal-nav">
            <div id="principal-nav-container" class="d-flex">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block">
                    <img id="logo" src="./assets/images/header/logo.png" alt="logo">
                </div>

                <div id="principal-nav-items" class="d-flex align-items-end justify-content-end">
                   
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex d-xl-none align-items-center justify-content-center" id="nav-mobile-container">
        <img id="logo" src="./assets/images/header/logo-mobile.png" alt="logo">
        <i id="nav-mobile-icon" onclick="toggleMobileMenu()" class="bi bi-list">ICON</i>
    </div>

    <nav id="nav-mobile">
            <div id="nav-mobile-icon-container">
                <img id="nav-mobile-close-icon" onclick="toggleMobileMenu()" src="./assets/images/header/close-menu-icon.svg" alt="">
            </div>
            <ul id="nav-mobile-items">
                <div class="nav-mobile-item-container">
                    <li class="nav-mobile-item">QUEM SOMOS</li>
                    <ul class="nav-mobile-item-subcontainer">
                        
                    </ul>
                </div>
                <div class="nav-mobile-item-container">
                    <li class="nav-mobile-item" onclick="toggleMobileSubMenu(this)">O QUE É ALZHEIMER</li>
                    <ul class="nav-mobile-item-subcontainer">
                        <li class="nav-mobile-item-subcontainer-item">O que é doença de Alzheimer</li>
                        <li class="nav-mobile-item-subcontainer-item">A história do Alzheimer</li>
                        <li class="nav-mobile-item-subcontainer-item">Fisiopatologia</li>
                        <li class="nav-mobile-item-subcontainer-item">Envelhecimento saudável x doença de Alzheimer</li>
                        <li class="nav-mobile-item-subcontainer-item">Demência e doença de Alzheimer</li>
                        <li class="nav-mobile-item-subcontainer-item">Fatores de risco</li>
                        <li class="nav-mobile-item-subcontainer-item">Prevenção</li>
                        <li class="nav-mobile-item-subcontainer-item">Fatos e números</li>
                        <li class="nav-mobile-item-subcontainer-item">O que acontece com o cérebro</li>
                    </ul>
                </div>
                <div class="nav-mobile-item-container">
                    <li class="nav-mobile-item">SINAIS, SINTOMAS E DIAGNÓSTICO</li>
                    <ul class="nav-mobile-item-subcontainer"></ul>
                </div>
                <div class="nav-mobile-item-container">
                    <li class="nav-mobile-item">CUIDANDO DO PACIENTE</li>
                    <ul class="nav-mobile-item-subcontainer"></ul>
                </div>
                <div class="nav-mobile-item-container">
                    <li class="nav-mobile-item">CUIDANDO DE QUEM CUIDA</li>
                    <ul class="nav-mobile-item-subcontainer"></ul>
                </div>
                <div class="nav-mobile-item-container">
                    <li class="nav-mobile-item">CIDADANIA E POLÍTICAS PÚBLICAS</li>
                    <ul class="nav-mobile-item-subcontainer"></ul>
                </div>
            </ul>
    </nav>
</header>

<main id="associacoes-main">
    <div id="breadcrumb">
        <div class="associacoes-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="associacoes-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Encontre uma associação</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Encontre uma associação</h1>
    </div>

    <div id="news-container">
        <div id="localizacao">
            <div id="localizacao-container">
                <input 
                    placeholder="Digite o seu CEP"
                    class="cep-input" 
                    type="text" />
                <img class="cep-search" src="../assets/images/associacao/buscar.png" alt="">
            </div>
            
            <button class="botao-localizacao">
                <img class="botao-localizacao-img" src="../assets/images/associacao/localizacao.png" alt="">
                <span class="botao-localizacao-txt">Usar sua localização</span>
            </button>
        </div>

        <div id="cards-container">
            <div class="cards-container-row">
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards-container-row">
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cards-container-row">
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cards-container-row">
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container-item">
                    <h4 class="card-item-title">
                        Associação de amigos e familiares de portadores de Alzheimer 
                        da zona norte de São Paulo
                    </h4>
                    <div class="card-item-infos-container">
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/wpp.png" alt="">
                                <p class="card-item-info-text">(11) 93232 1111</p>
                            </div>
                        </div>
    
                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/tel.png" alt="">
                                <p class="card-item-info-text">http://associacao.wordpress.com</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/endereco.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">R. do Sertão, 223, Santana, São Paulo. CEP 5554S-021</p>
                            </div>
                        </div>

                        <div class="card-item-infos">
                            <div class="card-item-info">
                                <img class="card-item-info-img" src="../assets/images/associacao/face.png" alt="">
                                <p class="card-item-info-text card-item-info-text--with-width">facebook.com/br/associacao</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
 
</main>

<footer id="footer-desk">
    <nav id="primary-nav" class="d-flex flex-column">
        <a class="primary-nav-item" href="#">QUEM SOMOS</a>
        <a class="primary-nav-item" href="#">O QUE É ALZHEIMER</a>
        <a class="primary-nav-item" href="#">SINAIS, SINTOMAS E DIAGNÓSTICO</a>
        <a class="primary-nav-item" href="#">CUIDANDO DO PACIANTE</a>
        <a class="primary-nav-item" href="#">CUIDANDO DE QUEM CUIDA</a>
        <a class="primary-nav-item" href="#">CIDADANIA</a>
        <a class="primary-nav-item" href="#">ENCONTRE APOIO</a>
    </nav>
    <nav id="secondary-nav" class="d-flex flex-column">
        <a class="secondary-nav-item" href="#">EXPLORE O CONTEÚDO</a>
        <a class="secondary-nav-item" href="#">BUSQUE INFORMAÇÃO</a>
        <a class="secondary-nav-item" href="#">SEUS FAVORITOS</a>
        <a class="secondary-nav-item" href="#">SERVIÇOS</a>
    </nav>
    <div id="footer-info" class="d-flex flex-column align-items-end">
        <img class="footer-logo" src="./assets/images/footer/logo-footer.png" alt="Biogen">
        <span class="footer-info-text">
            AZL-BR-0221 – Dezembro 2021 – As informações contidas neste website destinam-se apenas a
            dar acesso a esclarecimentos sobre tópicos de saúde relacionados com a doença de Alzheimer,
            mas estas informações não devem substituir o aconselhamento do seu médico ou de outro
            profissional de saúde. Em caso de dúvida, consulte o seu médico. “(Re)pensar Alzheimer” é um
            website destinado ao Brasil que foi produzido pela Biogen, desenvolvido de acordo com as
            normas legais e da indústria no sentido de fornecer informações ao público geral sobre tópicos
            de saúde relacionados à doença de Alzheimer.
        </span>
    </div>
</footer>

<footer id="footer-mobile">
    <nav id="nav-mobile" class="d-flex justify-content-between">
        <div class="nav-mobile-item">
            <img class="nav-mobile-item-icon" src="./assets/images/header/explore.png" alt="">
            <a class="nav-mobile-item-text" href="#">
                Explore o conteúdo
            </a>
        </div>
        <div class="nav-mobile-item">
            <img class="nav-mobile-item-icon" src="./assets/images/header/search.png" alt="">
            <a class="nav-mobile-item-text" href="#">
                Busque informação
            </a>
        </div>
        <div class="nav-mobile-item">
            <img class="nav-mobile-item-icon" src="./assets/images/header/favorites.png" alt="">
            <a class="nav-mobile-item-text" href="#">
                Mais acessados
            </a>
        </div>
        <div class="nav-mobile-item">
            <img class="nav-mobile-item-icon" src="./assets/images/header/services.png" alt="">
            <a class="nav-mobile-item-text" href="#">
                Serviços
            </a>
        </div>
    </nav>
</footer>
</body>
</html>