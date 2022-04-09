<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/diagnostico/style.css">
    <title>Diagnóstico</title>
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

<main id="diagnostico-main">
    <div id="breadcrumb">
        <div class="diagnostico-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="diagnostico-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="diagnostico-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de pensar o diagnóstico de doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de pensar o diagnóstico de doença de Alzheimer</h1>
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
            Em geral, os casos de demência são subdiagnosticados ou identificados em estágios
            avançados. O diagnóstico precoce é fundamental para o prognóstico da doença, inclusive
            oferecendo melhores perspectivas de redução da sua progressão.
        </p>

        <p class="news-info">
            E isso também se aplica à doença de Alzheimer (DA). Saber quais são seus sinais e sintomas
            ajuda a reconhecer a existência de um comprometimento cognitivo e procurar um médico para rastrear e, eventualmente, detectar a DA.
        </p>

        <h2 class="title-subtitle text-subtitle-little">Profissionais envolvidos no cuidado da pessoa com doença de Alzheimer</h2>

        <div class="icon-text-container">
            <div class="icon-text-container-row icon-text-container-row-mt-bigger">
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/diagnostico/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Neurologia
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller">
                        Neuropsicologia
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger">
                        Geriatria
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger">
                        Psiquiatria Geriátrica
                    </p>
                </div>
            </div>
        </div>

        <p class="news-info">
            Ainda não há um teste específico para demência devido à doença de Alzheimer e o médico,
            pode pedir uma série de exames físicos e clínicos para identificar a patologia. Os principais
            são:
        </p>

        <div class="icon-text-container">
            <div class="icon-text-container-row--column">
                <div class="icon-text-item--to-row">
                    <img class="icon-text-image" src="../assets/images/diagnostico/historico.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text--toRight">
                        Histórico médico e familiar do paciente
                    </p>
                </div>
                <div class="icon-text-item--to-row">
                    <img class="icon-text-image" src="../assets/images/diagnostico/mudancas.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text--toRight">
                        Mudanças cognitivas e comportamentais
                    </p>
                </div>
                <div class="icon-text-item--to-row">
                    <img class="icon-text-image" src="../assets/images/diagnostico/testes.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text--toRight icon-text-item-text--little">
                        Realização de resolução de problemas, memória e outros testes cognitivos
                    </p>
                </div>
                <div class="icon-text-item--to-row">
                    <img class="icon-text-image" src="../assets/images/diagnostico/exame-neuro.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text--toRight">
                        Exames físicos e neurológicos
                    </p>
                </div>
                <div class="icon-text-item--to-row">
                    <img class="icon-text-image" src="../assets/images/diagnostico/exame.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text--toRight">
                        Exames de sangue e de imagem do cérebro
                    </p>
                </div>
            </div>
        </div>

        <p class="news-info">
            Além desses exames, os médicos também devem conversar com familiares, amigos ou
            cuidadores sobre mudanças nas habilidades de pensamento do indivíduo com suspeita de DA.
            Como a causa do comprometimento cognitivo leve pode estar associado a deficiências de vitaminas, 
            distúrbios metabólicos e infecções, por exemplo, é preciso descartar essas possibilidades para continuar investigando a causa do declínio cognitivo4. 
            Os exames de imagens, como tomografias e ressonância magnética, também ajudam a diferenciar a doença
            de Alzheimer de outras demências, tumores cerebrais, hemorragias e fluxo sanguíneos no cérebro.
        </p>

        <div class="action-card">
            <h3 class="action-card-title">Diagnóstico diferencial de Doença de Alzheimer6</h3>
            <ul class="action-card-list">
                <li class="action-card-list-item">Deficiência de vitamina B12;</li>
                <li class="action-card-list-item">Hipotireoidismo;</li>
                <li class="action-card-list-item">Depressão;</li>
                <li class="action-card-list-item">Acidente vascular cerebral isquêmico;</li>
                <li class="action-card-list-item">Câncer;</li>
                <li class="action-card-list-item">Outras demências.</li>
            </ul>
        </div>

        <p class="news-info">
            Tomografia por emissão de pósitrons (PET) do cérebro e punção lombar, ambas com a
            utilização de biomarcadores, ajudam a analisar os níveis das proteínas beta-amilóide e tau.
        </p>

        <h2 class="title-subtitle text-subtitle-little">É possível detectar a doença de Alzheimer ainda no estágio pré-clínico?</h2>

        <p class="news-info">
            A doença de Alzheimer está associada ao acúmulo das proteínas beta-amilóides e tau no
            cérebro e o excesso dessas moléculas pode surgir até 20 anos antes dos primeiros sintomas. 
            Para diagnosticar a DA ainda na etapa pré-clínica é preciso utilizar biomarcadores, que
            detectam níveis anormais dessas proteínas².
        </p>

        <div class="action-card">
            <p class="action-card-text action-card-text--no-margin-top">
                Anteriormente, as diretrizes para doença de Alzheimer abordavam apenas a demência como
                estágio da doença sendo a perda de memória sua a característica principal. Atualmente, são
                reconhecidos cinco estágios de DA: pré-clínico, comprometimento cognitivo leve, e demência
                leve, moderada e severa. Sabe-se também que aspectos da cognição, como capacidade de
                encontrar palavras ou julgamento, podem ser prejudicados antes da memória³.
            </p>
        </div>

        <button class="news-info-button">
            Conheça os estágios da doença de Alzheimer
        </button>

        <h2 class="title-subtitle text-subtitle-little">Comunicando sobre o diagnóstico de DA</h2>

        <p class="news-info">
            A recomendação da OMS é de que seja feito um trabalho prévio para determinar as
            preferências dos pacientes e seus familiares sobre recebimento da notícia, levando em
            consideração questões culturais. O diagnóstico deve ser acompanhado de informações
            relevantes sobre a doença de acordo com a cultura e a compreensão das pessoas com
            demência e seus familiares, além do apoio e do cuidado que podem ser prestados.
        </p>

        <h2 class="title-subtitle">Referências</h2>

        <ul class="news-info-list style-none p-0">
            <li class="news-info-list-item news-info-list-item--little">
                1. BRASIL. Portaria nº 2.528 de 19 de outubro de 2006. Institui Política Nacional de Saúde da
                Pessoa Idosa. Ministério da Saúde, Brasília. Disponível em:
                https://bvsms.saude.gov.br/bvs/saudelegis/gm/2006/
                prt2528_19_10_2006.html. Acesso
                26/11/2021
            </li>
            <li class="news-info-list-item news-info-list-item--little">
                2. O que é demência. BVS Atenção Primária em Saúde, 2009. Disponível em:
                https://aps.bvs.br/aps/o-que-e-demencia/. Acesso 26/11/2021
            </li>
            <li class="news-info-list-item news-info-list-item--little">
                3. Dementia Fact Sheet. World Health Organization, 2021. Disponível em:
                https://www.who.int/news-room/fact-sheets/detail/dementia. Acesso 26/11/2021</li>
            <li class="news-info-list-item news-info-list-item--little">
                4. 2021 Alzheimer’s Disease Facts and Figures. Alzheimer’s Association. Disponível em:
                https://www.alz.org/media/documents/alzheimers-facts-and-figures.pdf. Acesso 26/11/21
            </li>
        </ul>
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