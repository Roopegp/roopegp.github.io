class Modal {
    constructor(state,dom) {
        this.state = state;
        this.dom = dom;
    }
    toggle() {
        if(this.state) {
            this.onDisable();
        } else {
            this.onEnable();
        }
        this.state = !this.state;
    }
    onEnable() {
        console.log("Enabled");
       this.dom.style.display = "block";
    }
    onDisable() {
            this.dom.style.display = "none";
        console.log("Disabled");
    }

}
var modal;
(function main() {
    modal = new Modal(false,document.querySelector(".modal"));
    document.querySelector(".btn").addEventListener("click",function(e) {
        document.querySelector(".btn").innerText = modal.state ?  "open modal" : "close modal" ;
        modal.toggle();
    })
})()