var length = 8;
var breadth = 4;

function area() {
  //accessing globals inside a function should be avoided
  return length*breadth;
}

console.log(area());

/* In javascript, a function can definitely be defined inside
another function*/
function abc() {
 console.log('abc');
 //scope of xyz is abc
 function xyz() {
  console.log('xyz');
  }
  xyz();//yes this is valid and call the xyz function
}

abc();
//xyz(); //this will not work as scope only abc

function pqr(f) {
console.log("pqr");
f(); //actually calling mno()
}

function mno(){
console.log("mno");
}

//a function value can be passed as one of the arguments to a function
pqr(mno);

function rms() {
  console.log('rms');
  function ytr() {
    console.log("ytr");
  }

  return ytr; //yes it works. A function value can be returned from a function
}

var p = rms(); // rms
//p is actually ytr
//p is callable
p(); // ytr

function yyy() {
  var g = 9; //  the scope of g is yyy()
  var e = 6;
  function zzz() {
    // inner function can definitely access the enclosing function variables
    console.log(g); // 9

    e = e * 5; // we can alter the enclosing function variable
    console.log(e); // 30
    // where inner funtion can access the enclosing function variables,
    // is called a closure
  }
  zzz();
  console.log(e);
  // 30 because the inner function altered the enclosing function variable

  }
yyy();
