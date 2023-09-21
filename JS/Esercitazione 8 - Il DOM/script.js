// Traccia 1:
// Crea una pagina html con le seguenti caratteristiche:

// - crea un input dove potrai inserire un tot di secondi.
// - un pulsante che, al click, farà partire un countdown (dai secondi selezionati a zero)
// - un pulsante che, al click, mettera' in pausa il countdown.
// - un pulsante che, al click, pulirà l’input e azzererà il countdown

// EXTRA: 
// se il timer viene stoppato (non azzerato), il click sul tasto di avvio fara' riprendere il timer da quel punto

let takeSeconds = document.getElementById("seconds");
let buttonStart = document.getElementById("start");
let buttonPause = document.getElementById("pause");
let buttonReset = document.getElementById("reset");
let output = document.getElementById("countdown");
let interval;
let duration;
let valuePause = "";

buttonStart.addEventListener("click", () => {

    if (typeof (valuePause) == "number") {
        duration = valuePause;
    } else {
        duration = Number(takeSeconds.value);
    }

    interval = setInterval(() => {

        if (duration >= 0) {
            output.innerHTML = `${duration--}`;
        } else {
            clearInterval(interval);
            valuePause = "";
        }

    }, 1000);
});


buttonPause.addEventListener("click", () => {

    valuePause = duration;

    clearInterval(interval);

});

buttonReset.addEventListener("click", () => {

    output.innerHTML = `0`;
    valuePause = "";
    clearInterval(interval);
});

// Traccia 2:
// Crea una rubrica contenente una lista di contatti e con le seguenti funzionalità:

// - Mostrare o nascondere la lista dei contatti
// - Popolare la tabella con i contatti presenti nell’array di partenza
// - Aggiungere un nuovo contatto
// - Eliminare un contatto in rubrica
// - Modificare un contatto presente in rubrica

// Lista contatti
let contactList = [
    {
        nome: "Alessio",
        numero: 3451567985,
    },
    {
        nome: "Federica",
        numero: 3451567985,
    },
    {
        nome: "Valentina",
        numero: 3451567985,
    },
    {
        nome: "Matteo",
        numero: 3451567985,
    },
    {
        nome: "Ilaria",
        numero: 3451567985,
    },
];

// Presa degli elementi del DOM
const list = document.getElementById("list");
const contacts = document.getElementsByClassName("contacts");
const buttosDelete = document.getElementsByClassName("delete");
const buttosModify = document.getElementsByClassName("modify");
const nameNewContact = document.getElementById("nameNewContact");
const phoneNewContact = document.getElementById("phoneNewContact");
const addContact = document.getElementById("addContact");

let stampElement = () => {
    // pulisco la mia lista di elementi nel DOM così da poter indìserire tutti i contatti col ciclo
    list.innerHTML = "";
    // ciclo l'array "contactList"
    contactList.forEach((element, index) => {
        // aggiungo un <li> contentente i dati del contatto preso in ogni ciclo
        list.innerHTML += `
        <li class="contacts">
            ${index}
            <div>
            <div>Nome: ${element.nome}</div>
            <div> Numero:${element.numero}</div>
            </div>
            <button class="delete">Elimina</button>
            <button class="modify">Modifica</button>
         </li>`;
        //  creo un ciclo per tre motivi: 1° per dare l'addEventListner ai bottoni, 2° per avere un indice, per prendere gli elementi che servono,3° per creare id univici dove serve 
        for (let i = 0; i < contacts.length; i++) {

            // il pulsanee cancellerà l'elemneto nell'array e riesegue tutta la funzione cosi da ripopolare il DOM con la lista aggiornata
            buttosDelete[i].addEventListener("click", () => {
                contactList.splice(i, 1);
                stampElement();
            });

            //Il pulsante compie due azioni:
            buttosModify[i].addEventListener("click", () => {
                //1° riscrive il div che contiene il nome e il numero permettendo di modificare l'elemento
                contacts[i].getElementsByTagName("div")[0].innerHTML = `
                <div>Nome: <input type="text" name="name${i}" id="name${i}" value="${contactList[i].nome}"></div>
                <div> Numero: <input type="number" name="phone${i}" id="phone${i}" value="${contactList[i].numero}"></div>
                    <button id="save${i}" value="${i}">Salva Modifiche</button>
                `;
                //2° da la funzione al pulsante di save che al click aggiornerà l'array con la lista contatti e riscriverà il div del DOM ripristinandolo con i nuovi dati.
                document.getElementById(`save${i}`).addEventListener("click", () => {
                    contactList[i] = {
                        nome: document.getElementById(`name${i}`).value,
                        numero: document.getElementById(`phone${i}`).value,
                    };
                    contacts[i].getElementsByTagName("div")[0].innerHTML = ` 
                    <div>Nome: ${ contactList[i].nome}</div>
                    <div> Numero:${ contactList[i].numero}</div>`

                });

            });

        };
    });
}

//Eseguo la funzione una prima volta per popolare il DOM con la lista contatti
stampElement();


//aggiunge il nuovo elemento nell'array dei contatti e riesegue la funzione "stampElement()" cosi da ripopolare il DOM con la lista aggiornata
addContact.addEventListener("click", () => {
    contactList.push({
        nome: nameNewContact.value,
        numero: phoneNewContact.value,
    });
    stampElement();
});


