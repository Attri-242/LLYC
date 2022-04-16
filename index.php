<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/home/style.css">
    <title>Repensar o alzheimer</title>
</head>
<body>

<?php
    include './includes/header/header.php';
?>

<div class="cookies">
    <img src="./assets/images/home/close-cookies.png" onclick="closeCookies()" class="cookies-close">
    <div class="cookies-container">
        <div class="container d-flex justify-content-center">
            <div class="cookie-card">
                <div class="d-flex">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col-12 col-md-6 col-xl-6">
                                <h1 class="cookies-title">NOSSO SITE UTILIZA COOKIES</h1>
                                <p class="cookies-info">
                                    Nosso site utiliza cookies e tecnologias semelhantes para personalizar sua experiência 
                                    e melhor compreender como nosso site é utilizado por você e outros visitantes. 
                                    Acesse a nossa Política de Privacidade para obter mais informações sobre nossas práticas 
                                    de coleta e tratamento de dados. Ao clicar em "Concordar e acessar o site", você concorda 
                                    com o uso de cookies, conforme indicado Preferências de Cookies.
                                </p>
    
                                <p class="cookies-info-second">
                                    Queremos ser transparentes sobre os dados que nós e nossos parceiros coletamos e como os utilizamos, 
                                    para que você possa ter maior controle sobre seus dados pessoais. 
                                    Para obter mais informações, consulte a nossa política de privacidade.
                                    Gostaríamos de utilizar cookies dos seguintes parceiros para melhorar a sua experiência geral de 
                                    navegação na Web. Os cookies e tecnologias semelhantes são utilizados para conectar você às suas redes 
                                    sociais e adaptar a publicidade aos seus interesses. Você pode optar por não participar dessa 
                                    coleta de informações desmarcando as caixas ao lado.
                                </p>
    
                                <div class="cookie-buttons d-none d-md-flex">
                                    <button class="cookie-button primary" onclick="closeCookies();">Declinar</button>
                                    <button class="cookie-button secondary" onclick="closeCookies();">Aceitar</button>
                                </div>
                            </div>
    
                            <div class="col-12 col-md-6 col-xl-5">
                                <form class="cookies-choices d-flex flex-column">
                                    <label class="cookie-label">
                                        <input class="cookie-input" type="radio" name="pesquisa">
                                        <span class="cookie-input-span">Provedor de pesquisa</span>
                                    </label>
    
                                    <label class="cookie-label">
                                        <input class="cookie-input" type="radio" name="otimizador">
                                        <span class="cookie-input-span">Otimizador</span>
                                    </label>
    
                                    <label class="cookie-label d-flex flex-column">
                                        <input class="cookie-input" type="radio" name="personalizacao">
                                        <span class="cookie-input-span">Personalização</span>
                                        <span class="cookie-input-span-auxiliar">
                                            Estabelecemos parcerias com estes fornecedores para garantir uma experiência 
                                            de utilizador adaptada especificamente a si, com base nos seus hábitos de navegação.
                                        </span>
                                    </label>
    
                                    <label class="cookie-label d-flex flex-column">
                                        <input class="cookie-input cookie-input-required" checked type="radio" name="agencia">
                                        <span class="cookie-input-span">Agência</span>
                                        <span class="cookie-input-span-auxiliar mt-2">Exigido</span>
                                    </label>
                                </form>

                                <div class="cookie-buttons d-flex d-md-none">
                                    <button class="cookie-button primary" onclick="closeCookies();">Declinar</button>
                                    <button class="cookie-button secondary" onclick="closeCookies();">Aceitar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="home-main">

    <section class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-3 cards">
                    <div class="w-100 card-info">
                        <a class="card-info-link-container" href="#">
                            <img class="card-info-image w-100" src="./assets/images/home/diagnostico.png" alt="Diagnóstico">
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
                            <img class="card-info-image w-100" src="./assets/images/home/atividades.png" alt="Diagnóstico">
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
                            <img class="card-info-image w-100" src="./assets/images/home/alimentacao.png" alt="Diagnóstico">
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
                            <img class="card-info-image w-100" src="./assets/images/home/alimentacao.png" alt="Diagnóstico">
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
                <div class="col-12 col-md-4 col-xl-6 cards">
                    <div class="w-100 card-info">
                        <a class="card-info-link-container" href="#">
                            <img class="card-info-image w-100" src="./assets/images/home/corpo-ativo.png" alt="Diagnóstico">
                            <span class="card-info-text">
                                Mantenha a mente e o corpo ativos após se aposentar
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
                            <img class="card-info-image w-100" src="./assets/images/home/exercicios.png" alt="Diagnóstico">
                            <span class="card-info-text">
                                Se exercitar desde cedo ajuda a prevenir e retardar o desenvolvimento de demências
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
                            <img class="card-info-image w-100" src="./assets/images/home/relacionamentos.png" alt="Relacionamentos">
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
                                <img class="card-info-test-img" src="./assets/images/home/test-arrow.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-6 cards">
                    <div class="w-100 card-info">
                        <a class="card-info-link-container" href="#">
                            <img class="card-info-image w-100" src="./assets/images/home/atividades.png" alt="Atividades">
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

            <div class="row mt-md-5">
                <div class="col-12 col-md-4 col-xl-3 cards">
                    <div class="w-100 card-info">
                        <a class="card-info-link-container" href="#">
                            <img class="card-info-image w-100" src="./assets/images/home/alimentacao.png" alt="Diagnóstico">
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
                <div class="col-12 col-md-4 col-xl-6 cards">
                    <div class="w-100 card-info">
                        <a class="card-info-link-container" href="#">
                            <img class="card-info-image w-100" src="./assets/images/home/corpo-ativo.png" alt="Diagnóstico">
                            <span class="card-info-text">
                                Mantenha a mente e o corpo ativos após se aposentar
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
                            <img class="card-info-image w-100" src="./assets/images/home/exercicios.png" alt="Diagnóstico">
                            <span class="card-info-text">
                                Se exercitar desde cedo ajuda a prevenir e retardar o desenvolvimento de demências
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
</main>


<?php
    include './includes/footer/footer.php'; 
?>
<script src="./assets/js/components/nav-item/script.js"></script>
<script src="./assets/js/includes/header/script.js"></script>
<script src="./assets/js/home/script.js"></script>
</body>
</html>