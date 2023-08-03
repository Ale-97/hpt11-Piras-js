// ---------- TRACCIA 1 ----------

let arrayNumbers = [4, -8, 2, 6, 7, 9, 0, -3, -9, 3];
const cresc = (arrayCre) => {
    return arrayCre.sort((a, b) => { return a - b; });
};
const decr = (arrayDecr) => {
   return arrayDecr.sort((a, b) => { return b - a; });
};
console.log(cresc(arrayNumbers));
console.log(decr(arrayNumbers));


// ---------- TRACCIA 2 ----------

let sum = arrayNumbers.reduce((total, amount) => total + amount);
let lowerValue = [];
let average = sum / (arrayNumbers.length);
arrayNumbers.forEach(element => {
    if (element < average) { lowerValue.push(element) };
});
console.log(`la media è ${average}`);
console.log(`tutti i valori minori della media sono  ${lowerValue}`);


// ---------- TRACCIA 3 ----------

const checkPalindrom = (str) => {
    str = str.toUpperCase();

       return str == str.split('').reverse().join('')?"TRUE":"FALSE";
}

console.log(checkPalindrom("nove"));


// ---------- TRACCIA 4 ----------

let listaDate=cresc(arrayNumbers);
console.log(listaDate[(listaDate.length-1)],listaDate[listaDate.length-2] )

// SOLUZIONE USANDO Math.MAX
// let maxNumber = Math.max(...arrayNumbers);
// arrayNumbers.splice(arrayNumbers.indexOf(maxNumber), 1);
// let secondMaxNumber=Math.max(...arrayNumbers);
// console.log(maxNumber, secondMaxNumber);