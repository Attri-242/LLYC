'<!DOCTYPE html>
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

<?php
    include "../includes/header/header.php";
?>

<main id="sinais-main">
    <div id="breadcrumb">
        <section class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center align-items-xl-start">
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
                </div>
            </div>
        </section>
    </div>

    <div id="title">
        <section class="w-100 d-flex">
            <div class="container">
                <div class="row">
                    <h1 id="title-text" class="col-8 d-flex flex-column align-items-center align-items-xl-start">
                        Está na hora de conhecer os sinais e sintomas da doença de Alzheimer
                    </h1>
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
                    <div class="col-12 d-flex flex-column align-items-center align-items-xl-start">
                        <p id="news-date">Publicado em 14 de novembro de 2021</p>
                    
                        <p class="news-info news-info-no--margin-top">
                            É comum que os sintomas iniciais da doença de Alzheimer (DA) sejam confundidos com o processo de 
                            envelhecimento normal – o que tende a adiar a busca por orientação profissional e diagnóstico¹. 
                            Indivíduos com DA, bem como pessoas próximas a eles, deixam passar manifestações da doença, 
                            relacionando-os à idade avançada². Inclusive, essa má interpretação dos primeiros sinais da doença 
                            também acontece entre os profissionais de saúde – mundialmente 60% deles entendem demência como parte 
                            do envelhecimento normal³.
                        </p>
                
                        <p class="news-info">
                            Por isso, é importante conhecer os sinais e sintomas da doença de Alzheimer e diferenciá-los 
                            do processo de envelhecimento.
                        </p>
                
                        <div id="news-table-container" class="w-100">
                            <div class="news-table">
                                <h3 class="news-table-title">Sinais de Doença de Alzheimer⁴</h3>
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
                                <h3 class="news-table-title">Características comuns à idade⁴</h3>
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
                            Saiba mais sobre a diferença de envelhecimento saudável e DA
                        </button>

                        <h2 class="title-subtitle">5 critérios clínicos diagnósticos⁵</h2>

                        <p class="news-info">
                            Para identificação de demência, é avaliado se os comprometimentos cognitivos ou 
                            comportamentais afetam pelo menos dois dos itens abaixo:
                        </p>

                        <div id="carousel" class="carousel slide carousel-container" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid carousel-image" src="../assets/images/sinaisESintomas/memoria.svg" alt="First slide">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img class="d-block img-fluid carousel-image" src="../assets/images/sinaisESintomas/funcoes-executivas.svg">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img class="d-block img-fluid carousel-image" src="../assets/images/sinaisESintomas/habilidades-visuais.svg">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img class="d-block img-fluid carousel-image" src="../assets/images/sinaisESintomas/linguagem.svg">
                                </div>
                                <div class="carousel-item carousel-image">
                                    <img class="d-block img-fluid carousel-image" src="../assets/images/sinaisESintomas/personalidade.svg">
                                </div>
                            </div>
                            <a class="carousel-control-prev" data-bs-target="#carousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" data-bs-target="#carousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>

                        <h2 class="title-subtitle text-subtitle-little">A perda de memória não é o primeiro ou único sintoma da doença de Alzheimer¹</h2>

                        <p class="news-info">
                            A DA é dividida nos estágios: pré-clínico, comprometimento cognitivo leve (CCL) e demência leve, moderada e grave. 
                            Cada um deles conta com manifestações específicas e diferentes níveis de impacto na função cognitiva e funcional⁶.
                        </p>

                        <p class="news-info">
                            Na fase pré-clínica ainda não há sintomas evidentes6. Contudo, é quando começam as alterações cerebrais, 
                            especialmente devido ao acúmulo das proteínas beta-amiloide e TAU¹.
                        </p>

                        <img class="news-container-image news-container-image--with-height" src="../assets/images/sinaisESintomas/clinicas.svg" alt="">

                        <p class="news-info">
                            O comprometimento cognitivo leve é um dos estágios iniciais da doença e quando os sintomas 
                            começam a ficar mais visíveis e detectáveis. As funções cognitivas mais afetadas são a memória 
                            e a resolução de problemas. Mas, apesar do declínio cognitivo ser evidente para ele e pessoas próximas, 
                            e a realização de tarefas complexas serem mais difíceis, o indivíduo se mantém independente e continua 
                            a realizar atividades diárias¹<sup>,</sup>⁶. 
                        </p>

                        <div id="info-card" class="d-flex flex-column align-items-center align-items-xl-start">
                            <h3 id="info-card-title">Nem todo CCL leve é doença de Alzheimer¹</h3>
                            <p id="info-card-text">
                                O comprometimento cognitivo leve não caracteriza diagnóstico de DA ou demência, podendo progredir 
                                ou não para alguma dessas doenças¹. Por isso, é fundamental identificar de forma correta o CCL, para que seja 
                                possível realizar o diagnóstico adequado da doença de Alzheimer. 
                            </p>
                        
                            <button class="news-info-button align-self-center">
                                Saiba mais sobre o CCL
                            </button>
                        </div>
                
                        <h2 class="title-subtitle">Veja as manifestações da DA em cada fase da doença</h2>
                
                        <div id="timeline">
                            <div id="sintomas-timeline-text-iniciais"></div>
                            <div id="sintomas-timeline">
                                <div id="sintomas-timeline-container" class="sintomas-timeline-container-first">
                                    <span class="timeline-text-item timeline-item-max-width">Perda de memória</span>
                                    <span class="timeline-text-item timeline-item-max-width">Julgamento que levam a decisões erradas</span>
                                </div>
                            </div>
                    
                            <div id="sintomas-timeline-icon">
                                <div id="sintomas-timeline-container">
                                    <span class="timeline-text-item timeline-item-max-width">Perda de espontaneidade</span>
                                </div>
                            </div>
                    
                            <div id="sintomas-timeline" class="sintomas-timeline-mt">
                                <div id="sintomas-timeline-container" class="sintomas-timeline-container-second">
                                    <span class="timeline-text-item timeline-item-max-width">Demora para completar as tarefas diárias normais</span>
                                    <span class="timeline-text-item timeline-item-max-width">Perguntas repetitivas</span>
                                    <span class="timeline-text-item timeline-item-max-width">Problemas para lidar com dinheiro e pagar contas</span>
                                    <span class="timeline-text-item timeline-item-max-width">Perder coisas com frequência</span>
                                    <span class="timeline-text-item timeline-item-max-width">Mudanças de humor e personalidade</span>
                                    <span class="timeline-text-item timeline-item-max-width">Aumento de ansiedade e/ou agressão</span>
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

                        <?php 
                            $current_url = $baseUrl . "/estagios/index.php";
                        ?>
                        <a class="link-text" href="<?= $current_url ?>">
                            <button class="news-info-button">
                                Conheça os estágios da doença de Alzheimer
                            </button>
                        </a>
                
                        <h2 class="title-subtitle">Referências</h2>
                
                        <ul class="news-info-list style-none p-0">
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                1. 2021 Alzheimer’s Disease Facts and Figures. Alzheimer’s Association. Disponível em:
                                https://www.alz.org/media/
                                documents
                                /alzheimers-facts-and-figures.pdf. Acesso 23/11/21
                            </li>
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                2.James, A. Wilcox; Duffy PR. Is it a “senior moment” or early dementia? 
                                Addressing memory concerns in older patients. Curr Psychiatr [Internet]. 
                                15(5)(28-30,32-34,40). Disponível em: https://www.mdedge.com/psychiatry/
                                article/108301/alzheimers-cognition/it-senior-moment-
                                or-early-dementia-addressing-memory. 
                                Acesso em 5/1/2022
                            </li>
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                3.Alzheimer’s Disease International. World Alzheimer Report 2019, Attitudes to dementia. 2019.
                            </li>
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                4.Alzheimer's Association. 10 warn signs. 
                                Disponível em: https://www.alz.org/national/
                                documents/aa_brochure_10warnsigns.pdf. 
                                Acesso 23/11/21
                            </li>
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                5.National Institute of Aging and Alzheimer's Association Workgroup / DC-ABN
                            </li>
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                6.Vaughn, Peggy. Alzheimer's diagnostic guidelines updated for first time in decades. 
                                Estados Unidos. National Institutes of Health e the Alzheimer’s Association, 2011. 
                                Disponível em: https://www.nia.nih.gov/news/alzheimers-
                                diagnostic-guidelines-updated-first-time-decades. 
                                Acesso 23/11/21
                            </li>
                            <li class="news-info-list-item news-info-list-item--no-bold news-info-list-item--little">
                                7.National Institute on Aging. What Are the Signs of Alzheimer's Disease?. 
                                Disponível em: https://www.nia.nih.gov/health/what-
                                are-signs-alzheimers-disease. 
                                Acesso em 25/11/21
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
    include '../includes/footer/footer.php'; 
?>
<script src="../assets/js/bootstrap/js/bootstrap.js"></script>
<script src="../assets/js/components/nav-item/script.js"></script>
<script src="../assets/js/includes/header/script.js"></script>
</body>
</html>'