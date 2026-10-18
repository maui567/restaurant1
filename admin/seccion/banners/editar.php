<?php
include ("../../bd.php");

$titulo = "";
$descripcion = "";
$link = "";
$txtID = "";

// CARGAR DATOS
if(isset($_GET['txtID'])){
    $txtID = $_GET["txtID"];

    $sentencia = $conexion->prepare("SELECT * FROM tbl_banners WHERE ID=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);

    $titulo = $registro["titulo"];
    $descripcion = $registro["descripcion"];
    $link = $registro["link"];
}

// ACTUALIZAR
if($_POST){

    $txtID = $_POST["txtID"] ?? "";      // ID original
    $nuevoID = $_POST["nuevoID"] ?? "";  // ID editable
    $titulo = $_POST["titulo"] ?? "";
    $descripcion = $_POST["descripcion"] ?? "";
    $link = $_POST["link"] ?? "";

    $sentencia = $conexion->prepare("UPDATE tbl_banners 
        SET ID=:nuevoID, titulo=:titulo, descripcion=:descripcion, link=:link
        WHERE ID=:id");

    $sentencia->bindParam(":nuevoID", $nuevoID);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":link", $link);
    $sentencia->bindParam(":id", $txtID);

    $sentencia->execute();

    header("location:index.php");
}

include ("../../templates/header.php");
?>

<div class="container mt-5">
<div class="card">

<div class="card-header">
    Editar Banner
</div>

<div class="card-body">

<form action="" method="post">

<!-- 🔥 ID EDITABLE -->
<div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" name="nuevoID" value="<?php echo $txtID; ?>">
</div>

<!-- ID ORIGINAL OCULTO -->
<input type="hidden" name="txtID" value="<?php echo $txtID; ?>">

<div class="mb-3">
    <label class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" value="<?php echo $titulo; ?>">
</div>

<div class="mb-3">
    <label class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion; ?>">
</div>

<div class="mb-3">
    <label class="form-label">Link</label>
    <input type="text" class="form-control" name="link" value="<?php echo $link; ?>">
</div>

<button type="submit" class="btn btn-success">Modificar banner</button>
<a href="index.php" class="btn btn-primary">Cancelar</a>

</form>

</div>

</div>
</div>

<?php include ("../../templates/footer.php"); ?>