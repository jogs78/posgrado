<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="author" content="Innoweb - Peterson F.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

  </head>

  <body>
  <style>
body {
  background-image: url('imagenes/fondo_index.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<br>


  <div class="container" style="width: 60rem;">
   <h1 class="formuh1">Main_estudiante</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-12">
  
        <label>Titulo</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" />
        <label>Hipotesis</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" /> 
        <label>Objetivo Gral</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" />  
      
        <label>Objetivo espesifico</label> 
         <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
  

<br>
<div>
<label>Compromisos</label> 
<select class="mdb-select md-form bg-white text-dark text-center py-3 px-4 ">
        <option value="" disabled selected>Lista compromisos </option>
        <option value="1"></option>
        <option value="2"></option>
      </select> 
      <button class="button"> # </button>

      <button class="button">+</button>
</div>
<br>

<div class="form-group row">
    <label  class="col-sm-2 col-form-label">Cronograma</label>
    <div class="col-sm-5 ">
      <input type="text" class="form-control">
    </div>  <div> <button class="button">+</button>
</div>
  </div>

<br>

    
  <button class="btn btn-primary " type="submit">Someter / Modificar</button>
  <a class = "btn btn-primary "  href="#" role = "button">Regresar</a>

    </form>
  <br>
  <div>

</div>
<br>

  </body>
</html>