<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/estagios/style.css">
    <title>Estágios</title>
</head>
<body>

<?php
    include "../includes/header/header.php";
?>

<main id="estagios-main">
    <div id="breadcrumb">
        <div class="estagios-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="estagios-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="estagios-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de conhecer os estágios da doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de conhecer os estágios da doença de Alzheimer</h1>
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
            A evolução da doença de Alzheimer (DA) é acontece em um processo contínuo, cuja duração
            varia em cada caso. Ela é dividida em três estágios: pré-clínico, <a class="estagios-link"> comprometimento cognitivo leve (CCL) e demência</a>. 
            Ao atingir a demência, ela é subcategorizada em três níveis – leve,
            moderada e grave. A duração de cada fase também é diferente entre os indivíduos com DA,
            sendo influenciada por idade, genética e sexo, por exemplo¹.
        </p>

        <div id="estagios-timeline">
            <div class="estagios">
                <div class="estagios-container-item container-item-little">
                    Pré-clínico
                </div>
                <img class="estagios-container-arrow" src="../assets/images/estagios/timeline-arrow.png" alt="">
                <div class="estagios-container-item">
                    Comprometi</br>mento cognitivo leve ligado à DA
                </div>
                <img class="estagios-container-arrow" src="../assets/images/estagios/timeline-arrow.png" alt="">
                <div class="estagios-container-item">
                    Demência leve ligada à DA
                </div>
                <img class="estagios-container-arrow" src="../assets/images/estagios/timeline-arrow.png" alt="">
                <div class="estagios-container-item">
                    Demência moderada ligada à DA
                </div>
                <img class="estagios-container-arrow" src="../assets/images/estagios/timeline-arrow.png" alt="">
                <div class="estagios-container-item">
                    Demência severa ligada à DA
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-division timeline-division-first"></div>
                <div class="timeline-division timeline-division-second"></div>
                <div class="timeline-division timeline-division-third"></div>
                <div class="timeline-division timeline-division-fourth"></div>
                <div class="timeline-division timeline-division-fifth"></div>
            </div>
            <div class="estagios estagios-bottom">
                <div class="estagios-container-item container-item-little">
                    Sem</br> sintomas
                </div>
                <div class="estagios-container-item estagios-container-item--no-ml">
                    Sintomas leves que não interferem nas atividades diárias
                </div>
                <div class="estagios-container-item">
                    Sintomas que interferem em algumas atividades diárias
                </div>
                <div class="estagios-container-item">
                    Sintomas que interferem em muitas atividades diárias
                </div>
                <div class="estagios-container-item">
                    Sintomas que interferem na maioria das atividades diárias
                </div>
            </div>
        </div>

        <h2 class="title-subtitle title-italic">Figura adaptada de 2021 Alzheimer’s Disease Facts and Figures</h2>
            
        <p class="news-info">
            O <a class="estagios-link">diagnóstico</a> precoce é fundamental para preservar a capacidade funcional e cognitiva do
            indivíduo, bem como sua qualidade de vida e bem-estar. Ao identificar os primeiros <a class="estagios-link">sinais 
            sintomas</a> da doença de Alzheimer, busque um médico.
        </p>

        <div class="action-card">
            <h3 class="action-card-title">A doença de Alzheimer</br> não começa na demência</h3>
            <p class="action-card-text">
                Antigamente, era muito comum a DA ser associada exclusivamente à demência, porém, com o
                avanço da ciência, hoje entende-se que ela inicia muito antes. Ou seja, demência é uma parte
                da doença de Alzheimer, mas não o todo¹. Primeiramente, a DA está associada ao acúmulo de
                duas proteínas no cérebro, a beta-amilóide e a TAU, o que pode começar mais de 20 anos
                antes dos primeiros sintomas². Além disso, pessoas com CCL relacionado à doença de
                Alzheimer já estão nas fases iniciais da patologia, ainda que sem grandes impactos em sua
                independência e qualidade de vida¹.
            </p>
        </div>

        <h2 class="title-subtitle">Estágios da doença do Alzheimer¹</h2>

        <div id="timeline">
            <div class="sintomas-timeline-text" id="sintomas-timeline-text-iniciais"></div>
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Não apresenta nenhum sintoma</span>
                    <span class="timeline-text-item timeline-item-max-width">Já tem alterações nos biomarcadores (beta-amilóide e TAU)</span>
                    <span class="timeline-text-item timeline-item-max-width">*nem todas as pessoas com essas alterações desenvolvem DA</span>
                </div>
            </div>
    
            <div class="sintomas-timeline-text" id="sintomas-timeline-text-ccl"></div>
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Discretas mudanças na capacidade de memória e de raciocínios</span>
                    <span class="timeline-text-item timeline-item-max-width">Não interfere nas atividades do dia a dia</span>
                    <span class="timeline-text-item">Duração:</span>
                    <ul class="timeline-text-list">
                        <li class="timeline-text-list-item">15% evoluem para demência em 2 anos</li>
                        <li class="timeline-text-list-item">32% desenvolvem em 5 anos</li>
                    </ul>
                </div>
            </div>
    
            <div class="sintomas-timeline-text" id="sintomas-timeline-text-leves"></div>
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Mudanças de comportamento, memória e raciocínio começam a ser mais evidentes</span>
                    <span class="timeline-text-item timeline-item-max-width">Passa a precisar de apoio para fazer algumas atividades da rotina</span>
                    <span class="timeline-text-item timeline-item-max-width">Ainda pode realizar atividades diárias, como dirigir e trabalhar</span>
                </div>
            </div>

            <div class="sintomas-timeline-text" id="sintomas-timeline-text-moderados"></div>
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Em geral, é o estágio mais longo</span>
                    <span class="timeline-text-item timeline-item-max-width">Há dificuldade de comunicação</span>
                    <span class="timeline-text-item timeline-item-max-width">
                        Início da dependência mais constante para realizar ações diárias e essenciais, como se
                        vestir e tomar banho
                    </span>
                    <span class="timeline-text-item timeline-item-max-width">Ocorrem episódios de incontinência urinária</span>
                    <span class="timeline-text-item timeline-item-max-width">
                        Começam a apresentar alterações na personalidade e no comportamento de forma
                        mais clara, incluindo desconfiança e agitação
                    </span>
                </div>
            </div>

            <div class="sintomas-timeline-text" id="sintomas-timeline-text-severos"></div>
            <div id="sintomas-timeline">
                <div id="sintomas-timeline-container">
                    <span class="timeline-text-item timeline-item-max-width">Dependência completa</span>
                    <span class="timeline-text-item timeline-item-max-width">Necessidade de cuidado em tempo integral</span>
                    <span class="timeline-text-item timeline-item-max-width">Comprometimento da saúde física mais evidente</span>
                    <span class="timeline-text-item timeline-item-max-width">
                        Danos cerebrais relacionados à capacidade de movimentar-se fazem com que a pessoa
                        fique acamada. Isso torna-os mais suscetíveis a coágulos sanguíneos e infecções na
                        pele e gerais
                    </span>
                    <span class="timeline-text-item timeline-item-max-width">
                        Danos nas áreas do cérebro ligada ao controle de deglutição dificultam a capacidade
                        de comer e beber. Pode ser necessário suporte para alimentação e hidratação
                    </span>
                    <span class="timeline-text-item timeline-item-max-width">Aumento dos episódios de pneumonia</span>
                </div>
            </div>
        </div>

        <p class="news-info">
            Cada estágio da doença de Alzheimer demanda um cuidado específico, composto por um <a class="estagios-link">time
            multidisciplinar</a> capaz de zelar pela saúde e bem-estar do indivíduo.
        </p>

        <button class="news-info-button">
            Confira os cuidados multidisciplinares da doença de Alzheimer
        </button>



        <h2 class="title-subtitle">Referências</h2>
        <ul class="news-info-list style-none p-0">
            <li class="news-info-list-item news-info-list-item--little">
                1. 2021 Alzheimer’s Disease Facts and Figures. Alzheimer’s Association. 
                Disponível em: https://www.alz.org/media/documents/alzheimers-facts-and-
                figures.pdf. Acesso 24/11/21
            </li>
            <li class="news-info-list-item news-info-list-item--little">
                2. Dubois B, Hampel H, Feldman H, et al. Preclinical Alzheimer’s disease: Definition, natural
                history, and diagnostic criteria. Alzheimer’s Dement. 2016;12(3):292–323
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