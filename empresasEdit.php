<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ./index.php');
  }

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Empresas</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body class="bg-C">
        <!--Header-->
        <?php require 'partials/headerIn.php'; ?>
        <div class="container">
            <!--Barra de busqueda-->
            <form class="row py-3">
                <div class="col-md-10">
                    <input type="text" class="form-control" id="worksearch" placeholder="Ingresa el nombre de la empresa">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mb-3 btn-guardar"><i class="bi bi-search"></i>  Buscar</button>
                </div>
            </form>
            <!--Switch de vistas-->
            <div class="row">
                <div class="col-md-3"></div>
                <form class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <span>Trabajadores</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-switch">
                                <a href="./trabajadoresEditable.html"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked></a>
                            </div>
                        </div>
                        <div class="col">
                            <span>Empresas</span>
                        </div>
                    </div>
                </form>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary mb-3 btn-guardar"><i class="bi bi-plus-square"></i>     Nueva Empresa</button>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-9">
                        <div class="container table-scroll my-3 bg-D" tabindex="0">
                            <!--Fila de tabla-->
                            <div class="row border-top border-bottom border-dark border-2">
                                <div class="col-md-3 align-middle">
                                    <img src="./assets/img/building.svg" alt="prof-pic" height="100px" class="p-1 mx-5">
                                </div>
                                <div class="col-md-6">
                                    <div class="row m-3">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="trabajadores" id="trabajador1">
                                                <label class="form-check-label" for="trabajador1">
                                                    S.H.I.E.L.D.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-md-6">
                                            1963
                                        </div>
                                        <div class="col-md-6">
                                            001
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 align-middle">
                                    <a type="submit" class="btn btn-primary btn-guardar m-4" href="#">Ver Datos</a>

                                </div>
                            </div>
                            <!--Fila de tabla-->
                            <div class="row border-top border-bottom border-dark border-2">
                                <div class="col-md-3 align-middle">
                                    <img src="./assets/img/building.svg" alt="prof-pic" height="100px" class="p-1 mx-5">
                                </div>
                                <div class="col-md-6">
                                    <div class="row m-3">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="trabajadores" id="trabajador1">
                                                <label class="form-check-label" for="trabajador1">
                                                    Stark Industries
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-md-6">
                                            1980
                                        </div>
                                        <div class="col-md-6">
                                            002
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 align-middle">
                                    <a type="submit" class="btn btn-primary btn-guardar m-4" href="#">Ver Datos</a>
                                </div>
                            </div>
                            <!--Fila de tabla-->
                            <div class="row border-top border-bottom border-dark border-2">
                                <div class="col-md-3 align-middle">
                                    <img src="./assets/img/building.svg" alt="prof-pic" height="100px" class="p-1 mx-5">
                                </div>
                                <div class="col-md-6">
                                    <div class="row m-3">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="trabajadores" id="trabajador1">
                                                <label class="form-check-label" for="trabajador1">
                                                    Nelson & Murdock
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-md-6">
                                            2002
                                        </div>
                                        <div class="col-md-6">
                                            003
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 align-middle">
                                    <a type="submit" class="btn btn-primary btn-guardar m-4" href="#">Ver Datos</a>
                                </div>
                            </div>
                            <!--Fila de tabla-->
                            <div class="row border-top border-bottom border-dark border-2">
                                <div class="col-md-3 align-middle">
                                    <img src="./assets/img/building.svg" alt="prof-pic" height="100px" class="p-1 mx-5">
                                </div>
                                <div class="col-md-6">
                                    <div class="row m-3">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="trabajadores" id="trabajador1">
                                                <label class="form-check-label" for="trabajador1">
                                                    S.S.R.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-md-6">
                                            1945
                                        </div>
                                        <div class="col-md-6">
                                            004
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 align-middle">
                                    <a type="submit" class="btn btn-primary btn-guardar m-4" href="#">Ver Datos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 m-auto">
                        <nav class="bg-yellow p-3">
                            <ul class="nav justify-content-center">
                                <li class="nav-item m-3">
                                    <button type="submit" class="btn btn-primary btn-guardar" href="#"><i class="bi bi-pencil-square"></i>  Modificar</button>
                                </li>
                                <li class="nav-item m-3">
                                    <button type="submit" class="btn btn-primary btn-guardar" href="#"><i class="bi bi-eraser-fill"></i>  Eliminar</button>
                                </li>
                                <br>
                            </ul>
                        </nav>
                    </div>
                </div>
            </form>
        </div>
        <footer class="bg-A text-center fs-6 sticky-bottom font-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">Todos los derechos reservados.</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Consorcio Vengadores S. A. de C. V.</div>
                    <div class="col-md-4">Departamento de Recursos Humanos</div>
                    <div class="col-md-4">Tel: 222-123-1234</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="./historial.html">Historial de acceso</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
