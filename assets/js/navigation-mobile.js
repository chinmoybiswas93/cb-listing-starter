/**
 * Mobile nav: open/close submenu by toggling .cb-submenu-open on parent.
 * Does not depend on core toggle or aria-expanded – desktop unchanged.
 */
(function () {
    var OPEN_CLASS = 'cb-submenu-open';

    document.addEventListener('click', function (e) {
        var overlay = document.querySelector('.wp-block-navigation__responsive-container.is-menu-open');
        if (!overlay) return;

        var hasChild = e.target.closest('.wp-block-navigation__responsive-container.is-menu-open .has-child');
        if (!hasChild) return;

        var submenu = hasChild.querySelector('.wp-block-navigation__submenu-container');
        if (!submenu) return;

        var clickedLink = e.target.closest('a[href]');
        var clickedInsideSubmenu = e.target.closest('.wp-block-navigation__submenu-container');

        if (clickedInsideSubmenu && !clickedLink) return;
        if (clickedLink && clickedInsideSubmenu) return;

        e.preventDefault();
        e.stopPropagation();

        var isOpen = hasChild.classList.contains(OPEN_CLASS);
        if (isOpen) {
            hasChild.classList.remove(OPEN_CLASS);
        } else {
            hasChild.classList.add(OPEN_CLASS);
        }
    }, true);
})();
