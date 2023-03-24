var elm = $("sub");
elm.addEventListener("click",function(e) {
        e.preventDefault();
        if(!calculateTip) return;
        $("total").innerText = "your bill is " + calculateTip();
});

function $(id) {
    return document.getElementById(id);
} 
function calculateTip() {
    var pay = Number($("inp").value);
    const calcTip = Boolean($("tip").value);
    console.log(typeof(calcTip));
    console.log(typeof(pay));
    if(!isNaN(pay)) {
        if(calcTip) {
            pay = pay*1.2;
        }
        return pay;
    }
    return false;
}