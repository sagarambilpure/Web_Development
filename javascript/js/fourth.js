// Even numbers

var n = 7;
/*var ans;
console.log(ans); //undefined
console.log(typeof(ans))
*/

var ans ="";
var i=0;

while(i<=n){
  if(i%2===0){
    ans = ans + i + ' ';
  }

  i = i + 1;
}

console.log("Even numbers till " + n + " = "+ ans);

//-----------------------//

//fibonacci

var i=0;
var a=0;
var b=1;
var c;

var ans ="" + a + " " + b;

while(i<n-2){
  c=a+b
  ans+=" "+c;
  a=b;
  b=c;
  i++;
}

console.log(n+ " fibo numbers = "+ ans);
