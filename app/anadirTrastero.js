const m2= document.getElementById("m2")
const id=document.getElementById("id")
const form=document.getElementById("form")

form.addEventListener("submit",e=>{
    e.preventDefault()

    let fallo=false
    let valorId = /^\d{1,11}$/ //solo numeros, menos de 11 digitos

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




    if(!fallo){
        form.submit()
    }

})