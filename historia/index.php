<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/historia/style.css">
    <title>Estágios</title>
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
            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="historia-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de conhecer histórias da doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de conhecer histórias da doença de Alzheimer</h1>
        <div id="card-info-related-container">
            <div class="card-info-relateds">
                <div class="card-info-related">
                    Alzheimer
                </div>
                <div class="card-info-related">
                    Diagnóstico
                </div>
            </div>
            <div class="card-info-relateds">
                <div class="card-info-related">
                    Sinais e sintomas
                </div>
            </div>
            <img id="card-info-related-share" src="../assets/images/cidadania/share.png" alt="">
        </div>
    </div>

    <div id="news-container">
        <p id="news-date">Publicado em 14 de novembro de 2021</p>
    
        <p class="news-info">
            Uma rede de apoio sólida é primordial para todos os envolvidos com a doença de Alzheimer
            (DA). As pessoas dedicadas à atenção da pessoa com DA podem encontrar-se constantemente
            sobrecarregadas, confusas com as adaptações necessárias e até com a saúde mental prejudicada. 
            Por isso, encontrar suporte pode ajudar a tornar essa vivência mais plena e fluida.
        </p>

        <h2 class="title-subtitle">Dentre os benefícios, estão</h2>

        <ul id="benefits-list">
        
            <li class="benefits-list-item">
                Trocar experiências sobre os cuidados necessários na DA;
            </li>
            <li class="benefits-list-item">
                Aprender sobre como controlar situações de crise;
            </li>
            <li class="benefits-list-item">
                Compartilhar inseguranças e medos acerca do avanço da doença;
            </li>
            <li class="benefits-list-item">
                Fortalecer-se para cuidar do paciente;
            </li>
            <li class="benefits-list-item">
                Encontrar mais informações sobre doença de Alzheimer.
            </li>
        </ul>

        <p class="news-info">
            Associações de pacientes são ONGs que podem ajudar nesse processo de aprendizagem e
            cuidado da doença de Alzheimer.
        </p>

        <button class="news-info-button">
            Ache uma ONG perto de você
        </button>
        
        <h2 class="title-subtitle">Conheça as histórias</h2>

        <p class="news-info">
            A filha de Maria Cecilia é quem está ao lado dela no cuidado da doença de Alzheimer.
        </p>

        <img class="news-container-image" src="../assets/images/historia/historia.png" alt="">

        <p class="news-info">
            A importância do diagnóstico precoce é evidente na história de Maria
            Cecilia, cuja doença de Alzheimer foi identificada aos 64 anos. De forma
            bem-humorada, ela conta como foi quebrar o estigma da DA – tanto para
            si, quanto para amigos e família.Thayná, sua filha, foi peça-chave para
            o diagnóstico e agora é quem está ao seu lado no dia a dia com a doença.
            Ela fala sobre como a rede de apoio familiar é fundamental para o cuidado da mãe hoje e será
            ainda mais quando a doença estiver em estágios nos quais a dependência é maior.
        </p>

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