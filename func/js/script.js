var prompt =prompt("Kirjoita mitä vain");
if(equalsIgnoreCase(prompt,"JavaScript")) {
    document.getElementById("p").innerText = "Replaced"
}

function equalsIgnoreCase(a ="",b ="") {
    return a.toUpperCase() == b.toUpperCase();
}


