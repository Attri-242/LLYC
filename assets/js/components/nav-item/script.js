function showMenu(event) {
    const menuId = 'menu-' + event.target.textContent;
    const menuIdElement = document.getElementById(menuId);

    closeAll();

    menuIdElement.classList.toggle('floating-menu--block');
}

function closeAll() {
    const menus = document.querySelectorAll('.floating-menu');
    if(menus) {
        menus.forEach(menu => menu.classList.remove('floating-menu--block'));
    }
}