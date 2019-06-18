function calculate() {
  //able to get the value from first no textfield
  var first = parseInt(document.getElementById('first').value);

  //able to get the value from second no textfield
  var second = parseInt(document.getElementById('second').value);

  //able to get the value that is selected in the drop down
  var ops = document.getElementById('ops').value;

  var ans;
  switch (ops) {
    case '+': ans=first + second ;
      break;
    case '-': ans=first - second ;
      break;
    case '*': ans=first * second ;
      break;
    case '/': ans=first / second ;
      break;
  }

  document.getElementById("answer").value = ans;
}
