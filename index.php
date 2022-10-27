<?php include "./servidor/conexion.php"; ?>
<?php include './header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center">CRUD AUTOS</h2>
            <a href="./agregar.php" class="btn btn-primary">
                Nuevo Auto
            </a>
            <?php include "./tabla.php" ?>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>