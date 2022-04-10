function toggleMobileMenu() {
    const navMobileMenu = document.getElementById('nav-mobile');
    navMobileMenu.classList.toggle('nav-mobile--block');
}

function togglePerfilMenu() {
    const navMobileMenu = document.getElementById('nav-perfil');
    navMobileMenu.classList.toggle('nav-perfil--block');
}

function toggleMobileSubMenu($event) {
    $event.nextElementSibling.classList.toggle('nav-mobile-item-subcontainer--block');
}
