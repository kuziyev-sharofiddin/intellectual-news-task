function handleMenuClick(e, menuId) {
    e.preventDefault();
    const submenus = document.querySelectorAll(".menus-child ul");

    submenus.forEach(sm => sm.style.display = 'none');

    const currentSubmenuList = document.querySelector(`.menus-child ul[data-menu-parent-id='${menuId}']`);

    currentSubmenuList.style.display = '';
}
