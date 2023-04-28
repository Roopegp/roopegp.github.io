class person {
    constructor(name,age,food) {
        this.age = Number(age);
        this.name = name;
        this.food = food;

    }
    makeSound(dom) {
        dom.innerText = this.name +":"+ this.age + ":"+ this.food;
    }
}

var nathan = new person(prompt("name"),prompt("age"),prompt("Favorite food?"));
nathan.makeSound(document.querySelector("h1"));
nathan.age