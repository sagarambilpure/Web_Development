$(document).ready(function () {

  $("button").click(function () {
    var todo = $("input").val();
    var ele = "<li>"+todo+"</li>"
    $("ul").append(ele);
    $('input').val("");
  });

});
