function showMenu(event) {
    const menuId = 'menu-' + event.target.textContent;
    const menuElement = document.getElementById(menuId);

    closeAll(menuElement);

    menuElement.classList.toggle('floating-menu--block');
}

function closeAll(elementSelected) {
    const menus = document.querySelectorAll('.floating-menu');
    if(menus) {
        menus.forEach(menu => {
            if(elementSelected.id !== menu.id) {
                menu.classList.remove('floating-menu--block');
            }
        });
    }
}
