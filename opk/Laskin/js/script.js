var tbody = document.querySelector(".calc");
const tableRow = "<div class='col'>";
const tableRowclosed = "</div>";
const button = "<p class='bg-primary number text-white text-center'>";
const buttonClosed = "</p>";
var spez = ["0",".","C"]
var select = document.querySelector("#select");
var currentCalc = "";
var result = document.querySelector("#result");
var maxvalue = 9;
var lastClicked ="";

Populate();
function Populate() {
    var html = "";
    for(i = 0; i<maxvalue; i++) {
        if(i == 0 || i% 3 == 0 ) {
            if(i != 0) {
                html += button + spez.pop() + buttonClosed;
                html += tableRowclosed;
                if(i!= maxvalue-1) html += tableRow;
            } else {
                html += tableRow;
            }
        }
            html += button + String(i +1) + buttonClosed;
    }
    if(String.length != 0)
    html +=  button + spez.pop() + buttonClosed + tableRowclosed;
    tbody.innerHTML =  html + tbody.innerHTML ;
    document.querySelectorAll(".number").forEach(e => {
        e.classList.add(e.innerHTML)
        e.addEventListener("click",updateCalculation);
    });
    document.querySelector(".eqls").addEventListener("click",calculate)
}
var current = "";
function calculate(e) {
    var first = Number(currentCalc);
    var second = Number(current);
    switch(select.options[select.selectedIndex].text) {
        case "/": 
            result.value = first / second;
            break;
        case "*":
            result.value = first * second;
            break;
        case "+": 
            result.value = first + second;
           break
        case "-":
            result.value = first - second;            
            break;
    }
}
var text = "" ;
var state = false;
select.onchange = function()  {
    if(!state) {
    currentCalc = current;
    result.value = current + select.options[select.selectedIndex].text;
    text = current + select.options[select.selectedIndex].text;;
    current = " ";
    state = !state;
    }
}
function updateCalculation(e)  {
    var value = this.innerText;
    if(value == "C") {
        lastClicked = "";
        console.log("Cleared")
        result.value = "";
        text = " ";
        current = "";
        currentCalc = " ";
        state = false;
        return;
    }
    current += value;
    if(currentCalc) {
        result.value = text + current;
    } else {
        result.value = current;
    }
    
}

