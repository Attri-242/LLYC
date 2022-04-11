<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/cidadania/style.css">
    <title>Cidadania</title>
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

<main id="cidadania-main">
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
            <a class="breadcrumb-item-text"href="#">Está na hora de pensar a cidadania da pessoa com doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de pensar a cidadania da pessoa com doença de Alzheimer</h1>
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
            Todo cidadão no Brasil tem o direito universal e integral à saúde por meio do Sistema Único de
            Saúde (SUS), atendendo as diferentes realidades e necessidades da população¹. 
            Assim, foi estabelecida em 2006 a Política Nacional de Saúde da Pessoa Idosa que, além de concentrar e
            atualizar as diretrizes para essa parcela da população, prevê recuperar, manter e promover a
            autonomia e a independência dos idosos¹.
        </p>

        <div id="news-table">
            <h3 class="news-table-title">Diretrizes da Política Nacional de Saúde da Pessoa Idosa¹</h3>
            <img class="news-table-image" src="../assets/images/cidadania/diretrizes.png" alt="">
            <span class="news-table-item">
                <p class="news-table-item-text">Promoção do envelhecimento ativo e saudável</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Atenção integral, integrada à saúde da pessoa idosa</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Estímulo às ações intersetoriais, visando à integralidade da atenção</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Provimento de recursos capazes de assegurar qualidade da atenção à saúde da pessoaidosa</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Estímulo à participação e fortalecimento do controle social</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Formação e educação permanente dos profissionais de saúde do SUS na área de saúde da pessoa idosa</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Divulgação e informação sobre a Política Nacional de Saúde da Pessoa Idosa para profissionais de saúde, gestores e usuários do SUS</p> 
            </span>
            <span class="news-table-item">
                <p class="news-table-item-text">Apoio ao desenvolvimento de estudos e pesquisas</p> 
            </span>
        </div>

        <p class="news-info">
            No enfrentamento da doença de Alzheimer, demências e situações que coloquem o idoso em
            situação de fragilidade, o Brasil estabelece a universalidade de ações, tanto para a pessoa idosa quanto família,
            cuidadores e sistemas de saúde e promoção da saúde e integração social¹. O país também determina tratamento multidisciplinar integral e gratuito nos centros 
            de referência do SUS².
        </p>

        <button class="news-info-button">
            Conheça os cuidados necessários na doença de Alzheimer
        </button>

        <h2 class="title-subtitle">Impactos da doença de Alzheimer</h2>

        <p class="news-info">
            Em todo o mundo, a demência é uma das principais razões de incapacidade e dependência de
            idosos, além de ser a sétima causa de morte entre todas as doenças nessa faixa da população³.
        </p>
        
        <div id="news-impacts">
            <div class="news-impacts-item">
                <img class="news-impacts-item-img" src="../assets/images/cidadania/world.png" alt="">
                <span class="news-impacts-item-text">55 milhões de pessoas vivem com demência em todo o mundo³</span>
            </div>
            <div class="news-impacts-item">
                <img class="news-impacts-item-img" src="../assets/images/cidadania/brain.png" alt="">
                <span class="news-impacts-item-text">Entre 60% e 70% dos casos são de doença de Alzheimer (DA)³</span>
            </div>
        </div>

        <p class="news-info">
            As demências, por serem um tipo de patologia de desenvolvimento progressivo e lento, faz
            com que a pessoa viva anos em condições debilitantes e isso contribui significativamente para
            o impacto da DA na saúde pública. Considerando todos os tipos de demência, a Organização
            Mundial da Saúde apontou um custo social estimado em US$ 1,3 trilhão em 2019³.
        </p>

        <p class="news-info">
            O ônus não é apenas para o paciente, mas também para familiares, amigos e cuidadores4. A
            OMS estimou um gasto médio de 5 horas por dia de cuidadores informais que, em geral, são
            familiares e amigos das pessoas com demências, incluindo Alzheimer. Ainda, 50% do custo
            global da demência é atribuído ao cuidado informal³.
        </p>

        <h2 class="title-subtitle text-subtitle-little">Como a doença de Alzheimer impacta família e cuidadores³</h2>
        
        <div id="news-image-text">
            <img class="news-image-text-image" src="../assets/images/cidadania/brain.png" alt="">
            <div class="news-image-text-items">
                <span class="news-image-text-item">Física</span>
                <span class="news-image-text-item">Emocional</span>
                <span class="news-image-text-item">Financeira</span>
            </div>
        </div>

        <h2 class="title-subtitle">Recomendações da OMS³</h2>

        <p class="news-info">
            Organização Mundial da Saúde reconhece a demência – incluindo a doença de Alzheimer -
            como uma prioridade de saúde pública e estabeleceu em 2017 um plano global que reforça aos países membros a 
            importância da adoção de estratégias para combater a doença até 2025.
            Entre as metas estão:
        </p>

        <ul class="news-info-list">
            <li class="news-info-list-item">Tratar a demência como uma prioridade de saúde pública</li>
            <li class="news-info-list-item">Aumentar a conscientização sobre a demência e criar uma sociedade mais inclusiva</li>
            <li class="news-info-list-item">Reduzir o risco de demência</li>
            <li class="news-info-list-item">Diagnosticar, tratar e cuidar dos pacientes</li>
            <li class="news-info-list-item">Criar sistemas de informação para demência</li>
            <li class="news-info-list-item">Oferecer suporte para cuidadores de pacientes</li>
            <li class="news-info-list-item">Promover a pesquisa e a inovação</li>
        </ul>

        <p class="news-info">
            A entidade também oferece guias e diretrizes para apoiar a adoção medidas contra a doença,
            especialmente nos fatores modificáveis, que incluem:
        </p>

        <ul class="news-info-list">
            <li class="news-info-list-item">Incentivo à atividade física</li>
            <li class="news-info-list-item">Cessação do tabagismo</li>
            <li class="news-info-list-item">Intervenções nutricionais</li>
            <li class="news-info-list-item">Controle do transtorno de uso de álcool</li>
            <li class="news-info-list-item">Intervenções cognitivas</li>
            <li class="news-info-list-item">Atividade social</li>
            <li class="news-info-list-item">Gestão para controle de peso</li>
            <li class="news-info-list-item">Controle de hipertensão</li>
            <li class="news-info-list-item">Controle de diabetes mellitus</li>
            <li class="news-info-list-item">Gerenciamento de dislipidemia</li>
            <li class="news-info-list-item">Prevenção da depressão</li>
            <li class="news-info-list-item">Gestão da perda de audição</li>
        </ul>

        <button class="news-info-button">
            Está na hora de pensar a doença de Alzheimer.</br> Confira o nosso manifesto
        </button>

        <h2 class="title-subtitle">Referências</h2>

        <ul class="news-info-list style-none p-0">
            <li class="news-info-list-item news-info-list-item--little">1. BRASIL. Portaria nº 2.528 de 19 de outubro de 2006. Institui Política Nacional de Saúde da Pessoa Idosa. 
                Ministério da Saúde, Brasília. Disponível em: https://bvsms.saude.gov.br/bvs/
                saudelegis/gm/2006/
                prt2528_19_10_2006.html. Acesso 26/11/2021</li>
            <li class="news-info-list-item news-info-list-item--little">2. O que é demência. BVS Atenção Primária em Saúde, 2009. 
                Disponível em: https://aps.bvs.br/aps/o-que-e-demencia/. Acesso 26/11/2021</li>
            <li class="news-info-list-item news-info-list-item--little">3. Dementia Fact Sheet. World Health Organization, 2021. 
                Disponível em: https://www.who.int/news-room/fact-sheets/detail/dementia. Acesso 26/11/2021</li>
            <li class="news-info-list-item news-info-list-item--little">4. 2021 Alzheimer’s Disease Facts and Figures. Alzheimer’s Association.
                 Disponível em: https://www.alz.org/
                 media/documents/alzheimers-facts-and-figures.pdf. Acesso 26/11/21</li>
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