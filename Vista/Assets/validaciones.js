alert("hola");


$("#formulario").validate({
    rules:{
        patente:{
            required: true,
            minlength: 6,
        }
    },
    messages:{
        patente:{
            required: "Debe ingresar la patente",
            minlength: "La patente debe tener al menos 6 caracteres"
        }
    },
    submitHandler: function(form) {
        return false; // Cancel the form submission

        
    }
});
