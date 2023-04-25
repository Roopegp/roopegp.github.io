function getCar(name="null",hp=10,brand="mercedes",model="0x33",fwheel = true) {
    this.model = model;
    this.fourwheel = fwheel;
    this.name = name;
    this.brand = brand;
    this.hp = hp;
    return this;
}
var hps = document.querySelector(".js-hp");
var generate = document.querySelector(".js-gen");
var name = document.querySelector(".js-name");
var fourwheel = document.querySelector(".js-FourWheel")
var model = document.querySelector(".js-model");
var h1 = document.querySelector("h1");
var car = getCar("HyundaiCar",30,"Hyundai","gtr");
generate.addEventListener("click",function(e) {
    car = getCar("cars",Number(hps.value),name.value,model.value,fourwheel.value);
    h1.innerText = "your car is! " + car.name + " :" + car.hp +"hp" + " :" + "fourwheel:" + car.fourwheel + " :" +car.model;
})


console.log(car.hp);