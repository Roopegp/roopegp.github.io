
class TicTacToe {
    constructor() {
        this.board = Array(9).fill(0); // 0 tarkoittaa tyhjää
        this.moves = [];
        this.isWin = this.isDraw = false;
    }
    get turn() { // palauttaa 1 tai kaksi
        return 1 + this.moves.length % 2;
    }
    get validMoves() {
        return [...this.board.keys()].filter(i => !this.board[i])
    }
    play(move) { // move on indexi muuttujassa  board
        if (this.board[move] !== 0 || this.isWin) return false; // laiton liike
        this.board[move] = this.turn; // 1 or 2
        this.moves.push(move);
        //  Käytetään regexia katsomaan että onko 3 putkeen
        this.isWin = /^(?:...)*([12])\1\1|^.?.?([12])..\2..\2|^([12])...\3...\3|^..([12]).\4.\4/.test(this.board.join(""));
        this.isDraw = !this.isWin && this.moves.length === this.board.length;
        return true;
    }
   
}

(function main() {
    const table = document.querySelector("#game");
    const btnNewGame = document.querySelector("#newgame");
    const messageArea = document.querySelector("#message");
    let game, human;

    function display() {
        game.board.forEach((cell, i) => table.rows[Math.floor(i / 3)].cells[i % 3].className = " XO"[cell]);
        messageArea.textContent = game.isWin ? (game.turn == human ? "Pelaaja 2 voitti" : " Pelaaja 1 voitti")
                                : game.isDraw ? "Tasapeli"
                                : game.turn == human ? "Pelaaja 1" 
                                : "Pelaaja 2";
        table.className = game.isWin || game.isDraw || game.turn !== human ? "inactive" : "";
    }

    

    function Move(i) {
        if ( !game.play(i)) return; // ignorataan clikki jos ei
        display();
    }

    function newGame() {
        game = new TicTacToe();
        human = 1;
        display();
    }

    table.addEventListener("click", e => Move(e.target.cellIndex + 3 * e.target.parentNode.rowIndex));
    btnNewGame.addEventListener("click", newGame);
    //btnCpuMove.addEventListener("click", computerMove);
    newGame();
})();