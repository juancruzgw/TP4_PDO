
$.validator.addMethod("patenteValida", function(value, element) {
    return this.optional(element) || /^[A-Z]{3}\d{3}$/.test(value);
}, "Por favor ingrese una patente válida.");


$("#formulario").validate({
    rules:{
        patente:{
            required: true,
            patenteValida: true,
            minlength:2
        },        
        Nombre:{
            required: true,
            minlength: 3,
            maxlength: 50
        },
        Apellido:{
            required: true,
            minlength: 3,
            maxlength: 50
        },
        NroDni:{
            required: true,
            digits: true,
            minlength: 7,
            maxlength: 8
        },
        fechaNac:{
            required: true,
            date: true
        },
        Telefono:{
            required: true,
            digits: true,
            minlength: 8,
            maxlength: 15
        },
        Domicilio:{
            required: true,
            minlength: 5,
            maxlength: 50
        },
        DniDuenio:{
            required: true,
            digits: true,
            minlength: 7,
            maxlength: 8
        }

    },
    messages:{
        patente:{
            required: "<p>Debe ingresar la patente</p>",
            patenteValida: "Debe ingresar una patente valida",
            minlength : "Faltan caracteres"
        },
        Nombre:{
            required: "Debe ingresar el nombre",
            minlength: "El nombre debe tener al menos 3 caracteres",
            maxlength: "El nombre debe tener menos de 50 caracteres"
        },
        Apellido:{
            required: "Debe ingresar el apellido",
            minlength: "El apellido debe tener al menos 3 caracteres",
            maxlength: "El apellido debe tener menos de 50 caracteres"
        },
        NroDni:{
            required: "Debe ingresar el DNI",
            digits: "El DNI debe ser un numero",
            minlength: "El DNI debe tener al menos 7 caracteres",
            maxlength: "El DNI debe tener menos de 8 caracteres"
        },
        fechaNac:{
            required: "Debe ingresar la fecha de nacimiento",
            date: "Debe ser una fecha valida"
        },
        Telefono:{
            required: "Debe ingresar el telefono",
            digits: "El telefono debe ser un numero",
            minlength: "El telefono debe tener al menos 8 caracteres",
            maxlength: "El telefono debe tener menos de 15 caracteres"
        },
        Domicilio:{
            required: "Debe ingresar el domicilio",
            minlength: "El domicilio debe tener al menos 5 caracteres",
            maxlength: "El domicilio debe tener menos de 50 caracteres"
        },
        DniDuenio:{
            required: "Debe ingresar el DNI",
            digits: "El DNI debe ser un numero",
            minlength: "El DNI debe tener al menos 7 caracteres",
            maxlength: "El DNI debe tener menos de 8 caracteres"
        }

    }
});


