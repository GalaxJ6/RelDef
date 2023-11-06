<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a href="">
                    <img src="icono1.ico" alt="" width="80px">
                </a>                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-5">
                            <a class="nav-link active text-light" aria-current="page" href="#">Nombre</a>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal">Informacion Personal</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row">
            <!-- Mitad Izquierda -->
            <div class="col-md-6">
                <h2>Estadísticas</h2>
                <p class="fw-semibold">Ultimos goles anotados </p>
                <ul>
                    <img src="estadistica-goles.png" width="300" height="200" alt="Imagen 3" class="img-fluid">
                </ul>
                <!-- Por ahora será estático, después se modificará utilizando JS -->
                <div class="container mt-5">
                    <h2>Calendario</h2>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                        <th>Miércoles</th>
                                        <th>Jueves</th>
                                        <th>Viernes</th>
                                        <th>Sábado</th>
                                        <th>Domingo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Contenido de la tabla... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mitad Derecha -->
            <div class="col-md-6">
                <h2>Próximos torneos</h2>
                <p class="fw-medium">¡Ven y disfruta con tu equipo!</p>
                <img src="canchaf5.png" alt="Imagen 2" class="img-fluid">
                <br>
                <br>
                <div class="col">
                    <p class="fw-medium">¡Ten en cuenta nuestras próximas fechas!</p>
                    <img src="baile.png" alt="Imagen 2" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-secondary">
        <div class="fuentesmain">
            <h5>Emails de los Integrantes</h5>
            <label for="">Nayeli Giraldo --> <a href="">esgiraldov@unal.edu.co</a></label>
            <br>
            <label for="">Santiago Fernández --> <a href="">sfernandezga@unal.edu.co</a></label>
            <br>
            <label for="">Valeria Galviz --> <a href="">vgalviz@unal.edu.co</a></label>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
