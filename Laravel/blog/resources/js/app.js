import './bootstrap';

fetch('/api/articoli')
    .then(response => response.json())
    .then(data => {

        const htmlList = document.getElementById('articles');

        for(let item of data) {

            htmlList.innerHTML += '<li>' + item.title + '</li>';

        }

    })
    .catch(errors => {
        console.log(errors);
    });