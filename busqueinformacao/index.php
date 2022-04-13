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
        <section class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="breadcrumb-breadcrumb-item">
                            <a class="breadcrumb-item-text"href="#">Home</a>
                            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
                        </div>
                        <div class="breadcrumb-breadcrumb-item">
                            <a class="breadcrumb-item-text"href="#">Busque informação</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="title">
        <section class="w-100 d-flex">
            <div class="container">
                <div class="row text-align w-lg-100">
                    <h1 id="title-text text-center" class="col-12">Busque informação</h1>
                </div>
            </div>
        </section>
    </div>

    <section class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                                <div class="card-info-related-container d-flex align-items-center">
                                    <div class="card-info-relateds d-flex flex-column flex-sm-row">
                                        <div class="card-info-related mt-3">
                                            Alzheimer
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Diagnóstico
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Sinais e sintomas
                                        </div>
                                    </div>
                                    <div class="card-info-relateds d-flex flex-column flex-sm-row">
                                        <div class="card-info-related mt-3">
                                            Sinais e sintomas
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Diagnóstico
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Alzheimer
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Sinais e sintomas
                                        </div>
                                    </div>
                                    <div class="card-info-relateds d-flex flex-column flex-sm-row">
                                        <div class="card-info-related mt-3">
                                            Diagnóstico
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Sinais e sintomas
                                        </div>
                                        <div class="card-info-related mt-3">
                                            Alzheimer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <h2 id="resultados-title" class="termos-title termos-title--mt ">Resultados para o termo “alimentação”</h2>
                
                        <section class="w-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-xl-3 cards">
                                        <div class="w-100 card-info">
                                            <a class="card-info-link-container" href="#">
                                                <img class="card-info-image w-100" src="../assets/images/home/diagnostico.png" alt="Diagnóstico">
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
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-6 cards">
                                        <div class="w-100 card-info">
                                            <a class="card-info-link-container" href="#">
                                                <img class="card-info-image w-100" src="../assets/images/home/atividades.png" alt="Diagnóstico">
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
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-3 cards">
                                        <div class="w-100 card-info">
                                            <a class="card-info-link-container" href="#">
                                                <img class="card-info-image w-100" src="../assets/images/home/alimentacao.png" alt="Diagnóstico">
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
                                    </div>
                                </div>
                                <div class="row mt-md-5">
                                    <div class="col-12 col-md-4 col-xl-3 cards">
                                        <div class="w-100 card-info">
                                            <a class="card-info-link-container" href="#">
                                                <img class="card-info-image w-100" src="../assets/images/home/relacionamentos.png" alt="Relacionamentos">
                                                <span class="card-info-text">
                                                    Os desafios dos relacionamentos com o Alzheimer
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
                                    <div class="col-12 col-md-4 col-xl-3 cards">
                                        <div class="w-100 card-info card-info--test">
                                            <a class="card-info-test-link-container" href="#">
                                                <span class="card-info-test-text">
                                                    Que tal um teste para ver como está a sua memória?
                                                </span>
                                                <div class="card-info-test-text-begin">
                                                    Começar
                                                    <img class="card-info-test-img" src="../assets/images/home/test-arrow.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-6 cards">
                                        <div class="w-100 card-info">
                                            <a class="card-info-link-container" href="#">
                                                <img class="card-info-image w-100" src="../assets/images/home/atividades.png" alt="Atividades">
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
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </section>

 
</main>

<?php
    include '../includes/footer/footer.php'; 
?>

<script src="../assets/js/busqueinformacao/script.js"></script>
<script src="../assets/js/components/nav-item/script.js"></script>
<script src="../assets/js/includes/header/script.js"></script>
</body>
</html>