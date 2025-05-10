import './swiper.js';


window.setTheme = function (theme) {
    document.querySelector('html').setAttribute('data-theme', theme);
    localStorage.theme = theme
    if (theme == 'light') {
        document.querySelector('#light-btn').classList.add('hidden')
        document.querySelector('#dark-btn').classList.remove('hidden')
    } else {
        document.querySelector('#dark-btn').classList.add('hidden')
        document.querySelector('#light-btn').classList.remove('hidden')
    }
}
setTheme(localStorage.theme == 'dark' ? 'dark' : 'light');
