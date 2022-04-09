<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/historia/style.css">
    <title>Serviços</title>
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

<main id="historia-main">
    <div id="breadcrumb">
        <div class="historia-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="historia-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Serviços</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Serviços</h1>
    </div>

    <div id="news-container">
        <div class="icon-text-container">
            <div class="icon-text-container-row">
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/associacao.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                        Encontre uma associação
                    </p>
                </a>
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller text-center">
                        Encontre um centro de referência
                    </p>
                </a>
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger text-center">
                        Encontre um especialista
                    </p>
                </a>
            </div>
            <div class="icon-text-container-row icon-text-item-row--mt-bigger">
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/grupo.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                        Encontre grupos de apoio
                    </p>
                </a>
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/patients.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller text-center">
                        Patients like me
                    </p>
                </a>
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/newsletter.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger text-center">
                        Assine a nossa newsletter
                    </p>
                </a>
            </div>
            <div class="icon-text-container-row icon-text-item-row--mt-bigger">
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/exercicios.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                        Exercícios cognitivos
                    </p>
                </a>
                <a class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/servicos/ubs.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller text-center">
                        Encontre uma UBS
                    </p>
                </a>
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