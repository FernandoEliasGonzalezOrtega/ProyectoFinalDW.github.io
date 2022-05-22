function actualizarTablaTrabajadores() {
    let tabla = document.getElementById("tablaTrabajadores");
    tabla.innerHTML = "";
    
    let trabajadores = [
        {
            "idTrabajador": 1,
            "nombreTrabajador": "Tony Stark",
            "fechaTrabajador":1963,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        },
        {
            "idTrabajador": 2,
            "nombreTrabajador": "Steve Rogers",
            "fechaTrabajador":1936,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        },
        {
            "idTrabajador": 3,
            "nombreTrabajador": "Matt Murdock",
            "fechaTrabajador":1978,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        },
        {
            "idTrabajador": 4,
            "nombreTrabajador": "Peter Parker",
            "fechaTrabajador":1996,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        }
    ];
    console.log(trabajadores);
    for(let i=0; i<trabajadores.length; i++){
        tabla.innerHTML += "<div class='row border-top border-bottom border-dark border-2'><div class='col-md-3 align-middle'><img src='"+trabajadores[i].fotoTrabajador+"' alt='prof-pic' height='100px' class='p-1 mx-5'></div><div class='col-md-3'><div class='row m-3'><div class='col-md-12'><label class='form-check-label' for='trabajador1'>"+trabajadores[i].nombreTrabajador+"</label></div></div><div class='row m-3'><div class='col-md-6'>"+trabajadores[i].fechaTrabajador+"</div><div class='col-md-6'>"+trabajadores[i].idTrabajador+"</div></div></div><div class='col-md-3 align-middle'><a class='btn btn-primary btn-guardar m-4' href='./expediente.html'>Ver Datos</a></div><div class='col-md-3 align-middle'><button class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-file-earmark-person'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-pencil-square'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-eraser-fill'></i></button></div></div>";
    }
}

function actualizarTablaEmpresas() {
    let tabla = document.getElementById("tablaEmpresas");
    tabla.innerHTML = "";
    
    let empresas = [
        {
            "idEmpresa": 1,
            "nombreEmpresa": "S.H.I.E.L.D.",
            "fechaEmpresa":1963,
            "fotoEmpresa":"./assets/img/building.svg"
        },
        {
            "idEmpresa": 2,
            "nombreEmpresa": "Stark Industries",
            "fechaEmpresa":1980,
            "fotoEmpresa":"./assets/img/building.svg"
        },
        {
            "idEmpresa": 3,
            "nombreEmpresa": "Nelson & Murdock",
            "fechaEmpresa":2002,
            "fotoEmpresa":"./assets/img/building.svg"
        },
        {
            "idEmpresa": 4,
            "nombreEmpresa": "S.S.R.",
            "fechaEmpresa":1945,
            "fotoEmpresa":"./assets/img/building.svg"
        }
    ];
    console.log(empresas);
    for(let i=0; i<empresas.length; i++){
        tabla.innerHTML += "<div class='row border-top border-bottom border-dark border-2'><div class='col-md-3 align-middle'><img src='"+empresas[i].fotoEmpresa+"' alt='prof-pic' height='100px' class='p-1 mx-5'></div><div class='col-md-3'><div class='row m-3'><div class='col-md-12'><label class='form-check-label' for='trabajador1'>"+empresas[i].nombreEmpresa+"</label></div></div><div class='row m-3'><div class='col-md-6'>"+empresas[i].fechaEmpresa+"</div><div class='col-md-6'>"+empresas[i].idEmpresa+"</div></div></div><div class='col-md-3 align-middle'><a class='btn btn-primary btn-guardar m-4' href='./expediente.html'>Ver Datos</a></div><div class='col-md-3 align-middle'><button class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-file-earmark-person'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-pencil-square'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-eraser-fill'></i></button></div></div>";
    }
}

function actualizarExpedienteTrabajador() {
    let trabajador = {
        "idTrabajador": 1,
        "nombre": "Tony",
        "apellidoPaterno":"Edward",
        "apellidoMaterno":"Stark",
        "fecha":"29-mayo-1970",
        "curp":"http://www.google.com.mx",
        "telefonoCelular":"222-542-3256",
        "telefonoCasa":"222-387-4177",
        "email":"iron-man@shield.gov",
        "genero":"Masculino",
        "direccion":"Point Dume",
        "numeroExterior":1,
        "numeroInterior":"N/A",
        "colonia":"Malibu",
        "municipio":"Apline",
        "estado":"California",
        "codigoPostal":"90036",
        "contactoEmergencia":"Pepper Pots",
        "telefonoEmergencia":"222-390-7712",
        "sueldo":25000000,
        "fechaIngreso":"20-diciembre-2014",
        "puesto":"Vengador",
        "numeroContrato":1,
        "objetoContrato":"Actividades Militares",
        "rfc":"http://www.facebook.com",
        "nss":"http://www.instagram.com",
        "estadoSalud":"Excelente",
        "observacionesMedicas":"Ninguna",
        "empresa":"S.H.I.E.L.D."
    };
    console.log(trabajador);
    document.getElementById("numeroTrabajador").innerHTML=trabajador.idTrabajador;
    document.getElementById("nombre").innerHTML=trabajador.nombre;
    document.getElementById("apellidoPaterno").innerHTML=trabajador.apellidoPaterno;
    document.getElementById("apellidoMaterno").innerHTML=trabajador.apellidoMaterno;
    document.getElementById("fecha").innerHTML=trabajador.fecha;
    document.getElementById("curp").setAttribute("href",trabajador.curp);
    document.getElementById("telefonoCelular").innerHTML=trabajador.telefonoCelular;
    document.getElementById("telefonoCasa").innerHTML=trabajador.telefonoCasa;
    document.getElementById("email").innerHTML=trabajador.email;
    document.getElementById("genero").innerHTML=trabajador.genero;
    document.getElementById("direccion").innerHTML=trabajador.direccion;
    document.getElementById("numeroExterior").innerHTML=trabajador.numeroExterior;
    document.getElementById("numeroInterior").innerHTML=trabajador.numeroInterior;
    document.getElementById("colonia").innerHTML=trabajador.colonia;
    document.getElementById("municipio").innerHTML=trabajador.municipio;
    document.getElementById("estado").innerHTML=trabajador.estado;
    document.getElementById("codigoPostal").innerHTML=trabajador.codigoPostal;
    document.getElementById("contactoEmergencia").innerHTML=trabajador.contactoEmergencia;
    document.getElementById("telefonoEmergencia").innerHTML=trabajador.telefonoEmergencia;
    document.getElementById("sueldo").innerHTML=trabajador.sueldo;
    document.getElementById("fechaIngreso").innerHTML=trabajador.fechaIngreso;
    document.getElementById("puesto").innerHTML=trabajador.puesto;
    document.getElementById("numeroContrato").innerHTML=trabajador.numeroContrato;
    document.getElementById("objetoContrato").innerHTML=trabajador.objetoContrato;
    document.getElementById("rfc").setAttribute("href",trabajador.rfc);
    document.getElementById("nss").setAttribute("href",trabajador.nss);
    document.getElementById("estadoSalud").innerHTML=trabajador.estadoSalud;
    document.getElementById("observacionesMedicas").innerHTML=trabajador.observacionesMedicas;
    document.getElementById("empresa").innerHTML=trabajador.empresa;
}