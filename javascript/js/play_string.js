var str = 'mehul chopra'
var fullname = str.toUpperCase();
console.log(fullname);
console.log(str);

console.log(str.length);
console.log(str.indexOf('m'));// 8
console.log(str.indexOf('c'));// 6
console.log(str.charAt(6)); // c

//substring
var lastName = str.substring(6);
console.log(lastName);

var firstName = str.substring(0,5); // end index is exclusive
console.log(firstName);

console.log(str.search("ul"));// 3
console.log(str.search("modi"));// -1 since not found

var s = '     Good morning          ';
var ws = s.trim();
console.log(s);
console.log(ws);
