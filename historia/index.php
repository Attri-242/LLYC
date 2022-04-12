<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/historia/style.css">
    <title>Histórias</title>
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
            <a class="breadcrumb-item-text"href="#">Está na hora de cuidar</a>
            <img class="breadcrumb-item-arrow" src="../assets/images/home/test-arrow.png" alt="">
        </div>
        <div class="historia-breadcrumb-item">
            <a class="breadcrumb-item-text"href="#">Está na hora de conhecer histórias da doença de Alzheimer</a>
        </div>
    </div>

    <div id="title">
        <h1 id="title-text">Está na hora de conhecer histórias da doença de Alzheimer</h1>
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
            Uma rede de apoio sólida é primordial para todos os envolvidos com a doença de Alzheimer
            (DA). As pessoas dedicadas à atenção da pessoa com DA podem encontrar-se constantemente
            sobrecarregadas, confusas com as adaptações necessárias e até com a saúde mental prejudicada. 
            Por isso, encontrar suporte pode ajudar a tornar essa vivência mais plena e fluida.
        </p>

        <h2 class="title-subtitle">Dentre os benefícios, estão</h2>

        <ul id="benefits-list">
        
            <li class="benefits-list-item">
                Trocar experiências sobre os cuidados necessários na DA;
            </li>
            <li class="benefits-list-item">
                Aprender sobre como controlar situações de crise;
            </li>
            <li class="benefits-list-item">
                Compartilhar inseguranças e medos acerca do avanço da doença;
            </li>
            <li class="benefits-list-item">
                Fortalecer-se para cuidar do paciente;
            </li>
            <li class="benefits-list-item">
                Encontrar mais informações sobre doença de Alzheimer.
            </li>
        </ul>

        <p class="news-info">
            Associações de pacientes são ONGs que podem ajudar nesse processo de aprendizagem e
            cuidado da doença de Alzheimer.
        </p>

        <button class="news-info-button">
            Ache uma ONG perto de você
        </button>
        
        <h2 class="title-subtitle">Conheça as histórias</h2>

        <p class="news-info">
            A filha de Maria Cecilia é quem está ao lado dela no cuidado da doença de Alzheimer.
        </p>

        <img class="news-container-image" src="../assets/images/historia/historia.png" alt="">

        <p class="news-info">
            A importância do diagnóstico precoce é evidente na história de Maria
            Cecilia, cuja doença de Alzheimer foi identificada aos 64 anos. De forma
            bem-humorada, ela conta como foi quebrar o estigma da DA – tanto para
            si, quanto para amigos e família.Thayná, sua filha, foi peça-chave para
            o diagnóstico e agora é quem está ao seu lado no dia a dia com a doença.
            Ela fala sobre como a rede de apoio familiar é fundamental para o cuidado da mãe hoje e será
            ainda mais quando a doença estiver em estágios nos quais a dependência é maior.
        </p>

    </div>
 
</main>

<?php
    include '../includes/footer/footer.php'; 
?>
</body>
</html>