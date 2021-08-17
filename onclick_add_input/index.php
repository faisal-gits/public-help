<html>
<head>
<script>
var counter = 1;
var dynamicInput = [];

function addInput(){
    var newdiv = document.createElement('div');
    newdiv.id = dynamicInput[counter];
    newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs[]'> <input type='text' name='myInputs[]'><input type='text' name='myInputs[]'> <input type='button' value='-' onClick='removeInput("+dynamicInput[counter]+");'>";
    document.getElementById('formulario').appendChild(newdiv);
    counter++;
}
  
  function removeInput(id){
    var elem = document.getElementById(id);
    return elem.parentNode.removeChild(elem);
  }
</script>
</head>
<body>
<form method="POST" id="formulario">
     <div id="dynamicInput[0]">
        Entry 1<br>
        <input type="text" name="myInputs[]"> 
        <input type="text" name="myInputs[]"> 
        <input type="text" name="myInputs[]"> 
        <input type="button" value="+" onClick="addInput();">
    </div>
</form>
</body>
</html>