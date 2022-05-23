<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Llenado de Expediente</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    </head>
    <body class="bg-C">

        <nav class="navbar navbar-default bg-A font-white">
            <div class="container">
                    <img src="./assets/img/logo-blanco-nombre.png" alt="logo"  class=" logo d-inline-block align-text-top">
                    <p class="fs-3 m-auto"><b>Consorcio Vengadores S. A. de C. V.</b></p>
                    <i class="bi bi-box-arrow-right fs-1" alt="login" class="d-inline-block align-text-top"></i>       
            </div>
        </nav>
        
        <div class="container bg-C div-form">
            <br><i class="bi bi-building font-icon"></i><br>
            <form>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h1>Registro de Empresa</h1>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <label>Nombre/Razón Social</label>
                        <input type="text" class="form-control" placeholder="Empresa" id="business" required>
                    </div>
                    <div class="col-md-4">
                        <label>Fecha de fundación</label>
                        <input type="date" class="form-control" id="dateFoundation" required>
                    </div>
                    <div class="col-md-4">
                        <label>Giro Empresarial</label>
                        <input type="text" class="form-control" placeholder="Giro Empresarial" id="businessRotation">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Regimen Fiscal</label>
                        <select class="form-control" id="regimenFiscal" required>
                            <option selected>Seleccionar...</option>
                            <option>Salud 1</option>
                            <option>Salud 2</option>
                            <option>Salud 3</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Edificio</label>
                        <input type="text" class="form-control" id="building" placeholder="Edificio" required>
                    </div>
                </div>
                <h2>Domicilio Fiscal</h2>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>Calle</label>
                        <input type="text" class="form-control" placeholder="Calle" id="streetBussines" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <label>No. Exterior</label>
                        <input type="text" class="form-control" placeholder="#####" id="externalNumberBusiness" required>
                    </div>
                    <div class="col-md-3">
                        <label>No. Interior</label>
                        <input type="text" class="form-control" id="internalNumberBusiness" placeholder="#####">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Colonia</label>
                        <input type="text" class="form-control" placeholder="Colonia" id="suburbBusiness" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label>Municipio</label>
                        <input type="text" class="form-control" placeholder="Municipio" id="cityBusiness" required>
                    </div> 
                    <div class="form-group col-md-4">
                        <label>Estado</label>
                        <select class="form-control" id="stateBusiness" required>
                            <option selected>Seleccionar...</option>
                            <option>Estado 1</option>
                            <option>Estado 2</option>
                            <option>Estado 3</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label>C. P.</label>
                        <input type="text" class="form-control" placeholder="Código Postal" id="zipBusiness" required>
                        </div> 
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h2>Contacto</h2>
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="emailBussines" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <label>Representante Legal</label>
                        <input type="text" class="form-control" placeholder="Representante Legal" id="legalRepresentativeBusiness" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono</label>
                        <input type="tel" class="form-control" placeholder="55-1234-5678" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" id="emergencyPhoneBusiness" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <label>RFC</label>
                        <input type="file" class="form-control" placeholder="RFC" id="rfcBussines" required>
                    </div>
                </div>
                <label> </label>
                <div class="row justify-content-md-center">
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="button" class="btn btn-guardar btn-lg" href="./empresasEdit.html" value="Guardar">
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