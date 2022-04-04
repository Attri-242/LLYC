<?php 
    function showNavItem($param, $array, $type, $menuType) {
        echo '<div id="' . $param .'" class="principal-nav-item-container principal-nav-item-container--' . $type . '">
                <a onclick="showMenu(event)" 
                class="principal-nav-item principal-nav-item--' . $type . ' font-extra-bold" href="#">' . $param . '</a>';


        if(count($array) > 0) {
            echo '<ul class="floating-menu floating-menu--' . $menuType . '" id="menu-' . $param .'">';
    
            for($i = 0; $i < count($array) ; $i++) {
                echo '<li class="floating-menu-text floating-menu-text--' . $menuType . '">' . $array[$i] .'</li>';
            }
    
            echo '</ul>';
        }

        echo '</div>';
    }
?>