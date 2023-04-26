var hOne = document.querySelector("h1");

var input = prompt("say whatever sentence");
var splitInp = input.split(" ");
var ret ="";
splitInp.forEach(function(string,ind) {
    string += "luksia";
    ret += string;
});
hOne.innerHTML = ret;
