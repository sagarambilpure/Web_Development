function alarmAction() {
  alert('Get up. This is ur alarm');
}

function setAlarm() {
  var time =parseInt(document.getElementById('alarmTime').value);
  var ms = time * 1000;

  setTimeout(alarmAction,ms);
}
