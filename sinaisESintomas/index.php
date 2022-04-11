<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sinaisESintomas/style.css">
    <title>Sinais e sintomas</title>
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

<main id="sinais-main">
    <div id="breadcrumb">
        <div class="breadcrumb-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="breadcrumb-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="breadcrumb-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de conhecer os sinais e sintomas da doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de conhecer os sinais e sintomas da doença de Alzheimer</h1>
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
            Os sinais e sintomas podem variar entre as pessoas com doença de Alzheimer (DA). Eles se
            tornam mais evidentes conforme a DA avança, relacionando-se aos seus <a class="news-info-link">estágios¹</a>. Um
            importante sinal de alerta são mudanças recentes na capacidade de realizar tarefas ou
            atividades em que a pessoa costumava ter habilidade2
        </p>

        <p class="news-info">
            Além disso, as primeiras manifestações são comumente confundidas com características do
            envelhecimento – por isso é importante diferenciá-las, favorecendo o diagnóstico precoce¹.
        </p>

        <div id="news-table-container">
            <div class="news-table">
                <h3 class="news-table-title">Sinais de Doença de Alzheimer²</h3>
                <img class="news-table-image" src="../assets/images/sinaisESintomas/image-table-1.png" alt="">
                <span class="news-table-item">
                    <p class="news-table-item-text">Dificuldade de julgamento e tomada de decisão</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Dificuldade em conversar</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Não conseguir gerenciar orçamentos</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Confundir datas</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Perder objetos e não conseguir encontrá-los</p> 
                </span>
            </div>

            <div class="news-table new-table-second-item">
                <h3 class="news-table-title">Características comuns à idade²</h3>
                <img class="news-table-image" src="../assets/images/sinaisESintomas/image-table-2.png" alt="">
                <span class="news-table-item">
                    <p class="news-table-item-text">Fazer escolhas ruins de vez em quando</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Esquecer uma palavra</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Deixar de fazer um pagamento mensal</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Esquecer o dia e lembrar posteriormente</p> 
                </span>
                <span class="news-table-item">
                    <p class="news-table-item-text">Perder objetos de forma esporádica</p> 
                </span>
            </div>
        </div>

        <button class="news-info-button">
            Leia mais sobre como diagnosticar a doença de Alzheimer
        </button>

        <p class="news-info">
            A perda de memória não é o primeiro ou único sintoma principal da doença de Alzheimer.
            Outros aspectos da patologia podem ser afetados primeiro, como a dificuldade para encontrar
            palavras ou fazer julgamentos. A DA é dividida em três estágios: pré-clínico, 
            <a class="news-info-link">comprometimento cognitivo leve (CCL) e demência</a>. 
            E cada um deles conta com manifestações específicas e
            diferentes níveis de impacto na função cognitiva e até física3.
        </p>


        <p class="news-info">
            Na fase pré-clínica ainda não há sintomas evidentes. Contudo, é quando começam as
            alterações cerebrais, especialmente devido ao acúmulo das proteínas beta-amilóde e TAU¹.
        </p>

        <p class="news-info">
            Já quando há comprometimento cognitivo leve, as manifestações começam a ficar mais
            evidentes. As funções cognitivas mais afetadas são a memória e a resolução de problemas. 
            Mas, apesar do declínio cognitivo ser evidente para ele e pessoas próximas, e a realização de
            tarefas complexas serem mais difíceis, o indivíduo se mantém independente e continua a
            realizar atividades diárias¹,³.
        </p>

        <div id="info-card">
            <h3 id="info-card-title">Nem todo CCL leve é doença de Alzheimer¹</h3>
            <p id="info-card-text">
                O comprometimento cognitivo leve não caracteriza diagnóstico de DA ou demência, podendo
                progredir ou não para alguma dessas doenças¹. Por isso, é fundamental identificar de forma correta o CCL,
                para que seja possível realizar o diagnóstico adequado de doença de Alzheimer.</p>
        </div>

        <button class="news-info-button">
            Saiba mais sobre o CCL
        </button>

        <h2 class="title-subtitle">Quais são os sintomas da doença do Alzheimer?</h2>

        <div id="timeline">
            <div id="sintomas-timeline-text-iniciais"></div>
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-first">
                    <span class="timeline-text-item timeline-item-max-width">Perda de memória</span>
                    <span class="timeline-text-item timeline-item-max-width">Demora para completar as tarefas diárias normais</span>
                </div>
            </div>
    
            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Perda de espontaneidade</span>
                </div>
            </div>
    
            <div id="sintomas-timeline" class="sintomas-timeline-mt">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-second">
                    <span class="timeline-text-item timeline-item-max-width">Julgamento que levam a decisões erradas</span>
                    <span class="timeline-text-item timeline-item-max-width">Perguntas repetitivas</span>
                    <span class="timeline-text-item timeline-item-max-width">Problemas para lidar com dinheiro e pagar contas</span>
                </div>
            </div>
    
            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Perder coisas com frequência</span>
                </div>
            </div>
    
            <div id="sintomas-timeline" class="sintomas-timeline-mt">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-third">
                    <span class="timeline-text-item timeline-item-max-width">Mudanças de humor e personalidade</span>
                    <span class="timeline-text-item timeline-item-max-width">Aumento de ansiedade e/ou agressão</span>
                </div>
            </div>

            <div id="sintomas-timeline-text-moderados"></div>
            
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-fourth">
                    <span class="timeline-text-item timeline-item-max-width">Maior perda de memória e confusão</span>
                    <span class="timeline-text-item timeline-item-max-width">Incapacidade de aprender coisas novas</span>
                </div>
            </div>

            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Problemas para ler, escrever e trabalhar com números</span>
                </div>
            </div>

            <div id="sintomas-timeline" class="sintomas-timeline-mt">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-fifth">
                    <span class="timeline-text-item timeline-item-max-width">Dificuldade em organizar pensamentos e pensar logicamente</span>
                    <span class="timeline-text-item timeline-item-max-width">Tempo de atenção encurtado</span>
                </div>
            </div>

            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Problemas para lidar com novas situações</span>
                </div>
            </div>

            <div id="sintomas-timeline" class="sintomas-timeline-mt">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-sixth">
                    <span class="timeline-text-item timeline-item-max-width">Dificuldade em realizar tarefas em várias etapas, como se vestir</span>
                    <span class="timeline-text-item timeline-item-max-width">Problemas para reconhecer família e amigos</span>
                    <span class="timeline-text-item timeline-item-max-width">Alucinações, delírios e paranoia</span>
                </div>
            </div>

            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Comportamento impulsivo, como tirar a roupa em horários ou
                     lugares inadequados ou usar linguagem vulgar</span>
                </div>
            </div>

            <div id="sintomas-timeline" class="sintomas-timeline-mt-little">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-seventh">
                    <span class="timeline-text-item timeline-item-max-width">Explosões inapropriadas de raiva</span>
                    <span class="timeline-text-item timeline-item-max-width">
                        Inquietação, agitação, ansiedade, choro,
                        divagação - especialmente no final da tarde ou noite</span>
                </div>
            </div>

            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item">Declarações ou movimentos repetitivos, contrações<br/> musculares ocasionais</span>
                </div>
            </div>

            <div id="sintomas-timeline" class="sintomas-timeline-mt-little">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-eighth">
                </div>
            </div>

            <div id="sintomas-timeline-text-severos"></div>

            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-ninth d-flex justify-content-center">
                    <span class="timeline-text-item timeline-item-max-width">Incapacidade de se comunicar</span>
                </div>
            </div>

            <div id="sintomas-timeline-icon">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item">Perda de peso</span>
                </div>
            </div>

            <div id="sintomas-timeline" class="sintomas-timeline-mt">
                <div id="sintomas-timeline-container" class="sintomas-timeline-container-tenth">
                    <span class="timeline-text-item timeline-item-max-width">Convulsões</span>
                    <span class="timeline-text-item timeline-item-max-width">Infecções de pele</span>
                    <span class="timeline-text-item timeline-item-max-width">Dificuldade em engolir</span>
                    <span class="timeline-text-item timeline-item-max-width">Aumento do sono</span>
                    <span class="timeline-text-item timeline-item-max-width">Perda de controle do intestino e da bexiga</span>
                </div>
            </div>
        </div>

        <button class="news-info-button">
            Conheça os estágios da doença de Alzheimer
        </button>

        <h2 class="title-subtitle">Referências</h2>

        <ul class="news-info-list style-none p-0">
            <li class="news-info-list-item news-info-list-item--little">
                1. 2021 Alzheimer’s Disease Facts and Figures. Alzheimer’s Association. Disponível em:
                https://www.alz.org/media/
                documents
                /alzheimers-facts-and-figures.pdf. Acesso 23/11/21</li>
            <li class="news-info-list-item news-info-list-item--little">
                2. 10 warn signs. Alzheimer&#39;s Association. Disponível em:
                https://www.alz.org/national/
                documents/
                aa_brochure_10warnsigns.pdf. Acesso 23/11/21
            </li>
            <li class="news-info-list-item news-info-list-item--little">
                3. Vaughn, Peggy. Alzheimer&#39;s diagnostic guidelines updated for first time in decades. Estados
                Unidos. National Institutes of Health e the Alzheimer’s Association, 2011. Disponível em:
                https://www.nia.nih.gov/news/
                alzheimers-diagnostic-guidelines-
                updated-first-time-decades. Acesso 23/11/21
            </li>
            <li class="news-info-list-item news-info-list-item--little">
                4. What Are the Signs of Alzheimer&#39;s Disease?. National Institute on Aging. Disponível em:
                https://www.nia.nih.gov/health/
                what-are-signs-alzheimers-disease. Acesso em 25/11/21
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