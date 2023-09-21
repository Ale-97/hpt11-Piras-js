const printTheValueArrayObject = (array, key) => {

    array.forEach(e => {
        console.log(e[key]);
    });

};



// Traccia 1:  Gestione di un elenco di libri
// Crea un programma che gestisca un elenco di libri. Ogni libro ha un titolo e un'autore. Implementa le seguenti funzionalità:

// - Aggiunta di nuovi libri all'elenco.
// - Visualizzazione di tutti i libri presenti nell'elenco.
// - Ricerca di un libro per titolo o autore.

let bookshelf = [{
    title: "1984",
    author: "George Orwell",
}, {
    title: "Cent'anni di solitudine",
    author: "Gabriel García Márquez",
}
];

const addBook = (titleNewBook, authorNewBook) => {// Funzione che servira ad aggiungere un nuovo libro alla libreria.
    bookshelf.push({
        title: titleNewBook,
        author: authorNewBook,
    })
};

console.log(bookshelf);

addBook("titolo", "autore");// Aggiunta di un libro



printTheValueArrayObject(bookshelf, "title");



const search = (arrey, key, keyValue) => {// Funzione che servirà a effettuare una ricerca ed a restituire il libro desiderato
    let element = arrey.find(e => e[key] == keyValue);
    return element != undefined ? element : "L'elemento cercato non è presente nella lista."
};

console.log(search(bookshelf, "cavolo", "1984"));
console.log(search(bookshelf, "title", "1984"));



// Traccia 2: Gestione di un elenco di studenti
// Crea un programma che gestisca un elenco di studenti. Ogni studente ha un nome, un'età e un voto. Implementa le seguenti funzionalità:

// - Aggiunta di nuovi studenti
// - Visualizzazione dell'elenco completo degli studenti 
// - Calcolare la media dei voti.

let classOfStudents = [{
    name: "Marco",
    age: 12,
    vote: 8
}, {
    name: "Francesca",
    age: 11,
    vote: 10
}, {
    name: "Valentino",
    age: 12,
    vote: 3
}
];


const addStudent = (nameNewStudent, ageNewStudent, voteNewStudent) => {// Funzione che servira ad aggiungere un nuovo Studente.
    classOfStudents.push({
        name: nameNewStudent,
        age: ageNewStudent,
        vote: voteNewStudent,
    });
};

addStudent("Paola", 12, 9);

console.log("");
console.log("");
console.log("Lista Studenti:");
console.log("");

printTheValueArrayObject(classOfStudents, "name")

const average = (array) => {
    let sumVote = 0;
    array.forEach(student => { sumVote +=student.vote; })
    return sumVote / array.length;
};
console.log(`La media dei voti della classe è : ${average(classOfStudents)}`)

// Traccia 3:  Lista delle attività quotidiane
// Crea un programma per tenere traccia delle attività quotidiane. Ogni attività ha un nome, una descrizione e uno stato (completata o no). Implementa le seguenti funzionalità:

// - Aggiunta di nuove attività.
// - Visualizzazione dell'elenco delle attività con i loro stati.
// - Possibilità di segnare un'attività come completata.


let dailyActivities = [{
    name: "Doccia",
    description: "Appena Sveglio devo alzarmi e lavarmi",
    state: false
}, {
    name: "Colazione",
    description: "Preparare la colazione:-Uova,-Bacon, Cappuccino",
    state: true
}, {
    name: "Spesa",
    description: "Uova, Bacon, Latte, Caffè, Zucchero",
    state: false
}
];


const addDailyActivities = (nameNewActivities, descriptionNewActivities, stateNewActivities) => {// Funzione che servira ad aggiungere un nuovo Attività;
    dailyActivities.push({
        name: nameNewActivities,
        description: descriptionNewActivities,
        state: stateNewActivities,
    });
};

const printcheckActivities = (array) => {
    array.forEach(e => {
        console.log(`${e.name} = ${e.state}`);
    });
};
console.log("");
console.log("");
console.log("Lista Attività:");
console.log("");
printcheckActivities(dailyActivities);

const changeValueState = (array, nameValue, valueState,) => {
    search(array, "name", nameValue).state = valueState;

};

changeValueState(dailyActivities, "Spesa", true);
console.log(dailyActivities);

