var rowCount = 1;
function addNewRow() {

  var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow();


  var cell0 = newRow.insertCell(0);
  cell0.innerHTML = ++rowCount;
  var cell1 = newRow.insertCell(1);
  var cell2 = newRow.insertCell(2);
  var cell3 = newRow.insertCell(3);

  var input1 = document.createElement("input");
  input1.type = "text";
  input1.placeholder = "Description";
  input1.name = "description_" + rowCount;
  input1.className = "form-control";
  
  var input2 = document.createElement("input");
  input2.type = "text";
  input2.placeholder = "Price";
  input2.name = "rate_" + rowCount;
  input2.className = "form-control";

  var input3 = document.createElement("input");
  input3.type = "text";
  input3.placeholder = "Number QTY";
  input3.name = "qty_" + rowCount;
  input3.className = "form-control";



  cell1.appendChild(input1);
  cell2.appendChild(input2);
  cell3.appendChild(input3);



}