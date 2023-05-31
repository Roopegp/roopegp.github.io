var btn = document.querySelector(".prompt");

btn.addEventListener("click",function() {
    var input = prompt("Type something");
    document.querySelector("title").innerText = input;
    
});