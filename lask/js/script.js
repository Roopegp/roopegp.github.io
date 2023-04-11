

var btn = document.getElementById("add");
btn.addEventListener("click",function calc() {
    var inp = document.getElementById("num").value;
    var res = document.getElementById("res");    
    res.innerHTML = Number(inp) + 100;
});


