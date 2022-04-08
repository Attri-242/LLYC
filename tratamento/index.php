<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/tratamento/style.css">
    <title>Tratamento</title>
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

<main id="tratamento-main">
    <div id="breadcrumb">
        <div class="cidadania-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="cidadania-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="cidadania-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de pensar o cuidado multidisciplinar da doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de pensar o cuidado multidisciplinar da doença de Alzheimer</h1>
        <div class="card-info-related-container">
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
            As abordagens terapêuticas da doença de Alzheimer (DA) englobam exercícios e reabilitação
            motora e cognitiva; manejo de sintomas psicológicos e comportamentais; terapia ocupacional;
            e acompanhamento com psicólogo. Intervenções tecnológicas também pode ser amplamente
            usada, como em jogos para fortalecimento cognitivo. Esse cuidado com olhar universal para 
            a pessoa com DA beneficia sua qualidade de vida e saúde física e mental, além de ter impacto
            positivo na sobrecarga do cuidador.
        </p>

        <p class="news-info">
            A DA é neurodegenerativa e progressiva. Conforme ela avança, os danos neurais passam a
            afetar a capacidade de realizar funções corporais básicas, como caminhar e engolir. 
            Por isso, é fundamental contar com um time multidisciplinar para cuidar da pessoa com a doença.
        </p>

        <h2 class="title-subtitle">Profissionais envolvidos no cuidado da pessoa com doença de Alzheimer</h2>

        <div class="icon-text-container">
            <div class="icon-text-container-row icon-text-container-row-mt-bigger">
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/doctor-icon.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Neurologista
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/doctor-icon.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Geriatra
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/doctor-icon.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Neuropsicólogo
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/doctor-icon.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Psiquiatra
                    </p>
                </div>
            </div>
            <div class="icon-text-container-row">
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/enfermeiro.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Profissional de enfermagem
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/fisio.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger">
                        Fisioterapeuta
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/nutricionista.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger">
                        Nutricionista
                    </p>
                </div>
            </div>
        </div>

        <h2 class="title-subtitle">Cuidando da saúde física</h2>

        <p class="news-info news-info-with-max-width">
            Atividade física aeróbica aumenta o fluxo sanguíneo cerebral, a extração de oxigênio e a
            utilização da glicose. Deste modo, ela melhora a função cognitiva e desacelera o seu declínio
            nas pessoas com doença de Alzheimer. Praticar exercícios físicos regularmente ajuda a
            prevenir o declínio funcional, melhorando também o humor e a qualidade de vida, reduzindo a frequência de quedas, 
            e preservando a saúde cardíaca. Ainda, seus benefícios estendem-se à
            massa muscular, metabolismo energético e aptidão funcional geral, como flexibilidade e equilíbrio.
        </p>

        <h2 class="title-subtitle">Treinamento e reabilitação cognitiva</h2>

        <p class="news-info news-info-with-max-width">
            Essas estratégias frequentemente são aplicadas nos primeiros estágios da doença de
            Alzheimer – o que reforça a importância do diagnóstico precoce. O treinamento tem como
            objetivo melhorar o desempenho da pessoa com DA em tarefas cognitivas, com estímulos gerais de memória e atenção. 
            Já a reabilitação é desenhada para cada caso, seguindo a necessidade específica do indivíduo, considerando estágio da doença e nível de
            comprometimento, com foco em melhorar o funcionamento na vida cotidiana. massa muscular, metabolismo energético e aptidão funcional geral, 
            como flexibilidade e equilíbrio.
        </p>

        <p class="news-info news-info-with-max-width">
            O estímulo cognitivo beneficia também a qualidade de vida e o bem-estar da pessoa com DA,
            reduzindo sinais de depressão e ansiedade. Atividades simples podem ser realizadas com esse objetivo:
        </p>

        <div class="icon-text-container">
            <div class="icon-text-container-row">
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/musicas.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text--little">
                        Ouvir músicas que gosta
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/fotos.png" alt="">
                    <p class="icon-text-item-text">
                        Ver fotografias
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/jogo-memoria.png" alt="">
                    <p class="icon-text-item-text">
                        Jogos da memória
                    </p>
                </div>
            </div>
        </div>

        <h2 class="title-subtitle">Depressão e doença de Alzheimer</h2>

        <p class="news-info news-info-with-max-width">
            Estima-se que cerca de 40% das pessoas com DA têm depressão. Identificar seus sinais pode
            ser difícil, já que são similares ao de demência. Além disso, o declínio cognitivo pode
            comprometer a forma que o individuo comunica seus sentimentos associados aos quadros depressivos, como tristeza, desesperança e culpa.
        </p>

        <p class="news-info news-info-with-max-width">
            O tratamento desses casos envolve:
        </p>

        <div class="icon-text-container">
            <div class="icon-text-container-row icon-text-container-row-mt-bigger">
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/doctor-icon.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little">
                        Acompanhamento psiquiátrico
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/calendario.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller">
                        Construção de uma rotina
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/calendario.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger">
                        Participar de grupos de pacientes
                    </p>
                </div>
            </div>
            <div class="icon-text-container-row">
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/pessoas.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--bigger">
                        Envolver a pessoa nas atividades da família
                    </p>
                </div>
                <div class="icon-text-item">
                    <img class="icon-text-image" src="../assets/images/tratamento/medicamentos.png" alt="">
                    <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--bigger">
                        Se necessário, o médico pode indicar terapia com medicamentos.
                    </p>
                </div>
            </div>
        </div>

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
                https://www.who.int/news-room/fact-sheets/detail/dementia. Acesso 26/11/2021
            </li>
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