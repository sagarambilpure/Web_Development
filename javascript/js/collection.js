var c1 = 'audi';
var c2 = 'mercedes';
var c3 = 'porshe';


//able to printthe names of all my cars

// data structure
// array
// stores eleme[nts of the same type, sequentially;

var cars = [ 'audi','mercedes','porshe' ]

//indexing
// print the second car
console.log(cars[1]); // merecedes
console.log(cars[0]); // audi

// update using indexing
cars[0] = 'i20'
console.log(cars); // i20, merecedes, porshe

//get no. of elements of an array
console.log(cars.length); // 3

//print all the cars

for (var i = 0; i < cars.length; i++){
  console.log(cars[i]);
}

// add a car at the end
cars.push('i10');
console.log(cars); // i20, merecedes, porshe, i10

// remove a car from the start of the array
console.log(cars.shift());
console.log(cars);

// add a car at the start of the array
cars.unshift("audi")
console.log(cars);

// remove a car from end of the array
console.log(cars.pop());
console.log(cars);

//splice
cars.splice(1,2); //remove 2 elements from index position
console.log(cars);

cars.push('merecedes', 'bmw','i10');
console.log(cars);

// add after merecedes
cars.splice(2,0,'i20', 'nano');
console.log(cars);

// from i20 remove 3 and porsche
cars.splice(3,3,"porshe")
console.log(cars);

function abc(p){
  p();
}

function xyz() {

}

abc(xyz);

/*
var printAllElements = function (element){
  console.log(element);
};
cars.forEach(printAllElements);
*/


cars.forEach(function (element){
  console.log(element);
});

var nos=[7,8,8,9,10,11,5,6,3,2,9,10];

function printEven(element) {
  if (element % 2 == 0){
    console.log(element);
  }
}

nos.forEach(printEven);

// from nos array, get a new array of only the odd elements (filtering)

/*var oddNumbers = [];
nos.forEach(function (element) {
  if (element%2!==0) {
    oddNumbers.push(element)
  }
});
*/

var oddNumbers = nos.filter(function (element) {
  return element % 2 !==0;
});

console.log(oddNumbers);

//from nos array, get a new array of squares of elements from nos array(map)

var squares = nos.map(function (element) {
  return element * element;
})

console.log(squares);
