//defining a function with variable number of arguments. 0 to n
function add() {
  //hidden parameter 'argumnets'
  for (var i=0; i<arguments.length; i++){
    sum+=arguments[i];
  }
  return sum;
}

console.log(add());
console.log(add(2));
console.log(add(4,5,6));
