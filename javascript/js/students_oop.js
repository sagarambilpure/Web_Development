var name = prompt("Enter Name")
var gender = prompt("Enter Gender")
var marks = parseFloat(prompt("Enter Marks"))

//constructor function (used at the time of creation of an object)
function Student(name, gender, marks) {
  //console.log(this); // this is a hidden passed to the function
  this.name = name
  this.gender =gender
  this.marks = marks
  this.getGrade = function() {
    if(marks>80){
      return "A";
    }
    else if (marks>60) {
      return "B";
    }
    else {
      return "C";
    }
  };

  this.getDetails = function() {
    return "Name : "+ name + "\nGender : " + gender + "\nMarks : " + marks;
  };

}

//Student(); //this will be the window object since directly called Student
s1=new Student(name, gender, marks);// this will be the Student object
// console.log(s1.name);
// console.log(s1.marks);
console.log(s1.getDetails());
console.log(s1.getGrade());

s2=new Student('abc', 'f', 99);
// console.log(s2.name);
// console.log(s2.marks);
console.log(s2.getDetails());
console.log(s2.getGrade());

/*
var s1 = {}; // create an object for this student
s1.name = name;
s1.gender = gender;
s1.marks = marks;

//accessing values of attributes
console.log(s1.name);
console.log(s1.marks);

//violation of oop
var s2 = {};
s2.student_name = 'xyz';
s2.gen = 'f';
s2.marks = 90;

console.log(s2.name);//undefined

function abc() {
  console.log(this); // this is a keyword
  //this is the window object
  //available inside a function
}

abc()

console.log(this.name);
console.log(this.marks);
*/
