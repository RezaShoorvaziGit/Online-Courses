
const form = document.querySelector('#options');
const taskList = document.querySelector('#Div2');



loadEventListeners();


function loadEventListeners() {

  form.addEventListener('click', addTask);


}
var counter = 4;

function addTask(e) {
  counter += 1;

  const div = document.createElement('div');

  div.className = 'col-6 m-3';


  const radioInput = document.createElement('input');
  radioInput.type = 'radio';
  radioInput.value = counter;
  radioInput.name = 'answer';
  radioInput.classList = 'mx-2';
  radioInput.id = '1';


  const textInput = document.createElement('input');
  textInput.placeholder = 'متن گزینه خود را اینجا وارد کنید';
  textInput.type = 'text';
  textInput.name = 'options[]';
  textInput.id = '2';
  textInput.classList = 'border col-11';


  div.appendChild(radioInput);

  div.appendChild(textInput);


  taskList.appendChild(div);
  // var count = count + 1 ;

  e.preventDefault();


}


var divs = ["Div1", "Div2"];
var visibleDivId = null;
function divVisibility(divId) {
  if (visibleDivId === divId) {
    visibleDivId = divId;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for (i = 0; i < divs.length ; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if (visibleDivId === divId) {
      div.style.display = "";
    } else {
      div.style.display = "none";
      var nodes = document.getElementById(divId).getElementsByTagName('*');
      for (var i = 0; i < nodes.length; i++) {
        nodes[i].disabled = true;
      }
    }

  }


}
