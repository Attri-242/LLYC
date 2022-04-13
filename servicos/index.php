<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/servicos/style.css">
    <title>Serviços</title>
</head>
<body>

<?php
    include "../includes/header/header.php";
?>

<main id="servicos-main">

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
                            <a class="breadcrumb-item-text"href="#">Serviços</a>
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
                    <h1 id="title-text text-center" class="col-12">Serviços</h1>
                </div>
            </div>
        </section>
    </div>

    <section class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="news-container">

                        <div class="icon-text-container">
                            <div class="container p-0">
                                <div class="row no-gutters justify-content-start icon-text-container-row">
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="<?= $baseUrl ?>/associacoes/index.php" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/associacao.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                                                Encontre uma associação
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/associacao.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                                                Encontre um centro de referência
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/associacao.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                                                Encontre um especialista
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters justify-content-start icon-text-container-row">
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/grupo.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                                                Encontre grupos de apoio
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/patients.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller text-center">
                                                Patients like me
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/newsletter.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                                                Assine a nossa newsletter
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters justify-content-start icon-text-container-row">
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/exercicios.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--little text-center text-center">
                                                Exercícios cognitivos
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-3 icon-text-item d-block d-md-flex">
                                        <a href="" class="icon-text-item">
                                            <img class="icon-text-image" src="<?= $baseUrl ?>/assets/images/servicos/ubs.png" alt="">
                                            <p class="icon-text-item-text icon-text-item-text-mt-bigger icon-text-item-text--smaller text-center">
                                                Encontre uma UBS
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>

 
</main>

<?php
    include '../includes/footer/footer.php'; 
?>
<script src="../assets/js/components/nav-item/script.js"></script>
<script src="../assets/js/includes/header/script.js"></script>
</body>
</html>