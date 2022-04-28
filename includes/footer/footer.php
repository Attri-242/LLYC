<?php
    $subdomain = "/LLYC";
    $baseUrl   = ( ! empty( $_SERVER['HTTPS'] ) ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . ( ! empty( $subdomain ) ? $subdomain : "" );
?>

<footer id="footer-desk">
    <nav id="primary-nav" class="d-flex flex-column">
        <?php 
            $current_url = $baseUrl . "/manifesto/index.php";
        ?>
        <a class="primary-nav-item" href="<?= $current_url ?>">QUEM SOMOS</a>
        <?php 
            $current_url = $baseUrl . "/oqueealzheimer/index.php";
        ?>
        <a class="primary-nav-item" href="<?= $current_url ?>">O QUE É ALZHEIMER</a>
        <?php 
            $current_url = $baseUrl . "/sinaisESintomas/index.php";
        ?>
        <a class="primary-nav-item" href="<?= $current_url ?>">SINAIS, SINTOMAS E DIAGNÓSTICO</a>
        <a class="primary-nav-item" href="#">CUIDANDO DO PACIANTE</a>
        <?php 
            $current_url = $baseUrl . "/cuidandodequemcuida/index.php";
        ?>
        <a class="primary-nav-item" href="<?= $current_url ?>">CUIDANDO DE QUEM CUIDA</a>
        <?php 
            $current_url = $baseUrl . "/cidadania/index.php";
        ?>
        <a class="primary-nav-item" href="<?= $current_url ?>">CIDADANIA</a>
        <a class="primary-nav-item" href="#">ENCONTRE APOIO</a>
    </nav>
    <nav id="secondary-nav" class="d-flex flex-column">
        <a class="secondary-nav-item" href="#">EXPLORE O CONTEÚDO</a>
        <?php 
            $current_url = $baseUrl . "/busqueinformacao/index.php";
        ?>
        <a class="secondary-nav-item" href="<?= $current_url ?>">BUSQUE INFORMAÇÃO</a>
        <a class="secondary-nav-item" href="#">SEUS FAVORITOS</a>
        <?php 
            $current_url = $baseUrl . "/servicos/index.php";
        ?>
        <a class="secondary-nav-item" href="<?= $current_url ?>">SERVIÇOS</a>
    </nav>
    <div id="footer-info" class="d-flex flex-column align-items-end">
        <img class="footer-logo" src="<?= $baseUrl ?>/assets/images/footer/logo-footer.png" alt="Biogen">
        <span class="footer-info-text">
            AZL-BR-0221 – Dezembro 2021 – As informações contidas neste website destinam-se apenas a
            dar acesso a esclarecimentos sobre tópicos de saúde relacionados com a doença de Alzheimer,
            mas estas informações não devem substituir o aconselhamento do seu médico ou de outro
            profissional de saúde. Em caso de dúvida, consulte o seu médico. “(Re)pensar Alzheimer” é um
            website destinado ao Brasil que foi produzido pela Biogen, desenvolvido de acordo com as
            normas legais e da indústria no sentido de fornecer informações ao público geral sobre tópicos
            de saúde relacionados à doença de Alzheimer.
        </span>
    </div>
</footer>

<footer id="footer-mobile">
    <nav id="nav-mobile" class="d-flex justify-content-between">
        <a class="nav-mobile-item">
            <img class="nav-mobile-item-icon" src="<?= $baseUrl ?>/assets/images/header/explore.png" alt="">
            <span class="nav-mobile-item-text">
                Explore o conteúdo
            </span>
        </a>
        <a class="nav-mobile-item" href="<?= $baseUrl ?>/busqueinformacao/index.php">
            <img class="nav-mobile-item-icon" src="<?= $baseUrl ?>/assets/images/header/search.png" alt="">
            <span class="nav-mobile-item-text">
                Busque informação
            </span>
        </a>
        <a class="nav-mobile-item">
            <img class="nav-mobile-item-icon" src="<?= $baseUrl ?>/assets/images/header/favorites.png" alt="">
            <span class="nav-mobile-item-text">
                Mais acessados
            </span>
        </a>
        <a class="nav-mobile-item" href="<?= $baseUrl ?>/servicos/index.php">
            <img class="nav-mobile-item-icon" src="<?= $baseUrl ?>/assets/images/header/services.png" alt="">
            <span class="nav-mobile-item-text nav-mobile-item-text--with-margin-top">
                Serviços
            </span>
        </a>
    </nav>
</footer>

