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
                            <div class="d-flex flex-row flex-wrap 
                                    align-items-center justify-content-center" style="max-width: 9rem;">
                            
                                <div class="col-2">
                                    <div id="secondary-nav-item-container">
                                        <img src="<?= $baseUrl ?>/assets/images/header/explore.png" alt="">
                                        <?php 
                                            include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                            showNavItem("EXPLORE O CONTEÚDO", [], 'regular', 'primary', "#", 'font-regular'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row flex-wrap 
                                    align-items-center justify-content-center" style="max-width: 9rem;">
                            
                                <div class="col-2">
                                    <div id="secondary-nav-item-container">
                                        <img src="<?= $baseUrl ?>/assets/images/header/search.png" alt="">
                                        <?php 
                                            include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                            showNavItem("BUSQUE INFORMAÇÃO", [], 'regular', 'primary',  $baseUrl . '/busqueinformacao/index.php', 'font-regular'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row flex-wrap 
                                    align-items-center justify-content-center" style="max-width: 9rem;">
                            
                                <div class="col-2">
                                    <div id="secondary-nav-item-container">
                                        <img src="<?= $baseUrl ?>/assets/images/header/favorites.png" alt="">
    
                                        <?php 
                                            include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                            showNavItem("MAIS ACESSADOS", [], 'regular', 'primary', '#', 'font-regular'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row flex-wrap 
                                    align-items-center justify-content-center" style="max-width: 9rem;">
                            
                                <div class="col-2">
                                    <div id="secondary-nav-item-container">
                                        <img src="<?= $baseUrl ?>/assets/images/header/services.png" alt="">
                                        <?php 
                                            include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                            showNavItem("SERVIÇOS", [], 'regular', 'primary',  $baseUrl . '/servicos/index.php', 'font-regular'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row flex-wrap 
                                    align-items-center justify-content-center" style="max-width: 9rem;">
                            
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
                                                'secondary', '#', 'font-regular');
                                        ?>
                                    </div>
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
                    <?php 
                            $current_url = $baseUrl . "/index.php";
                    ?>
                    <a href="<?= $current_url ?>">
                        <img id="logo" src="<?= $baseUrl ?>/assets/images/header/logo.png" alt="logo">
                    </a>
                </div>

                <div id="principal-nav-items" class="d-flex align-items-end justify-content-end">
                    <div class="container p-0 m-0">
                        <div class="row d-flex justify-content-end">
                            <div class="d-flex flex-row flex-wrap 
                                align-items-center justify-content-center nav-item-container" style="max-width: 6rem;">
                                <div class="col-1">
                                    <?php 
                                        include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php';
                                        showNavItem("QUEM SOMOS", 
                                            [
                                                ["Manifesto", $baseUrl . "/manifesto/index.php"], 
                                                ["Sobre a Biogen", '#'], 
                                                ["Contato", '#']
                                            ], 'short', 'primary', '#', 'font-bold');
                                    ?>
                                </div>
                            </div>

                            <div class="d-flex flex-row flex-wrap 
                                align-items-center justify-content-center" style="max-width: 6rem;">
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
                                        ], 'short', 'primary', '#', 'font-bold');
                                    ?>
                                </div>
                            </div>
                            


                            <div class="d-flex flex-row flex-wrap 
                                align-items-center justify-content-center" style="max-width: 10.7rem;">
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
                                            ], 'regular', 'primary', '#', 'font-bold');
                                    ?>
                                </div>
                            </div>

                            
                            <div class="d-flex flex-row flex-wrap 
                                align-items-center justify-content-center" style="max-width: 4.5rem;">
                                <div class="col-2">
                                    <?php 
                                        include_once $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                        showNavItem("CUIDANDO DO PACIENTE", [], 'medium', 'primary', '#', 'font-bold'); ?>
                                </div>
                            </div>

                            
                            <div class="d-flex flex-row flex-wrap 
                                align-items-center justify-content-center" style="max-width: 9.8rem;">
                                <div class="col-2">
                                    <?php 
                                        include_once  $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                        showNavItem("CUIDANDO DE QUEM CUIDA", [], 'medium', 'primary', $baseUrl . "/historia/index.php", 'font-bold'); ?>
                                </div>
                            </div>

                            
                            <div class="d-flex flex-row flex-wrap 
                                align-items-center justify-content-center" style="max-width: 8rem;">
                                <div class="col-2">
                                    <?php
                                        include_once $_SERVER['DOCUMENT_ROOT'] . '/LLYC/includes/components/nav-item/nav-item.php'; 
                                        showNavItem("CIDADANIA E POLÍTICAS PÚBLICAS", [], 'regular', 'primary', $baseUrl . '/cidadania/index.php', 'font-bold'); ?>
                                </div>
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
                        <?php 
                            $current_url = $baseUrl . "/manifesto/index.php";
                        ?>
                        <a href="<?= $current_url ?>">
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
                        <?php 
                            $current_url = $baseUrl . "/oqueealzheimer/index.php";
                        ?>
                        <a href="<?= $current_url ?>">
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
                        <?php 
                            $current_url = $baseUrl . "/sinaisESintomas/index.php";
                        ?>
                        <a href="<?= $current_url ?>">    
                            Sinais e sintomas
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">Comprometimento cognitivo leve</li>
                    <li class="nav-mobile-item-subcontainer-item">
                        <?php 
                            $current_url = $baseUrl . "/diagnostico/index.php";
                        ?>
                        <a href="<?= $current_url ?>">    
                            Diagnóstico
                        </a>
                    </li>
                    <li class="nav-mobile-item-subcontainer-item">Diagnóstico precoce</li>
                    <li class="nav-mobile-item-subcontainer-item">Diagnóstico diferencial</li>
                    <li class="nav-mobile-item-subcontainer-item">
                        <?php 
                            $current_url = $baseUrl . "/estagios/index.php";
                        ?>
                        <a href="<?= $current_url ?>">    
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
                    <?php 
                        $current_url = $baseUrl . "/historia/index.php";
                    ?>    
                    <a href="<?= $current_url ?>">
                        CUIDANDO DE QUEM CUIDA
                    </a>
                </li>
                <ul class="nav-mobile-item-subcontainer"></ul>
            </div>
            <div class="nav-mobile-item-container">
                <li class="nav-mobile-item">
                    <?php 
                        $current_url = $baseUrl . "/cidadania/index.php";
                    ?>             
                    <a href="<?= $current_url ?>">
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