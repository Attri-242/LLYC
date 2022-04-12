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

<?php
    include '../includes/footer/footer.php'; 
?>

    <script src="../assets/js/busqueinformacao/script.js"></script>
</body>
</html>