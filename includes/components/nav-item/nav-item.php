<?php 
    function showNavItem($param, $array, $type, $menuType, $redirectLink, $fontWeight, $justify) {
        echo '<div id="' . $param .'" class="principal-nav-item-container principal-nav-item-container--' . $type . ' '. $justify  . '">
                <a onclick="showMenu(event)" 
                    class="'. $fontWeight . ' principal-nav-item principal-nav-item--' . $type . '" href="' . $redirectLink . '">' . $param . 
                '</a>';

        if(count($array) > 0) {
            echo '<ul class="floating-menu floating-menu--' . $menuType . '" id="menu-' . $param .'">';
    
            for($i = 0; $i < count($array) ; $i++) {
                echo '<li class="floating-menu-text floating-menu-text--' . $menuType . '">
                        <a href="'. $array[$i][1] .'">' . $array[$i][0] .'</a>
                    </li>';
            }
    
            echo '</ul>';
        }

        echo '</div>';
    }
?>