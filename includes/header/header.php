
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
                    <!-- <a class="principal-nav-item principal-nav-item--short font-extra-bold" href="#">QUEM SOMOS</a> -->
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php';
                        showNavItem("QUEM SOMOS");
                    ?>
                    <!-- <a class="principal-nav-item principal-nav-item--short font-extra-bold" href="#">O QUE É ALZHEIMER</a> -->
                    <?php 
                        include_once './includes/components/nav-item/nav-item.php';
                        showNavItem("O QUE É ALZHEIMER");
                    ?>
                    <a class="principal-nav-item font-extra-bold" href="#">SINAIS, SINTOMAS E DIAGNÓSTICO</a>
                    <a class="principal-nav-item font-extra-bold" href="#">CUIDANDO DO PACIANTE</a>
                    <a class="principal-nav-item font-extra-bold" href="#">CUIDANDO DE QUEM CUIDA</a>
                    <a class="principal-nav-item font-extra-bold" href="#">CIDADANIA E POLÍTICAS PÚBLICAS</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex d-xl-none align-items-center justify-content-center" id="nav-mobile-container">
        <img id="logo" src="./assets/images/header/logo-mobile.png" alt="logo">
        <i class="bi bi-list"></i>

    </div>
</header>