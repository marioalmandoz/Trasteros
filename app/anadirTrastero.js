const m2= document.getElementById("m2")
const id=document.getElementById("id")
const resp=document.getElementById("responsable")
const loc=document.getElementById("localizacion")
const form=document.getElementById("form")


form.addEventListener("submit",e=>{
    e.preventDefault()

    let fallo=false
    let valorId = /^\d{1,11}$/ //solo numeros, menos de 11 digitos
    let nom = /^[a-zA-Z0-9\,\s]{1,40}$/

    if(!valorId.test(id.value)){ //no cumple valor id
        alert('El Id debe ser un valor númerico de como máximo 11 dígitos')
        fallo=true

    }else if(id.value<=0){ // no positivo
        alert('El Id debe ser positivo')
        fallo=true
    }

    if(m2.value<=0){ // no positivo
        alert('Los metros cuadrados no pueden ser ni 0, ni negativos')
        fallo=true
    }
    if(!nom.test(resp.value)){
        alert('El responsable no puede tener ni números, ni símbolos')
        fallo=true
    }
    if(!nom.test(loc.value)){
        alert('La localización no puede tener símbolos')
        fallo=true
    }


    if(!fallo){
        form.submit()
    }

})