<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/busqueinformacao/style.css">
    <title>Busque informação</title>
</head>
<body>

<?php
    include "../includes/header/header.php";
?>

<main id="informacao-main">
    <div id="breadcrumb">
        <div class="informacao-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Home</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="informacao-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Busque informação</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Busque informação</h1>
    </div>

    <div id="news-container">
        <div id="localizacao">
            <div id="localizacao-container">
                <input 
                    placeholder="Como podemos te ajudar"
                    class="search-input" 
                    type="text" />
                <img onclick="search()" class="search-search" src="../assets/images/associacao/buscar.png" alt="">
            </div>
        </div>

        <div id="termos-container">
            <h2 class="termos-title">Termos mais buscados</h2>

            <div class="termos-items">
                <div id="card-info-related-container" class="d-flex flex-column align-items-center">
                    <div class="card-info-relateds">
                        <div class="card-info-related">
                            Alzheimer
                        </div>
                        <div class="card-info-related">
                            Diagnóstico
                        </div>
                        <div class="card-info-related">
                            Sinais e sintomas
                        </div>
                    </div>
                    <div class="card-info-relateds">
                        <div class="card-info-related">
                            Sinais e sintomas
                        </div>
                        <div class="card-info-related">
                            Diagnóstico
                        </div>
                        <div class="card-info-related">
                            Alzheimer
                        </div>
                        <div class="card-info-related">
                            Sinais e sintomas
                        </div>
                    </div>
                    <div class="card-info-relateds">
                        <div class="card-info-related">
                            Diagnóstico
                        </div>
                        <div class="card-info-related">
                            Sinais e sintomas
                        </div>
                        <div class="card-info-related">
                            Alzheimer
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 id="resultados-title" class="termos-title termos-title--mt ">Resultados para o termo “alimentação”</h2>

        <div class="cards">
            <div class="card-info">
                <a class="card-info-link-container" href="#">
                    <img class="card-info-image" src="../assets/images/home/diagnostico.png" alt="Diagnóstico">
                    <span class="card-info-text">
                        Como seguir a vida após o diagnóstico de Alzheimer
                    </span>
                </a>
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
            <div class="card-info card-info--larger">
                <a class="card-info-link-container" href="#">
                    <img class="card-info-image" src="../assets/images/home/atividades.png" alt="Atividades">
                    <span class="card-info-text">
                        Atividades que estimulam o cérebro
                    </span>
                </a>
                <div class="card-info-relateds">
                    <div class="card-info-related">
                        Alzheimer
                    </div>
                    <div class="card-info-related">
                        Diagnóstico
                    </div>
                    <div class="card-info-related">
                        Sinais e sintomas
                    </div>
                </div>
            </div>
            <div class="card-info">
                <a class="card-info-link-container" href="#">
                    <img class="card-info-image" src="../assets/images/home/alimentacao.png" alt="Alimentação">
                    <span class="card-info-text">
                        Uma boa alimentação é essencial para diminuir as chances de desenvolver qualquer doença
                    </span>
                </a>
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

        <div class="cards">
            <div class="card-info">
                <a class="card-info-link-container" href="#">
                    <img class="card-info-image" src="../assets/images/home/diagnostico.png" alt="Diagnóstico">
                    <span class="card-info-text">
                        Como seguir a vida após o diagnóstico de Alzheimer
                    </span>
                </a>
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
            <div class="card-info card-info--larger">
                <a class="card-info-link-container" href="#">
                    <img class="card-info-image" src="../assets/images/home/atividades.png" alt="Atividades">
                    <span class="card-info-text">
                        Atividades que estimulam o cérebro
                    </span>
                </a>
                <div class="card-info-relateds">
                    <div class="card-info-related">
                        Alzheimer
                    </div>
                    <div class="card-info-related">
                        Diagnóstico
                    </div>
                    <div class="card-info-related">
                        Sinais e sintomas
                    </div>
                </div>
            </div>
            <div class="card-info">
                <a class="card-info-link-container" href="#">
                    <img class="card-info-image" src="../assets/images/home/alimentacao.png" alt="Alimentação">
                    <span class="card-info-text">
                        Uma boa alimentação é essencial para diminuir as chances de desenvolver qualquer doença
                    </span>
                </a>
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

    <script src="../assets/js/busqueinformacao/script.js"></script>
</body>
</html>