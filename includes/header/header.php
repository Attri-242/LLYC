
<header id="header">
    <div id="nav-desk-container" class="d-none d-xl-block">
        <nav id="secondary-nav">
            <div id="secondary-nav-container" class="d-flex align-items-center">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block">
                    
                </div>
                <div id="secondary-nav-items" class="d-flex">
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/explore.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                EXPLORE O CONTEÚDO
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/search.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                BUSQUE INFORMAÇÃO
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/favorites.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                MAIS ACESSADOS
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/services.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                SERVIÇOS
                            </a>
                        </div>
                        <div id="secondary-nav-item-container">
                            <img src="./assets/images/header/profile.png" alt="">
                            <a class="secondary-nav-item font-bold" href="#">
                                SELECIONE O SEU PERFIL
                            </a>
                        </div>
                        
                    </div>
            </div>
        </nav>
        <nav id="principal-nav">
            <div id="principal-nav-container" class="d-flex">
                <div id="logo-container" class="d-flex justify-content-center d-none d-xl-block">
                    <img id="logo" src="./assets/images/header/logo.png" alt="logo">
                </div>

                <div id="principal-nav-items" class="d-flex align-items-end justify-content-end">
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php';
                        showNavItem("QUEM SOMOS", ["Manifesto", "Sobre a Biogen", "Contato"], 'short');
                    ?>
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php';
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
                            ], 'short');
                    ?>
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php';
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
                            ], 'regular');
                    ?>
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php'; 
                        showNavItem("CUIDANDO DO PACIENTE", [], 'regular'); ?>
                    
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php'; 
                        showNavItem("CUIDANDO DE QUEM CUIDA", [], 'regular'); ?>

                    <?php 
                        include_once './includes/components/nav-item/nav-item.php'; 
                        showNavItem("CIDADANIA E POLÍTICAS PÚBLICAS", [], 'regular'); ?>
                        
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex d-xl-none align-items-center justify-content-center" id="nav-mobile-container">
        <img id="logo" src="./assets/images/header/logo-mobile.png" alt="logo">
        <i class="bi bi-list"></i>

    </div>
</header>