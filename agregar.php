<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="text-center">Agragar Auto</h1>
            <form action="./servidor/agregar.php" method="post">
                <label for="nombre">Nombre de Auto</label>
                <input type="text" name="nombre" id="nombre" required class="form-control">
                <label for="marca">Marca del Auto</label>
                <input type="text" name="marca" id="marca" required class="form-control">
                <label for="modelo">Modelo del Auto</label>
                <input type="text" name="modelo" id="modelo" required class="form-control">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" required class="form-control">

                <button class="btn btn-primary mt-3">
                    Agregar
                </button>
            </form>

        </div>
    </div>
</div>
<?php include "./footer.php"; ?>