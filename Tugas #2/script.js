window.onload = function() {
    document.querySelector('h1').textContent = "Latihan JavaScript Selesai";
};

//Id Output
let name = "John";
const age = 30;

document.getElementById("output").innerHTML = `Name: ${name}, Age: ${age}<br>`;

let fruits = ["Apple", "Banana", "Mango"];
for (let i = 0; i < fruits.length; i++) {
    document.getElementById("output").innerHTML += `Fruit ${i + 1}: ${fruits[i]}<br>`;
}

let person = {
    firstName: "John",
    lastName: "Doe",
    age: 30
};
document.getElementById("output").innerHTML += `First Name: ${person.firstName}, Last Name: ${person.lastName}<br>`;


function cekNilai() {

    let nilai = document.getElementById("userInput").value;
    nilai = Number(nilai); 
    
    document.getElementById("output").innerHTML = "";


if (nilai > 10) {
    document.getElementById("output").innerHTML += "Nilai lebih besar dari 10.<br>";
} else if (nilai === 10) {
    document.getElementById("output").innerHTML += "Nilai sama dengan 10.<br>";
} else {
    document.getElementById("output").innerHTML += "Nilai kurang dari 10.<br>";
}

for (let i = 1; i <= nilai; i++) {
    document.getElementById("output").innerHTML += `Nilai: ${i}<br>`;
}

}


function greet(name) {
    return `Hello, ${name}`;
}

document.getElementById("output").innerHTML += greet("John") + "<br>";
document.getElementById("output").innerHTML += greet("Jane") + "<br>";
document.getElementById("output").innerHTML += greet("Alice") + "<br>";

function calculateSquare(number) {
    return number * number;
}

document.getElementById("output").innerHTML += "Square of 4: " + calculateSquare(4) + "<br>";
document.getElementById("output").innerHTML += "Square of 7: " + calculateSquare(7) + "<br>";
document.getElementById("output").innerHTML += "Square of 10: " + calculateSquare(10) + "<br>";

const addNumbers = (a, b) => a + b;

document.getElementById("output").innerHTML += "Sum of 3 and 5: " + addNumbers(3, 5) + "<br>";
document.getElementById("output").innerHTML += "Sum of 10 and 20: " + addNumbers(10, 20) + "<br>";
document.getElementById("output").innerHTML += "Sum of 7 and 8: " + addNumbers(7, 8) + "<br>";


let students = ["Alice", "Bob", "Charlie"];
students.push("David");

document.getElementById("output").innerHTML += "Students:<br>";
students.forEach(function(student) {
    document.getElementById("output").innerHTML += student + "<br>";
});

let car = {
    brand: "Toyota",
    model: "Corolla",
    year: 2020
};

document.getElementById("output").innerHTML += "<br>Car details:<br>";
for (let key in car) {
    document.getElementById("output").innerHTML += `${key}: ${car[key]}<br>`;
}

let cars = [
    {brand: "Honda", model: "Civic", year: 2018},
    {brand: "Ford", model: "Mustang", year: 2019},
    {brand: "Tesla", model: "Model 3", year: 2021}
];

document.getElementById("output").innerHTML += "<br>Cars list:<br>";
cars.forEach(function(car) {
    document.getElementById("output").innerHTML += `Brand: ${car.brand}, Model: ${car.model}, Year: ${car.year}<br>`;
});
