var clockIn = document.getElementById('clockIn');
var list = document.getElementById('list');
var list2 = document.getElementById('list2');
var list3 = document.getElementById('list3');
var clock = document.getElementById('clock');

clockIn.addEventListener("click", timeStamp);

function clockRunner () {
  var time = moment().format('dddd h:mm:ss');
  clock.innerHTML = time;
  setTimeout(clockRunner, 1000);
}

window.onload = clockRunner();

function timeStamp (event){
  
  var timeStamp = moment().format("[Date: ]DD/MM/YYYY [Time: ] HH:mm:ss");
  var id = event.target.id;
  
  if(id === 'clockOut') {
    var localClockIn = localStorage.getItem("clockIn");
    var clockOutStamp = moment().format("DD/MM/YYYY HH:mm:ss");

    var diff = moment.utc(moment(clockOutStamp, "DD/MM/YYYY HH:mm:ss").diff(moment(localClockIn, "DD/MM/YYYY HH:mm:ss"))).format("HH:mm:ss");

    var node = document.createElement('li');
      node.append(timeStamp);
      document.getElementById("list2").appendChild(node);
    
    var node = document.createElement('li');
      node.append("Time Worked: " + diff);
      document.getElementById("list3").appendChild(node);
    
      document.getElementById('clockOut').id = 'clockIn';

      
  } else {
      localStorage.setItem(id, timeStamp);
      var node = document.createElement('li');
      node.append(timeStamp);
      document.getElementById("list").appendChild(node);
      clockIn.id = 'clockOut';
  }
  
}
