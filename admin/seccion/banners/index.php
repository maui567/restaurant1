<?php
include ("../../bd.php");

// ELIMINAR REGISTRO
if(isset($_GET['txtID']) && is_numeric($_GET['txtID'])){

    $txtID = $_GET["txtID"];

    $sentencia = $conexion->prepare("DELETE FROM tbl_banners WHERE ID=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    header("Location:index.php");
}

// LISTAR REGISTROS
$sentencia = $conexion->prepare("SELECT * FROM tbl_banners");
$sentencia->execute();
$lista_banners = $sentencia->fetchAll(PDO::FETCH_ASSOC);

include ("../../templates/header.php");
?>

<div class="container mt-5">
<div class="card">

<div class="card-header">
    <a class="btn btn-primary" href="crear.php">Agregar registro</a>
</div>

<div class="card-body">
<div class="table-responsive-sm">

<table class="table table-bordered">
<thead>
<tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Descripcion</th>
    <th>Enlace</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>
<?php foreach ($lista_banners as $value) { ?>
<tr>
    <td><?php echo $value['ID']; ?></td>
    <td><?php echo $value['titulo']; ?></td>
    <td><?php echo $value['descripcion']; ?></td>
    <td><?php echo $value['link']; ?></td>

    <td>
        <a class="btn btn-info" href="editar.php?txtID=<?php echo $value['ID']; ?>">
            Editar
        </a>

        <a class="btn btn-danger" 
        href="index.php?txtID=<?php echo $value['ID']; ?>"
        onclick="return confirm('¿Seguro que deseas eliminar?');">
        Eliminar
        </a>
    </td>
</tr>
<?php } ?>
</tbody>

</table>

</div>
</div>

</div>
</div>

<?php include ("../../templates/footer.php"); ?>