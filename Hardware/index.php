<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar nav flex-column navbar-expand-lg navbar-dark">
        <h3>Componentes</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Comprar componentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="tarjetasvideo.html">Tarjeta de video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="monitores.html">Monitores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mouse.html">Mouse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="procesadores.html">Procesadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teclados.html">Teclado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fuentes.html">Fuentes De Poder</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main">
        <h1 class="Titulo"> Compra de componentes</h1>
        
        <div class="componente">
            <form class="form center p-2 m-2" action="" method="post">
            <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["precios"])) {
        $preciosSeleccionados = $_POST["precios"];
        $total = array_sum($preciosSeleccionados);
        $precio = number_format( $total);
        echo "<div class='alert alert-success'> El total de los productos seleccionados es: <strong>$precio</strong> COP.</div>";
    } else {
        echo "<div class='alert alert-danger'>No se ha seleccionado ningún producto. No se puede completar la compra.</div>";
    }
}
?>
                <h3 class="Titulo"> Tarjetas de video</h3>
                <div class="row justify-content-center py-2 mt-2 mb-5">
                    <div class="compra col-md-3 m-2">
                        <label for="precio1">
                            <img class="img-fluid img-sm mb-3" src="img/rtx4070.jpg" alt="HTML">
                            <br>
                            <input class="py-2" type="checkbox" id="precio1" name="precios[]" value="2700000"> RTX 4070
                            <br>
                            ($2.700.000 COP)
                        </label><br>
                    </div>
                    <div class="compra col-md-3 m-2">
                        <label for="precio2">
                            <img class="img-fluid img-sm mb-3" src="img/rtx4060.jpg" alt="HTML"><br>
                            <input class="py-2" type="checkbox" id="precio2" name="precios[]" value="1800000"> RTX
                            4060<br>
                            ($1.800.000 COP)
                        </label><br>
                    </div>
                    <div class="compra col-md-3 m-2">
                        <label for="precio3">
                            <img class="img-fluid img-sm mb-3 center" src="img/gtx-1660.jpg" alt="HTML"><br>
                            <input class="py-2" type="checkbox" id="precio3" name="precios[]" value="1800000"> GTX
                            1660Ti<br>
                            ($1.800.000 COP)
                        </label><br>
                    </div>
                </div>
                <h3 class="Titulo"> Monitores</h3>
                <div class="row justify-content-center py-2 mt-2 mb-5">
                    <div class="compra col-md-3 m-2">
                        <label for="precio4">
                            <img class="img-fluid img-sm mb-3" src="img/ASUSVG248QE.jpg" alt="HTML"><br>
                            <input class="py-2" type="checkbox" id="precio4" name="precios[]" value="2900000"> ASUS
                            VG248QE<br> ($2.900.000 COP)
                        </label><br>
                    </div>
                    <div class="compra col-md-3 m-2">
                        <label for="precio5">
                            <img class="img-fluid img-sm mb-3" src="img/DellS2716DG.jpg" alt="HTML"><br>
                            <input class="py-2" type="checkbox" id="precio5" name="precios[]" value="4000000"> Dell
                            S2716DG <br>($4.000.000 COP)
                        </label><br>
                    </div>
                    <div class="compra col-md-3 m-2">
                        <label for="precio6">
                            <img class="img-fluid img-sm mb-3" src="img/LG34UC79G-B.jpg" alt="HTML"><br>
                            <input class="py-2" type="checkbox" id="precio6" name="precios[]" value="4050000"> LG
                            34UC79G-B<br> ($4.050.000 COP)
                        </label>
                    </div>
                </div>
                <br>
                <input class="btn btn-primary my-4 align-self-center" type="submit" value="Total a pagar">
            </form>

        </div>
    </div>
</body>

</html>