<?php
    $baseUrl = 'localhost/LLYC'
?>

<header id="header">
    <div id="nav-desk-container" class="d-none d-xl-block">
        <nav id="secondary-nav">
            <div id="secondary-nav-container" class="d-flex align-items-center">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block"></div>
                <div id="secondary-nav-items" class="d-flex">
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/explore.png" alt="">
                            <a class="secondary-nav-item font-bold" href="">
                                EXPLORE O CONTEÚDO
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="../assets/images/header/search.png" alt="">
                            <a class="secondary-nav-item font-bold" href="./busqueinformacao/index.php">
                                BUSQUE INFORMAÇÃO
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="../assets/images/header/favorites.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                MAIS ACESSADOS
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="../assets/images/header/services.png" alt="">
                            <a class="secondary-nav-item font-bold" href="./servicos/index.php">
                                SERVIÇOS
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/profile.png" alt="">
                            <?php
                                include_once "../includes/components/nav-item/nav-item.php";
                                showNavItem("SELECIONE O SEU PERFIL", 
                                    [
                                        "Tenho Alzheimer", 
                                        "Sou familiar", 
                                        "Sou médico", 
                                        "Sou gestor de saúde", 
                                        "Sou político", 
                                        "Sou curioso"],
                                    'regular',
                                    'secondary', '#');
                            ?>
                        </div>
                        
                    </div>
            </div>
        </nav>
        <nav id="principal-nav">
            <div id="principal-nav-container" class="d-flex">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block">
                    <img id="logo" src="../assets/images/header/logo.png" alt="logo">
                </div>

                <div id="principal-nav-items" class="d-flex align-items-end justify-content-end">
                    <?php 
                        include_once '../includes/components/nav-item/nav-item.php';
                        showNavItem("QUEM SOMOS", ["Manifesto", "Sobre a Biogen", "Contato"], 'short', 'primary', './manifesto/index.php');
                    ?>
                    <?php 
                        include_once '../includes/components/nav-item/nav-item.php';
                        showNavItem("O QUE É ALZHEIMER", 
                            [
                                "O que é doença de Alzheimer",
                                "A história do Alzheimer", 
                                "Fisiopatologia", 
                                "Envelhecimento saudável x doença de Alzheimer",
                                "Demência e doença de Alzheimer",
                                "Fatores de risco",
                                "Prevenção",
                                "Fatos e números",
                                "O que acontece com o cérebro"
                            ], 'short', 'primary', './oqueealzheimer/index.php');
                    ?>
                    <?php 
                        include_once '../includes/components/nav-item/nav-item.php';
                        showNavItem("SINAIS, SINTOMAS E DIAGNÓSTICO", 
                            [
                                "Sinais e sintomas",
                                "Comprometimento cognitivo leve",
                                "Diagnóstico",
                                "Diagnóstico precoce",
                                "Diagnóstico diferencial",
                                "Biomarcadores",
                                "Testes funcionais e cognitivos",
                                "Estágios da doença de Alzheimer",
                                "CCL x DA"
                            ], 'regular', 'primary', './sinaisESintomas/index.php');
                    ?>
                    <?php 
                        include_once '../includes/components/nav-item/nav-item.php'; 
                        showNavItem("CUIDANDO DO PACIENTE", [], 'regular', 'primary', '#'); ?>
                    
                    <?php 
                        include_once '../includes/components/nav-item/nav-item.php'; 
                        showNavItem("CUIDANDO DE QUEM CUIDA", [], 'regular', 'primary', '#'); ?>

                    <?php 
                        include_once '../includes/components/nav-item/nav-item.php'; 
                        showNavItem("CIDADANIA E POLÍTICAS PÚBLICAS", [], 'regular', 'primary', './cidadania/index.php'); ?>
                        
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex d-xl-none align-items-center justify-content-center" id="nav-mobile-container">
        <img id="logo" src="./assets/images/header/logo-mobile.png" alt="logo">
        <i id="nav-mobile-icon" onclick="toggleMobileMenu()" class="bi bi-list">ICON</i>
    </div>

    <nav id="nav-mobile">
        <div id="nav-mobile-icon-container">
            <img id="nav-mobile-close-icon" onclick="toggleMobileMenu()" src="./assets/images/header/close-menu-icon.svg" alt="">
        </div>
        <ul id="nav-mobile-items">
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">QUEM SOMOS</li>
                <ul class="nav-mobile-item-subcontainer">
                    
                </ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item" onclick="toggleMobileSubMenu(this)">O QUE É ALZHEIMER</li>
                <ul class="nav-mobile-item-subcontainer">
                    <li class="nav-mobile-item-subcontainer-item">O que é doença de Alzheimer</li>
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
                <li class="nav-mobile-item">SINAIS, SINTOMAS E DIAGNÓSTICO</li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">CUIDANDO DO PACIENTE</li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">CUIDANDO DE QUEM CUIDA</li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">CIDADANIA E POLÍTICAS PÚBLICAS</li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
        </ul>

        <div id="nav-perfil-options" onclick="togglePerfilMenu()">
            <img class="nav-perfil-options-img" src="./assets/images/header/perfil.png" alt="">
            <span class="nav-perfil-options-txt">SELECIONE O SEU PERFIL</span>
        </div>
    </nav>

    <nav id="nav-perfil">
        <div id="nav-perfil-icon-container">
            <img id="nav-perfil-close-icon" onclick="togglePerfilMenu()" src="./assets/images/header/close-perfil-icon.png" alt="">
        </div>

        <img id="nav-perfil-logo" src="./assets/images/header/logo-mobile.png" alt="logo">

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