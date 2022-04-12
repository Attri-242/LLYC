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

<?php
    include "../includes/header/header.php";
?>

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
                <a class="icon-text-item" href="../associacoes/index.php">
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