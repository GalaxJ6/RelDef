<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Información Personal</title>
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal">Editar Perfil</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <br>
                <div class="card text-bg-secondary">
                    <br>
                    <h1>INFORMACIÓN PERSONAL</h1>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <!-- Mitad Izquierda -->
                        <div class="col-md-6">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Datos personales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nombre</td>
                                    </tr>
                                    <!-- Other table rows -->
                                </tbody>
                            </table>
                        </div>
                        <!-- Mitad Derecha  -->
                        <div class="col-md-6">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Deportes practicados</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deporte 1</td>
                                    </tr>
                                    <!-- Other table rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal content remains the same -->
            </div>
        </div>
    </div>

    <footer class="bg-secondary">
        <div class="fuentesmain">
            <h5>Emails de los Integrantes</h5>
            <label for="">Nayeli Giraldo --> <a href="mailto:esgiraldov@unal.edu.co">esgiraldov@unal.edu.co</a></label>
            <br>
            <!-- Other member email entries -->
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
