$.validator.addMethod("patenteValida", function(value){
    return /^[A-Za-z]{3}\s[0-9]{3}$/.test(value) || /^[A-Za-z]{3}[0-9]{3}$/.test(value);
}, "Tiene que ser una patente valida");



$("#formulario").validate({
    rules:{
        patente:{
            required: true,
            patenteValida: true,
        }
    },
    messages:{
        patente:{
            required: "Debe ingresar la patente",
        }
    }
});


$("#formularioCrearPersona").validate({
    rules:{
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
        fechaNacimiento:{
            required: true,
            date: true
        }
    }
})
