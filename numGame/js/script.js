class Pair {
    constructor(key, obj) {
        this.key = key;
        this.object = obj;
    }
}
var clicked = false;
let score = 0;
var currentQuestion = null;
var right = document.querySelector("#right");
var wrong =     document.querySelector("#wrong");
const questions = [
    new Pair(true,new Pair("5 kissaa","img/img1.jfif")),
    new Pair(false,new Pair("2 autoa","img/img2.jfif")),
    new Pair(false,new Pair("4 kynttilä","img/img3.jfif")),
    new Pair(false,new Pair("7 jätkää","img/img4.jpg")),
    new Pair(false,new Pair("1 ihminen","img/img5.jfif")),
    new Pair(true,new Pair("3 koiraa","img/img6.jfif")),
    new Pair(false,new Pair("2 aikuista","img/img7.jfif")),
    new Pair(false,new Pair("4 konetta","img/img8.jfif")),
    new Pair(false,new Pair("5 hiirtä","img/img9.jpg")),
    new Pair(true,new Pair("Vähintään 2 sovellusta","img/img10.png"))
]
const startlen = questions.length;
var start = document.querySelector("#startgame");
start.addEventListener("click",startGame)

function startGame(e) {
    start.remove();
    document.querySelectorAll(".start").forEach(e => {
        e.remove();
    })
    getNewQuestion();
    right.style.display = "block";
    wrong.style.display = "block";
    document.querySelector("#scoreElm").display = "block";
    
}   
document.querySelector("#restart").addEventListener("click", function(e) {
    window.location.reload();
})
right.addEventListener("click",rightClick);
wrong.addEventListener("click",wrongClick)
function wrongClick(e) {
    if(clicked) return;
    clicked = true;
    if(!currentQuestion.key) {
        score++;
        updatescore();
    }

}
function updatescore() {
    document.querySelector("#scoreElm").innerHTML = "Score: " + score +"/" + startlen;
}
function rightClick(e) {
    if(clicked) return;
    clicked = true;
    if(currentQuestion.key) {
        score++;
        updatescore();
    }
}
function getNewQuestion() {
    if(questions.length == 0) {
        alert("you went thru all the images!")
        document.querySelector("#restart").style.display = "block";
        return; 
    }
    var index = Math.floor(Math.random() * questions.length);
    currentQuestion = questions[index];
    document.querySelector("#imgur").setAttribute("src",currentQuestion.object.object);
    document.querySelector("#imgur").style.display = "block";
    questions.splice(index,1);
    document.querySelector("#question").innerHTML = currentQuestion.object.key;
    clicked = false;
    window.setTimeout(getNewQuestion,3000);
}

