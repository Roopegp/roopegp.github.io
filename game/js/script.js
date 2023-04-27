    var num = Math.floor(Math.random() * 10);
    var foundNum = true;
    while(foundNum) {
        foundNum = Number(prompt("Guess a number")) != num;
    }
    document.querySelector("h1").innerHTML = "the number was " + num;