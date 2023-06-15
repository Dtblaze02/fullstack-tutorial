// const menu = ["Banana", "Orange", "Apple", "Mango", "Pawpaw"];

// let text = '';

//     for (let i = 0; i < menu.length; i++) {
//         text += "<li>" + menu[i] + "</li>";
//     }


let cars = ['Honda', 'Benz', 'Toyota']
let text = '';

for(i=0; i<3; ){
  text+= `These are my car ${cars[i]} <br>`
}
   
document.getElementById('demo').innerHTML = text;