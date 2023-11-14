let submit = document.getElementById("test");
let mainDialogue = document.querySelector(".main-dialogue");
let counter = document.querySelector(".counter");

const dialogue = [ "This game will test you on Ohm´s law. Are you ready?", "Ohm´s Law is U = R*I where <br> " +  "U = Voltage, R = Resistance and I = Current <br>"+"By knowing two of these. you can calculate the thrid value by using Ohm´s law.","Hello. stranger! My name is URI Teller and I am here to test your knowledge of Ohm's law"];
const questions = []
let u , r ,i ;
let score = 0;
var answer;
submit.addEventListener("click",progress);
progress();
function progress(e) {
    if(dialogue.length != 0) {
        mainDialogue.innerHTML = dialogue.pop();
        return;
    }
    if(score > 9 ) {
        mainDialogue.innerHTML = " ";
        questions.forEach(e => {
            mainDialogue.innerHTML += e + "<br>";
        });
        
        return;
    }
    let answerfield = document.querySelector("#answer");
    console.log(answerfield);
    if(answerfield&& Number(answerfield.value)== answer) {
        score++;
        mainDialogue.innerHTML ="";
        counter.innerHTML = "Right answers:" + score;
    }  else if(answerfield){
        counter =0;
        counter.innerHTML = "Right answers:" + score;
    }


    u = Math.floor(Math.random() * 230)+1;
    r = Math.floor(Math.random() * 5000)+1;
    i = Math.floor(Math.random  () * 24) + 1;
    
    switch(Math.floor(Math.random() * 3) ) {
        case 0:
            mainDialogue.innerHTML = "R = " + r+ "; I = " + i +"; "
            answer = r * i;
            questions.push("R = " + r+ "; I = " + i +"; u="+answer);
            createField("u",mainDialogue);
            break;
        case 1:
            mainDialogue.innerHTML = "U = " + u+ "; I = " + i+";";
            answer = (u / i).toFixed(2);;
            questions.push("U = " + u+ "; I = " + i+"; R=" + answer);
            createField("R",mainDialogue);
            break;
        case 2: 
            mainDialogue.innerHTML =  "U = " + u+ "; R = " + r +"; "
            answer = (u / r).toFixed(2);;
            questions.push("U = " + u+ "; R = " + r +"; I = " +answer);
            createField("i",mainDialogue);
            break;
    }

    console.log(answer);
}


function createField(input,parent) {
    var field = document.createElement("input");
    field.type = "number";
    field.setAttribute("id","answer");
    field.setAttribute("placeholder",input + " =  ?" )
    parent.appendChild(field);
}

