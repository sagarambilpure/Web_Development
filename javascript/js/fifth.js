var n=7;
var ans="";

for (var i = 0; i<=n; i++) {
  if (i%2==0) {
    ans += i+ " ";
  }
}

console.log(ans);

var a=0;
var b=1;
var ans=""+a+" "+b;


for(var c;n>2;n--){
  c=a+b;
  a=b;
  b=c;
  ans+=" "+c;
}
console.log(ans);
