<?php
include ("../../bd.php");

// evitar errores al cargar por primera vez
$titulo = "";
$descripcion = "";
$link = "";

if($_POST){

    $titulo = $_POST["titulo"] ?? "";
    $descripcion = $_POST["descripcion"] ?? "";
    $link = $_POST["link"] ?? "";

    $sentencia = $conexion->prepare("INSERT INTO tbl_banners 
    (titulo, descripcion, link) 
    VALUES (:titulo, :descripcion, :link)");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":link", $link);

    $sentencia->execute();

    header("location:index.php");
}

include ("../../templates/header.php");
?>

<div class="container mt-5">
<div class="card">

<div class="card-header">
    Crear Banner
</div>

<div class="card-body">

<form action="" method="post"> <!-- FORM CORRECTO -->

<div class="mb-3">
    <label class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" value="<?php echo $titulo; ?>" required>
</div>

<div class="mb-3">
    <label class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion; ?>" required>
</div>

<div class="mb-3">
    <label class="form-label">Link</label>
    <input type="text" class="form-control" name="link" value="<?php echo $link; ?>">
</div>

<button type="submit" class="btn btn-success">Crear banner</button>

<a href="index.php" class="btn btn-primary">Cancelar</a>

</form>

</div>

</div>
</div>

<?php include ("../../templates/footer.php"); ?>