<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/oqueealzheimer/style.css">
    <title>O que é Alzheimer</title>
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

<main id="alzheimer-main">
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
            <a class="breadcrumb-item-text"href="#">Está na hora de saber o que é doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de saber o que é doença de Alzheimer</h1>
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

    <div id="page-container" class="d-flex justify-content-between">
        <div id="news-container">
            <p id="news-date">Publicado em 14 de novembro de 2021</p>
        
            <p class="news-info">
                A doença de Alzheimer (DA) é um tipo de demência, neurodegenerativa e progressiva, que se
                manifesta por meio de deterioração cognitiva e da memória, comprometimento das atividades diárias e da independência do paciente,
                alterações comportamentais e sintomas neuropsiquiátricos¹.
            </p>
    
            <img class="news-container-image" src="../assets/images/oqueealzheimer/cerebro-labirinto.png" alt="">
    
            <div id="sinais-sintomas-container">
                <h3 id="sinais-sintomas-title">
                    Os  <a class="sintomas-link">sinais e sintomas</a> mais comuns são¹
                </h3>
                <div class="sinais-sintomas-container-row sinais-sintomas-container-row-mt-bigger">
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/perda-memoria.png" alt="">
                        <p class="sinais-sintomas-item-text">
                            Perda de<br> memória recente
                        </p>
                    </div>
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/cerebro-icone.png" alt="">
                        <p class="sinais-sintomas-item-text">
                            Repetir a mesma pergunta várias vezes
                        </p>
                    </div>
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/dificuldade-conversar.png" alt="">
                        <p class="sinais-sintomas-item-text">
                            Dificuldade em acompanhar conversas ou raciocínios complexos
                        </p>
                    </div>
                </div>
                <div class="sinais-sintomas-container-row">
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/incapacidade.png" alt="">
                        <p class="sinais-sintomas-item-text">
                            Incapacidade de desenvolver estratégias para solução de problemas
                        </p>
                    </div>
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/dificuldade-dirigir.png" alt="">
                        <p class="sinais-sintomas-item-text">
                            Dificuldade para dirigir e encontrar caminhos conhecidos
                        </p>
                    </div>
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/dificuldade-expressar.png" alt="">
                        <p class="sinais-sintomas-item-text">
                            Dificuldade para expressar-se
                        </p>
                    </div>
                </div>
                <div class="sinais-sintomas-container-row">
                    <div class="sinais-sintomas-item">
                        <img class="sinais-sintomas-item-image" src="../assets/images/oqueealzheimer/mudanca-comportamento.png" alt="">
                        <p class="sinais-sintomas-item-text sinais-sintomas-item-text--bigger">
                            Mudanças comportamentais, como irritabilidade, agressividade, passividade,
                            interpretações erradas de estímulos visuais ou auditivos, e tendência ao isolamento
                        </p>
                    </div>
                </div>
            </div>
    
            <p class="news-info news-info-with-max-width">
                Em geral, a doença de Alzheimer é dividida em três grandes estágios: <span class="news-info-bold">pré-clínico</span>, 
                <a class="sintomas-link">comprometimento cognitivo leve (CCL)</a> <span class="news-info-bold">e demência³</span>.
            </p>
    
            <button class="news-info-button">
                Saiba mais sobre os estágios da doença de Alzheimer
            </button>
    
            <h2 class="title-subtitle">Será que é da idade? Envelhecer não é sinônimo de doença de Alzheimer</h2>
    
            <p class="news-info news-info-with-max-width">
                Apesar da doença de Alzheimer ser mais frequente em idosos, 
                <a class="sintomas-link">ela não é natural do processo de envelhecimento¹.</a>
            </p>
    
            <img class="news-container-image" src="../assets/images/oqueealzheimer/atividades.png" alt="">
    
            <p class="news-info">
                Estilo de vida saudável ajuda na
                <a class="sintomas-link"> prevenção4</a>
            </p>
    
            <p class="news-info">
                De vez em quando, esquecer nomes, precisar de ajuda para realizar tarefas, se confundir com compromissos e datas, perder coisas 
                (óculos e chaves, por exemplo), e ficar irritado com situações específicas, por exemplo,
                são sinais normais entre os idosos. Contudo, é preciso ficar alerta e buscar ajuda quando 
                essas situações se tornam frequentes3.
            </p>
    
            <p class="news-info">
                Os principais <a class="sintomas-link"> fatores de risco</a> da doença de Alzheimer são
            </p>
    
            <div id="fatores-container">
                <div class="fatores-container-item">
                    <img src="../assets/images/oqueealzheimer/envelhecimento.png" class="fatores-container-item-img" alt="">
                    <span class="fatores-container-item-text" alt="">Envelhecimento</span>
                </div>
                <div class="fatores-container-item">
                    <img src="../assets/images/oqueealzheimer/sexo.png" class="fatores-container-item-img" alt="">
                    <span class="fatores-container-item-text" alt="">Sexo</span>
                </div>
                <div class="fatores-container-item">
                    <img src="../assets/images/oqueealzheimer/mudancas-geneticas.png" class="fatores-container-item-img" alt="">
                    <span class="fatores-container-item-text" alt="">Mutações genéticas</span>
                </div>
                <div class="fatores-container-item">
                    <img src="../assets/images/oqueealzheimer/estilo-vida.png" class="fatores-container-item-img" alt="">
                    <span class="fatores-container-item-text" alt="">Estilo de vida</span>
                </div>
                <div class="fatores-container-item">
                    <img src="../assets/images/oqueealzheimer/baixa-escolaridade.png" class="fatores-container-item-img" alt="">
                    <span class="fatores-container-item-text" alt="">Baixa escolaridade</span>
                </div>
            </div>
    
            <p class="news-info">
                Alguns fatores de risco para doença de Alzheimer não são modificáveis, como envelhecimento, 
                sexo (mulheres são afetadas até duas vezes mais que homens) e mutações genéticas. 
                Porém, diabetes, obesidade, depressão, tabagismo e baixo nível de escolaridade também aumentam
                as chances de ter DA e podem ser controlados e ajustados ao longo da vida. Por isso, hábitos 
                de vida saudáveis podem ajudar a prevenir a patologia.
            </p>
    
            <h2 class="title-subtitle">E como é feito o diagnóstico?</h2>
    
            <p class="news-info">
                O diagnóstico é feito a partir de análise clínica, como testes físicos e cognitivos e histórico familiar. 
                A partir dessa avaliação o médico consegue oferecer um diagnóstico adequado.  
                Se necessário, exames complementares, de sangue e de imagem, podem ser solicitados5.
            </p>
    
            <button class="news-info-button">
                Saiba mais sobre o diagnóstico da doença de Alzheimer
            </button>
    
            <p class="news-info">
                Na hora do diagnóstico, é importante descartar outras condições que podem causar manifestações similares à DA, 
                como tumores e faltas de vitaminas. Ainda, é possível identificar se há associação entre doença de Alzheimer e 
                outros tipos de demência. Por exemplo, 50% dos pacientes mais idosos com DA apresentam sinais de demência vascular. 
                ambém é comum a coexistência com a demência com corpos de Lewy5.
            </p>
    
            <img class="news-container-image" src="../assets/images/oqueealzheimer/diagnosticos.png" alt="Diagnósticos">
    
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
    
            <h2 class="title-subtitle">Cuidado multidisciplinar é fundamental</h2>
    
            <p class="news-info">
                Na doença de Alzheimer, é fundamental ter um time de cuidado multidisciplinar, cujo objetivo é preservar a 
                funcionalidade e independência do paciente, minimizando os distúrbios comportamentais. Dentre os profissionais 
                envolvidos, além do neurologista, devem constar enfermeiro, nutricionista, psiquiatra e, quando necessário, 
                especialista em cuidado domiciliar7. O Sistema Único de Saúde (SUS) disponibiliza centros de referência com tratamento 
                multidisciplinar, integral e gratuito para pessoas com DA¹.
            </p>
    
            <p class="news-info">
                Já a terapia medicamentosa visa melhorar os sinais e sintomas, 
                e diminuir a progressão da doença ao aumentar o número de neurotransmissores no cérebro5.
            </p>
    
            <h2 class="title-subtitle">Entenda o que acontece com o cérebro na doença de Alzheimer5</h2>
    
            <img class="news-container-image" src="../assets/images/oqueealzheimer/acao-alzheimer.png" alt="Diagnósticos">
    
            <ul id="brain-activity">
                    <li class="brain-activity-item">
                        A doença de Alzheimer está associada ao acúmulo das proteínas beta-amilóides e TAU no cérebro.
                    </li>
                    <li class="brain-activity-item">
                        As placas de beta-amilóides atuam fora dos neurônios interferindo na comunicação entre eles (sinapse).
                    </li>
                    <li class="brain-activity-item">
                        O acúmulo de TAU bloqueia o transporte de nutrientes e 
                        outras moléculas essenciais dentro dos neurônios.
                    </li>
                    <li class="brain-activity-item">
                        Quanto mais beta-amilóide, maior será a progressão da proteína de TAU. 
                        Juntas, elas causam perda de sinapse, morte neuronal e declínio cognitivo.
                    </li>
                    <li class="brain-activity-item">
                        Além disso, a sobrecarga dessas proteínas causa inflamação e atrofia do cérebro, 
                        pois o sistema imunológico ativa células de defesa para eliminar as proteínas tóxicas e células mortas do cérebro, 
                        gerando um processo inflamatório na região.</li>
                    <li class="brain-activity-item">
                        A atrofia acontece pela perda de células cerebrais e compromete a capacidade do órgão em metabolizar a glicose, 
                        fundamental para o bom funcionamento do cérebro.
                    </li>
            </ul>
    
            <div class="action-card">
                <h3 class="action-card-title">O que é demência?8</h3>
                <p class="action-card-text">
                    Causada por lesões e alterações cerebrais, as demências englobam uma série de patologias, 
                    como a DA, demência vascular, demência com corpos de Lewy, entre outras. 
                    A mais frequente é a doença de Alzheimer, responsável por 60-70% dos casos. 
                    Mais de 55 milhões de pessoas vivem com demência em todo o mundo – por conta do envelhecimento populacional, 
                    esse número deve chegar a 130 milhões até 2050.
                </p>
                <p class="action-card-text">
                    Nela, há deterioração da função cognitiva, com impacto físico, psicológico, social e econômico para o 
                    paciente e sua família. Em 2019, o custo social global da demência foi de 1,3 trilhões de dólares e 
                    esse valor deve ultrapassar 2,8 trilhões de dólares em 2030.
                </p>
            </div>
    
    
    
    
            <h2 class="title-subtitle">Referências</h2>
    
            <ul class="news-info-list style-none p-0">
                <li class="news-info-list-item news-info-list-item--little">
                    1. World Alzheimer Report 2019. Alzheimer’s Disease International. 
                    Disponível em: https://www.alzint.org/u/WorldAlzheimerReport2019.pdf Acesso em 22/11/2021</li>
                <li class="news-info-list-item news-info-list-item--little">
                    2. Dementia Fact Sheet. World Health Organization. 
                    Disponível em: https://www.who.int/news-room/fact-sheets/detail/dementia Acesso 22/11/2021.
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

        <div id="related-column">
            <div id="related-doctor">
                <img src="../assets/images/oqueealzheimer/draugusto.png" alt="Doutor Augusto">
                <p class="related-doctor-text">
                    <span class="news-info-bold">Dr. Augusto José</span> é neurologista, loren ipsun dolor sit amet, loren ipsun dolor sit amet, 
                    loren ipsun dolor sit amet, loren ipsun dolor sit amet, loren ipsun dolor sit amet, 
                    loren ipsun dolor sit amet.
                </p>
            </div>

            <div id="related-charts">
                <h4 id="related-charts-title">Relacionados</h4>
                <div class="related-chart">
                    <img src="../assets/images/oqueealzheimer/primeiro-relacionado.png" alt="Doutor Augusto">
                    <p class="related-chart-text">
                       Como seguir a vida após o diagnóstico de Alzheimer
                    </p>
                    <div class="card-info-related-container align-items-start">
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
                </div>
                
                <div class="related-chart">
                    <img src="../assets/images/oqueealzheimer/segundo-relacionado.png" alt="Doutor Augusto">
                    <p class="related-chart-text">
                        Uma boa alimentação é essencial para diminuir as chances de desenvolver qualquer doença
                    </p>
                    <div class="card-info-related-container align-items-start">
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
                </div>
                
                <div class="related-chart">
                    <img src="../assets/images/oqueealzheimer/terceiro-relacionado.png" alt="Doutor Augusto">
                    <p class="related-chart-text">
                        Os desafios dos relacionamentos com o Alzheimer
                    </p>
                    <div class="card-info-related-container align-items-start">
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