function search() {
    const termosContainer = document.querySelector('#termos-container');
    const resultadosTitle = document.querySelector('#resultados-title');
    const cards = document.querySelectorAll('.cards');
    const newsContainer = document.querySelector('#news-container');

    termosContainer.classList.add('d-none');
    resultadosTitle.classList.add('d-block');
    newsContainer.classList.add('news-container--align-start');
    
    if(cards) {
        cards.forEach(card => card.classList.add('d-flex'));
    }
}