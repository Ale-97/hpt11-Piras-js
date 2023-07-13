// Primo Esercizio 
const firstNumber = 5;
const secondNumber = 2;
const thirdNumber = 4;
const fourthNumber = 9;
const fifthNumber = 7;
const allNumber = [firstNumber, secondNumber, thirdNumber, fourthNumber, fifthNumber];
let sum = 0;
let average;

allNumber.forEach(number => {
    sum = sum + number;
});

average = sum / allNumber.length;
console.log(`La somma tra i numeri equivale a ${sum} e la media equivale a ${average}`);


// Secondo Esercizio 
let currentTime = new Date();
const currentYear = currentTime.getFullYear();
let yearUser;
let buttonSubmit = document.getElementById("submit");
let ageUser;

pickYear = () => {

    yearUser = parseInt(document.getElementById("number").value);

    if (yearUser >= 1923 && yearUser <= 2023) {

        ageUser = currentYear - yearUser;
        console.log("Secondo Esercizio")
        console.log(`Hai ${ageUser} anni e ti mancano ${100 - ageUser} anni per compierne 100`)

    } else {

        alert("Hai inserito una data non valida");
    }
};

buttonSubmit.addEventListener('click', pickYear);


// Terzo Esercizio 

let firstNumberUser;
let secondNumberUser;
let buttonSubmit2 = document.getElementById("submit2");
let sum2;
let subtraction;
let multiplication;
let division;
pickTwoNumber = () => {

    firstNumberUser = parseInt(document.getElementById("number2-1").value);

    secondNumberUser = parseInt(document.getElementById("number2-2").value);

    if (isNaN(firstNumberUser) || isNaN(secondNumberUser)) {

        alert("Hai inserito dei numeri non validi");

    } else {
        sum2 = firstNumberUser + secondNumberUser;
        subtraction = firstNumberUser - secondNumberUser;
        multiplication = firstNumberUser * secondNumberUser;
        division = firstNumberUser / secondNumberUser;
        console.log("Terzo Esercizio")
        console.log(`Con i numeri da te scelti, i risultati delle varie operazioni sono: somma (${sum2}), sottrazione(${subtraction}), moltiplicazione (${multiplication}), divisione(${division})`)
    }
};

buttonSubmit2.addEventListener('click', pickTwoNumber);

