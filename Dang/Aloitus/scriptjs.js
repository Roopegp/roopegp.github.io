class Game {    
    constructor(document) {
        var i =0;
        while(i < 16) {
            var li = document.createElement("li");
            document.querySelector("ul").appendChild(li);
            i++
        }
        this.arr = Array.from( document.querySelectorAll("li"));
        this.lastclicked = " ";
        this.colors =[
            "red",
            "red",
            "green",
            "blue",
            "yellow",
            "purple",
            "pink",
            "Aqua",
            "lightGreen",
            "green",
            "blue",
            "yellow",
            "purple",
            "pink",
            "Aqua",
         "lightGreen"
        ];
    }
    startGame() {
            this.arr.forEach(element => {
                 console.log(this.colors)
                var index = Math.floor(Math.random() * this.colors.length)
                element.setAttribute("class",this.colors[index]);
                element.addEventListener("click",function (e) {
                    if(!element.classList.contains("Active") && !element.classList.contains("Correct")) {
                        element.classList.add("Active");
                    } 
                });
                element.addEventListener("click",this.check)
                this.colors.splice(index,1);
            });

    }
    check() {
        var tempArr = Array.from(document.querySelectorAll(".Active"));
        tempArr.forEach(function(e, i ){ 
            e.style.backgroundColor = e.classList[0];
        })
        console.log(tempArr)
        
        if(Number(  document.querySelector("P").innerHTML) == 8
        ) {
            document.querySelector("P").innerHTML = "YOU WON";
        }
        if(tempArr.length > 1) {
            if(tempArr[0].classList[0] == tempArr[1].classList[0]) {
                tempArr[0].classList.add("Correct");
                tempArr[0].classList.remove("Active");
                tempArr[1].classList.add("Correct");
                tempArr[1].classList.remove("Active");
                tempArr[0].style.border = "none";
                tempArr[1].style.border = "none";
            } else {
                setTimeout(function() {
                    tempArr.forEach(e => {
                        e.classList.remove("Active");
                        e.style.backgroundColor = "";
                    })
                },500);
            }
        }
        var tt = Array.from(document.querySelectorAll(".Correct"));
        document.querySelector("P").innerHTML = tt.length  /2;
    }
}
var game = new Game(document);
console.log(game.arr.toString())
game.startGame();
document.querySelector("button").addEventListener("click",function(e) {
    document.querySelector("P").innerHTML = "0";
    document.querySelectorAll("li").forEach(function(e,i) { e.remove()})
    game = new Game(document);
    game.startGame();
});

