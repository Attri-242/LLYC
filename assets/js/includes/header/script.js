function toggleMobileMenu() {
    const navMobileMenu = document.getElementById('nav-mobile');
    navMobileMenu.classList.toggle('nav-mobile--block');
}

function toggleMobileSubMenu($event) {
    console.log('-----event', $event.nextElementSibling);
    $event.nextElementSibling.classList.toggle('nav-mobile-item-subcontainer--block');
}