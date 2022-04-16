(() => {
    const isCookiesSaved = localStorage.getItem('isCookiesSaved');
    if(isCookiesSaved == 'true') {
        closeAllCookiesItems();
    }
})();

function closeCookies() {
    closeAllCookiesItems();

    localStorage.setItem('isCookiesSaved', 'true');
}

function closeAllCookiesItems() {
    const cookieContainer = document.querySelector('.cookies-container');
    const cookieCloseIcon = document.querySelector('.cookies-close');

    cookieContainer.classList.add('d-none');
    cookieCloseIcon.classList.add('d-none');
}