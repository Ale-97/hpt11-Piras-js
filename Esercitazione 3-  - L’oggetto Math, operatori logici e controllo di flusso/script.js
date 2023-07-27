// ESERCIZIO 1

let totalCat = 44;
let groupCat = 6;

let restCat = () => { return totalCat % groupCat }
console.log(`ci sono ${(totalCat - restCat()) / groupCat} file di gatti e ne mancano ${groupCat - restCat()} per una nuova fila, con un avanzo di ${restCat()}`);


// ESERCIZIO 2

let vote = 29;

let voteResult = () => {
    switch (true) {
        case vote < 18:
            return "insufficiente";
        case vote < 21:
            return "sufficente";
        case vote < 24:
            return "buono";
        case vote < 27:
            return "distinto";
        case vote < 30:
            return "ottimo";
        default:
            return "eccelente";
    }
};
console.log(voteResult());


// ESERCIZIO 3

let temperature = 55;

let temperatureResult = () => {
    switch (true) {
        case temperature < -10:
            return "copriti…ancora ti raffreddi";
        case temperature < 0:
            return "non e’ tanto il freddo quanto l’umidità";
        case temperature < 20:
            return "non ci sono piu’ le mezze stagioni";
        case temperature < 30:
            return "mi dia una peroni sudata";
        default:
            return "lu mare, lu sule, lu ientu";
    }
};
console.log(temperatureResult());

// ESERCIZIO 4

let year=1700;

if ((year%4)<1 || (year%400)<1 ){
    console.log("anno bisestile");
} else{
    console.log("anno non bisestile");
}
