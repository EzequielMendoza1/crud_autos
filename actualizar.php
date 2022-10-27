<?php 
    include "./servidor/conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_autos WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    $item = mysqli_fetch_array($respuesta);
    /* 
    *echo "<pre>";
    *print_r($item);
    *echo "</pre>";
    */
?>
<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1>Actualizar Auto</h1>
            <form action="./servidor/actualizar.php" method="post">
                <input type="text" hidden name ="id" value="<?php echo $item['id']; ?>">

                <label for="nombre">nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $item['nombre']; ?>">
                
                <label for="marca">marca</label>
                <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $item['marca']; ?>">
                
                <label for="modelo">modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="<?php echo $item['modelo']; ?>">

                <label for="color">color</label>
                <input type="text" name="color" id="color" class="form-control" value="<?php echo $item['color']; ?>">

                <button class="btn btn-warning mt-3">
                    Actualizar
                </button>
            </form>

        </div>
    </div>
</div>
<?php include "./footer.php"; ?>