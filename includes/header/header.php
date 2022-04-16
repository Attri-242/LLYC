<?php
    $subdomain = "/LLYC";
    $baseUrl   = ( ! empty( $_SERVER['HTTPS'] ) ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . ( ! empty( $subdomain ) ? $subdomain : "" );
?>

<header id="header">
    <div id="nav-desk-container" class="d-none d-xl-block">
        <nav id="secondary-nav">
            <div id="secondary-nav-container" class="d-flex align-items-center">
                <div id="secondary-nav-items" class="d-flex">
                    <div class="container">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-2">
                                <div id="secondary-nav-item-container">
                                    <img src="<?= $baseUrl ?>/assets/images/header/explore.png" alt="">
                                    <a class="secondary-nav-item font-bold" href="">
                                        EXPLORE O CONTEÚDO
                                    </a>
                                </div>
                            </div>

                            <div class="col-2">
                                <div id="secondary-nav-item-container">
                                    <img src="<?= $baseUrl ?>/assets/images/header/search.png" alt="">
                                    <a class="secondary-nav-item font-bold" href="<?= $baseUrl ?>/busqueinformacao/index.php">
                                        BUSQUE INFORMAÇÃO
                                    </a>
                                </div>
                            </div>

                            <div class="col-2">
                                <div id="secondary-nav-item-container">
                                    <img src="<?= $baseUrl ?>/assets/images/header/favorites.png" alt="">
                                    <a class="secondary-nav-item font-bold" href="#">
                                        MAIS ACESSADOS
                                    </a>
                                </div>
                            </div>

                            <div class="col-2">
                                <div id="secondary-nav-item-container">
                                    <img src="<?= $baseUrl ?>/assets/images/header/services.png" alt="">
                                    <a class="secondary-nav-item font-bold" href="<?= $baseUrl ?>/servicos/index.php">
                                        SERVIÇOS
                                    </a>
                                </div>
                            </div>

                            <div class="col-2">
                                <div id="secondary-nav-item-container">
                                    <img src="<?= $baseUrl ?>/assets/images/header/profile.png" alt="">
                                    <?php
                                        include_once  $_SERVER['DOCUMENT_ROOT'] . "/LLYC/includes/components/nav-item/nav-item.php";
                                        showNavItem("SELECIONE O SEU PERFIL", 
                                            [
                                                ["Tenho Alzheimer", "#"], 
                                                ["Sou familiar", "#"], 
                                                ["Sou médico", "#"], 
                                                ["Sou gestor de saúde", "#"], 
                                                ["Sou político", "#"], 
                                                ["Sou curioso", "#"]
                                            ],
                                            'regular',
                                            'secondary', '#');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </nav>
        <nav id="principal-nav">
            <div id="principal-nav-container" class="d-flex">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block">
                    <a href="<?= $baseUrl ?>. /index.php">
                        <img id="logo" src="<?= $baseUrl ?>/assets/images/header/logo.png" alt="logo">
                    </a>
                </div>

                <div id="principal-nav-items" class="d-flex align-items-end justify-content-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-2">
                                <?php 
                                    include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php';
                                    showNavItem("QUEM SOMOS", 
                                        [
                                            ["Manifesto", $baseUrl . "/manifesto/index.php"], 
                                            ["Sobre a Biogen", '#'], 
                                            ["Contato", '#']
                                        ], 'short', 'primary', '#');
                                ?>
                            </div>

                            <div class="col-2">
                                <?php 
                                    include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php';
                                    showNavItem("O QUE É ALZHEIMER", 
                                        [
                                            ["O que é doença de Alzheimer", $baseUrl . "/oqueealzheimer/index.php"],
                                            ["A história do Alzheimer", "#"], 
                                            ["Fisiopatologia", "#"],
                                            ["Envelhecimento saudável x doença de Alzheimer", "#"],
                                            ["Demência e doença de Alzheimer", "#"],
                                            ["Fatores de risco", "#"],
                                            ["Prevenção", "#"],
                                            ["Fatos e números", "#"],
                                            ["O que acontece com o cérebro", "#"]
                                        ], 'short', 'primary', '#');
                                ?>
                            </div>

                            <div class="col-2">
                                <?php 
                                    include_once $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php';
                                    showNavItem("SINAIS, SINTOMAS E DIAGNÓSTICO", 
                                        [
                                            ["Sinais e sintomas", $baseUrl . "/sinaisESintomas/index.php"],
                                            ["Comprometimento cognitivo leve", "#"],
                                            ["Diagnóstico", $baseUrl . "/diagnostico/index.php"],
                                            ["Diagnóstico precoce", "#"],
                                            ["Diagnóstico diferencial", "#"],
                                            ["Biomarcadores", $baseUrl . "/estagios/index.php"],
                                            ["Testes funcionais e cognitivos", "#"],
                                            ["Estágios da doença de Alzheimer", "#"],
                                            ["CCL x DA", "#"]
                                        ], 'regular', 'primary', '#');
                                ?>
                            </div>

                            <div class="col-2">
                                <?php 
                                    include_once $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                    showNavItem("CUIDANDO DO PACIENTE", [], 'regular', 'primary', '#'); ?>
                            </div>

                            <div class="col-2">
                                <?php 
                                    include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                    showNavItem("CUIDANDO DE QUEM CUIDA", [], 'regular', 'primary', '#'); ?>
                            </div>

                            <div class="col-2">
                                <?php
                                    include_once $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                    showNavItem("CIDADANIA E POLÍTICAS PÚBLICAS", [], 'regular', 'primary', $baseUrl . '/cidadania/index.php'); ?>
                            </div>
                        </div>
                    </div>

                    

                        
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex d-xl-none align-items-center justify-content-center" id="nav-mobile-container">
        <a href="<?= $baseUrl ?>. /index.php">
            <img id="logo" src="<?= $baseUrl ?>/assets/images/header/logo-mobile.png" alt="logo">
        </a>
        <i id="nav-mobile-icon" onclick="toggleMobileMenu()" class="bi bi-list">
            <img src="<?= $baseUrl ?>/assets/images/header/menu-hamburguer.png">
        </i>
    </div>

    <nav id="nav-mobile">
        <div id="nav-mobile-icon-container">
            <img id="nav-mobile-close-icon" onclick="toggleMobileMenu()" src="<?= $baseUrl ?>/assets/images/header/close-menu-icon.svg" alt="">
        </div>
        <ul id="nav-mobile-items">
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item" onclick="toggleMobileSubMenu(this)">QUEM SOMOS</li>
                <ul class="nav-mobile-item-subcontainer">
                    <li class="nav-mobile-item-subcontainer-item">
                        <a href="<?= $baseUrl ?>. /manifesto/index.php">
                            Manifesto
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">Sobre a Biogen</li>
                    <li class="nav-mobile-item-subcontainer-item">Contato</li>
                </ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item" onclick="toggleMobileSubMenu(this)">O QUE É ALZHEIMER</li>
                <ul class="nav-mobile-item-subcontainer">
                    <li class="nav-mobile-item-subcontainer-item">
                        <a href="<?= $baseUrl ?>. /oqueealzheimer/index.php">
                            O que é doença de Alzheimer
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">A história do Alzheimer</li>
                    <li class="nav-mobile-item-subcontainer-item">Fisiopatologia</li>
                    <li class="nav-mobile-item-subcontainer-item">Envelhecimento saudável x doença de Alzheimer</li>
                    <li class="nav-mobile-item-subcontainer-item">Demência e doença de Alzheimer</li>
                    <li class="nav-mobile-item-subcontainer-item">Fatores de risco</li>
                    <li class="nav-mobile-item-subcontainer-item">Prevenção</li>
                    <li class="nav-mobile-item-subcontainer-item">Fatos e números</li>
                    <li class="nav-mobile-item-subcontainer-item">O que acontece com o cérebro</li>
                </ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item" onclick="toggleMobileSubMenu(this)">SINAIS, SINTOMAS E DIAGNÓSTICO</li>
                <ul class="nav-mobile-item-subcontainer">
                    <li class="nav-mobile-item-subcontainer-item">
                        <a href="<?= $baseUrl ?>. /sinaisESintomas/index.php">    
                            Sinais e sintomas
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">Comprometimento cognitivo leve</li>
                    <li class="nav-mobile-item-subcontainer-item">
                        <a href="<?= $baseUrl ?>. /diagnostico/index.php">    
                            Diagnóstico
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">Diagnóstico precoce</li>
                    <li class="nav-mobile-item-subcontainer-item">Diagnóstico diferencial</li>
                    <li class="nav-mobile-item-subcontainer-item">
                        <a href="<?= $baseUrl ?>. /estagios/index.php">    
                            Biomarcadores
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">Testes funcionais e cognitivos</li>
                    <li class="nav-mobile-item-subcontainer-item">CCL x DA</li>
                </ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">
                    <a href="#">
                        CUIDANDO DO PACIENTE
                    </a>
                </li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">
                    <a href="#">
                        CUIDANDO DE QUEM CUIDA
                    </a>
                </li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">                    
                    <a href="<?= $baseUrl ?>. /cidadania/index.php">
                        CIDADANIA E POLÍTICAS PÚBLICAS
                    </a>
                </li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
        </ul>

        <div id="nav-perfil-options" onclick="togglePerfilMenu()">
            <img class="nav-perfil-options-img" src="<?= $baseUrl ?>/assets/images/header/perfil.png" alt="">
            <span class="nav-perfil-options-txt">SELECIONE O SEU PERFIL</span>
        </div>
    </nav>

    <nav id="nav-perfil">
        <div id="nav-perfil-icon-container">
            <img id="nav-perfil-close-icon" onclick="togglePerfilMenu()" src="<?= $baseUrl ?>/assets/images/header/close-perfil-icon.png" alt="">
        </div>

        <img id="nav-perfil-logo" src="<?= $baseUrl ?>/assets/images/header/logo-mobile.png" alt="logo">

        <div id="nav-perfil-items-container">
            <h2 id="nav-perfil-title">SELECIONE O SEU PERFIL</h2>
            <ul id="nav-perfil-items">
                <div class="nav-perfil-item-container">
                    <li class="nav-perfil-item">Tenho Alzheimer</li>
                    <ul class="nav-perfil-item-subcontainer">
                        
                    </ul>
                </div>
                <div class="nav-perfil-item-container">
                    <li class="nav-perfil-item">Sou familiar</li>
                </div>
                <div class="nav-perfil-item-container">
                    <li class="nav-perfil-item">Sou médico</li>
                    <ul class="nav-perfil-item-subcontainer"></ul>
                </div>
                <div class="nav-perfil-item-container">
                    <li class="nav-perfil-item">Sou gestor de saúde</li>
                    <ul class="nav-perfil-item-subcontainer"></ul>
                </div>
                <div class="nav-perfil-item-container">
                    <li class="nav-perfil-item">Sou político</li>
                    <ul class="nav-perfil-item-subcontainer"></ul>
                </div>
                <div class="nav-perfil-item-container">
                    <li class="nav-perfil-item">Sou curioso</li>
                    <ul class="nav-perfil-item-subcontainer"></ul>
                </div>
            </ul>
        </div>
    </nav>
</header>