var paragraph= document.getElementById("pv");
const weekday = ["Sunnuntai","Maanantai","Tiistai","Wednesday","Thursday","Friday","Saturday"];
paragraph.innerHTML = weekday[new Date().getDay()];