class bill {
    constructor(hinta,pvm,type) {
        this.hinta = hinta;
        this.pvm = pvm;
        this.type = type;
   }
   isEmpty() {
       return hinta == 0 && pvm ===""&& this.type == "";
   }
   print(dom) {
        dom.innerHTML    += "<h1>" +this.hinta +"€ | "+ this.pvm + " | " +this.type +" </h1>";
   }

}
function getRBtn(rbName) {
    let opt = document.querySelector(`input[name=${rbName}]:checked`);
    return opt = (opt != null) ? opt.value : 'meno';  
  }

var billArr = new Array();
var hinta = document.querySelector(".js-hinta");
var pvm = document.querySelector(".js-pvm")
var acbod = document.querySelector(".accordion-body")
var submit = document.querySelector(".js-submit").addEventListener("click",function(e) {
    var type = getRBtn("type");

    var newBill = new bill(Number(hinta.value),pvm.value,type)
    if(!newBill.isEmpty()) {
        billArr.push(newBill);
    }
    acbod.innerText = "";
    billArr.forEach(function(elm,i) {
        elm.print(acbod);
    })
}) 

