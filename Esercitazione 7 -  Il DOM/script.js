// ---------- TRACCIA 1 ----------

// PRENDO GLI ELEMENTI CHE HANNO LA CLASSE paragraphs E buttons
let paragraphs = document.getElementsByClassName("paragraphs");
let buttons = document.getElementsByClassName("buttons");

// FUNZIONE PER GENERARE UN NUMERO RANDOMICO
const randomNumber = () => {
    return Math.floor(Math.random() * 255);
};

// FUNZIONE PER GENERARE UN COLORE CASUALE RGB
const randomRGBColor = () => {
    return `rgb(${randomNumber()},${randomNumber()},${randomNumber()})`
};

// CAMBIERA IL COLORE DEL TESTO DEGLI ELEMENTI DEL DOM CHE VERRANNO PASSATI ALLA FUNZIONE
const changeColor = (elements) => {
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.color = `${randomRGBColor()}`
    }
};

// CAMBIERA LA PROPRIETA' "font-weight" DEGLI ELEMENTI DEL DOM CHE VERRANNO PASSATI ALLA FUNZIONE
const changeFontWeight = (elements) => {
    for (let i = 0; i < elements.length; i++) {
        if (elements[i].style.getPropertyValue("font-weight") != "bold") {
            elements[i].style.fontWeight = `bold`;
        } else { elements[i].style.fontWeight = `normal`; }
    }
};

// CAMBIERA LA PROPRIETA' "display" DEGLI ELEMENTI DEL DOM CHE VERRANNO PASSATI ALLA FUNZIONE
const changeDisplayNone = (elements) => {
    for (let i = 0; i < elements.length; i++) {
        if (elements[i].style.getPropertyValue("display") != "none") {
            elements[i].style.display = `none`;
        } else { elements[i].style.display = `block`; }
    }
};

//A CIASCUN BOTTONE  VERRA DATA UNA FUNZIONE DA ESEGUIRE AL CLICK
buttons[0].addEventListener("click", () => { changeColor(paragraphs) });
buttons[1].addEventListener("click", () => { changeFontWeight(paragraphs) });
buttons[2].addEventListener("click", () => { changeDisplayNone(paragraphs) });






// ---------- TRACCIA 2 ----------

// PRENDO TUTTI GLI ELEMENTI CHE MI SERVONO DAL DOM
let title = document.getElementById("title");
let paragraph = document.getElementById("paragraph");
let button2 = document.getElementById("button2");
let article = document.getElementById("article");

// PRENDO LA DATA
const date = new Date();
console.log(date.getFullYear());

/* CREO UNA FUNZIONE CHE AL CLICK DEL BOTTONE:
1- AGGIUNGA NEL DOM(ESATTAMENTE DENTRO IL DIV CON ID "ARTICLE")DEL CODICE HTML CHE CONTIENE I VALORI PRESI DAGLI IMPUT.
2-ELIMINA I VALORI DENTRO GLI IMPUT
3-AGGIUNGE UNA FUNZIONE ALL'ICONA DENTRO IL PARAGRAFO CREATO CHE CI PERMETTERA DI ELIMINARE IL PARAGRAFO
*/
const createArticle = () => {

    if (title.value.length > 0 && paragraph.value.length > 0) {
        article.innerHTML = `
    <h2><i id="delete" class="far fa-times-circle">  ${title.value}</i></h2>
    <p>${paragraph.value}</p>
    <div>Creato in data ${date.getDay()}/${date.getMonth()}/${date.getFullYear()}</div>
    <br>`;
        title.value = "";
        paragraph.value = "";
        document.getElementById("delete").addEventListener('click', () => { article.innerHTML = "" })
    } else { alert("Devi completare tutti i campi per poter creare mun articolo") }

}

button2.addEventListener('click', () => { createArticle() })
