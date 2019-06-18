$(document).ready(function () {

  $("#btn").click(function () {

      var first = parseInt($("#first").val());
      var second = parseInt($('#second').val());

      var ops = $('#ops').val();
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

    $('#answer').val(ans);
  });

});
