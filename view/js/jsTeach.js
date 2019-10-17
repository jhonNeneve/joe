$(document).ready(function () {
    $('.sidenav').sidenav();
});

function menu(menu) {
    if (menu === 'home') {
        window.location.replace('home.html');
    } else if (menu === 'module') {
        window.location.replace('module.html');
    } else {
        window.location.replace('flow.html');
    }
}