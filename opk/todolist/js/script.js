let txtField = document.getElementById("tehtava");
let btn = document.getElementById("btn");
let btndel = document.getElementById("btndel");
let list = document.getElementById("list");
let currentItems = [];
load();
btn.addEventListener("click", doSomething);
btndel.addEventListener("click", yeetChild);
function yeetChild() {
    list.removeChild(list.lastElementChild);
    var index = currentItems.findIndex(e => e == list.lastElementChild.innerHTML);
    currentItems.splice(index, 1);
    console.log(index);
    if (typeof (Storage) !== "undefined") {
        localStorage.removeItem("items");
        localStorage.setItem("items", JSON.stringify(currentItems));
    }
}
function yeetCurrentChild() {
    this.parentNode.remove();
    const index = currentItems.findIndex(e => e == this.parentNode.innerText);
    currentItems.splice(index, 1);
    console.log(this.parentNode.innerText);
    console.log(currentItems);
    if (typeof (Storage) !== "undefined") {
        localStorage.setItem("items", JSON.stringify(currentItems));
    }
}



function doSomething(e) {
    let btnChild = document.createElement("button");
    btnChild.setAttribute("class", "btn-danger btn btn-lg rounded-1")
    btnChild.innerHTML = "Poista";
    btnChild.addEventListener("click", yeetCurrentChild);
    let child = document.createElement("li");
    child.setAttribute("class", "list-group-item");
    child.setAttribute("value",txtField.value);
    child.innerHTML = txtField.value;
    child.appendChild(btnChild);
    list.appendChild(child);
    currentItems.push(txtField.value+"Poista");
    if (typeof (Storage) !== "undefined") {
        localStorage.setItem("items", JSON.stringify(currentItems));
    }

}

function load() {
    if (typeof (Storage) !== "undefined") {
        var currentItemsTemp = JSON.parse(localStorage.getItem("items"));
        if (currentItemsTemp) {
            currentItemsTemp.forEach(e => {
                let btnChild = document.createElement("button");
                    btnChild.setAttribute("class", "btn-danger btn btn-lg rounded-1")
                btnChild.innerHTML = "Poista";
                btnChild.addEventListener("click", yeetCurrentChild);
                let child = document.createElement("li");
                child.setAttribute("value",e);
                child.setAttribute("class", "list-group-item");
                child.innerHTML =  e.replace("Poista"," ");;
                child.appendChild(btnChild);
                list.appendChild(child);
            });
            currentItems = currentItemsTemp;
        }
    }
}