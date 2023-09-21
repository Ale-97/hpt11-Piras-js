let num1 = 5;

let num2 = 8;

let stringa = "ciao mondo";

let hypotheticalTexts=["testo1","testo2","testo3"];

const PIGRECO =3.14159265359;

let output1= document.getElementById("container1");
let output2= document.getElementById("container2");
let output3= document.getElementById("container3");
let randomNumber=()=>{ return Math.floor(Math.random() * (hypotheticalTexts.length))};

output1.innerHTML=`
Il valore della variabile num1 e' ${num1} <br>
Il valore della variabile num2 e' ${num2}
`;

output2.innerHTML=`
Il valore della variabile stringa e' "${stringa}"`;

let changeText=()=>{

stringa=hypotheticalTexts[randomNumber()];
output2.innerHTML=`
Il valore della variabile stringa e' "${stringa}"`;
};

output3.innerHTML="il valore di PIGRECO e'"+PIGRECO;

let changeConst=()=>{

    PIGRECO=randomNumber();
    output3.innerHTML="il valore di PIGRECO e'"+PIGRECO;;
    };
