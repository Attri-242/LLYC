<?php 
    function showNavItem($param) {
        echo '<div id="' . $param .'" class="principal-nav-item-container">
                <a onclick="showMenu(event)" 
                class="principal-nav-item principal-nav-item--short font-extra-bold" href="#">' . $param . '</a>';

        echo '<ul class="floating-menu" id="menu-' . $param .'">
                <li class="floating-menu-text">Manifesto</li>
                <li class="floating-menu-text">Sobre a Biogern</li>
                <li class="floating-menu-text">Contato</li>
             </ul></div>';
    }
?>

<!-- TODO: RECEBER OS ITENS DO MENU POR PARAMETRO -->