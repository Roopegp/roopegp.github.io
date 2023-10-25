var paragraph= document.querySelector("p");
const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
paragraph.innerHTML = weekday[new Date().getDay()];