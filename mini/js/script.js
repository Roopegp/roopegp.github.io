var input = prompt("What is your age");
var toInt = Number(input);

document.getElementById("replaceable").innerText = "Input a number";
if(!isNaN(toInt)) {
        document.getElementById("replaceable").innerText = toInt < 18 ?"Your too young" : "You are over eighteen";
}


