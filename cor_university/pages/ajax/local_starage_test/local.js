var fruits =
{ 
  queue: 
  [
    {id: 0, name:"Banana"},
    {id: 1, name:"Orange"},
    {id: 2, name:"Apple"},
    {id: 3, name:"Mango"}
  ]
};

localStorage.setItem('fruits', JSON.stringify(fruits));

outputIt();

function outputIt() {
  var restoredFruits = JSON.parse(localStorage.getItem('fruits'));
  var outputs = "";
  for(var i = 0; i < restoredFruits.queue.length; i++)
  {
  	outputs += '<div id="'+restoredFruits.queue[i].id + '">' + restoredFruits.queue[i].id+':'+restoredFruits.queue[i].name + '</div>';
  }
  document.getElementById("demo").innerHTML= outputs;
}
function popIt() {
  var restoredFruits  = JSON.parse(localStorage.getItem('fruits'));  
  restoredFruits.queue.shift();
  localStorage.setItem('fruits', JSON.stringify(restoredFruits));
  outputIt();
}
function pushIt() {
  var restoredFruits = JSON.parse(localStorage.getItem('fruits'));
  
  restoredFruits.queue.push({
    id:  Math.floor(Math.random() * (100 - 1 + 1)) + 1,
    name: $('input').val()
  });
  localStorage.setItem('fruits', JSON.stringify(restoredFruits));
  outputIt();
}