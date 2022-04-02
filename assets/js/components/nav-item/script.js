function showMenu(event) {
    const menuId = 'menu-' + event.target.textContent;
    const menuElement = document.getElementById(menuId);

    closeAll(menuElement);

    if(menuElement) {
        menuElement.classList.toggle('floating-menu--block');
    }
}

function closeAll(elementSelected) {
    const menus = document.querySelectorAll('.floating-menu');
    if(menus) {
        menus.forEach(menu => {
            if((elementSelected && menu) && elementSelected.id !== menu.id) {
                if(menu) {
                    menu.classList.remove('floating-menu--block');
                }
            }
        });
    }
}
