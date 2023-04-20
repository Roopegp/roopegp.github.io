var bgCol = document.querySelector(".js-color");
var border = document.querySelector(".js-border")
var reset= document.querySelector(".js-res")
var widget = document.querySelector(".js-widget");
var widgetCol = document.querySelector(".js-widget-col")
var widgetMargin = document.querySelector(".js-widget-margin")
var widht = document.querySelector(".js-width");
var height = document.querySelector(".js-height");
var body = document.querySelector("body");
let toggle = false;



widgetMargin.addEventListener("change",function(event){
    widget.style.margin = event.target.value+"px";   
});
widht.addEventListener("change",function(event) {
    widget.style.width = event.target.value + "px";
})
height.addEventListener("change",function(event) {
    widget.style.height = event.target.value + "px";
});
widgetCol.addEventListener("keyup",function(event){
    widget.style.backgroundColor = event.target.value;
})
bgCol.addEventListener("keyup",function(event) {
        body.style.backgroundColor = event.target.value;
})
border.addEventListener("click",function(event) {
    toggle = !toggle;
    body.style.borderStyle = toggle ? "solid" : "dotted";
})
reset.addEventListener("click", function(event) {
    body.style.border = "none";
    body.style.backgroundColor = "white";
    widget.style.backgroundColor = "green";
    widget.style.margin = "auto";
    widget.style.height = "800px";
    widget.style.width = "800px";
    bgCol.value = "";
})