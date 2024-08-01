<?php 
include("../../bd.php");
if($_POST){

    //recepcionamos los valores del formulario 
    $icono=(isset($_POST['icono']))?$_POST['icono']:"";
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";

    $sentencia=$conexion->prepare("INSERT INTO `tbl_servicios` (`ID`, `icono`, `titulo`, `descripcion`) 
    VALUES (NULL, :icono, :titulo, :descripcion);" );

    $sentencia->bindParam(":icono",$icono);
    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->execute();
    $mensaje="Registro creado con éxito.";
    header("Location:index.php?mensaje=".$mensaje);
}

include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">Crear Servicios</div>
    
    
    
    <div class="card-body">
      
    <form action="" enctype="multipart/form-data" method="post">

    <div class="mb-3">
        <label for="icono" class="form-label">Icono</label>
        <input type="text" class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="Icono"/>
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Titulo</label> 
        <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="titulo"/>
       
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Descripcion:</label>  
        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="descripcion"/>
     
    </div>
    
    <button type="submit" class="btn btn-success">Agregar</button>
    
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    

    </form>

    </div>
  



</div>



<?php include("../../templates/footer.php"); ?>