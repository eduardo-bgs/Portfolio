document.querySelector('.menu-mobile-icon').addEventListener('click', () => {
    document.querySelector('.mobile-menu').style.transform = 'translateX(0)';
});

document.querySelector('.close-btn').addEventListener('click', () => {
    document.querySelector('.mobile-menu').style.transform = 'translateX(-100%)';
});
