var gameElement = new Pair(2,"jdiadia");
var startgame = document.querySelector(".startgame");
console.log(gameElement.key);
startgame.addEventListener("click",startGame);

function startgame(e) {

}
class Pair {
    constructor(key, obj) {
        this.key = key;
        this.object = obj;
    }
}


