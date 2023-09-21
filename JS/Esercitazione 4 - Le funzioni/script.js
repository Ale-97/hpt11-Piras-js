// ---------- TRACCIA 1 ----------

console.log(" ")
console.log("TRACCIA 1")
console.log(" ")

let PointPlayerOne;
let PointPlayerTwo;
let numberLunchesUser;
// Prendo il valore dall'uttente e controllo se il valore è numerico
const pickAndChekUserImput = (outputMessage) => {
    do {
        saveValue = parseInt(prompt(outputMessage));
        if (!(isNaN(saveValue))) { return saveValue };
    }
    while (true);

}
numberLunchesUser = pickAndChekUserImput("quanti lanci desiderate fare ciascuno?");
// Creo una funzione che mi restituisca un array di numeri casuali, il quantitativo di numeri casuali è definito dalla variabile della funzione
const randomNumber = (numberLunches) => {

    let cicleForRundomNumber = 0;
    let randomNumber = [];
    do {
        randomNumber.push(Math.floor(Math.random() * (6 - 1) + 1))

        cicleForRundomNumber++;
    }
    while (cicleForRundomNumber != numberLunches)
    return randomNumber;
};
// Creo una funzione che mi sommi i valori di un array
const sum = (array) => {
    return array.reduce((a, b) => a + b, 0);
};

PointPlayerOne = randomNumber(numberLunchesUser);
PointPlayerTwo = randomNumber(numberLunchesUser);
console.log(`i lanci del giocatore 1 hanno dato questi punteggi (${PointPlayerOne}) la loro somma è ${sum(PointPlayerOne)} `);
console.log(`i lanci del giocatore 1 hanno dato questi punteggi (${PointPlayerTwo}) la loro somma è ${sum(PointPlayerTwo)} `);
console.log(`il vincitore è il ${PointPlayerOne > PointPlayerTwo ? "Giocatore 1" : "Giocatore 2"}`)


// ---------- TRACCIA 2 ----------

console.log(" ")
console.log("TRACCIA 2")
console.log(" ")

finalNumber = pickAndChekUserImput("Inserisci il numero a cui vuoi che finisca il conteggio.");
const counter = (n) => {
    for (let a = 1; a <= n; a++) {
        if (a % 3 == 0 && a % 5 == 0) {
            console.log("fizzBuzz")
        } else if (a % 3 == 0) {
            console.log("fizz")
        } else if (a % 5 == 0) {
            console.log("Buzz")
        } else { console.log(a) };
    }
}

counter(finalNumber);


// ---------- TRACCIA 3 ----------

console.log(" ")
console.log("TRACCIA 3")
console.log(" ")

const checkSizeNumberInput = (messageForUser) => {
    let pickValue;
    do {
        pickValue = pickAndChekUserImput(messageForUser);
        if (pickValue > 9999) { } else { break }
    } while (true);
    return pickValue;
};
let arrayNumbers = checkSizeNumberInput("Inserisci un numero non superiore a 9999.").toString().split("");
console.log(`${arrayNumbers.length} cifre`);


// ---------- TRACCIA 4 ----------

console.log(" ")
console.log("TRACCIA 4")
console.log(" ")

let testo = "super testo da contare";
const contaVocali = (textSplit) => {
    let vowels = textSplit.filter((a) => { if (/[aeiouAEIOU]/.test(a)) { return a } })
    return vowels
};
console.log(contaVocali(testo.split("")));

// ---------- TRACCIA 5 ----------

console.log(" ")
console.log("TRACCIA 5")
console.log(" ")

let alfabeto = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z"];
let stringPlayerOne = "parola";
let StringPlayerTwo = "parola";

const game = (stingA, stringB) => {
    let stirngCheckA = stingA.toUpperCase().split("");
    let stirngCheckB = stringB.toUpperCase().split("");
    let pointA = 0;
    let pointB = 0;
    stirngCheckA.forEach(elementA => {
        pointA = pointA + (alfabeto.indexOf(elementA) + 1)
         
    });
    stirngCheckB.forEach(elementB => {
        pointB = pointB + (alfabeto.indexOf(elementB) + 1)
    });
    if (pointA > pointB) {
        console.log(stingA)
    } else if (pointA < pointB) {
        console.log(stringB)
    } else {
        console.log("Pareggio!")
    }

};

game(stringPlayerOne, StringPlayerTwo);


