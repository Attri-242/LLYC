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

<?php
    include '../includes/footer/footer.php'; 
?>
<script src="../assets/js/components/nav-item/script.js"></script>
<script src="../assets/js/includes/header/script.js"></script>
</body>
</html>