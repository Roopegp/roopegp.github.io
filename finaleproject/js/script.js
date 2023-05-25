var split = document.querySelector("h1").innerHTML.split("");
document.querySelector("h1").remove();
var div = document.querySelector("div");
console.log(split)
elm  = "";
split.forEach((value,index) => {
    elm += "<span class = \"char \"> " +value+ "</span>";
});
div.innerHTML = "<h1>" + elm + "</h1>";