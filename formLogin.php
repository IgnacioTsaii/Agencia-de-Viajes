<?php
    include 'templates/header.php';
?>

    <section class="container">

        <h1>Formulario de ingreso</h1>

        <div class="well">
            <form action="login.php" method="post">
                <div class="form-group form-group-lg">
                    Usuario: <br>
                    <input type="text" name="usuLogin" class="form-control" required>
                </div>
                <div class="form-group form-group-lg">
                    Clave <br>
                    <input type="password" name="usuClave" class="form-control" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" value="Inresar" class="btn btn-success">
                </div>
            </form>
        </div>

<?php
        if( isset($_GET['error']) ){
?>
        <script>
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'te loguesta mal',
            })
        </script>
<?php
        }
?>
    </section>

<?php
    include 'templates/footer.php';
?>