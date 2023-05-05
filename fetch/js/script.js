let person ={};
var output = document.querySelector(".res")
fetch("https://api.genderize.io?name=" + prompt("Give me your name")) 
    .then(function(response) {
        return response.json();
    })
    .then(function(result) {
        person = result;
        console.log(result)

    })

 const myTimeout = setTimeout(function() {
    output.innerText = " your name is "+ person["name"] + " and you are "+ person["gender"] + " And its a probability of  " +person.probability + " that i am correct ";  
    console.log("1");
 }, 1000);
