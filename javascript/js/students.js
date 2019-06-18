/*Take in name gender marks of a student from prompt box
Write 2 function:
  1st display_details :
    Name : abc
    Gender : M
    Marks : 100

  2nd Calcgrade should return grade
*/

var name = prompt("Enter Name")
var gen = prompt("Enter Gender")
var marks = prompt("Enter Marks")

var mar = parseFloat(marks) //string to float convert

function display_details(n,g,m) {
  // Scope of function arguments is also the function
  // Loacl variables
  return "Name : "+ n + "\nGender : " + g + "\nMarks : " + m;
}

function cal_grade(m) {
  if(m>80){
    return "A";
  }
  else if (m>60) {
    return "B";
  }
  else {
    return "C";
  }
}

alert(display_details(name,gen,mar));
alert("Grade : "+ cal_grade(mar));
