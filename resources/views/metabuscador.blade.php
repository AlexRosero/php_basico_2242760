<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="./assets/Css/MyEstilo2.css">
    <title></title>
</head>

<body>

    
<form method="POST" action="{{ url ('buscar')}} "class="form-horizontal" >
    @csrf



<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">1. Ingrese el termino a buscar</label>  
  <div class="col-md-4">
  <input id="" name="termino" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block"></span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buscar</button>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="motores">2. Seleccione el motor de búsqueda</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="motores-0">
      <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
      Google
    </label>
    </div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="2">
      Bing
    </label>
    </div>
  </div>
</div>

</fieldset>
</form>

</body>

</html>