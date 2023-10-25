var txtField = document.getElementById("tehtava");
var btn = document.getElementById("btn");
var list = document.getElementById("list");

btn.addEventListener("click",doSomething);

function doSomething(e) {
    let child = document.createElement("li");
    child.setAttribute("class","list-group-item");
    child.innerHTML = txtField.value;
    list.appendChild(child);
}
