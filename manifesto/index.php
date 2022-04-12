<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/manifesto/style.css">
    <title>Manifesto</title>
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

<main id="manifesto-main">
    <div id="breadcrumb">
        <section class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="breadcrumb-breadcrumb-item">
                            <a class="breadcrumb-item-text"href="#">Home</a>
                            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
                        </div>
                        <div class="breadcrumb-breadcrumb-item">
                            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
                            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
                        </div>
                        <div class="breadcrumb-breadcrumb-item">
                            <a class="breadcrumb-item-text"href="#">Está na hora de (re)conhecer a doença de Alzheimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="title">
        <section class="w-100 d-flex">
            <div class="container">
                <div class="row">
                    <h1 id="title-text" class="col-8">Está na hora de (re)conhecer a doença de Alzheimer</h1>
                    <div class="card-info-related-container col-4">
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
            </div>
        </section>
    </div>

    <div id="news-container">
        <section class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p id="news-date">Publicado em 14 de novembro de 2021</p>
                    
                        <p class="news-info">
                            A cada 3 segundos, 1 pessoa desenvolve demência no mundo¹. A forma mais comum é a doença de Alzheimer (DA), responsável por 60 a 70% dos casos². 
                            Envelhecimento é seu principal fator de risco, o que pode ser considerado um sinal de alerta por conta do crescimento da população idosa no Brasil e no mundo. 
                            Só no país, o salto deve ser de 284% entre os anos 2000 e 2050³.
                
                        </p>
                
                        <p class="news-info">
                            É urgente conhecer mais sobre a doença de Alzheimer – e números reforçam isso.
                        </p>
                
                        <div class="news-image-text-container">
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/world.png" alt="">
                                    <span class="image-number">55 milhões</span>
                                </div>
                                <span class="news-image-text-container-item-text">de pessoas têm demência, globalmente</span>
                            </div>
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/new-case.png" alt="">
                                    <span class="image-number">10 milhões</span>
                                </div>
                                <span class="news-image-text-container-item-text">de novos casos são esperados por ano, no mundo</span>
                            </div> 
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/diagnosticos.png" alt="">
                                    <span class="image-number">55 mil</span>
                                </div>
                                <span class="news-image-text-container-item-text">novos diagnósticos de doença de Alzheimer são realizados anualmente, no Brasil4</span>
                            </div> 
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/brasil.png" alt="">
                                    <span class="image-number">127%</span>
                                </div>
                                <span class="news-image-text-container-item-text">foi o crescimento nacional do número de pessoas com DA desde 1990³</span>
                            </div>
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/brasil.png" alt="">
                                    <span class="image-number">77%</span>
                                </div>
                                <span class="news-image-text-container-item-text">é a taxa de subdiagnóstico de doença de Alzheimer no Brasil</span>
                            </div> 
                        </div>
                
                        <p class="news-info">
                            Conhecer e reconhecer os sinais e sintomas da doença de Alzheimer favorece o diagnóstico precoce e o cuidado do paciente. 
                            É fundamental compreender que alterações cognitivas e de memória não são sinais inerentes ao envelhecimento e buscar por um especialista.
                        </p>
                
                        <div class="news-image-text-container ml-1">
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/world.png" alt="">
                                    <span class="image-number">3 em cada 4 pacientes</span>
                                </div>
                                <span class="news-image-text-container-item-text">com demência não recebem diagnóstico, mundialmente5</span>
                            </div>
                        </div>
                
                        <p class="news-info">
                            As consequências da falta de diagnóstico da doença de Alzheimer, assim como da identificação tardia, 
                            geram impactos sociais e econômicos expressivos. E isso ultrapassa o paciente, atingindo toda a comunidade.
                        </p>
                
                        <div class="news-image-text-container">
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/money.png" alt="">
                                </div>
                                <span class="news-image-text-container-item-text news-image-text-container-item--ml-bigger">
                                    O custo social total da demência equivale a 2,2% do Produto Interno Bruto (PIB) global¹
                                </span>
                            </div>
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/hand.png" alt="">
                                </div>
                                <span class="news-image-text-container-item-text news-image-text-container-item--ml-bigger">
                                    Os custos indiretos da doença de Alzheimer podem chegar a representar 169% da renda familiar brasileira6
                                </span>
                            </div>
                            <div class="news-image-text-container-item">
                                <div class="image-container">
                                    <img src="../assets/images/manifesto/person.png" alt="">
                                </div>
                                <span class="news-image-text-container-item-text news-image-text-container-item--ml-bigger">
                                    Entre 2009 e 2013, a DA foi responsável por 4,4% das mortes de idosos no Brasil7
                                </span>
                            </div>
                        </div>
                
                        <div id="action-card">
                            <p class="action-card-text">
                                Está mais do que evidente que o diagnóstico precoce da doença de Alzheimer é essencial 
                                para mitigar as consequências à vida do paciente, da família e da sociedade. Por isso, 
                                o propósito desse site é ser um canal que transforma a maneira que a DA é (re)conhecida no Brasil. 
                                Por meio do conhecimento compartilhado, visa-se munir a população de informação para identificarem
                                as primeiras manifestações e buscar por um médico especialista. 
                            </p>
                
                            <div id="actions-container">
                                <div class="actions-container-item">
                                    <img class="actions-image" src="../assets/images/manifesto/esta-na-hora.png" alt="">
                                    <span class="actions-text">de olhar de perto os sinais e sintomas da DA</span>
                                </div>
                                <div class="actions-container-item">
                                    <img class="actions-image" src="../assets/images/manifesto/esta-na-hora.png" alt="">
                                    <span class="actions-text">de (re)conhecer a pessoa que recebeu o diagnóstico</span>
                                </div>
                                <div class="actions-container-item">
                                    <img class="actions-image" src="../assets/images/manifesto/esta-na-hora.png" alt="">
                                    <span class="actions-text">repensar a DA</span>
                                </div>
                                <div class="actions-container-item">
                                    <img class="actions-image" src="../assets/images/manifesto/esta-na-hora.png" alt="">
                                    <span class="actions-text">de conhecer histórias</span>
                                </div>
                
                                <p class="action-card-text action-card-text-mt">
                                    Quanto antes o cuidado for iniciado, melhor será o prognóstico e a qualidade de vida de todos os envolvidos na atenção ao paciente.
                                </p>
                            </div>
                        </div>
                
                        <p class="news-info">
                            Este site é um local de acolhimento, aprendizado, empatia, informação e conexão. 
                            Todos estão convidados a (re)conhecer a doença de Alzheimer e fazer parte desse movimento de transformação do cenário nacional de DA.
                        </p>
                
                        
                        <p class="news-info">
                            Sejam todos bem-vindos.
                        </p>
                
                        <div id="alert-card">
                            <p id="alert-card-text">
                                Enquanto você lia nosso manifesto, 
                                60 pessoas desenvolveram algum tipo de demência no mundo¹.
                            </p>
                        </div>
                
                        <h2 class="title-subtitle">Referências</h2>
                
                        <ul class="news-info-list style-none p-0">
                            <li class="news-info-list-item news-info-list-item--little">
                                1. World Alzheimer Report 2019. Alzheimer’s Disease International. 
                                Disponível em: https://www.alzint.org/
                                u/WorldAlzheimerReport2019.pdf Acesso em 22/11/2021</li>
                            <li class="news-info-list-item news-info-list-item--little">
                                2. Dementia Fact Sheet. World Health Organization. 
                                Disponível em: https://www.who.int/news-room/
                                fact-sheets/detail/dementia Acesso 22/11/2021.
                            </li>
                            <li class="news-info-list-item news-info-list-item--little">
                                3. Feter N, Leite JS, Caputo EL, Cardoso RK, Rombaldi AJ. 
                                Who are the people with Alzheimer's disease in Brazil? Findings from the Brazilian Longitudinal Study of Aging. Rev Bras Epidemiol. 
                                2021 Apr 14;24:e210018.
                            </li>
                            <li class="news-info-list-item news-info-list-item--little">
                                4. Gutierrez BAO, Silva HS da, Guimaraes C, Campino AC. 
                                Economic impact of Alzheimer’s Disease in Brazil: is it possible to improve care and minimize costs?. Cien Saude Colet. 
                                2014 Nov;19(11):4479–86.
                            </li>
                            <li class="news-info-list-item news-info-list-item--little">
                                5. Dementia statistics. Alzheimer’s Disease International. 
                                Disponível em: https://www.alz.co.uk/research/statistics Acesso em 22/11/2021
                            </li>
                            <li class="news-info-list-item news-info-list-item--little">
                                6. Ferretti C, Sarti FM, Nitrini R, Ferreira FF, Brucki SMD. 
                                An assessment of direct and indirect costs of dementia in Brazil. PLoS One. 2018;13(3):e0193209.
                            </li>
                            <li class="news-info-list-item news-info-list-item--little">
                                7. Sandoval J de J, Turra CM, Loschi RH. 
                                Adjusted mortality rates attributable to Alzheimer’s disease dementia, Brazil, 2009-2013. 
                                Cad Saude Publica. 2019 Jul;35(6):e00091918.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
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