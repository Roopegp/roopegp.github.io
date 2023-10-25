var txtField = document.getElementById("tehtava");
var btn = document.getElementById("btn");
var btndel = document.getElementById("btndel");
var list = document.getElementById("list");
var currentItems = [];
load();
btn.addEventListener("click",doSomething);
btndel.addEventListener("click",yeetChild);
function yeetChild() {
    list.removeChild(list.lastElementChild);
    var index = currentItems.findIndex(e => e == this.parentNode.innerText);
    currentItems.splice(index,1);
    console.log(currentItems);
    if (typeof(Storage) !== "undefined") { 
        localStorage.removeItem("items");
        localStorage.setItem("items",JSON.stringify(currentItems));
    }
}
function yeetCurrentChild() {
    
    this.parentNode.remove();
    var index = currentItems.findIndex(e => e == this.parentNode.innerText);
    currentItems.splice(index,1);
    console.log(currentItems);
    if (typeof(Storage) !== "undefined") { 
        localStorage.removeItem("items");
        localStorage.setItem("items",JSON.stringify(currentItems));
    }
}



function doSomething(e) {
    let btnChild = document.createElement("button");
    btnChild.setAttribute("class","btn-danger btn btn-lg rounded-1")
    btnChild.innerHTML = "Poista";
    btnChild.addEventListener("click",yeetChild);
    let child = document.createElement("li");
    child.setAttribute("class","list-group-item");
    child.innerHTML = txtField.value;
    child.appendChild(btnChild);
    list.appendChild(child);
    currentItems.push(txtField.value);
    if (typeof(Storage) !== "undefined") { 
        localStorage.setItem("items",JSON.stringify(currentItems));
    }
    
}

function load() {
    currentItems = JSON.parse(localStorage.getItem("items"));
    currentItems.forEach(e =>{
        let btnChild = document.createElement("button");
        btnChild.setAttribute("class","btn-danger btn btn-lg rounded-1")
        btnChild.innerHTML = "Poista";
        btnChild.addEventListener("click",yeetCurrentChild);
        let child = document.createElement("li");
        child.setAttribute("class","list-group-item");
        child.innerHTML = e;
        child.appendChild(btnChild);
        list.appendChild(child);
    });
}