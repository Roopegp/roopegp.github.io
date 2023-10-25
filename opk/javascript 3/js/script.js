var paragraph = document.getElementById("para");
var btn = document.getElementById("nappi");
btn.addEventListener("click",funktionNimi)

function funktionNimi(e) {
    const weekday = ["Sunnuntai","Maanantai","Tiistai","Wednesday","Thursday","Friday","Saturday"];
    paragraph.innerHTML = weekday[new Date().getDay()];
}